@extends('adminlte::page')

@section('title', 'User Dashboard')

@section('content_header')
    <h1>User Dashboard</h1>
@stop

@section('content')
    <p>Hi User, welcome to SPB!</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop