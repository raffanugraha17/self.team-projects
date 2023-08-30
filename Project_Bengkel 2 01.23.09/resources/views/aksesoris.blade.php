@extends('layouts.default')
@section('content')
<style>
    .active {
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgb(3, 97, 129) 0%, rgba(4,169,205,1) 100%);
}
</style>
<div class="background-produk">
    <div class="bg-product">
        <navbar class="navbar-product">
        <ol class>
            <li><a href="/produk">Semua</a></li>
            <li><a href="/produk-kelistrikan">Kelistrikan</a></li>
            <li><a href="/produk-mesin">Mesin</a></li>
            <li><a href="/produk-aksesoris" class="active">Aksesoris</a></li>
            <li><a href="/produk-cover-body">Cover Body</a></li>
           <li><a href="/dan-lain-lain">Dan Lain-lain</a></li>
        </ol>
        </navbar>
        <div class="bg-produk1">
            <div class="produk1">
                <img width="150px"src="/image/foto-sparepart/produk12.jpg" alt="">
                <h3>FLAP</h3>
                <p>Mio,Mio New</p>
                <p>5tl-f1691-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 23.000</h5>
                <a href="https://wa.me/628999062462/?text=FLAP+dengan+kode+barang+5tl-f1691-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
        </div>
    </div>
    <br><br>
<div>
@endsection
