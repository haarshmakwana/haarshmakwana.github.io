<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title') - Admin - HM</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    
    <!-- style -->
    @include('adminTheme.style')

  </head>
  <body>
    <div class="wrapper">
      
      <!-- sidebar -->
      @include('adminTheme.sidebar')

      <div class="main-panel">

        <!-- header -->
        @include('adminTheme.header')

        @yield('content')

        <!-- footer -->
        @include('adminTheme.footer')

      </div>

    </div>
    
    <!-- script -->
    @include('adminTheme.script')

  </body>
</html>
