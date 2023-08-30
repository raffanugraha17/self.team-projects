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
            <li><a href="/produk-aksesoris">Aksesoris</a></li>
            <li><a href="/produk-cover-body" class="active">Cover Body</a></li>
           <li><a href="/dan-lain-lain">Dan Lain-lain</a></li>
        </ol>
        </navbar>
        <div class="bg-produk1">
            <div class="produk1">
                <img width="150px"src="/image/foto-sparepart/produk25.jpg" alt="">
                <h3>PANEL, CONSOLE</h3>
                <p>Nmax 155</p>
                <p>2DP-F837M-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 41.000</h5>
                <a href="https://wa.me/628999062462/?text=PANEL+CONSOLE+dengan+kode+barang+2DP-F837M-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk1">
                <img width="150px"src="/image/foto-sparepart/produk28.jpg" alt="">
                <h3>COVER, CRANKCASE</h3>
                <p>Lexi 125</p>
                <p>B65-E5431-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 71.000</h5>
                <a href="https://wa.me/628999062462/?text=COVER+CRANKCASE+dengan+kode+barang+B65-E5431-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk1">
                <img width="150px"src="/image/foto-sparepart/produk31.jpg" alt="">
                <h3>SIDE COVER 1</h3>
                <p>All New Nmax</p>
                <p>B6H-F171L-00-P8</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 86.000</h5>
                <a href="https://wa.me/628999062462/?text=SIDE+COVER+1+dengan+kode+barang+B6H-F171L-00-P8"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk1">
                <img width="150px"src="/image/foto-sparepart/produk34.jpg" alt="">
                <h3>FENDER, FRONT</h3>
                <p>Nmax 155</p>
                <p>B74-F1511-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 139.000</h5>
                <a href="https://wa.me/628999062462/?text=FENDER+FRONT+dengan+kode+barang+B74-F1511-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
        </div>

        <div class="bg-produk2">
            <div class="produk2">
                <img width="150px"src="/image/foto-sparepart/produk26.jpg" alt="">
                <h3>FENDER,REAR</h3>
                <p>Fazzio</p>
                <p>BEJ-F1611-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 111.000</h5>
                <a href="https://wa.me/628999062462/?text=FENDER+REAR+dengan+kode+barang+BEJ-F1611-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk2">
                <img width="150px"src="/image/foto-sparepart/produk29.jpg" alt="">
                <h3>COVER, TAILLIGHT</h3>
                <p>Nmax 155</p>
                <p>2DP-H4716-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 22.000</h5>
                <a href="https://wa.me/628999062462/?text=COVER+TAILLIGHT+dengan+kode+barang+2DP-H4716-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk2">
                <img width="150px"src="/image/foto-sparepart/produk32.jpg" alt="">
                <h3>CLEANER CASE 1</h3>
                <p>Lexi 125</p>
                <p>B65-E4412-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 45.000</h5>
                <a href="https://wa.me/628999062462/?text=CLEANER+CASE+1+dengan+kode+barang+B65-E4412-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
        </div>
        
        <div class="bg-produk3">
            <div class="produk3">
                <img width="150px"src="/image/foto-sparepart/produk24.jpg" alt="">
                <h3>FENDER,FRONT</h3>
                <p>Nmax 155</p>
                <p>B74-F1511-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 139.000</h5>
                <a href="https://wa.me/628999062462/?text=FENDER+FRONT+dengan+kode+barang+B74-F1511-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk3">
                <img width="150px"src="/image/foto-sparepart/produk27.jpg" alt="">
                <h3>PANEL 2(S8)</h3>
                <p>Nmax 155</p>
                <p>2DP-F835V-00-P0</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 96.000</h5>
                <a href="https://wa.me/628999062462/?text=PANEL+2(S8)+dengan+kode+barang+2DP-F835V-00-P0"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk3">
                <img width="150px"src="/image/foto-sparepart/produk30.jpg" alt="">
                <h3>LEG SHIELD 1</h3>
                <p>Aerox 155</p>
                <p>B65-F8311-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 149.000</h5>
                <a href="https://wa.me/628999062462/?text=LEG+SHIELD+1+dengan+kode+barang+B65-F8311-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk3">
                <img width="150px"src="/image/foto-sparepart/produk33.jpg" alt="">
                <h3>PANEL, INNER 1</h3>
                <p>Fazzio</p>
                <p>BEJ-F836K-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 133.000</h5>
                <a href="https://wa.me/628999062462/?text=PANEL+INNER+1+dengan+kode+barang+BEJ-F836K-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
        </div>
    </div>
    <br><br>
</div>

@endsection
