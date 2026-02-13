@extends('layout')

@section('content')
<h1>Editar Usuário</h1>

<form action="{{ route('users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $user->name }}">
    <input type="email" name="email" value="{{ $user->email }}">
    <input type="text" name="cpf" value="{{ $user->cpf }}">
    <input type="password" name="password" placeholder="Nova Senha (opcional)">
    <button type="submit">Atualizar</button>
</form>
@endsection
