<!-- Cabecera de las páginas web común a todos -->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Alumnado CRUD v.1.1</title>
        <!--
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <script src="script/jquery.min.js"></script>
        <script src="script/bootstrap.js"></script>
        -->
        <link rel="icon" type="image/png" href="http://localhost/iaw/crud/favicon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <style type="text/css">
            .wrapper{
                width: 650px;
                margin: 0 auto;
            }
            .page-header h2{
                margin-top: 0;
            }
            table tr td:last-child a{
                margin-right: 15px;
            }
            
footer {
    background-color: rgba(25, 25, 25, 1.0);

    width: 100%;
    bottom: 0;
    font-weight: lighter;
    color: white;
}
.footerHeader{
    width:100%;
    padding:1em;
    background-color:rgba(51, 51, 51,1.0);
    text-align:center;
    color:white;
}
footer h3{
    font-weight:lighter;
}
footer ul{
    padding-left:5px;
    list-style:none;
}
footer p{
    text-align : justify;
    font-size : 12px;
}
footer iframe {
    width:100%;
    position:relative;
    height:170px;
}


        </style>

        <script type="text/javascript">
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </head>
    <body>
<!-- Cabecera de las páginas web común a todos -->
<!-- Barra de Navegacion -->
<?php require_once "navbar.php"; ?>