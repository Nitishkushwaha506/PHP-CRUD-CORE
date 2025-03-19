<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="card  mt-3">
                    <div class="card-header">
                        <h1>All User Data 
                            <a href="register.php" class="btn btn-outline-success float-end">Add User</a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <?php
                            include 'db.php';
                            $query="SELECT * FROM user";
                            $query_run=mysqli_query($conn,$query);
                            if(mysqli_num_rows($query_run)){

                          

                            ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    while($row=mysqli_fetch_assoc($query_run)){

                                    
                                ?>
                                <tr>
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['name']?></td></td>
                                    <td><?php echo $row['email']?></td></td>
                                    <td><?php echo $row['phone']?></td></td>
                                    <td><?php echo $row['address']?></td> </td>
                                    <td><?php echo $row['city']?></td></td>
                                    <td>
                                        <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-outline-primary">Edit</a>
                                    </td>
                                    <td>
                                    <form action="dataInsert.php" method="post" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                        <input type="hidden" name="delete_id" value="<?= $row['id']; ?>">
                                          <button type="submit" name="delete_btn" class="btn btn-outline-danger">Delete</button>
                                            </form>

                                    </td>
                                </tr>
                                <?php
                            }
                                ?>
                            </tbody>
                        </table>
                        <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>