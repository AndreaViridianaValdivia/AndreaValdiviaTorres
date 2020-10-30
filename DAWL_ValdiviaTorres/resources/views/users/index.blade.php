@extends('layouts.internal')

@section('content')

<table class="table table-straped">
    <thead>
        <tr>
            <tr>Nombre</tr>
            <tr>Correo</tr>
        </tr>
    </thead>
    <tbody>
        @foreach($tableUsers as $rowUSer)
        <tr>
            <td>{{$rowUSer->name}}</td>
            <td>{{$rowUSer->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection