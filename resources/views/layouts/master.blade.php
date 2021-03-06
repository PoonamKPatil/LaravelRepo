<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>My Application</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>

   @include('layouts.header')

   @if(session('message'))
     <div class='alert alert-success' role='alert'>
        {{session('message')}}
     </div>
   @endif
     <main role="main" class="container">
        <div class="row">
          
          @yield('content')
    
          @include('layouts.sidebar')
    
        </div>

    </main>
    
   @include('layouts.footer')
   
  </body>
</html>
