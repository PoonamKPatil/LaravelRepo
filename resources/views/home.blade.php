<!doctype html>
<html>
    <head>
    <title>Home</title>
    </head>
    <body>
        <h1>This is home page</h1>
        <ul>      
            @foreach ($info as $key => $info)
            	<li>{{ $key,$info }}</li>
            @endforeach 
        </ul>
    </body>
</html>
