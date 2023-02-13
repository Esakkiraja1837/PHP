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
    <form action="" method = "GET">
        <fieldset>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Emailid</th>
                    <th>Experience</th>
                    <th>Contact_number</th> 
                    <th>Action</th>
                </tr>
                <?php foreach($details as $data) { ?>
                    <tr>
                        <td><?php echo $data->id; ?></td>
                        <td><?php echo $data->first_name; ?></td>
                        <td><?php echo $data->last_name; ?></td>
                        <td><?php echo $data->emailid; ?></td>
                        <td><?php echo $data->experience; ?></td>
                        <td><?php echo $data->contact_number; ?></td>
                        
                        <td>
                            <a href="update?update=<?php echo $data->id ?>">Update</a>
                            <a href="delete?delete=<?php echo $data->id ?>">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
            </table>
    </fieldset>
    </form>    
</body>
</html>