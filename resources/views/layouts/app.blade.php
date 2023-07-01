<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>App crud</title>
  <meta name="description" content="Crud kaduba">
  <meta name="author" content="Carlos Santos">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite('resources/css/app.css')
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
    <x-nav></x-nav>

    <main class="p-5">
        @yield('content')
    </main>

    <x-footer></x-footer>

</body>
</html>
