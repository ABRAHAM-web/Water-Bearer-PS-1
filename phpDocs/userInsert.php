<?php include 'connection.php';?>

<?php
    echo "0";
    $userName = $_POST['userName'];
    $passwords = $_POST['passwords'];
    $streetNo = $_POST['streetNo'];
    $streetName = $_POST['streetName'];
    $cellphone = $_POST['cellphone'];
    if (!$conn) {
    echo 'Connection error: ' .mysqli_connect_error();
    } else {
        echo 'Connection established :';
    };
    //DATE_FORMAT("2017-06-15", "%M %d %Y");
    //$sql = 'select * from analysis order by sampleDate desc';
    echo "1";
    echo $sql;

    $sql = "INSERT INTO users
    (
    userName,
    passwords,
    userLevel,
    image,
    town,
    streetNo,
    streetName,
    cellphone
    )
    VALUES
    ('$userName',
     '$passwords',
    '3',
    'No Image',
    'Vaaloewer',
    '$streetNo',
    '$streetName',
    '$cellphone');";
    echo $sql;
     echo "2";

    //$conn->query($sql);
    //mysqli_query($conn,$sql);
    $result = $conn->query($sql);
//      if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//     //echo $row['sampleDate'];
//        echo '<tr><td>'.$row['userName'].'</td><td>'.$row['passwords'].'</td><td>'.$row['userLevel'].'</td><td>',$row['image'].'</td><td>'.$row['streetNo'].'</td><td>'.$row['cellphone'].'</td></tr>';
//     }
//     }


    header("Location: ../index.php);
    $conn->close;
?>


