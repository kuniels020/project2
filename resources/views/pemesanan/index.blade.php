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

@push('script')
<script>
$(function(){
    const orderedList =[];

    const sum = () => {
        return orderedList.reduce((accumulator, object) =>{
            return accumulator + (object.harga* object.qty);
        },0);
    };

    const changeQty
})    
</script>
