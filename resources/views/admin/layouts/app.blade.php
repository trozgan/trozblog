<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body class="admin-body bg-dark">
  @include('admin/widgets/navbar')
  <div class="content-wrapper bg-light">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          @include('widgets/alerts')
          <div class="card">
            <div class="card-body">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
