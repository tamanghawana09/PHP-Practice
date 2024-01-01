<?php
$servername = "localhost";
$username ="root";
$password = "root";
$dbname = "mydatabase";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error){
    die ("Connection Failed").mysqli_connect_error();
}else{
    echo "Connection Successfull";
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['id'];
    $name = $_POST['name'];
    $address= $_POST['address'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];

    //user is the table in database

    //Insert Query for Save button
    $insert_sql = "INSERT INTO user(Id,Name,Address,Contact,Gender) VALUES('id','name','address','contact')";
    $insert_result = mysqli_query($conn,$insert_sql);

    if($insert_result){
        echo "Data Recorded Successfully";
    }else{
        echo "Error: Data not recorded".mysqli_error($conn);
    }

    //Select Query for Show button

    $select_sql = "SELECT * FROM user";
    $select_result = mysqli_query($conn,$select_sql);

    if($select_result){
        echo "Fetched successfully" . "<br>";
        echo $id."<br>";
        echo $name."<br>";
        echo $address."<br>";
        echo $contact."<br>";
        echo $gender."<br>";
    }else{
        echo "Error: Unable to fetch data".mysqli_error($conn);
    }

    //Update query for update button

    $update_sql = "UPDATE user SET Name = 'Hawana' WHERE ID = $id ";
    if($conn->query($update_sql)===TRUE){
        echo "Updated Successfully";
    }else{
        echo "Error updating record: ". $conn->error;
    }

    //Delete query for delete button
    $delete_sql = "DELETE FROM user WHERE Id = $id";
    if ($conn->query($delete_sql) === TRUE) {
        echo "Deleted Successfully";
    }else{
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();

}
?>