<?php

// se encarga de guardar los datos de inversión, gastos y venta

include('conexion.php');
class BaseDatos extends SQLite3{

    function __construct()
    {
       $this->open('administracion.db'); 
    }
}

$con = new BaseDatos;

if(isset($_POST['nombre-inversion'])){ 
    $fecha = $_POST['fecha-inversion'];
    $nombre = $_POST['nombre-inversion'];

    $valor = $_POST['valor-inversion'];
    $valor = str_replace( ".", "" , $valor);//para quitar los puntos que mandan las inputs

    $nombretabla = 'inversion';
    enviar($nombretabla, $fecha, $nombre ,$valor);
}

if(isset($_POST['nombre-gastos'])){ 
    $fecha = $_POST['fecha-gastos'];
    $nombre = $_POST['nombre-gastos'];

    $valor = $_POST['valor-gastos'];
    $valor = str_replace( ".", "" , $valor);

    $nombretabla = 'gastos';
    enviar($nombretabla, $fecha, $nombre ,$valor);
}

// función que envia los datos a la dase de datos
function enviar($nombretabla, $fecha, $nombre ,$valor){
    include('conexion.php');
    $colsulta = ("INSERT INTO $nombretabla (fecha,nombre,valor) VALUES ('$fecha','$nombre',$valor)");
    $ejecuta = mysqli_query($con,$colsulta) or die(mysqli_error($con));
    
    if($ejecuta){
        echo 'Se ha guardado exitosamente';
    }else{
        echo 'Hay problemas al guardar';
    }
}

// envia los datos de venta
if(isset($_POST['efectivo-venta'])){ 
    $fecha = $_POST['fecha-venta'];

    $efectivo = $_POST['efectivo-venta'];
    $efectivo = str_replace( ".", "" , $efectivo);

    $inversion = $_POST['inversion-venta'];
    $inversion = str_replace( ".", "" , $inversion);

    $gastos = $_POST['gastos-venta'];
    $gastos = str_replace( ".", "" , $gastos);

    $dinerollevo = $_POST['dinerollevo-venta'];
    $dinerollevo = str_replace( ".", "" , $dinerollevo);

    $dineroextra = $_POST['dineroextra-venta'];
    $dineroextra = str_replace( ".", "" , $dineroextra);
    //el total de venta es:
    $venta = $efectivo + $inversion + $gastos - ($dinerollevo + $dineroextra);
      
    $verificar_fecha = ("SELECT * FROM venta WHERE fecha = '$fecha'");
    $ejecuta_verificacion = mysqli_query($con,$verificar_fecha) or die(mysqli_error($con));
   

    if(mysqli_num_rows($ejecuta_verificacion)>0){
    echo  "ya hay un registro con esta fecha";
   } else{
    $colsulta = ("INSERT INTO venta (fecha, efectivo, dineroquellevo , dineroextra, totalventa) VALUES ('$fecha', $efectivo, $dinerollevo, $dineroextra, $venta)");
    $ejecuta = mysqli_query($con,$colsulta) or die(mysqli_error($con));
    
    if($ejecuta){
        echo 'Se ha guardado exitosamente';
    }else{
        echo 'Hay problemas al guardar';
    }
   }
}





  

  
  
 
  
  
  
  

  









