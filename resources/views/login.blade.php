@extends('layout')

@section('content')
<div class="container" style="max-width:400px;margin:40px auto;">
    <h2 style="text-align:center;">Iniciar Sesión</h2>
    <form method="POST" action="/login">
        @csrf
        <div style="margin-bottom:15px;">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" class="form-control" required autofocus style="width:100%;padding:8px;">
        </div>
        <div style="margin-bottom:15px;">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" required style="width:100%;padding:8px;">
        </div>
        <button type="submit" style="width:100%;background:#007bff;color:#fff;padding:10px;border:none;border-radius:4px;">Entrar</button>
    </form>
    <div style="margin-top:20px;text-align:center;">
        <a href="/register" style="color:#007bff;text-decoration:underline;margin-right:15px;">¿No tienes cuenta? Regístrate aquí</a>
        <a href="/" style="color:#6c757d;text-decoration:underline;">Regresar a Home</a>
    </div>
</div>
@endsection 