<?php

    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        
    }

    define(DB_HOST, 'localhost');
    define(DB_USER, 'testname');
    define(DB_PASSWORD, '12345');
    define(DB_NAME, 'Userdatabase');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    // connect to the DB
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // grab the data that is coming here via POST from React and decode it into a PHP object
      $data = json_decode(file_get_contents('php://input'),true);

    // build our sql query
    $sql = "SELECT * FROM User WHERE Email = '" . $data['u_email'] . "' AND Password = '" . $data['u_password'] . "'";



    $count = mysqli_num_rows($mysql->query($sql));


  

 if($count == 1)
    {   
        $return = array("message"=>"Login Sucessfully");
        http_response_code(201);
        echo json_encode($return);
       
   }
   else 
    {
        $return = array("message"=>"Your Username Password is wrong");
        http_response_code(422);
        echo json_encode($return);
    }
?>
