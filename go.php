<?php

$postdata = http_build_query(
    array(
        'email' => $_REQUEST['email'],
        'password' => $_REQUEST['password'],
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context  = stream_context_create($opts);
//$result = file_get_contents('http://academiadeartistasonline.com/login/academiadeartistas-backend/public/api/loginx', false, $context);
$result = file_get_contents('http://127.0.0.1/academiadeartistas-backend/public/api/loginx', false, $context);
$myJSON = json_encode($result);
$myJSON = json_decode($result);
$token = $myJSON->token;

/*
if(strlen($result)>20){
    header('Location: http://academiadeartistasonline.com/login/dist/?ada='.$token); 
}else{
    header('Location: http://academiadeartistasonline.com/login');  
}
*/

if(strlen($result)>20){
    header('Location: http://localhost:4200?ada='.$token);
}else{
    header('Location: http://localhost/login/login/');  
}

?>
















<?php

/*
echo $_REQUEST['email'];
echo '<br>';
echo $_REQUEST['password'];
echo '<br>';

//echo 'goooo';


echo password_hash('123456', PASSWORD_BCRYPT);
echo '<br>';
//echo bcrypt($_REQUEST['password']);

//header("Location: http://localhost:4200");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ada";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
*/
?>


