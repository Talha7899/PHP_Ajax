<?php
include 'config.php';

$query = "SELECT * FROM `user-data`";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>
        <td scope="row">'.$row['id'].'</td>
        <td>'.$row['Name'].'</td>
        <td>'.$row['Email'].'</td>
        <td>'.$row['Phone'].'</td>
      </tr>';
    }
}

?>