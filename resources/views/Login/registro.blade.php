<dialog id="modal-registro">
    <button id="btn-cerrar-modal-registro" class="botonCerrar">X</button><br>
    <div class="Logoh2">
        <img src="img/LogoCreart.png" class="logoCreArt">
        <h2>Te damos la bienvenida a CreArt</h2>
    </div>
    <form class="formulario-registro" method="POST" action="{{ route('Registro.Usuario') }}">
        @csrf
        <div>
            <div>
                <label for="" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control @error('Nombre') is-invalid @enderror"
                    placeholder="Nombre Completo" name="Nombre">
                @error('Nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label for="" class="form-label">Celular</label>
                <input type="number" class="form-control @error('Celular') is-invalid @enderror" placeholder="Celular"
                    name="Celular">
                @error('Celular')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label for="" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control @error('Correo') is-invalid @enderror" placeholder="Correo"
                    name="Correo">
                @error('Correo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label for="" class="form-label">Contraseña</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Contraseña" name="password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label for="" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control @error('Nacimiento') is-invalid @enderror" name="Nacimiento">
                @error('Nacimiento')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="botones">
                <button class="registrar" type="submit">Registrarme</button><br>
                <a href="">Ya tengo una cuenta</a>
            </div>
        </div>
    </form>

</dialog>
