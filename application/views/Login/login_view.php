<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php if(isset($error)) { ?>
        <div style="color: red;"><?php echo $error; ?></div>
    <?php } ?>

    <form action="<?php echo site_url('Login/process_login'); ?>" method="post">
        <h2>Login</h2>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Login">
        <?php if($this->session->flashdata('error')) { ?>
            <p><?php echo $this->session->flashdata('error'); ?></p>
        <?php } ?>

    </form>

</body>
</html>
