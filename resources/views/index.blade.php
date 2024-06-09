@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('Login/login')
    @include('Login/registro')
    <div class="container">
        <h1>Bienvenido a CreArt</h1>
        <p>Red social desarrollada por Daniela Salgado.</p>
    </div>
@endsection
