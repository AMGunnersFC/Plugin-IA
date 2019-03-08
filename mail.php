<?php
include_once 'dbconnect.php';
header ("Content-Type: application/json");
$input=file_get_contents('php://input');
$data=json_decode($input);
//Identifying Variables
$FirstName2=$data->FirstName;
$LastName2=$data->LastName;
$TelNo2=$data->TelNo;
$EmailAdd2=$data->EmailAdd;
$HomeAdd2=$data->HomeAdd;
$UserDate2=$data->UserDate;
$MealChoice2=$data->MealChoice;
$NoSeats2=$data->NoSeats;
$TableNo2=$data->TableNo;
$StaffCode2=$data->StaffCode;

//echo $FirstName2, $LastName2, $TelNo2, $EmailAdd2, $HomeAdd2, $UserDate2, $MealChoice2, $NoSeats2, $TableNo2, $StaffCode2;
$subject='Shabbat Meal Booking by: '.$FirstName2.' '.$LastName2.' for: '.$UserDate2;
$body='<html><body>';
$body.='<strong>Name: </strong>'.$FirstName2.' '.$LastName2.'<br>';
$body.='<strong>Shabbat Date: </strong>'.$UserDate2.'<br>';
$body.='<strong>Meal Choice: </strong>'.$MealChoice2.'<br>';
$body.='<strong>Number of Seats: </strong>'.$NoSeats2.'<br>';
$body.='<strong>Table Number: </strong>'.$TableNo2.'<br>';
$body.='<strong>Mobile: </strong>'.$TelNo2.'<br>';
$body.='<strong>Email: </strong>'.$EmailAdd2.'<br>';
$body.='<strong>Home Address: </strong>'.$HomeAdd2.'<br>';
//$body.='<strong>Paid: </strong>'.$Paid2.'<br>';
$body.='</body></html>';
$header='MIME-Version: 1.0' . "\r\n";
$header.='Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header.='From: aaron.meoded@student.carmel.edu.hk' . "\r\n";
$header.='Reply-To: '.$EmailAdd2."\r\n";
$to= 'aaron.meoded@student.carmel.edu.hk,' .$EmailAdd2;
// Sends Email to Admin and Guest
if ($StaffCode2 === "booking123"){
  mail ($to, $subject, $body, $header);
}

// Injects Form data into SQL database
if ($StaffCode2 === "booking123"){
  $stmt=$connection->prepare("INSERT INTO MealForm (FirstName, LastName, EmailAdd, HomeAdd, MealChoice, NoSeats, TableNo, UserDate, TelNo, StaffCode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  // Prepare statement prevents SQL Injection;
  $stmt->bind_param('sssssiisss', $FirstName2, $LastName2, $EmailAdd2, $HomeAdd2, $MealChoice2, $NoSeats2, $TableNo2, $UserDate2, $TelNo2, $StaffCode2);
  if ($stmt == false){
    throw new Exception("error");
  }
  //echo 'add sql data';
  $stmt->execute();
}

echo "Thank You for your Time";
?>
