<?php
//Conexion 
$username = 'root';
$password = '';
$connection = new PDO( 'mysql:host=localhost;dbname=examen', $username, $password );
//Termina Conexion

if(isset($_POST["action"]))
 {
    


    //Registrar
    if($_POST["action"] == "Create")
    {
        $statement = $connection->prepare("
            INSERT INTO examen (nombre,apellido_paterno,apellido_materno,estado,hora)
            VALUES (:nombre, :apellido_paterno, :apellido_materno, :estado, :hora)
  
        ");
    
        $result = $statement->exectute(
            array(
            ':nombre' => $_POST["nombre"],
            ':apellido_paterno' => $_POST["apellido_paterno"],
            ':apellido_materno' => $_POST["apellido_materno"]
            ':estado' => $_POST["estado"],
            ':hora' => $_POST["hora"],
    
            )
        );

        if(!empty($result))
        {
            echo 'Zombie Registrado';
        }

    }
    //Termina Registrar


    //Consultar
     if($_POST["action"] == "Load") 
    {
    //Consulta Total de los Zombis Registrados, la Cantidad de Zombis en cada Estado y la Cantidad de Zombis que NO estan completamenta muertos
    $queryZombiA = $connection->prepare("
    SELECT COUNT(id) as Total, 
    FROM examen
    WHERE
    ");
         
    //Consulta Todos los registros de Zombis ordenados del mas reciente al mas antiguo
         
    $queryZombieB = $connection->prepare("
        SELECT *
        FROM examen
        ORDER BY hora DESC
        ");
         
    //Consulta los Zombis Registrados segun el Estado elegido y su Cantidad Total
         
    $queryZombieC1 = $conecction->prepare("
        SELECT nombre, apellido_paterno, apellido_materno
        FROM examen
        WHERE estado='Infeccion'
    ")
    $queryZombieC2 = $conecction->prepare("
        SELECT nombre, apellido_paterno, apellido_materno
        FROM examen
        WHERE estado='Coma'
    ")
    $queryZombieC3 = $conecction->prepare("
        SELECT nombre, apellido_paterno, apellido_materno
        FROM examen
        WHERE estado='Transformacion'
    ")
    $queryZombieC4 = $conecction->prepare("
        SELECT nombre, apellido_paterno, apellido_materno
        FROM examen
        WHERE estado='Muerto'
    ")
         
    $queryZombiA->execute();
    $queryZombiB->execute();
    $queryZombiC1->execute();
    $queryZombiC2->execute();
    $queryZombiC3->execute();
    $queryZombiC4->execute();
    $fail=$query->fetchAll();
    $result = $statement->fetchAll();
    $output = '';
    }
    //Termina Consultar
}
?>