@extends ('auth.layouts')
@section('content')

<h1>Login</h1>
<a href="{{ route('register') }}">Daftar</a>
<br><br>
<form action="{{ route ('authenticate') }}" method="post">
    @csrf
    <label>Email</label> <br>
    <input type="email" name="email" id="email" value=" {{old ('email') }}"><br><br>
    <label>Password</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>