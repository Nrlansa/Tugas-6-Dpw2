@extends('tamplate.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data User
                </div>
            <!---isi data produk--->
            <div class="card-body">
                    <form action="{{url('User')}}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>

                    <div class="form-group">
                                    <label for="" class="control-label">Username</label>
                                    <input type="text" class="form-control" name="username">
                    </div>

                    <div class="form-group">
                                    <label for="" class="control-label">Email</label>
                                    <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                                    <label for="" class="control-label">Password</label>
                                    <input type="password" class="form-control" name="password" >
                    </div>

                    <!---akhir data produk--->

                    <!---tombol simpan--->
                            <button type="submit" class="btn btn-dark mt-4 float-end"><i class="fas fa-save" ></i>Simpan</button>
                    <!---akhir tombol simpan--->
                    </form>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection
