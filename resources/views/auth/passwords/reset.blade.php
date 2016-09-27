@extends('master')

@section('content')

<div class="bigcontainer align-center">
  <div class="small-4 align-self-middle column authform"> 

    <h4 class="text-center">Well then...</h4>

    <form role="form" method="POST" action="{{ url('/password/reset') }}">
    {{ csrf_field() }}
  
    <input type="hidden" name="token" value="{{ $token }}">

    <label>Email:
      <input 
        id="email" 
        type="email" 
        name="email" 
        value="{{ $email or old('email') }}" 
        required 
        autofocus>
    </label>

    <label>Password:
      <input 
        id="password" 
        type="password" 
        name="password" 
        required>
    </label>

    <label>Password Confirm:
      <input 
      id="password-confirm" 
      type="password" 
      name="password_confirmation" 
      required>
    </label>

    <button type="submit" class="expanded button">Reset</button>

    </form>

  </div>
</div>
@endsection
