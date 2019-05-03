<?php 

      
$firstName = trim($_POST['firstName']);
$lastName = trim($_POST['lastName']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);

$response = array();

if($firstName == ""){
    $response['msg'] = "You did not enter your first name.";
    $response['success'] = false;
}
elseif($lastName == ""){
    $response['msg'] = "You did not enter your last name.";
    $response['success'] = false;
}
elseif($email == ""){
    $response['msg'] = "You did not enter your email address.";
    $response['success'] = false;
}
elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
    $response['error'] = 'You did not enter a valid email address.';
    $response['success'] = false;
  }
elseif($phone == "" || is_numeric($phone) == false || strlen($phone) < 10){
    $response['msg'] = "You did not enter a valid phone number.";
    $response['success'] = false;
}
else{
  //here is where you would email a response, or save data to a database.
  $response['success'] = true;
  $response['msg'] = 'form submitted successfully';
  echo json_encode($response);
}


?>