@extends('adminlte.master')
@section('title')
    Edit Pertanyaan
@endsection
@section('content')
<form action="{{route(('update'),$pertanyaan->id)}}" role="form" method="post" >
    @csrf
    @method('PUT')
  <div class="ml-5 mr-5 ">
    <div class="card-body">
      <div class="form-group ">
        <label for="judul">Judul</label>
      <input type="text" name="judul" class="form-control" id="judul" value="{{$pertanyaan->judul}}" >
      </div>
      <div class="form-group">
      <input type="hidden" name="tanggal_dibuat" class="form-control" id="judul" value="{{$pertanyaan->tanggal_dibuat}}">
      </div>
      <div class="form-group">
        <input type="hidden" name="tanggal_diperbaharui" class="form-control" id="judul" value="{{date('Y-m-d H:i:s')}}">
        </div>
      <div class="form-group ">
        <label for="isi">Isi</label>
      <textarea id="isi" name="isi"  class="form-control" rows="3">{{$pertanyaan->isi}}</textarea>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection