<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobilenum = $_POST['mobilenum'];
$city = $_POST['city'];
$district = $_POST['district'];
$type = $_POST['type'];
$units = $_POST['units'];
$service = "";

if (isset($_POST['service'])) {
    $service0 = $_POST['service'];
    $service = $service . " " . $_POST['service'];
}
if (isset($_POST['service1'])) {
    $service1 = $_POST['service1'];
    $service = $service . " " . $_POST['service1'];
}
if (isset($_POST['service2'])) {
    $service2 = $_POST['service2'];
    $service = $service . " " . $_POST['service2'];
}
if (isset($_POST['service3'])) {
    $service3 = $_POST['service3'];
    $service = $service . " " . $_POST['service3'];
}
$conn = mysqli_connect('localhost', 'root', '', 'gogreen');
// $stmt = $conn->prepare("INSERT INTO booking (NAME,EMAIL,MOBILENUM,CITY,DISTRICT,VENUE,UNIT,SERVICE)
//     values(?,?,?,?,?,?,?,?)");
// $stmt->bind_param("ssssssss", $name, $email, $mobilenum, $city, $district, $type, $units, $service);
// $stmt->ececute();
// echo "Registration sucessfull";
// $stmt->close();
// $conn->close();

if ($stmt = $conn->prepare("INSERT INTO booking (NAME,EMAIL,MOBILENUM,CITY,DISTRICT,VENUE,UNIT,SERVICE)
values(?,?,?,?,?,?,?,?)")) {
    $stmt->bind_param("ssssssss", $name, $email, $mobilenum, $city, $district, $type, $units, $service);
    $stmt->execute();
     echo "Registration sucessfull" ;
    echo " ";
    echo " Thank you for Choosing GO GREEN SRVICES";
    echo " ";
    echo  $service . "Service will be Completed Soon.....";

} else {
    $error = $conn->errno . ' ' . $conn->error;
    echo $error; // 1054 Unknown column 'foo' in 'field list'
}

$stmt->close();
$conn->close();
