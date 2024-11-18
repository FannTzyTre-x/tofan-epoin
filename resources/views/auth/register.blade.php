@extends ('auth.layouts')

@section ('cont ent')
<h1>Register</h1>
<a href="{{ route('login') }}">Login</a>
<br><br>
<form action="{{ route('store') }}" method="post">

  @csrf
  <label>Nama Lengkap</label><br>
  <input type="text" id="name" name="name" value="{{ old('name')}}"><br>

  @if ($errors->has('name'))
  <span class="text-danger">{{$errors->first('name')}}</span>
  @endif


  <label>Email Address</label>
  <input type="email" name="email" id="email" value="{{ old('email') }}"><br>

  @if ($errors->has('email'))
  <span class="text-danger">{{$errors->first('email')}}</span>
  @endif

  <br>
  <label>Password</label>
  <input type="password" id="password" name="password"><br>
  @if ($errors->first('password'))
  <span class="text-danger">{{$errors->first('password')}}</span>
  @endif

  <br>
  <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
  <div class="col-md-6">
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
  </div>
  <input type="submit" value="Register">
</form>
