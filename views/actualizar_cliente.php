<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Cliente</title>
</head>
<body>
    <h1>Actualizar Cliente</h1>
    <form action="/clientes/actualizar" method="post">
        <input type="hidden" id="id" name="id" value="<!-- ID del cliente a actualizar -->">

        <label for="nombre">Nombre del Cliente:</label>
        <input type="text" id="nombre" name="nombre" value="<!-- Valor actual del nombre -->" required><br><br>

        <label for="ciudad">Ciudad del Cliente:</label>
        <input type="text" id="ciudad" name="ciudad" value="<!-- Valor actual de la ciudad -->" required><br><br>

        <label for="telefono">Teléfono del Cliente:</label>
        <input type="tel" id="telefono" name="telefono" value="<!-- Valor actual del teléfono -->"><br><br>

        <label for="correo">Correo del Cliente:</label>
        <input type="email" id="correo" name="correo" value="<!-- Valor actual del correo -->" required><br><br>

        <input type="submit" value="Actualizar Cliente">
    </form>
</body>
</html>
