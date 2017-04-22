<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Practica15</title>
        <meta charset="utf-8">
        <script>
            function Mensaje(){
                alert ("Hola Mundo JavaScript");
                Enviar();
            }
            function Enviar(){
                var _Nombre=document.getElementById("Nom").value;
                var _Edad=document.getElementById("Ed").value;
                if(_Nombre == ""){
                    alert("Te Falta El Nombre");
                    return;
                }
                if(_Edad == ""){
                    alert("Te Falta La Edad");
                    return;
                }
                document.getElementById("MiForm").submit();
            }
        </script>
    </head>
    <body>
        <form method="post" action="Validacion.php" id="MiForm">
            <p>
               Nombre: <input type="text" name="Nombre" id="Nom">
               <br>
               Edad: <input type="text" name="Edad" id="Ed">
               <br>
               <input type="Button" value="Enviar" onclick="Mensaje()"> 
            </p>
        </form>
    </body>
</html>
<!--html>head(title)+body-->