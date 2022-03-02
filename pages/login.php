<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login form design</title>
        <link rel="stylesheet" href="./../css/login.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function (e) {
            $("#dataform").on('submit',(function(e){
            e.preventDefault();
                $.ajax({
                    url: "api/login-api.php",
                    type: "POST",
                    dataType:"JSON",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(data)
                    {          
                        if(data.status == 200){
                            window.location.href = "index.php";
                        }
                        else{
                            alert(data.message)
                        }
                    },
                    error: function(e) 
                    {
                    }          
                });
            }));
        });
    </script>
    <body>
        <div class="body">
            <h1>Admin</h1>
            <form action="#" method="POST" id='dataform'>
                <div>
                    <input
                        type="text"
                        name="admin_email"
                        id="admin_email"
                        placeholder="Email or Phone Number"
                        class="form-control"
                    />
                </div>
                <div>
                    <input
                        type="password"
                        name="admin_password"
                        id="admin_password"
                        placeholder="Password"
                        class="form-control"
                    />
                </div>
                <div>
                    <!-- <button class="btn">Login</button> -->
                    <button type="submit" id="submit" class="btn">Login</button>

                </div>
                <div class="forgot-password">
                    <!-- <p class="password">Forgot Your Password ?</p> -->
                </div>
            </form>
        </div>
    </body>
</html>