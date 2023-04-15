<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Login</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/design.css">
</head>

<body>
    <h2> Silahkan Login</h2>
    <form action="" method="POST">
        <div class="container-al46">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" name="password" value="password" required>

            <input type="checkbox" checked="checked"><span>Remember me</span>
            <button type="submit">Login</button>

            <span class="fpw"><a href="#">Forgot Password</a></span>
        </div>
    </form>
</body>

</html>