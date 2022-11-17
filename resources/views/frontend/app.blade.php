<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tulasi Mehar School & Collage</title>
</head>
<body>
      {{-- <!-- header --> --}}
      @include('frontend.components.navbar')
      <!-- Mian content -->
      @yield('content')
      <!-- Footer -->
      @include('frontend.components.footer')
</body>
</html>