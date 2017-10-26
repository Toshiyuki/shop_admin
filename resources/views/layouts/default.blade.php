<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="bootstrap" charset="utf-8">
    <link rel="stylesheet" href="/css/styles.css">
  </head>
  <body>
    <header class="container"><h1>管理画面</h1></header>
    @if (session('flash_message'))
    <div class="flash_message" onclick="this.classList.add('hidden')">
      {{ session('flash_message') }}
    </div>
    @endif
    <div class="container">
      @yield('content')
    </div>
    <footer>
    </footer>
  </body>
</html>
