@extends('adminlte.master')

@section('title')
    halaman Jawaban
@endsection

@section('content')
<div class="mt-3 ml-3">
    <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>Isi Pertanyaan</th>
            <th>Tanggal Dibuat</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($jawaban as $jawabans)
          <tr>
          <td>{{$jawabans->isi}}</td>
          <td>{{$jawabans->tanggal_dibuat}}</td>
          <td>
            <a href="{{route('edit',$jawabans->id)}}"><button type="submit"  class="btn btn-success">Edit</button></a>
            <form  action="{{route('hapus',$jawabans->id)}}" method="post" style= "display: inline">
              @csrf
             @method('DELETE')
              <button class="btn btn btn-danger" type="submit "><i class="fas fa-trash"></i> Delete</button>
            </form>
          </td>
            
          </tr>
          @endforeach
         
        </tbody>
      </table>
</div>
    
@endsection