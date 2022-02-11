<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "covid19deaths";
$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$first_name =  $_REQUEST['FirstName'];
$last_name = $_REQUEST['LastName'];
$gender =  $_REQUEST['gender'];
$socialCondition = $_REQUEST['socialCondition'];
$dateOfBirth = $_REQUEST['dateOfBirth'];
$dateOfDeath =  $_REQUEST['dateOfDeath'];
$dateOfgettingSymptoms = $_REQUEST['dateOfgettingSymptoms'];
$Symptoms = $_REQUEST['Symptoms'];
$Country = $_REQUEST['Country'];
$State = $_REQUEST['State'];
function checkImage()
{
    $currentDirectory = getcwd();
    $uploadDirectory = "/uploads/";
    $errors = [];
    $fileExtensionsAllowed = ['jpeg', 'jpg', 'png'];
    $fileName = $_FILES['photo']['name'];
    $fileSize = $_FILES['photo']['size'];
    $fileTmpName  = $_FILES['photo']['tmp_name'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    if (!in_array($fileExtension, $fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if ($fileSize > 5000000) {
        $errors[] = "File exceeds maximum size (5MB)";
    }

    if (!empty($errors)) {
        return 1;
    } else {
        $path['fileTmpName'] = $fileTmpName;
        $path['currentDirectory'] = $currentDirectory;
        $path['uploadDirectory'] = $uploadDirectory;
        $path['fileExtension'] = $fileExtension;
        return $path;
    }
}
$image = checkImage();
if ($image === 1) {
    echo "Error,Please upload another image";
} else {
    $sql = "INSERT INTO covied19deaths (First_Name, Last_Name, Gender, Social_Condition , Date_of_Birth, Date_of_Death, Date_of_getting_Symptoms , Symptoms , Country , State) VALUES ('$first_name', '$last_name','$gender','$socialCondition','$dateOfBirth' ,'$dateOfDeath','$dateOfgettingSymptoms' ,'$Symptoms','$Country' ,'$State')";
    mysqli_query($conn, $sql);
    $last_id = $conn->insert_id;
    $uploadedPath = $image['currentDirectory'] . $image['uploadDirectory'] . basename((string)$last_id) . "." . $image['fileExtension'];
    move_uploaded_file($image['fileTmpName'], $uploadedPath);
    $updateImage = "UPDATE covied19deaths SET Photo='$uploadedPath' WHERE ID = $last_id";
    mysqli_query($conn, $updateImage);
}
mysqli_close($conn);
header("Location: Place.php?status=success");
exit;
