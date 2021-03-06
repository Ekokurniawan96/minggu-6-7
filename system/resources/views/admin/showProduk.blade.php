@extends('admin.baseAdmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Detail Data Produk
                </div>
                <div class="card-body">
                    <h3>{{$produkAdmin->nama}}</h3>
                    <hr>
                    <p>
                        Rp.{{number_format($produkAdmin->harga)}} |
                        Stok : {{($produkAdmin->stok)}} |
                        Berat : {{($produkAdmin->berat)}} Gr
                        Seller : {{$produkAdmin->seller->nama}}
                    </p>
                    <hr>
                    <p>
                        {!!nl2br($produkAdmin->deskripsi)!!}
                    </p>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection