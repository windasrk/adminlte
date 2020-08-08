@extends('adminlte.home')

@section('content')
<div class="ml-3 mt-3 mr-3">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>LIST PERTANYAAN</b></h3>
                  <a class="btn btn-primary float-right " href="/pertanyaan/create">Buat Pertanyaan Baru</a>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
               @if(session('success'))
                <div class="alert alert-success">
                {{ session('success')}}
                </div>
                @endif
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse ($pertanyaan as $key => $post)
                    <tr>
                   <td> {{ $key + 1 }} </td>
                    <td> {{ $post->judul }} </td>
                    <td> {{ $post->isi }} </td>
                    <td style="display: flex;"> 
                    <a class="btn btn-info btn-sm " href="/pertanyaan/{{$post->id}}">show</a>&nbsp&nbsp
                    <a class="btn btn-success btn-sm " href="/pertanyaan/{{$post->id}}/edit">edit</a>&nbsp&nbsp
                   <form action="/pertanyaan/{{$post->id}}" method="post">
                   @csrf
                   @method('DELETE')
                   <input type="submit" class="btn btn-danger btn-sm" value="delete">
                    </form>
                    </td>
                    </tr>
                    @empty
                    <tr>
                    <td colspan="4" align="center"> Belum ada Pertanyaan</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        @endsection