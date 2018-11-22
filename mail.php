<?php
include_once 'dbconnect.php';
header ("Content-Type: application/json");
$input=file_get_contents('php://input');
$data=json_decode($input);
$FirstName2=$data->FirstName;
$LastName2=$data->LastName;
$TelNo2=$data->TelNo;
$EmailAdd2=$data->EmailAdd;
$HomeAdd2=$data->HomeAdd;
$UserDate2=$data->UserDate;
$MealChoice2=$data->MealChoice;
$NoSeats2=$data->NoSeats;
$TableNo2=$data->TableNo;
//echo $FirstName2, $LastName2, $TelNo2, $EmailAdd2, $HomeAdd2, $UserDate2, $MealChoice2, $NoSeats2, $TableNo2;

if ($EmailAdd2 != NULL || $EmailAdd2 != ""){
  $stmt=$connection->prepare("INSERT INTO MealForm (FirstName, LastName, TelNo, EmailAdd, HomeAdd, UserDate, MealChoice, NoSeats, TableNo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
  // Prepare statement prevents SQL Injection;
  $stmt->bind_param('sssssssii', $FirstName2, $LastName2, $TelNo2, $EmailAdd2, $HomeAdd2, $UserDate2, $MealChoice2, $NoSeats2, $TableNo2);
  $stmt->execute();
}
echo "Thank You for your Time";
?>
