@extends('layouts.app')

@section('content')
<form id="ideaForm">
    <h1>Crear Idea</h1>
    <div class="container-crearidea">
            <div class="form-archivo">
                <label for="ideaImage">Subir Imagen</label>
                <input type="file" id="ideaImage"
                    accept="image/bmp,image/jpeg,image/png,image/tiff,image/webp,video/mp4,video/x-m4v,video/quicktime">
                <img id="previewImage" src="#" alt="Vista previa" style="display:none;">
            </div>
            <div class="form-groups">
                <div class="form-group">
                    <label for="ideaTitle">Título</label>
                    <input type="text" id="ideaTitle" placeholder="Añadir un título">
                </div>
                <div class="form-group">
                    <label for="ideaDescription">Descripción</label>
                    <textarea id="ideaDescription" placeholder="Añadir una descripción"></textarea>
                </div>
                <div class="form-group">
                    <label for="ideaBoard">Seleccionar Tablero</label>
                    <select id="ideaBoard">
                        <option value="ideas">Ideas</option>
                        <option value="recetas">Recetas</option>
                        <option value="viajes">Viajes</option>
                    </select>
                </div>
                <button type="submit">Publicar</button>
            </div>
        </form>
    </div>
@endsection
{{-- <input accept="image/bmp,image/jpeg,image/png,image/tiff,image/webp,video/mp4,video/x-m4v,video/quicktime" aria-label="Carga de archivos" data-test-id="storyboard-upload-input" id="storyboard-upload-input" multiple tabindex="0" type="file" style="cursor: pointer; height: 100%; opacity: 0; position: absolute; width: 100%; left: 0px; top: 0px; font-size: 0px;"> --}}
