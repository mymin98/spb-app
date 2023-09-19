@extends('adminlte::page')

@section('title', 'User Dashboard')

@section('content_header')
    <h1>Dashboard Pengguna</h1>
@stop

@section('content')
    <p>Hi Pengguna! Selamat Datang ke SPB.</p>
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Pinjaman</span>
                        <span class="info-box-number"> 0 </span>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Pinjaman Lulus</span>
                      <span class="info-box-number"> 0 </span>
                    </div>
                </div>
            </div>
  
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-down"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Pinjaman Gagal</span>
                      <span class="info-box-number">0</span>
                    </div>
                </div>
            </div>

        </div><br>
        
        <div class="row">
            <div class="col-12 col-sm-6">
                <button><a href="/usercari"> SEMAK BUKU </a></button>
            </div>
            <div class="col-12 col-sm-6">
                <button><a href="/permohonan"> PERMOHONAN </a></button>
            </div>
        </div>
          
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop