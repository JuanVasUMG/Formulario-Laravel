@extends('layouts.plantilla')

@section('content')

    <!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Advanced Search Form</title>
</head>
<style>
    html{
        background-color: rgb(82, 82, 82);
        background-size: cover;
        min-height: 100%;
    }

    body{
        background:none;
    }

    #advanced-search-form{
        background-color: rgb(89, 143, 243);
        max-width: 800px;
        margin: 20px auto 0;
        color: #292929;
        box-shadow: 6px 6px 6px rgba(0,0,0,0.2);
        padding: 40px;
    }

    #advanced-search-form h2{
        margin: 10px 20px;
        font-size: 24px;
        padding-bottom: 25px;
    }

    #advanced-search-form .form-group{
        margin-left:20px;
        width: 30%;
        float:left;
        text-align: left;
        margin-bottom: 20px;
    }

    #advanced-search-form .form-control{
        height: auto;
        border-radius: 10px;
        padding: 13px 25px;
    }

    #advanced-search-form .radio-inline{
        margin-right: 10px;
        margin-left: 10px;
    }

    #advanced-search-form .btn{
        width: 46%;
        margin: 20px auto 0;
        display: block;
        outline: none;

    }

    @media screen and (max-width: 800px){
        #advanced-search-form .form-group{
            width: 45%;
        }

        #advanced-search-form{
            margin-top: 0;
        }
    }

    @media screen and (max-width: 560px){
        #advanced-search-form .form-group{
            width: 100%;
            margin-left: 0;
        }

        #advanced-search-form h2{
            text-align: center;
        }
    }
</style>
<body>
<div class="container" id="advanced-search-form">
    <h2>Registro alumnos</h2>
    <form>
        <div class="form-group">
            <label for="first-name">Nomrbre</label>
            <input type="text" class="form-control" placeholder="Escribe tu Nombre" id="first-name">
        </div>
        <div class="form-group">
            <label for="last-name">Apellidos</label>
            <input type="text" class="form-control" placeholder="Escribe tus Apellidos" id="last-name">
        </div>
        <div class="form-group">
            <label for="country">Dirección</label>
            <input type="text" class="form-control" placeholder="Escribe tu Dirección" id="country">
        </div>
        <div class="form-group">
            <label for="number">Numero de telefono</label>
            <input type="text" class="form-control" placeholder="Escribe tu número" id="number">
        </div>
        <div class="form-group">
            <label for="age">Edad</label>
            <input type="text" class="form-control" placeholder="Escribe tu edad" id="age">
        </div>
        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" class="form-control" placeholder="Ejemplo@gmail.com" id="email">
        </div>
        <div class="form-group">
            <label for="Cane">Carné</label>
            <input type="text" class="form-control" placeholder="0909-20-0000" id="carne">
        </div>
        <div class="form-group">
            <label for="education">Grado Academico</label>
            <input type="text" class="form-control" placeholder="Grado" id="education">
        </div>
        <div class="form-group">
            <label>Genero</label>
            <div class="radio">
                <label class="radio-inline">
                    <input type="radio" name="optradio">Hombre</label>
                <label class="radio-inline">
                    <input type="radio" name="optradio">Mujer</label>
                <label class="radio-inline">
                    <input type="radio" name="optradio">Otros</label>
            </div>
        </div>
        <div class="clearfix"></div>
        <button type="submit" class="btn btn-dark btn-lg btn-responsiv" id="submit">Registrar</button>
    </form>
</div>
</body>

</html>
@endsection
