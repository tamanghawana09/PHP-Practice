<?php
    $Servername ='localhost';
    $username = 'root';
    $password ='0911';
    $dbname = 'mydatabase';
    
    $conn = mysqli_connect($Servername,$username,$password,$dbname);

    if($conn->connect_error){
        die ("Connection failed") . mysqli_connect_error();
    }else{
        echo "Connection Established";
    }

    //Insert Query
//     $insert_sql = "INSERT INTO user(id,name,college) VALUE('2',Sama Nemkul Shrestha','Kist College')";

//    $result = mysqli_query($conn,$insert_sql);
//    if($result){
//     echo "Record Inserted Successfully";
//    }else{
//     echo "Error : " . mysqli_connect_error();}
   

    $select_sql = "SELECT * FROM user";
   $result2 = mysqli_query($conn,$select_sql);
   $row = mysqli_fetch_all($result2,MYSQLI_ASSOC);
   $rows = mysqli_fetch_assoc($result2);

   while($rows = mysqli_fetch_assoc($result2)){
    echo "<pre>";
    print_r($rows);
    echo "</pre>";
   }
   
   echo "<pre>";
   print_r($row);
   echo "</pre>";
   
   

   mysqli_close($conn);
?>