<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{ elixir('css/style.css') }}" />
</head>
<body>

  <!-- Blade error messages -->
  @if (count($errors) > 0)
  <div class="callout warning">
    <ul>
      @foreach ($errors->all() as $error)
      <li><strong>{{ $error }}</strong></li>
      @endforeach
    </ul>
  </div>
  @endif

  <!-- Blade status messages -->
  @if (session('status'))
  <div class="callout success">
    {{ session('status') }}
  </div>
  @endif

  <!-- Content is yielded here -->
  @yield('content')

  <script src="{{ elixir('js/app.js') }}"></script>
  <script>
    $(document).foundation();
  </script>

  <!-- Scripts section -->
  @yield('scripts')

</body>
</html>