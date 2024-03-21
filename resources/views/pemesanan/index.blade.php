@extends('template.home')

@push('style')
@endpush
@section('content')
<section class="content">
    <main id="main" class="main">
        <div class="c">
            <div class="pagetitle">
                <h1>Pemesanan</h1>

            </div><!-- End Page Title -->

            <div class="container">
                {{-- <div class="item header">Header</div> --}}
                <div class="item">
                    <ul class="menu-container">
                        @foreach ($jenis as $j)
                        <li>
                            <h3>{{ $j->nama_jenis }}</h3>
                            <ul class="menu-item" style="cursor: pointer;">
                                @foreach ($j->menu as $menu)
                                <button data-harga="{{ $menu->harga }}" data-id="{{ $menu->id }}">
                                    {{ $menu->nama }}
                                </button>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
<style>
.menu-container{
list-style-type: none;
}
.menu-container li{
margin-bottom: 15px;
}

.menu-container li h3{
    text-transform: uppercase;
    font-weight: bold;
    font-size: 18px;
    background-color: aliceblue;
    padding: 5px 15px;
    /* margin-bottom: 10px; */
}

.menu-item{
    list-style-type: none;
    display: flex;
    gap: 1em;
    margin: 10px 20px;

}

.menu-item li{
    background-color: beige;
    padding: 10px 20px;

}
<script>
$(function){
    const orderList = []
    $(".menu-item li")
}
</script>
</style>
        <div class="item content">
            <h3>Order</h3>
            <ul class="ordered-list">

            </ul>
            Total Bayar : <h2 id="total"> 0</h2>
            <div>
                <button id="btn-bayar">Bayar</button>
            </div>
        </div>
        <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </main><!-- End #main -->
</section>
@endsection

       