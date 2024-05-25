<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
   <?php include("./includes/header.php");?>
  </head>
  <body class="reg-background">
  <?php include("./includes/navbar.php")?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 mx-auto my-4">
            <!-- registration form -->

            <div class="card">
                <h6 class="card-title text-center">Registration</h6>
                <hr>
                <!-- registration form code -->
                <form class="p-2">
                    <!-- name input -->
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="enter your name" name="name">
                    </div>
                    <!-- name input ends -->

                    <!-- number input -->
                    <div class="mb-3">
                        <label class="form-label">Number</label>
                        <input type="number" class="form-control" placeholder="enter your mobile number" name="number">
                    </div>
                    <!-- number input ends -->
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input  type="password" class="form-control" id="inputPassword" name="password">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="retype password"
                        id="confirmPassword" name="cpassword" onkeyup="verify()">

                        <p id="password" class="text-danger" style="display: none;">Password does'nt match</p>
                    </div>
                    
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  <!-- registraion form code ends -->
            </div>
        </div>
    </div>
</div>
   


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>