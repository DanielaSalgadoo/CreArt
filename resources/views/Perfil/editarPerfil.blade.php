@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="content-perfil">
        <div class="btns-editar">
            <a href="" class="btns-editarPerfil">Editar perfil</a>
            <a href="" class="btns-editarPerfil">Administración de la cuenta</a>
            <a href="" class="btns-editarPerfil">Visibilidad del perfil</a>
            <a href="" class="btns-editarPerfil">Seguridad</a>
        </div>
        <div class="content-editarPerfil">
            <h2 class="tituloEditar">Editar perfil</h1>
                <p>Cualquier persona que pueda ver tu perfil podrá ver la información que agregues aquí.</p>
                <p>Foto</p>
                <img
                    src="https://static.vecteezy.com/system/resources/previews/019/879/186/non_2x/user-icon-on-transparent-background-free-png.png">
                <button>Cambiar</button>
                <form action="" class="formulario-perfil">
                    <div class="content">
                            <label for="">Nombre</label>
                            <input type="text">
                            <label for="">Apellido</label>
                            <input type="text">
                        <label for="">Información</label>
                        <input type="text" placeholder="Cuenta tu historia">
                        <label for="">Nombre de usuario</label>
                        <input type="text">
                    </div>
                </form>
                <button>Guardar</button>
        </div>

    @endsection
