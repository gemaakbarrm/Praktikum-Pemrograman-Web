<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    error_reporting(0);
            $user = array(
                            "user" => "gema",
                            "pass"=>"gema"            
                    );
    if (isset($_POST['submit'])) {
        if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']){
            //Membuat Session
            $_SESSION["username"] = $_POST['username']; 
            echo "Anda Berhasil Login $_POST[username] , Silahkan Logout disini <a href='logout.php'>Klik Logout</a>";
        } else {
            display_login_form();
            echo '<p>Username Atau Password Tidak Benar</p>';
        }
    }    
    else { 
        display_login_form();
    }
    function display_login_form(){ ?>
        <div class="form-login">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' style="margin-left: 40%; margin-top:20%;">
                <label for="username">username</label>
                <input type="text" name="username" id="username"><br>
                <label for="password" style="margin-top:20px;">password</label>
                <input type="password" name="password" id="password" style="margin-top:20px;"><br>
                <input type="submit" name="submit" value="submit" style="margin-top:20px;">
            </form>    
        </div>
    <?php } ?>
</body>
</html>