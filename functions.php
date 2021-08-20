<?php
function check_string($con, $string){
    $string = $con->real_escape_string($string);
    $string = strip_tags($string);
    $string = stripslashes($string);
    return $string;
}

function email_exists($email){
    include 'connection.php';
    $query = "SELECT email FROM donors WHERE email = '$email'";
    $result = $connection->query($query);
    $rows = $result->num_rows;
    for($i=0; $i<$rows; $i++){
        $result->data_seek($i);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($row['email'] == $email){
            return true;
        }
        else return false;
    }
}

?>