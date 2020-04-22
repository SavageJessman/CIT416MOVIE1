<?php
header('Access-Control-Allow-Origin: *');

   define(DB_HOST, 'localhost');
   define(DB_USER, 'jesse');
   define(DB_PASSWORD, '390070730');
   define(DB_NAME, 'Userdatabase');


    // connect to the DB
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // build our sql query
    $sql = "SELECT ID, First_Name, Last_Name, Email, Password from User";

    if ($results = $mysql->query($sql))
    {
        // build our data into a PHP arrray
        while ($row = $results->fetch_assoc())
        {
            $user['u_id'] = $row['ID'];
            $user['u_firstName'] = $row['First_Name'];
            $user['u_lastName'] = $row['Last_Name'];
            $user['u_email'] = $row['Email'];
            $user['u_password'] = $row['Password'];
           


            // assign the individual user to the overall users array
            $users[] = $user;
        }

        // return a happy message w/json encoded data representing users
        http_response_code(201);
        echo json_encode($users);
    }
    else 
    {
        $return = array("message"=>"No records returned.");
        http_response_code(422);
        echo json_encode($return);
    }
?>

