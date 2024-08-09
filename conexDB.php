<?php
$conex = mysqli_connect("localhost","root","","pruebas");
if(isset($_POST['enviar'])){
    if(strlen($_POST['nombre'])>1 && strlen($_POST['correo'])>1){
        $name = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $fecha = date("d/m/y");
        $consu = "INSERT INTO `datos`(nombre,email,fecha) VALUES ('$name','$correo','$fecha')";
        $result = mysqli_query($conex,$consu);
        if($result){
            ?>
            <h3 calss="ok">CHEQUE :>>>>>>></h3>
            <?php
        }else{
            ?>
            <h3 calss="no">QUE???? :<<<<<< </h3>
            <?php
        }
    }else{
        ?>
        <h3 calss="no">complete todo >: </h3>
        <?php
    }
}
?>
