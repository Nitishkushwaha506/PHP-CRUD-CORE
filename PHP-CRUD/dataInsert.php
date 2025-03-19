        <?php
        include 'db.php';

        if(isset($_POST['submit_btn'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $city=$_POST['city'];
        


        $query="INSERT INTO user(name,email,phone,address,city)VALUES('$name','$email','$phone','$address','$city')";
        $query_run=mysqli_query($conn,$query);

        if($query_run){
            header("Location: index.php");
        }else{
            header("Location: register.php");
        }

        }


        if(isset($_POST['update_btn'])){
            $stu_id=$_POST['sid'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $city=$_POST['city'];


        $update="UPDATE user set name='$name',email='$email', phone='$phone',address='$address',city='$city' WHERE id={$stu_id}";
        $update_run=mysqli_query($conn,$update);
        if($update_run){
            header("Location: index.php");
        }else{
            echo "Error: " . mysqli_error($conn);
        }
    }

    if(isset($_POST['delete_btn'])){
        $delete_id = $_POST['delete_id'];

        $delete="DELETE FROM user WHERE id='$delete_id'";
        $delete_run=mysqli_query($conn,$delete);
        if($delete_run){
            header("Location: index.php");
        }

    }


?>