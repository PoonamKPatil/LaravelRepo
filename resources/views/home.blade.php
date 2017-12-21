<!doctype html>
<html>
    <head>
    <title>Home</title>
    </head>
    <body>
        <h1>This is home page</h1>
              
            @foreach ($info as $info)
            <a href="/home/{{$info->id}}">
            <ul>
            	<li>{{ $info->name }}</li>
            	<!-- <li>{{ $info->age }}</li>
            	<li>{{ $info->designation }}</li> -->
            </ul>
            </a>
            @endforeach 
        
    </body>
</html>
