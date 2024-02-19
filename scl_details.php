<?php
session_start();
include"header.php";

    $email=$_SESSION['email'];
    $sql="SELECT * FROM user WHERE email='$email'";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        echo'
            <table border="">
                <tr>
                    <th>id.number</th>
                    <th>school name</th>
                    <th>rigester number</th>
                    <th>password </th>
                    <th>address</th>
                </tr>
        ';
        while($row=mysqli_fetch_assoc($result)){
            echo'
                <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['fullname'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['password'].'</td>
                    <td>'.$row['adrress'].'</td>
                </tr>
            ';
        }
        echo'</table>';
    }{
        echo'no data found';
    }
?>