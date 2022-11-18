
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="table.css">
    <title>Document</title>
</head>
<body>
<table class="styled-table">
  
    <thead>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Description</th>
            <th>expectancy</th>
        </tr>
    </thead>

    <?php

        $servername="localhost";
        $username="root";
        $password="";
        $database="phpass";

        $conn=mysqli_connect($servername,$username,$password,$database);

        if(!$conn){
            die("failed toconnect".mysql_connect_error());
        }else{
            echo"connection scuess"."<br>";
        }

        $sql="SELECT * FROM animalinformation";
        $result=mysqli_query($conn, $sql);
        $nums=mysqli_num_rows($result);
        $res=mysqli_fetch_array($result);


        while($res=mysqli_fetch_array($result)){
            ?>
            <tr>
            <td><?php echo $res["name"] ?></td>
            <td><?php echo $res["Category"]  ?></td>
            <td>
           
     <img src="data:Image/jpg;charset=utf8;base64,
            <?php echo base64_encode($res['Image']); ?>"width="50" height="50"/> 
            </td>
            <td><?php echo $res["Description"]  ?></td>
            <td><?php echo $res["expectancy"]  ?></td>
            </tr>
            <?php
            
        }
        ?>
      
       

       
     <tbody>
       
        <!-- and so on... -->
    </tbody>
</table>