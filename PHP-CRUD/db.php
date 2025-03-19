<?php
    $serveName="localhost";
    $userName="root";
    $password="";
    $dataBase="php-crud";


    $conn=mysqli_connect($serveName,$userName,$password,$dataBase);

    if($conn){
       // echo"<script>alert('connection successfully')</script>";
    }else{
        echo "Connection Error";
    }

?>