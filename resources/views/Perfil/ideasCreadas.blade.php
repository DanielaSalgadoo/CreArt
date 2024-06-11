@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="orden-total">
        <div class="logo-items">
            <img class="logo-usuario"
                src="https://static.vecteezy.com/system/resources/previews/019/879/186/non_2x/user-icon-on-transparent-background-free-png.png"
                alt="">
            @if ($Usuario->Nombre_Usuario == 'Not Null')
                <h2 class="nombre-usuario">{{ $Usuario->Nombre }}</h2>
            @else
                <h2 class="nombre-usuario">{{ $Usuario->Nombre_Usuario }}</h2>
            @endif
            <button class="botones-perfil">Compartir</button>
            <a href="{{ route('editarPerfil') }}"><button class="botones-perfil">Editar Perfil</button></a><br>
            <a href="{{ route('ideasCreadas') }}" class="botones-nav" id="abrir-ideasCreadas">Creados</a>
            <a href="{{ route('ideasGuardadas') }}" class="botones-nav">Guardados</a>
        </div>
        <div class="creados">
            <p>Aún no hay nada para mostrar. Las ideas que crees se almacenarán aquí.</p>
            <button class="crear-idea">Crear Idea</button>
        </div>
    @endsection
