<link
  rel="icon"
  href="{{ asset('frontTheme/assets/img/hm44.png')}}"
  type="image/x-icon"
/>

<!-- Fonts and icons -->
<script src="{{ asset('adminTheme/assets/js/plugin/webfont/webfont.min.js')}}"></script>
<script>
  WebFont.load({
    google: { families: ["Public Sans:300,400,500,600,700"] },
    custom: {
      families: [
        "Font Awesome 5 Solid",
        "Font Awesome 5 Regular",
        "Font Awesome 5 Brands",
        "simple-line-icons",
      ],
      urls: ["{{ asset('adminTheme/assets/css/fonts.min.css')}}"],
    },
    active: function () {
      sessionStorage.fonts = true;
    },
  });
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('adminTheme/assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{ asset('adminTheme/assets/css/plugins.min.css')}}" />
<link rel="stylesheet" href="{{ asset('adminTheme/assets/css/kaiadmin.min.css')}}" />

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="{{ asset('adminTheme/assets/css/demo.css')}}" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&display=swap" rel="stylesheet">