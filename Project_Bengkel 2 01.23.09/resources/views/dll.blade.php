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
            <li><a href="/produk-cover-body">Cover Body</a></li>
           <li><a href="/dan-lain-lain" class="active">Dan Lain-lain</a></li>
        </ol>
        </navbar>
    </div>
<div>
@endsection
