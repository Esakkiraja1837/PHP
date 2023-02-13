<?php
$dbConnect = mysqli_connect("localhost", "root", "LUFFY", "phpemployee");
if (!$dbConnect) {
    echo "DB connection failure";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="EmployeeController/getEmployee" method = "POST">
    <fieldset>
        <div class="firstname">
            FirstName 
            <input type = "text" class = "fname" name = "firstname">
            <br><br></div>

            <div class="option">
            <input type = "submit" class = "submit" name = "submit" value = "Submit">
            <input type = "submit" class = "cancel" name = "cancel" value = "Back">
    </fieldset></div>
</body>
</html>