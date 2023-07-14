<html>
    <head>
        <title> Register</title>
    </head>
    <body>
        <h2>Register</h2>
        <form autocomplete="off" action="" method="post">
            <input type="hidden" id="action" value="register">

            <label for="name">Name</label>
            <input type="text" id="name" value="">
            <br>
            <label for="email">Email</label>
            <input type="text" id="email" value="">
            <br>
            <label for="password">Password</label>
            <input type="password" id="password" value="">
            <br>
            <label for="phone">Phone</label>
            <input type="text" id="phone" value="">
            <br>
            <label for="bday">Bdate</label>
            <input type="date" id="date" value="">
            <br>
            <button type="button" onclick="submitData();">Register</button>
        </form>
        <?php
            include "script.php"; 
        ?>

            </body>
</html>
