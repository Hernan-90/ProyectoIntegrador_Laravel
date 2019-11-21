@extends('plantilla')

@section('cuerpo')
<form class="" action="" method="post" enctype="multipart/form-data">
  @csrf
<div class="">
  <label for="">Nombre</label>
  <input type="text" name="" value="">
</div>
<div class="">
  <label for="">Precio 1</label>
  <input type="number" name="" value="">
</div>
<div class="">
  <label for="">Precio 2</label>
  <input type="number" name="" value="">
</div>
<div class="">
  <label for="">Categoria</label>
  <input type="number" name="" value="">
</div>
<div class="">
  <label for="">Descripcion</label>
  <input type="text" name="" value="">
</div>
<div class="">
  <label for="">Imagen</label>
  <input type="file" name="" value="">
</div>
<div class="">
  <label for="">Destacado</label>
  <input type="number" name="" value="">
</div>
<div class="">
  <label for="">Ingredientes</label>
  <input type="text" name="" value="">
</div>
<button type="submit" name="button">Submit</button>
</form>
@endsection
