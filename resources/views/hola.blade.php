<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola lista de empleados con estado {{$estado}}</h1>
    <ul>
    @foreach ( $empleados as $empleado )
        <li
        @if ($empleado->nombre[0]=='D')
            style='color:green;text-transform:uppercase;'
        @endif
        >Hola les dice {{$empleado->nombre}}
        </li>
    @endforeach
    </ul>
</body>
</html>