@extends('master')

@section('content')

<div class="bigcontainer align-center">
  <div class="small-4 align-self-middle column authform"> 

    <h4 class="text-center">Who are you?</h4>

    <form role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}

    <label>Email:
      <input 
        id="email" 
        type="email" 
        name="email" 
        value="{{ old('email') }}" 
        required 
        autofocus>
    </label>

    <label>Password:
      <input id="password" type="password" name="password" required>
    </label>

    <input type="checkbox" name="remember"> Remember Me

    <button type="submit" class="expanded button">Login</button>

    <center>
      <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>
    </center>
  </form>
  
  </div>
</div>
@endsection
