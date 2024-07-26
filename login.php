<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css" />
    <style>
        .form-signin {
            width: 400px;
            padding: 1rem;
        }

        .login-form {
            display: flex;
            justify-content: center;
        }
    </style>
    <title>Melbourne Watch Gallery</title>
</head>

<body>
    <?php
    include("navheader.php");
    ?>
    <div class="login-form">
        <form class="form-signin" action="password_validation.php" method="post">
            <?php
            if (isset($_GET["message"])) {
                echo "
                    <div id='myAlert' class='alert alert-danger' role='alert' alert-dismissible fade show>
                     <div class='text-center'>$_GET[message]</div>
                    </div>
                ";

                // echo "
                //     <script>
                //         const alert = document.getElementById('myAlert');
                //         alert.addEventListener('close.bs.alert', event => {
                //             console.log('Close');
                //         });
                //     </script>
                // ";
            }
            ?>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" required />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" data-eye-class="eyeClass" required />
            </div>
            <button class="btn addbtn w-100 py-2">Login</button>
        </form>
    </div>
    <script>
        window.onload = function() {
            setTimeout(function() {
                var alertElement = document.getElementById('myAlert');
                var bsAlert = new bootstrap.Alert(alertElement);
                bsAlert.close();
            }, 2000);
        };
    </script>
</body>

</html>