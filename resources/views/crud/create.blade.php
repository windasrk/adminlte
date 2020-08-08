@extends('adminlte.home')

@section('content')
<div class="ml-3 mt-3 mr-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">FORM INPUT PERTANYAAN</h3>
              </div>
              
              <form role="form" action="/pertanyaan" method="POST">
@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
                  @error('judul')
                  <div class="alert alert-danger"> {{$message}} </div>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea class="form-control" rows="5" name="isi" id="isi" placeholder="Masukkan isi disini ..."></textarea>
                    @error('isi')
                  <div class="alert alert-danger">{{$message}} </div>
                  @enderror
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
            </div>
@endsection
