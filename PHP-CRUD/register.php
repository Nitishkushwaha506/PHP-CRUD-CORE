<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto mt-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h1><i class="fa-solid fa-user"></i>User Registration</h1>
                    </div>
                    <div class="card-body">
                       <form action="dataInsert.php" method="POST">

                       <lable>Name :</lable>
                        <input type="text" name="name" placeholder="Enter Your Name.." class="form-control"/>

                        <label>Email :</label>
                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control"/>

                        <label>Phone :</label>
                        <input type="tel" name="phone" placeholder="Enter Your Phone Number" class="form-control"/>

                        <label>Address :</label>
                        <input type="text" name="address" placeholder="Enter Your Address" class="form-control"/>

                        <label>City :</label>
                        <input type="text" name="city" placeholder="Enter Your City Name" class="form-control"/><br>

                        <input type="submit" name="submit-btn" class="btn btn-outline-success"/>
                        <a href="index.php" class="btn btn-outline-danger" onclick="alert('Are You Sure Want To Cancel')">Cancel</a>


                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>