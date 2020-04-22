<?php

    define(DB_HOST, 'localhost');
    define(DB_USER, 'testname');
    define(DB_PASSWORD, '12345');
    define(DB_NAME, 'Userdatabase');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    // connect to the DB
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

     $data = json_decode(file_get_contents('php://input'),true);



    // build our sql query
    $sql = "DELETE FROM User WHERE ID='".$data[u_id]."'";



    if ($mysql->query($sql))
   {
        $return = array("message"=>"Record Deleted Successfully");
        http_response_code(204);
        echo json_encode($return);
        
    }
    else 
    {
        $return = array("message"=>"Record not deleted.");
        http_response_code(422);
        echo json_encode($return);
        echo($data);
    }
?>
