

@extends('layouts.app')

@section('title','trainers create')

@section('content')
 	<form class="frorm-group" method="PDST" action="trainers">
 		@csrf
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name ="name"class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
@endsection







