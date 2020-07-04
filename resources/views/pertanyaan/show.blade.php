@extends('adminlte.master')
@section('title')
 Detail Pertanyaan
@endsection

@section('content')
    <div class="ml-3 mt-3">
        <h3>Detail Pertanyaan</h3>
    <p>Judul : {{$pertanyaan->judul}}</p>
    <p>Isi : {{$pertanyaan->isi}}</p>
    <p>Tanggal Artikel Dibuat : {{$pertanyaan->tanggal_dibuat}}</p>
    <p>Tanggal Artikel Diperbaharui : {{$pertanyaan->tanggal_diperbaharui}}</p>

    </div>
@endsection