<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href=".assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/toastr/toastr.css.css">
    <style>.error{color:red;}</style>

</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:30px">
            <div class="col-md-6 col-md-offset-3">
                <h4>Register</h4>
                <hr>
                <form action="save_user.php" method="post" id="register_form">
                    <div class="form-group">
                        <label for="First name"></label>
                        <input type="text" class="form control" name="f_name"
                        placeholder="Enter first name">
                    </div>

                    <div class="form-group">
                        <label for="Last name"></label>
                        <input type="text" class="form control" name="l_name"
                        placeholder="Enter last name">
                    </div>

                    <div class="form-group">
                        <label for="Email"></label>
                        <input type="text" class="form control" name="Email"
                        placeholder="Enter email">
                    </div>


                    <div class="form-group">
                        <label for="New Password"></label>
                        <input type="text" class="form control" name="password"
                        placeholder="Enter new Password" id="new_password">
                    </div>

                    <div class="form-group">
                        <label for="Retype Password"></label>
                        <input type="text" class="form control" name="retype_password"
                        placeholder="Enter Password again">
                    </div>
                    <button type="Submit" class="btn btn-primary btn-block">Register</button>



                </form>

            </div>
        </div>
    </div>

    <script src="./assets/jquery/jquery-3.5.0.min.js"></script>
    <script src="./assets/jquery-validate/jquery.validate.min.js"></script>
    <script src="./assets/jquery-validate/additional-methods.min.js"></script>
    <script src="./assets/toastr/toastr.js"></script>
    <script src="script.js"></script>

</body>
</html>