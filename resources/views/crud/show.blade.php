@extends('adminlte.home')

@section('content')

<div class="ml-3 mt-3 mr-3">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" value="{{$pertanyaan->judul}}" disabled="disabled">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi Pertanyaan</label>
                    <input type="text"  class="form-control"  id="isi" value="{{$pertanyaan->isi}}" disabled="disabled">
                  </div>
                  
                </div>

@endsection