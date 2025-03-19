<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Now</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto mt-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h1><i class="fa-solid fa-user"></i> User Update</h1>
                    </div>
                    <div class="card-body">
                        <?php
                        include 'db.php';
                        if(isset($_GET['id'])){
                            $stu_id = $_GET['id'];
                            $query = "SELECT * FROM user WHERE id = {$stu_id}";
                            $query_run = mysqli_query($conn, $query) or die("Query Unsuccessful");

                            if(mysqli_num_rows($query_run) > 0){
                                $row = mysqli_fetch_assoc($query_run);
                        ?>
                        <form action="dataInsert.php" method="POST">
                            <input type="hidden" name="sid" value="<?= $stu_id; ?>"/>

                            <label>Name:</label>
                            <input type="text" name="name" value="<?= $row['name']; ?>" class="form-control" required/>

                            <label>Email:</label>
                            <input type="email" name="email" value="<?= $row['email']; ?>" class="form-control" required/>

                            <label>Phone:</label>
                            <input type="tel" name="phone" value="<?= $row['phone']; ?>" class="form-control" required/>

                            <label>Address:</label>
                            <input type="text" name="address" value="<?= $row['address']; ?>" class="form-control" required/>

                            <label>City:</label>
                            <input type="text" name="city" value="<?= $row['city']; ?>" class="form-control" required/><br>

                            <input type="submit" name="update_btn" value="Update Now" class="btn btn-outline-success"/>
                            <a href="index.php" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to cancel?')">Cancel</a>
                        </form>
                        <?php
                            } else {
                                echo "<p class='text-danger'>User Not Found!</p>";
                            }
                        } else {
                            echo "<p class='text-danger'>Invalid Request!</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
