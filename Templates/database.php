<?php

/**
 * 
 */
function openConnect() {
    $conn = new mysqli(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
    $conn->set_charset("utf8");
    
    if ($conn->connect_error) {
        header("Location: ".REDIRECT_URL_ONFAIL);
        die();
    }

    return $conn;
}

/**
 * 
 */
function closeConnect($conn) {
    $conn->close();
}

/**
 * 
 */
function runQuery($sql) {
    $returnData = [];

    $conn = openConnect();
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $returnData[] = $row;
        }
    }

    closeConnect($conn);
    return $returnData;
}
?>