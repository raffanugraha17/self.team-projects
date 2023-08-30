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
            <li><a href="/produk-kelistrikan" class="active">Kelistrikan</a></li>
            <li><a href="/produk-mesin">Mesin</a></li>
            <li><a href="/produk-aksesoris">Aksesoris</a></li>
            <li><a href="/produk-cover-body">Cover Body</a></li>
           <li><a href="/dan-lain-lain">Dan Lain-lain</a></li>
        </ol>
        </navbar>
        
        <div class="bg-produk1">
            <div class="produk1">
                <img width="150px"src="/image/foto-sparepart/produk1.jpg" alt="">
                <h3>BULB</h3>
                <p>F1ZR,RX-KING</p>
                <p>4US-H4714-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 13.000</h5>
                <a href="https://wa.me/628999062462/?text=BULB+dengan+kode+barang+4US-H4714-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk1">
                <img width="150px"src="/image/foto-sparepart/produk3.jpg" alt="">
                <h3>HEADLIGHT</h3>
                <p>Nouvo-Z,Xeon</p>
                <p>5LL-H4314-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 19.000</h5>
                <a href="https://wa.me/628999062462/?text=HEADLIGHT+dengan+kode+barang+5LL-H4314-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>  
            </div>
        </div>

        <div class="bg-produk2">
            <div class="produk2">
                <img width="150px"src="/image/foto-sparepart/produk6.jpg" alt="">
                <h3>ENGINE CONTROL</h3>
                <p>Nmax 155</p>
                <p>2DP-H591A-10</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 769.000</h5>
                <a href="https://wa.me/628999062462/?text=ENGINE+CONTROL+dengan+kode+barang+2DP-H591A-10"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk2">
                <img width="150px"src="/image/foto-sparepart/produk4.jpg" alt="">
                <h3>STATOR ASSY </h3>
                <p>AEROX 155</p>
                <p>99999-04498</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 872.000</h5>
                <a href="https://wa.me/628999062462/?text=STATOR+ASSY+dengan+kode+barang+99999-04498"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
        </div>
        
        <div class="bg-produk3">
            <div class="produk3">
                <img width="150px"src="/image/foto-sparepart/produk18.jpg" alt="">
                <h3>STATOR ASSY</h3>
                <p>JUPITER Z1</p>
                <p>1DY-H1410-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 223.000</h5>
                <a href="https://wa.me/628999062462/?text=STATOR+ASSY+dengan+kode+barang+1DY-H1410-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
        </div>
    </div>
    <br><br>
<div>
@endsection
