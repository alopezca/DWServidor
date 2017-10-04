@extends('layouts.default')
@section('pages.formulario')

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="form-group" action="formpost" method="POST">
    {{ csrf_field() }}
    <p>Nombre: <input type="text" name="nombre" placeholder="Introduzca su nombre" value="Nombre"/></p>
    <p>Edad: <input type="number" name="edad" placeholder="Introduzca su edad" value="0"/></p>
    <p><input type="submit" /></p>
</form>
@endsection