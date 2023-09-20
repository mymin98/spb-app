@extends('adminlte::page')

@section('title', 'Carian')

@section('content_header')
    <h1>Carian Buku</h1>
@stop

@section('content')
    <p>Sila semak maklumat buku.</p>
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">SENARAI BUKU</h3>
        </div>
        
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 5%">#</th>
                        <th style="width: 15%">JUDUL</th>
                        <th style="width: 15%">SLUG</th>
                        <th style="width: 60%">BUTIRAN</th>
                        <th style="width: 5%">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $buk)
                        <tr>
                            <td>#</td>
                            <td>{{ $buk['judul'] }}</td>  
                            <td>{{ $buk['slug'] }}</td>  
                            <td>{{ $buk['butiran'] }}</td>
                            <td><button><a>LIHAT</a></button></td> 
                        </tr> 
                    @endforeach  
                </tbody>
            </table>
        </div>
        
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop