@extends('adminlte.master')

@section('title')
    Pertanyaan
@endsection

@section('content')
<div class="ml-1 mr-1"> 
<div class="card-body">
  <a href="{{route('tambah_pertanyaan')}}"><button type="submit" class="btn btn-primary">Tambah Pertanyaan</button></a>
</div>
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
      <td><a href="{{route('tambah_jawaban',$pertanyaans->id)}}"><button type="submit"  class="btn btn-primary">Jawab</button></a>
        <a href="{{route('show',$pertanyaans->id)}}"><button type="submit"  class="btn btn-primary">Show</button></a>
        <a href="{{route('edit',$pertanyaans->id)}}"><button type="submit"  class="btn btn-success">Edit</button></a>
        <form  action="{{route('hapus',$pertanyaans->id)}}" method="post" style= "display: inline">
          @csrf
          @method('DELETE')
          <button class="btn btn-sm btn-danger" type="submit "><i class="fas fa-trash"></i> Delete</button>
        </form>
      </td>
        
      </tr>
      @endforeach
     
    </tbody>
  </table>
@endsection