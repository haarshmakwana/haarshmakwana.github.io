<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title') - HM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- style -->
  @include('frontTheme.style')
</head>

<body class="index-page">

  <!-- header -->
  @include('frontTheme.header')

  <main class="main">

    @yield('content')

  </main>

  <!-- footer -->
  @include('frontTheme.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- script -->
  @include('frontTheme.script')

</body>

</html>