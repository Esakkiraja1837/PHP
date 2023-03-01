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
    <link rel="stylesheet" href='http://localhost/CodeIgniter-2.2.6/assets/viewstyle.css'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <form action="employee/search" method = "GET">
        <div class="top-container">
                        <div class="block">
                            <div class="search-block">
                                <div class="search">
                                    <input type="search" class="input" name="firstname">
                                    <div class="option">
                                        <input type="submit" class="submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        
                    <div class="container">
                        <div class="sort">
                            <button class = "sort-button">Sort</button>
                            <div class="sort-content">
                                <a href="http://localhost/CodeIgniter-2.2.6/index.php/employee/experience">Experience</button></a>
                                <a href="http://localhost/CodeIgniter-2.2.6/index.php/employee/name">Name</button></a>
                            </div>
                        </div>
                        <div class="create">
                            <i class='fas fa-plus'></i>
                            <a href="http://localhost/CodeIgniter-2.2.6/index.php/employee/create">Add user</button></a>
                        </div>
                  </div>
            </div>

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
                            <a href="<?php echo base_url() ?>index.php/Employee/EmployeeController/getAllDetails?view=<?php echo $data->id ?>"><i class="fa fa-address-card-o"></i></a>
                            <a href="<?php echo base_url() ?>index.php/Employee/EmployeeController/update?update=<?php echo $data->id ?>"><i class="fa fa-pencil-square"></i></a>
                            <a href="<?php echo base_url() ?>index.php/Employee/EmployeeController/delete?delete=<?php echo $data->id ?>"><i class="fa fa-trash"></i></a>
                        </td>
                </tr>
            <?php } ?>
            </table>
            <div class="pagination" id = "pagination">
                <ul class = "page">

                <?php foreach($links as $link) {
                    echo "<li>". $link ."</li>";
                } ?>
    </fieldset>
    </form>    
</body>
</html>