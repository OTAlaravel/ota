<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
  @include('frontend.layouts.head')
</head>

<body>

  @include('frontend.layouts.header')
            @yield('content')
  @include('frontend.layouts.footer')

  @include('frontend.layouts.foot')

</body>
</html>
