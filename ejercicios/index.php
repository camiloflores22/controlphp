<!DOCTYPE html>
<html lang="en">
<head>
<link href="./assets/estilos/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>Ingreso de notas</h1>
    <form action="procesador.php" method="GET" >
        <label for="">Estudiante:</label>
        <input type="text" name="nombre"><br><br>
 
        <label for="">nota1⠀:⠀⠀</label>
        <input type="text" style="width : 40px; heigth : 1px" name="nota1"><br><br>
       
        <label for="">nota2⠀:⠀⠀</label>
        <input type="text" style="width : 40px; heigth : 1px" name="nota2"><br><br>
       
        <label for="">nota3⠀:⠀⠀</label>
        <input type="text" style="width : 40px; heigth : 1px" name="nota3"><br><br>
       
        <label for="">nota4⠀:⠀⠀</label>
        <input type="text" style="width : 40px; heigth : 1px" name="nota4"><br><br>
        <br>

        ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀<input type="submit" name="submit" value="Calcular">
    </form>
</body>
</html>