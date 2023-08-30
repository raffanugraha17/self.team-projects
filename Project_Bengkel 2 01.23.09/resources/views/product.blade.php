@extends('layouts.default')
@section('content')
<style>
    .active {
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgb(3, 97, 129) 0%, rgba(4,169,205,1) 100%);
}
    .bg-product{
        
    }
</style>

<div class="background-produk">
    <div class="bg-product">
        <navbar class="navbar-product">
        <ol class>
            <li><a href="/produk" class="active">Semua</a></li>
            <li><a href="/produk-kelistrikan">Kelistrikan</a></li>
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
                <img width="150px"src="/image/foto-sparepart/produk2.jpg" alt="">
                <h3>RUMAH KOPLING</h3>
                <p>XEON RC</p>
                <p>ILB-E6611-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 114.000</h5>
                <a href="https://wa.me/628999062462/?text=RUMAH+KOPLING+dengan+kode+barang+ILB-E6611-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>                   
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
            <div class="produk1">
                <img width="150px"src="/image/foto-sparepart/produk4.jpg" alt="">
                <h3>STATOR ASSY</h3>
                <p>AEROX 155</p>
                <p>99999-04498</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 872.000</h5>
                <a href="https://wa.me/628999062462/?text=STATOR+ASSY+dengan+kode+barang+99999-04498"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk1">
                <img width="150px"src="/image/foto-sparepart/produk5.jpg" alt="">
                <h3>CLUTCH WEIGHT</h3>
                <p>MIO</p>
                <p>5TL-WE662-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 125.000</h5>
                <a href="https://wa.me/628999062462/?text=CLUTCH+WEIGHT+dengan+kode+barang+5TL-WE662-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk1">
                <img width="150px"src="/image/foto-sparepart/produk6.jpg" alt="">
                <h3>ENGINE CONTROL</h3>
                <p>Nmax 155</p>
                <p>2DP-H591A-10</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 769.000</h5>
                <a href="https://wa.me/628999062462/?text=ENGINE+CONTROL+dengan+kode+barang+2DP-H591A-10"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk1">
                <img width="150px"src="/image/foto-sparepart/produk7.jpg" alt="">
                <h3>RUMAH ROLLER</h3>
                <p>Vario,Beat FI</p>
                <p>22110-KVY-900</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 20.000</h5>
                <a href="https://wa.me/628999062462/?text=RUMAH+ROLLER+dengan+kode+barang+22110-KVY-900"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk1">
                <img width="150px"src="/image/foto-sparepart/produk8.jpg" alt="">
                <h3>PRIMARY SLIDING</h3>
                <p>Mio J,Soul GT,Fino FI,X-RIDE</p>
                <p>54P-E7620-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 84.000</h5>
                <a href="https://wa.me/628999062462/?text=PRIMARY+SLIDING+dengan+kode+barang+54P-E7620-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
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
                <a href="https://wa.me/628999062462/?text=COVER+CRANKCASEdengan+kode+barang+B65-E5431-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
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
                <img width="150px"src="/image/foto-sparepart/produk9.jpg" alt="">
                <h3>RUMAH KOPLING</h3>
                <p>XEON RC</p>
                <p>1LB-E6611-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 114.000</h5>
                <a href="https://wa.me/628999062462/?text=RUMAH+KOPLING+dengan+kode+barang+1LB-E6611-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk2">
                <img width="150px"src="/image/foto-sparepart/produk10.jpg" alt="">
                <h3>KAMPAS REM DEPAN</h3>
                <p>BEAT</p>
                <p>06455-KVB-T01</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 57.000</h5>
                <a href="https://wa.me/628999062462/?text=KAMPAS+REM+DEPAN+dengan+kode+barang+06455-KVB-T01"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk2">
                <img width="150px"src="/image/foto-sparepart/produk11.jpg" alt="">
                <h3>KAMPAS REM DEPAN</h3>
                <p>NMAX</p>
                <p>2DP-F5805-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 76.000</h5>
                <a href="https://wa.me/628999062462/?text=KAMPAS+REM+DEPAN+dengan+kode+barang+2DP-F5805-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk2">
                <img width="150px"src="/image/foto-sparepart/produk12.jpg" alt="">
                <h3>FLAP</h3>
                <p>Mio,Mio New</p>
                <p>5tl-f1691-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 23.000</h5>
                <a href="https://wa.me/628999062462/?text=FLAP+dengan+kode+barang+5tl-f1691-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk2">
                <img width="150px"src="/image/foto-sparepart/produk13.jpg" alt="">
                <h3>V-BELT</h3>
                <p>Nouvo</p>
                <p>5TL-E7641-01</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 90.000</h5>
                <a href="https://wa.me/628999062462/?text=V-BELT+dengan+kode+barang+5TL-E7641-01"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk2">
                <img width="150px"src="/image/foto-sparepart/produk14.jpg" alt="">
                <h3>V-BELT</h3>
                <p>HONDA</p>
                <p>23100-KVB-BA0</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 175.000</h5>
                <a href="https://wa.me/628999062462/?text=V-BELT+dengan+kode+barang+23100-KVB-BA0"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk2">
                <img width="150px"src="/image/foto-sparepart/produk15.jpg" alt="">
                <h3>CRANKSHAFT ASSY</h3>
                <p>Nmax 155</p>
                <p>BV4-E1400-10</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 880.000</h5>
                <a href="https://wa.me/628999062462/?text=CRANKSHAFT+ASSY+dengan+kode+barang+BV4-E1400-10"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk2">
                <img width="150px"src="/image/foto-sparepart/produk16.jpg" alt="">
                <h3>CRANKSHAFT ASSY</h3>
                <p>FreeGO</p>
                <p>B5D-E1400-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 655.000</h5>
                <a href="https://wa.me/628999062462/?text=CRANKSHAFT+ASSYdengan+kode+barang+B5D-E1400-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
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
                <img width="150px"src="/image/foto-sparepart/produk17.jpg" alt="">
                <h3>CRANKSHAFT ASSY</h3>
                <p>XEON</p>
                <p>1LB-E1400-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 650.000</h5>
                <a href="https://wa.me/628999062462/?text=CRANKSHAFT+ASSY+dengan+kode+barang+1LB-E1400-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk3">
                <img width="150px"src="/image/foto-sparepart/produk18.jpg" alt="">
                <h3>STATOR ASSY</h3>
                <p>JUPITER Z1</p>
                <p>1DY-H1410-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 223.000</h5>
                <a href="https://wa.me/628999062462/?text=STATOR+ASSY+dengan+kode+barang+1DY-H1410-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk3">
                <img width="150px"src="/image/foto-sparepart/produk19.jpg" alt="">
                <h3>CRANKSHAFT ASSY</h3>
                <p>LEXI 125</p>
                <p>B3F-E14400-20</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 815.000</h5>
                <a href="https://wa.me/628999062462/?text=CRANKSHAFT+ASSY+dengan+kode+barang+B3F-E14400-20"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk3">
                <img width="150px"src="/image/foto-sparepart/produk20.jpg" alt="">
                <h3>CRANKSHAFT ASSY</h3>
                <p>FreeGo</p>
                <p>b5d-e1400-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 655.000</h5>
                <a href="https://wa.me/628999062462/?text=CRANKSHAFT+ASSY+dengan+kode+barang+b5d-e1400-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk3">
                <img width="150px"src="/image/foto-sparepart/produk21.jpg" alt="">
                <h3>CRANKSHAFT ASSY</h3>
                <p>Aerox 155 A</p>
                <p>B65-E1400-20</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 880.000</h5>
                <a href="https://wa.me/628999062462/?text=CRANKSHAFT+ASSY+dengan+kode+barang+B65-E1400-20"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk3">
                <img width="150px"src="/image/foto-sparepart/produk22.jpg" alt="">
                <h3>CLUTCH WEIGHT</h3>
                <p>NMAX 155</p>
                <p>2DP-WE662-00</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 203.000</h5>
                <a href="https://wa.me/628999062462/?text=CLUTCH+WEIGHT+dengan+kode+barang+2DP-WE662-00"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
            <div class="produk3">
                <img width="150px"src="/image/foto-sparepart/produk23.jpg" alt="">
                <h3>CRANKSHAFT ASSY</h3>
                <p>Soul GT 125 AKS</p>
                <p>2PH-E1400-80</p>
                <span>SMS Motor Sport</span>
                <h5>Rp 630.000</h5>
                <a href="https://wa.me/628999062462/?text=CRANKSHAFT+ASSY+dengan+kode+barang+2PH-E1400-80"><img class="link-beli" width="35px" src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png" alt="WHATSAPP"></a>
            </div>
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