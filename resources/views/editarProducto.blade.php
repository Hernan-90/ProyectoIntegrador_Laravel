@extends('plantilla')

@section('cuerpo')
  <div class="webbody">
<form class="" action="" method="post" enctype="multipart/form-data">
  @csrf
<div class="">
  <label for="">Nombre del producto</label>
  <input type="text" name="nombreproducto" value="{{$productoAEditar->nombreproducto}}">
</div>
<div class="">
  @error('nombreproducto')
      <small class="">{{ $message }}</small>
  @enderror
</div>
<div class="">
  <label for="">Precio 1</label>
  <input type="number" name="precio1" value="{{$productoAEditar->precio1}}">
</div>
<div class="">
  @error('precio1')
      <small class="">{{ $message }}</small>
  @enderror
</div>
<div class="">
  <label for="">Precio 2</label>
  <input type="number" name="precio2" value="{{$productoAEditar->precio2}}">
</div>
<div class="">
  @error('precio2')
      <small class="">{{ $message }}</small>
  @enderror
</div>
<div class="">
  <label for="">Categoria</label>
  <input type="number" name="categoria_id" value="{{$productoAEditar->categoria_id}}">
</div>
<div class="">
  @error('categoria')
      <small class="">{{ $message }}</small>
  @enderror
</div>
<div class="">
  <label for="">Descripcion</label>
  <input type="text" name="descripcion" value="{{$productoAEditar->descripcion}}">
</div>
<div class="">
  @error('descripcion')
      <small class="">{{ $message }}</small>
  @enderror
</div>
<div class="">
  <label for="">Imagen</label>
  <input type="file" name="imagen" value="">
</div>
<div class="">
  @error('imagen')
      <small class="">{{ $message }}</small>
  @enderror
</div>
<div class="">
  <label for="">Destacado</label>
  <input type="number" name="destacado" value="{{$productoAEditar->destacado}}">
</div>
<div class="">
  @error('destacado')
      <small class="">{{ $message }}</small>
  @enderror
</div>
<div class="">
  <label for="">Ingredientes</label>
  <input type="text" name="ingredientes" value="{{$productoAEditar->ingredientes}}">
</div>
<div class="">
  @error('ingredientes')
      <small class="">{{ $message }}</small>
  @enderror
</div>
<input type="hidden" name="id" value="{{$productoAEditar->id}}">
<button type="submit" name="button">Submit</button>
</form>
  </div>

@endsection
