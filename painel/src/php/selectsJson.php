<?php


function query($sql){
        require('conexao.php');
        $stmt = $conn->prepare( $sql );
        $stmt->execute();
        $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        $json = json_encode( $result );
        return $json;
}

