@extends('plantilla')

@section('cuerpo')
    <div class="webbody">
  <form class="" action="" method="post" enctype="multipart/form-data">
    @csrf
  <div class="">
    <label for="">Titulo</label>
    <input type="text" name="titulo" value="">
  </div>
  <div class="">
    @error('titulo')
        <small class="">{{ $message }}</small>
    @enderror
  </div>
  <div class="">
    <label for="">Ingredientes</label>
    <input type="text" name="ingredientes" value="">
  </div>
  <div class="">
    @error('ingredientes')
        <small class="">{{ $message }}</small>
    @enderror
  </div>
  <div class="">
    <label for="">Materiales</label>
    <input type="text" name="materiales" value="">
  </div>
  <div class="">
    @error('materiales')
        <small class="">{{ $message }}</small>
    @enderror
  </div>
  <div class="">
    <label for="">Preparacion</label>
    <input type="string" name="preparacion" value="">
  </div>
  <div class="">
    @error('preparacion')
        <small class="">{{ $message }}</small>
    @enderror
  </div>
  <div class="">
    <label for="">Imagen</label>
    <input type="file" name="foto_producto" value="">
  </div>
  <div class="">
    @error('foto_producto')
        <small class="">{{ $message }}</small>
    @enderror
  </div>
  <button type="submit" name="button">Submit</button>
  </form>
    </div>

@endsection
