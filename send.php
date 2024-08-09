<?php
/*
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo $_SERVER["PHP_SELF"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["REQUEST_METHOD"];
*/
if(isset($_POST['enviar'])){
    echo "   Datos que seran ingresados:";
    echo "<br>";
    echo "     Nombre: " . $_POST['nombre'];
    echo "<br>";
    echo "     E-Mail: " . $_POST['correo'];
    echo "<br>";
}
include("conexDB.php");
if($conex){
    echo "Todo bien. :)";
}else{
    echo "Algo mal. :("; 
}
?>  
