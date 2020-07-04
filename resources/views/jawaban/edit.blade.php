@extends('adminlte.master')
@section('title')
    Edit Pertanyaan
@endsection
@section('content')
<form action="{{route(('update'),$jawaban->id)}}" role="form" method="post" >
    @csrf
    @method('PUT')
  <div class="ml-5 mr-5 ">
    <div class="card-body">
  
      <div class="form-group ">
        <label for="isi">Isi</label>
      <textarea id="isi" name="isi"  class="form-control" rows="3">{{$jawaban->isi}}</textarea>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection