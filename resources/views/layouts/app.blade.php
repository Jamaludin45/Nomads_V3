<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <!-- link style -->
    @stack('prepend-style')
    @include('includes.app.style')
    <!-- menggunakan stack & push untuk script js & style css dari page detail -->
    
  </head>
  <body>
    <!-- Semantic elements -->
    <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

    <!-- Bootstrap navbar example -->
    <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->

    <!--Navbarr -->
    @include('includes.app.navbar')
    <!-- Header -->
    @yield('content')

    <!-- footer-->
    @include('includes.app.footer')
    <!-- script -->
    
    @include('includes.app.script')
    <!-- menggunakan stack & push untuk script js & style css dari page detail -->
    @stack('addon-script')
  </body>
</html>