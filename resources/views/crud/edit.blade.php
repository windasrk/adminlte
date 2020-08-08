@extends('adminlte.home')

@section('content')
<div class="ml-3 mt-3 mr-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">FORM EDIT PERTANYAAN {{$pertanyaan->id}}</h3>
              </div>
              
              <form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
@csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="{{old('judul', $pertanyaan->judul)}}">
                  @error('judul')
                  <div class="alert alert-danger"> {{$message}} </div>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input class="form-control" name="isi" id="isi" value="{{old('isi', $pertanyaan->isi)}}">
                    @error('isi')
                  <div class="alert alert-danger">{{$message}} </div>
                  @enderror
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>
            </div>
@endsection
