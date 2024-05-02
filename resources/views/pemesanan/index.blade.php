@extends('template.home')

@section('content')
<section class="content">
    <main id="main" class="main">
        <div class="flex-container"> <!-- Ubah ini -->
            <div class="c">
                <div class="pagetitle">
                    <h1>Pemesanan</h1>
                </div><!-- End Page Title -->
                <h3>Pendapatan: Rp. <span id="pendapatan"></span></h3>


                <div class="container">
                    <div class="item">
                        <ul class="menu-container">
                            @foreach ($jenis as $j)
                            <li>
                                <h3>{{ $j->nama_jenis }}</h3>
                                <ul class="menu-item">
                                    @foreach ($j->menu as $menu)
                                    <li>
                                        <button data-harga="{{ $menu->harga }}" data-id="{{ $menu->id }}">
                                            {{ $menu->nama }}
                                        </button>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="item content">
                <h3>Order</h3>
                <ul class="ordered-list"></ul>
                Total Bayar : <h2 id="total">0</h2>
                <div>
                    <button id="btn-bayar">Bayar</button>
                </div>
            </div>
        </div>
    </main><!-- End #main -->
</section>

<!-- Tambahkan CSS -->
@push('style')
<style>
    /* Styling untuk kontainer flex */
.flex-container {
    display: flex;
    justify-content: space-between; /* Spasi antara elemen */
    padding: 20px; /* Ruang di sekitar elemen */
    background-color: #f5f5f5; /* Warna latar belakang */
    border-radius: 10px; /* Border radius untuk elemen yang lebih halus */
}

/* Styling untuk judul halaman */
.pagetitle {
    text-align: center; /* Pusatkan teks */
    margin-bottom: 20px; /* Margin di bawah judul */
}

/* Styling untuk menu */
.menu-container li {
    padding: 15px 20px; /* Padding di sekitar item menu */
    border: 1px solid #ccc; /* Border tipis */
    border-radius: 5px; /* Border radius untuk elemen yang lebih halus */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Shadow untuk elemen */
    margin-bottom: 10px; /* Margin di antara item */
}

/* Styling untuk order */
.ordered-list {
    list-style-type: none;
    padding: 0; /* Hilangkan padding default */
    margin: 0; /* Hilangkan margin default */
}

.ordered-list li {
    padding: 10px 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    display: flex; /* Mengatur sebagai flexbox */
    justify-content: space-between; /* Spasi di antara elemen */
    align-items: center; /* Pusatkan item di sepanjang sumbu vertikal */
}

.ordered-list h3 {
    font-size: 1.5em; /* Ubah ukuran font */
}

#total {
    color: #ff6347; /* Warna oranye */
    font-size: 1.5em; /* Ukuran font yang lebih besar */
    font-weight: bold;
}

#btn-bayar {
    background-color: #ff6347; /* Warna oranye */
    color: white; /* Warna teks putih */
    padding: 10px 20px; /* Padding */
    border-radius: 5px; /* Border radius */
    font-weight: bold; /* Font tebal */
    cursor: pointer; /* Cursor pointer */
}

#btn-bayar:hover {
    background-color: #ff4500; /* Warna oranye yang lebih tua */
}
    
</style>
@endpush


@push('script')
<script>
$(function(){
    const orderedList = [];

    const sum = () => {
        return orderedList.reduce((accumulator, object) =>{
            return accumulator + (object.harga * object.qty);
        }, 0);
    };

    const changeQty = () => {
        // Implementasi fungsi changeQty disini
    };
});
</script>
@endpush

@endsection
@push('script')
<script>
$(function() {
    // Inisialisasi orderedList dan total
    const orderedList = [];
    let total = 0;
    let pendapatan = 0;  // Variabel untuk menyimpan jumlah pendapatan

    // Fungsi untuk menghitung total harga
    const sum = () => {
        return orderedList.reduce((accumulator, object) => {
            return accumulator + (object.harga * object.qty);
        }, 0);
    };

    // Fungsi untuk mengubah kuantitas item
    const changeQty = (el, inc) => {
        const id = $(el).closest('li').data('id');
        const index = orderedList.findIndex(list => list.menu_id == id);

        if (index !== -1) {
            const orderedItem = orderedList[index];
            orderedItem.qty = Math.max(1, orderedItem.qty + inc);
            const subtotalElement = $(el).closest('li').find('.subtotal');
            subtotalElement.text(orderedItem.harga * orderedItem.qty);

            const qtyElement = $(el).closest('li').find('.qty-item');
            qtyElement.val(orderedItem.qty);

            // Perbarui total harga
            $('#total').text(sum());

            // Update pendapatan di UI
            $('#pendapatan').text(pendapatan);
        }
    };

    // Event listener untuk tombol pengurangan kuantitas
    $('.ordered-list').on('click', '.btn-dec', function() {
        changeQty(this, -1);
    });

    // Event listener untuk tombol penambahan kuantitas
    $('.ordered-list').on('click', '.btn-inc', function() {
        changeQty(this, 1);
    });

    // Event listener untuk tombol hapus item
    $('.ordered-list').on('click', '.remove-item', function() {
        const item = $(this).closest('li');
        const id = item.data('id');
        const index = orderedList.findIndex(list => list.menu_id == id);

        if (index !== -1) {
            orderedList.splice(index, 1);
            item.remove();
            $('#total').text(sum());
        }
    });

    // Event listener untuk tombol bayar
    $('#btn-bayar').on('click', function() {
        const totalBayar = sum(); // Dapatkan total pembayaran

        // Update jumlah pendapatan
        pendapatan += totalBayar;

        $.ajax({
            url: "{{ route('transaksi.store') }}",
            method: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                orderedList: orderedList,
                total: sum()
            },
            success: function(data) {
                console.log(data);
                Swal.fire({
                    title: data.message,
                    showDenyButton: true,
                    confirmButtonText: "Cetak Nota",
                    denyButtonText: "Ok"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.open("{{ url('nota/2343423') }}");
                        location.reload();
                    } else if (result.isDenied) {
                        location.reload();
                    }
                });
            },
            error: function(request, status, error) {
                console.log(status, error);
                Swal.fire('Pemesanan Gagal!');
            }
        });
    });

    // Event listener untuk klik tombol menu
    $(".menu-item button").click(function() {
        const button = $(this);
        const data = button.data();
        const id = data.id;
        const harga = parseFloat(data.harga);
        const namaMenu = button.text();
        
        // Cari jika item sudah ada di orderedList
        const existingIndex = orderedList.findIndex(list => list.menu_id === id);
        if (existingIndex === -1) {
            // Item belum ada di orderedList, tambahkan item baru
            orderedList.push({
                menu_id: id,
                nama: namaMenu,
                harga: harga,
                qty: 1
            });

            // Tambahkan item ke ordered-list
            const listOrder = $(`
                <li data-id="${id}">
                    <h3>${namaMenu}</h3>
                    <span>Sub Total: Rp. <span class="subtotal">${harga}</span></span>
                    <button class="remove-item">Hapus</button>
                    <button class="btn-dec">-</button>
                    <input class="qty-item" type="number" value="1" min="1" readonly />
                    <button class="btn-inc">+</button>
                </li>
            `);
            $('.ordered-list').append(listOrder);
        }

        // Perbarui total
        $('#total').text(sum());
       // Perbarui elemen UI yang menampilkan pendapatan
       $('#pendapatan').text(`Rp. ${pendapatan.toLocaleString()}`);

// Log jumlah pendapatan
console.log(`Jumlah Pendapatan: Rp. ${pendapatan.toLocaleString()}`);
    });
});
</script>
@endpush