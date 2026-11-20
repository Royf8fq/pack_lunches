<!DOCTYPE html>
<html>
    <head>
        <title>My Website</title>
        <link rel="icon" type="image/x-icon" href="media/favicon.webp">
    </head>
    <body>
        <form action="addUser.php" method="post">
            <input type="text" name="forename" placeholder="Enter your firstname">
            <br><br>
            <input type="text" name="surname" placeholder="Enter your surtname">
            <br><br>
            <input type="text" name="house" placeholder="Enter your house">
            <br><br>
            <input type="number" name="year" placeholder="Enter your year">
            <br><br>
            <input type="number" name="balance" placeholder="Enter your balance">
            <br><br>
            <input type="radio" name="role" value="student"> Student
            <input type="radio" name="role" value="staff"> Kitchen Staff
            <br><br>
            <input type="password" name="password" placeholder="Enter your password">
            <br><br>
            <input type="submit"value="Submit">
        </form>
    </body>
</html>