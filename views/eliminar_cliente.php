<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Cliente</title>
</head>
<body>
    <h1>Eliminar Cliente</h1>
    <form action="/clientes/eliminar" method="post">
        <input type="hidden" id="id" name="id" value="<!-- ID del cliente a eliminar -->">
        <p>¿Estás seguro de que quieres eliminar al cliente con nombre <!-- Nombre del cliente -->?</p>
        <input type="submit" value="Eliminar Cliente">
    </form>
</body>
</html>

