<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('documentTitle')</title>
</head>
<body>
  <header>
    <h1>
      @yield('MainTitle')
    </h1>
  </header>
  <main>
    @yield('MainContent')
  </main>
</body>
</html>