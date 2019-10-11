@extends('layouts.app')

@section('content')

<center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">List Kategori Pengumuman</div>
               
               <div class="card-body">
                <a href="{!! route('kategori_pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>
                <table border="2">
                <tr bgcolor='khaki' align="center">

        <table border= "2">
        <tr bgcolor='khaki' align="center"> 
        <td> ID </td>
        <td> NAMA </td>
        <td> USERS_ID</td>
        <td> CREATE </td>
        <td> UPDATE </td>
        <td> AKSI </td>
        </tr>

        @foreach($kategori_pengumuman as $item)

        <tr>

        <td> {!! $item ->id !!}</td>
        <td> {!! $item ->nama !!}</td>
        <td> {!! $item ->users_id !!}</td>
        <td> {!! $item ->created_at->format('d/m/Y H:i:s') !!}</td>
        <td> {!! $item ->updated_at->format('d/m/Y H:i:s') !!}</td>
        <td>
        <a href="{!! route('kategori_pengumuman.show',[$item->id]) !!}" 
        class="btn btn-sm btn-success">View</a>
        <a href="{!! route('kategori_pengumuman.edit',[$item->id]) !!}" 
        class="btn btn-sm btn-warning">Edit</a>
        {!! Form::open(['route' => ['kategori_pengumuman.destroy', $item->id], 'method'=>'delete']) !!}
        {!! Form::submit('Delete',['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]); !!}
        {!! Form::close() !!}
            </td>
        </tr>
    </center>
        </tr>
        @endforeach
@endsection