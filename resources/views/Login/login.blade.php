<dialog id="modal">
    <button id="btn-cerrar-modal" class="botonCerrar">X</button><br>
    <div class="Logoh2">
        <img src="img/LogoCreart.png" class="logoCreArt">
        <h2>Te damos la bienvenida a CreArt</h2>
    </div>
    <form action="{{ route('Inicio.Sesion') }}" method="POST" class="formulario-login">
        @csrf
        <div>
           <div>
                <label for="" class="form-label">Correo electrónico</label>
                <input type="text" class="form-control @error('Correo') is-invalid @enderror" placeholder="Correo"
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
            <div class="botones">
                <a href="">¿Olvidaste tu contraseña?</a><br>
                <button class="iniciar-sesion" type="submit">Iniciar Sesión</button><br>
                <button class="registrarse">Regístrate</button>
            </div>
        </div>
    </form>
</dialog>
