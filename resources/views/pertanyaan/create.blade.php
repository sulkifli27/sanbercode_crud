@extends('adminlte.master')
@section('title')
    Create Pertanyaan
@endsection
@section('content')
<form action="{{route('simpan')}}" role="form" method="post" >
    @csrf
   
    <div class="card-body">
      <div class="form-group ">
        <label for="exampleInputEmail1">Judul</label>
        <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul">
      </div>
      <div class="form-group ">
        <label for="exampleInputPassword1">Isi</label>
        <textarea name="isi"  class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection