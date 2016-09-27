@extends('master')

@section('content')

<div class="bigcontainer align-center">
  <div class="small-4 align-self-middle column authform"> 

    <h4 class="text-center">You may register!</h4>

    <form role="form" method="POST" action="{{ url('/register') }}">
      {{ csrf_field() }}
  
    <label>Name:
      <input 
        id="name" 
        type="text" 
        name="name" 
        value="{{ old('name') }}" 
        required 
        autofocus>
    </label>

    <label>Email:
      <input 
        id="email" 
        type="email" 
        name="email" 
        value="{{ old('email') }}" 
        required>
    </label>

    <label>Password:
      <input 
        id="password" 
        type="password" 
        class="form-control" 
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

      <button type="submit" class="expanded button">Submit</button>

    </form>

  </div>
</div>
@endsection
