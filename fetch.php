<?php

$path = mysqli_connect('localhost','id12390258_mydb','Abirn','id12390258_mydb');

    if(isset($_POST['button']))
    {
        
        $cmnt = $_POST['cmnt'];
        if($cmnt != '')
        {
            $que = "INSERT INTO user_det SET comment='$cmnt' ";
            $path->query($que);

            echo("Comment added successfully");
        }
        else{
            header('location: index.html');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>fetch</title>
</head>
<body>
    <?php
        $fetch = "SELECT * FROM contact";

        $result=mysqli_query($path,$fetch);
        $row=mysqli_num_rows($result);

        if($row!= 0)
        {
            ?>
                <table border=2>
            <?php
            while($rows=mysqli_fetch_assoc($result))
            {
                echo("<tr>
                        <td>".$rows['id']."</td>   <td>".$rows['name']."</td>   <td>".$rows['email']."</td>   <td>".$rows['subject']."</td>   <td>".$rows['message']."</td>   </tr>");
            }
            
            ?>
            </table>
            <?php
        }

    ?>
</body>
</html>