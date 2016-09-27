@extends('master')

@section('content')

<div class="bigcontainer align-center">
  <div class="small-4 align-self-middle column authform"> 

    <h4 class="text-center">You want what now?</h4>

    <form role="form" method="POST" action="{{ url('/password/email') }}">
    {{ csrf_field() }}
  
    <input type="hidden" name="token" value="{{ $token }}">

    <label>Email:
      <input 
        id="email" 
        type="email" 
        name="email" 
        value="{{ old('email') }}" 
        required>
    </label>

    <button type="submit" class="expanded button">Send Password Reset Link</button>

    </form>

  </div>
</div>
@endsection
