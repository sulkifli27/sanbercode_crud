@extends('adminlte.master')

@section('title')
    Pertanyaan
@endsection

@section('content')
<div class="card-body">
  <a href="{{route('tambah_pertanyaan')}}"><button type="submit" class="btn btn-primary">Tambah Pertanyaan</button></a>
</div>
<table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th>Judul</th>
        <th>Isi</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($pertanyaan as $pertanyaans)
      <tr>
      <td>{{$pertanyaans->judul}}</td>
      <td>{{$pertanyaans->isi}}</td>
      <td><a href="{{route('tambah_jawaban',$pertanyaans->id)}}"><button type="submit"  class="btn btn-primary">Jawab Pertanyaan</button></a></td>
        
      </tr>
      @endforeach
     
    </tbody>
  </table>
@endsection