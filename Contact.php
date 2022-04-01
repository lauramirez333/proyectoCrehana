<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <title class="tituloProduct"> Contactenos </title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body class= "fondo">
<header>
        <nav class= mouseEncima:hover>
        <ul class= "menuPro">
            
            <li><a style = "text-decoration: None" href="index.php">Inicio</a></li>
            <li><a style = "text-decoration: None" href="quienes somos.php">¿Quienes somos?</a></li>
            <li><a style = "text-decoration: None" href="Contact.php">Productos</a></li>
           
        </ul>
    </nav>  

    </header>

   
<h1 class="Conoce">¡Conoce lo que tenemos para ti!</h1>
        <img class= "margenProduc" src="C:\Users\Laura C\Desktop\LR\ARTIS\QUIENES SOMOS.PNG"alt= "Quienes Somos">

<h1 class= "margenContact">Si te interesa uno de nuestros productos,<rt>Contactanos</rt></h1>
    <section>
        <form action="#" method="get">
            <!-- <fieldset> -->
               
                <label for="nombre">Nombres </label><input type="text" name="nombre" id="nombre"><br><br>

                <label for="nombre">Apellidos </label><input type="text" name="apellido" id="apellido"><br><br>

                <label for="gustos">¿Que producto te gusto?</label>
                <select name="gustos" id="gustos">
                <option value="elige">Elige</option>
                <option value="camiseta">Camiseta</option>
                <option value="Boton">Boton</option>
                <option value="Termo">Termo</option>
                <option value="Esfero">Esfero</option>
                <option value="Saco">Saco</option>
                <option value="Agenda">Agenda</option>
            </select>
                <br><br>

                <label for="">¿Como lo quieres personalizar?</label>
                <label for="Csolido">Colores solidos</label>
                <input type="checkbox" name="Csolido" id="Csolido">
                <label for="Festam">Figuras estampadas</label>
                <input type="checkbox" name="Festam" id="Festam">
                <label for="neon">Neon</label>
                <input type="checkbox" name="neon" id="neon
                <label for="Dpropio">Diseño propio</label>
                <input type="checkbox" name="Dpropio" id="Dpropio">
                <label for="otro">otro</label>
                <input type="checkbox" name="otro" id="otro">
                <br><br>

                <label for="mensaje1">Si seleccionaste otro, especifica que tipo de diseño te gustaria</label><br>
                <textarea name="mensaje1" id="mensaje1" cols="50" rows="10"></textarea>
                <br>
                <input type="submit" value="Enviar">

                <br><br>
                <label for="mensaje2">Si tienes mas ideas sobre artis, por favor dejanos saber</label><br>
                <textarea name="mensaje2" id="mensaje2" cols="45" rows="15"></textarea>
                <br>
                <input type="submit" value="Enviar">
              
            <!-- </fieldset> -->
        </form>
    </section>

    <hr>
    <footer class="<footer>">
        Derechos Reservados &copy; 2021 - Pagina creada en Bogotá. Laura Camila Ramirez Lara - 2184573
    </footer>

</body>

</html>