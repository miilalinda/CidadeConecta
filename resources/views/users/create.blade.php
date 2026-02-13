@extends('layout')

@section('content')
<h1>Criar Usuário</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="cpf" placeholder="CPF">
    <input type="password" name="password" placeholder="Senha">
    <button type="submit">Salvar</button>
</form>
@endsection

