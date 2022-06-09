<!DOCTYPE html>
<html lang="en">
<?php
require_once('config.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<?php

?>

<body>
    <div class="center">
        <h1>Signup</h1>
        <form method="post" action="signup.php">
            <div class="txt_field">
                <input type="text" required autocomplete="off" name="username" id="username">
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required autocomplete="off" name="password" id="password">
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="Signup" name="signup" id="signup">
            <div class="signup_link">
                Already had an account? Login <a href="index.php">Here</a>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
            $(function(){
                $('#signup').click(function(e){

                    var valid = this.form.checkValidity();
                    if(valid){

                    var username = $('#username').val();
                    var password = $('#password').val();

                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'process.php',
                        data: {username: username, password: password},
                        success: function(data){
                            Swal.fire({
                                'title': 'Account Created',
                                'text': data,
                                'type': 'Success'
                            })
                        },
                        error: function(data){
                            Swal.fire({
                                'title': 'Error Detected',
                                'text': 'There are errors while saving the data',
                                'type': 'Error'
                            })

                        }
                    });

                    }else{

                    }

            });

        });

    </script>

</body>

</html>