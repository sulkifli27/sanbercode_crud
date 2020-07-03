@extends('adminlte.master')
@section('title')
    Create Jawaban
@endsection
@section('content')
<form action="{{route('simpan_jawaban')}}" role="form" method="post" >
    @csrf
   
    <div class="card-body">
      <div class="form-group ">
        <label for="exampleInputPassword1">id_Jawaban</label>
        <input type="text" name="id" class="form-control" id="exampleInputEmail1" placeholder="id..">
      </div>
      <div class="form-group ">
        <label for="exampleInputPassword1">Jawaban</label>
        <textarea name="isi"  class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  @endsection