<?php
    //Funcion que recibe parametros
    function obtenerRegistros($conn, $tabla, $idUsuario, $bandMens = false){
        $query = "SELECT * FROM $tabla WHERE usuario_id='$idUsuario'";
        if ($bandMens) echo "$query";
         // Ejecuta la consulta y obtiene el conjunto de resultados.
        $stmt = $conn->query($query);
        // Recuperamos todos los registros como un objeto
        $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
        if ($bandMens) var_dump($registros);
        return $registros;
    }    
    function eliminarRegistros($conn,$tabla,$idNoticia){
        $query = "DELETE FROM $tabla WHERE id=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $idNoticia, PDO::PARAM_INT);
        //Ejecuta la consulta   
        $resultado = $stmt->execute();
        
        return $resultado;
}