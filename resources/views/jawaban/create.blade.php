@extends('adminlte.master')
@section('title')
    Create Jawaban
@endsection
@section('content')
<form action="{{route('simpan_jawaban')}}" role="form" method="post" >
    @csrf
    <div class="card-body">
    <div class="form-group ">
      <label for="judul">Pertanyaan</label>
      <input disabled type="text" name="judul" class="form-control" value="{{$jawaban->isi}}">
    </div>
  </div>
    <div class="card-body">
      <div class="form-group ">
      <input  type="hidden" name="id_pertanyaan" class="form-control" id="exampleInputEmail1" value="{{$jawaban->id}}">
    </div>
    <div class="form-group ">
        <label for="exampleInputPassword1">Jawaban</label>
        <textarea name="isi"  class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>
    </div>
    <div class="form-group ">
      <input  type="hidden" name="tanggal_dibuat" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d H:i:s')}}">
      </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  @endsection