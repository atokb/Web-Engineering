<?php
$firstnameErr = $lastnameErr = $emailErr = $addressErr = $cityErr = $stateErr = $zipErr = $countryErr = "";
$firstname = $lastname = $email = $address = $city = $state = $zip = $country = "";

// if(isset($_POST["name"])){
//     if (empty($_POST['firstname']) 
//     || empty($_POST['lastname']) 
//     || empty($_POST['email'])
//     || empty($_POST['address'])
//     || empty($_POST['city'])
//     || empty($_POST['state'])
//     || empty($_POST['zip'])    
//     || empty($_POST['country'])){ 
//     $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
//     header("location: checkout.php");
  
    // } else

    if($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "First Name is required";
    } else {
    $firstname = $_POST["firstname"];
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["lastname"])) {
    $lastnameErr = "Last Name is required";
  } else {
    $lastname = $_POST["lastname"];
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = $_POST["address"];
    if (!preg_match("/^[a-zA-Z]+\ +[0-9]+$/",$address)) {
        $addressErr = "Enter a valid address"; 
      }
  }

  if (empty($_POST["city"])) {
    $cityErr = "City is required";
  } else {
    $city = $_POST["city"];
    if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
        $cityErr = "Only letters and white space allowed"; 
      }
  }

  if (empty($_POST["state"])) {
    $stateErr = "State is required";
  } else {
    $state = $_POST["state"];
    if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
        $stateErr = "Only letters and white space allowed"; 
      }
  }
    
  if (empty($_POST["zip"])) {
    $zipErr = "Zip is required";
  } else {
    $zip = $_POST["zip"];
    if (!preg_match("/^\d+$/",$zip)) {
        $zipErr = "Incorrect zip format"; 
      }
  }

  if (empty($_POST["country"])) {
    $countryErr = "Country is required";
  } else {
    $country = $_POST["country"];
    if (!preg_match("/^[a-zA-Z ]*$/",$country)) {
        $countryErr = "Only letters and white space allowed"; 
      }
  }
}

// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
// }
?>