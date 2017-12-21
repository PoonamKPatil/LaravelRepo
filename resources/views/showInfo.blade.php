<!doctype html>
<html>
    <head>
    <title>Home</title>
    </head>
    <body>
        <h1>User information</h1>            
            <ul>
            	<li>Name: {{ $info->name }}</li>
            	<li>Age: {{ $info->age }}</li>
            	<li>Designation: {{ $info->designation }}</li>
            </ul>            
    </body>
</html>