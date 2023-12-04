<?php 
    include_once 'cn.php';
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $consulta = "SELECT * FROM intercom";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(); 
    $intercom= $resultado->fetchALL(PDO::FETCH_ASSOC);

    $consulta_porteros = "SELECT * FROM porteros";
    $resultado_porteros = $conexion->prepare($consulta_porteros);
    $resultado_porteros->execute();
    $porteros = $resultado_porteros->fetchAll(PDO::FETCH_ASSOC);

    $consulta_placas = "SELECT * FROM placas";
    $resultado_placas = $conexion->prepare($consulta_placas);
    $resultado_placas->execute();
    $placas = $resultado_placas->fetchAll(PDO::FETCH_ASSOC);

    $consulta_vportero = "SELECT * FROM videoporteros";
    $resultado_vportero = $conexion->prepare($consulta_vportero);
    $resultado_vportero->execute();
    $vportero = $resultado_vportero->fetchAll(PDO::FETCH_ASSOC);

    $consulta_camaras = "SELECT * FROM camaras";
    $resultado_camaras = $conexion->prepare($consulta_camaras);
    $resultado_camaras->execute();
    $camaras = $resultado_camaras->fetchAll(PDO::FETCH_ASSOC);

    $consulta_robotica = "SELECT * FROM robotica";
    $resultado_robotica = $conexion->prepare($consulta_robotica);
    $resultado_robotica->execute();
    $robotica = $resultado_robotica->fetchAll(PDO::FETCH_ASSOC);

    
?>