@extends('master')

@section('content')

<!-- Main content --> 
<div class="bigcontainer">
	<div class="deadcenter">
			<h4>
        <span 
          data-tooltip 
          aria-haspopup="true" 
          class="has-tip top" 
          data-disable-hover="false" 
          tabindex="2" 
          title="A Laravel Boilerplate">
            {{ $hello }}
        </span>
      </h4>
			<a data-open="welcome">Powered by Laravel and Foundation 6 Sass</a>
	</div>
</div>

<!-- Welcome modal --> 
<div 
	data-reveal 
	id="welcome"
	class="tiny reveal" 
	style="border-radius: 4px; padding: 2em;">

	<p>For more information, please see:</p>

	<ul class="menu vertical">
  	<li>
  		<a href="https://laravel.com">
  			Laravel Framework (v5.3)
  		</a>
  	</li>
  	<li>
  		<a href="http://foundation.zurb.com">
  			Foundation 6 For Sites
  		</a>
  	</li>
  	<li>
  		<a href="http://sass-lang.com">
  			CSS with superpowers
  		</a>
  	</li>
	</ul>

  <button 
  	class="close-button" 
  	data-close aria-label="Close modal" 
  	type="button">

    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endsection