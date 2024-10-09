<!DOCTYPE html>

<html lang="es">
    <body>
        <form action="/cliente-recibe" method="POST">
            @csrf
            <label for="nombre_cliente">Nombre:</label>
            <input type="text" name="nombre_cliente"><br>

            <label for="direccion_cliente">Direccion:</label>
            <input type="text" name="direccion_cliente"><br>

            <label for="telefono_cliente">Numero telefonico:</label>
            <input type="tel" name="telefono_cliente"><br>

            <label for="correo_cliente">Correo electronico:</label>
            <input type="email" name="correo_cliente"><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>