<?php
header('Access-Control-Allow-Origin: *');

    define(DB_HOST, 'localhost');
    define(DB_USER, 'jesse');
    define(DB_PASSWORD, '390070730');
    define(DB_NAME, 'Userdatabase');



    // connect to the DB
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$success = move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $_FILES['image']['name']);
if ($success)
 {

 




    // build our sql query
//$sql = "INSERT INTO Movie (Movie_ID,Title,Synopsis,Release_Date,Genre,m_cast,MoviePic_ID) VALUES (null,'" . $POST['title'] . "','" . $POST['synopsis'] . "','" . $POST['releasedate'] . "','" . $POST['genre'] . "','" . $POST['m_cast'] . "','" . $POST['image'] . "')";



$sql = "INSERT INTO Movie (Movie_ID,Title,Synopsis,Release_Date,Genre,m_cast,MoviePic_ID) VALUES (null,'".$_POST['title']."','".$_POST['synopsis']."','".$_POST['releasedate']."','".$_POST['genre']."','".$_POST['m_cast']."','".$_POST['image_name']."')";




    if ($mysql->query($sql))
    {   
        $return = array("message"=>"User Inserted Successfully");
        http_response_code(201);
        echo json_encode($return);
        
       
   }
   else 
    {
        $return = array("message"=>"There is an error in your data!");
        http_response_code(422);
        echo json_encode($return);
        
       

    }
}
     

?>
