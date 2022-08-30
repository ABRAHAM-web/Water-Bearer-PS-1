<?php include 'connection.php';?>

 <!DOCTYPE html>
 <html lan='en'>
 <head>
 </head>
 <body>
 <table border="1" text-align="center";>
    <tr>
        <th>Email</th>
        <th>SHA1 Password</th>
        <th>User Level</th>
        <th>Image</th>
        <th>Town</th>
        <th>StreenNo</th>
        <th>Cellphone</th>
    </tr>
       <?php
//        echo '1';
//        echo '2';
        $userName = $_POST['userName'];
        $passwords = $_POST['passwords'];
//         echo $userName.'heeelo';
//         echo $passwords.'kskskskks';
        if ($userName === '') $userName = '*';
        if ($passwords === '') $passwords = '*';

           $sql = "select userName,
                    passwords,
                    userLevel,
                    image,
                    town,
                    streetNo,
                    cellphone
                    from
                    users
                    where
                    userName like '%$userName%' and
                    passwords like '%$passwords%'
                    ";



        if (!$conn) {
       // echo 'Connection error: ' .mysqli_connect_error();
        } else {
            echo 'Connection established :';
                        echo '1';
                        echo '2';
//             echo $userName;
//             echo $passwords;

        };
        //DATE_FORMAT("2017-06-15", "%M %d %Y");
        //$sql = 'select * from analysis order by sampleDate desc';

        $userResult = $conn->query($sql);
         if ($userResult->num_rows > 0) {
        while ($row = $userResult->fetch_assoc()) {
        //echo $row['sampleDate'];
           echo '<tr><td>'.$row['userName'].'</td><td>'.$row['passwords'].'</td><td>'.$row['userLevel'].'</td><td>',$row['image'].'</td><td>'.$row['streetNo'].'</td><td>'.$row['cellphone'].'</td></tr>';
        }
        }
        $conn->close;
    ?>
 </table>
 </body>

</html>