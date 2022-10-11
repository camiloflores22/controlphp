<?php
if( isset($_GET["submit"]) && !empty($_GET["submit"])){
    $nom = $_GET['nombre'];
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];
    $n3 = $_GET["nota3"];
    $n4 = $_GET["nota4"];
    


     $nota_final = ($n1+$n2+$n3+$n4)/4;

        echo "<br>el nombre del estudiante es: " .$nom. "<br />";
        echo "<br>La asignatura del estudiante es: Desarrollo de Sistemas Web Dinámicos";
        echo "<br>el promedio es: " .$nota_final. "<br />";
        echo "<br>nota1 ingresadas:<br>".$n1;
        echo "<br>nota2 ingresadas:<br>".$n2;
        echo "<br>nota3 ingresadas:<br>".$n3;
        echo "<br>nota4 ingresadas:<br>".$n4;

        

    if ($nota_final > 3.9){
        echo "<br>Has Aprobado la Asignatura";
    }else{
        echo "<br>REPROBADO";
        if( isset($_GET["submit"]) && !empty($_GET["submit"])){
            $nom = $_GET["nombre"];

            echo '<script lenguage="javascript">alert("REPROBADO! ");</script>';
        }
    }
}
?>