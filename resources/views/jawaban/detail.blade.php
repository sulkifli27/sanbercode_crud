@extends('adminlte.master')

@section('title')
    Detail jawaban
@endsection

@section('content')

<table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th>pertnyaan</th>
        <th>jawaban</th>
        
      </tr>
    </thead>
    <tbody>   

      <tr>
      <td>{{$jawaban->id_pertanyaan}}</td>
      <td>{{$jawaban->isi}}</td>
      </tr>
    
     
    </tbody>
  </table>
@endsection