@extends('layouts.app')

@section('content')
    <div class="orden-total">
        <div class="logo-items">
            <img class="logo-usuario"
                src="https://static.vecteezy.com/system/resources/previews/019/879/186/non_2x/user-icon-on-transparent-background-free-png.png"
                alt="">
            <h2 class="nombre-usuario">Daniela</h2>
            <button class="botones-perfil">Compartir</button>
            <a href="{{route('editarPerfil')}}"><button class="botones-perfil">Editar Perfil</button></a><br>
            <a href="{{ route('ideasCreadas') }}" class="botones-nav">Creados</a>
            <a href="{{ route('ideasGuardadas') }}" class="botones-nav">Guardados</a>
    </div>
@endsection
