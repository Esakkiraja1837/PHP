<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href='http://localhost/CodeIgniter-2.2.6/assets/employeestyle.css' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/c05f39e131.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method = "GET">
        <fieldset>
    <div class="container">
        <div class ="top-container">
            <h1> Employee Personal Information</h1>
        </div>
        <div class="main-container">
            <?php foreach($result as $row) {?>
            <div class="profile">
                <div class="images">
                    <img class="image" src= "<?php echo base_url()?>images/<?php echo $row->picture; ?>" width = '10', height = '180'/>
                </div>

                <div class = "Details">
                    <div class="name"><?php echo ($row->first_name)?></div>

                    <div class="desination">
                    <div class="desination-icon"><i class='fas fa-user-circle'></i></div>
                        <?php echo ($row->designation)?>
                    </div>

                    <div class="email">
                        <div class="mail-icon"><i class='fas fa-envelope-open'></i></div>
                        <?php echo ($row->emailid)?>
                    </div>

                    <div class="mobile">
                        <div class="mobile-icon"><i class='fas fa-mobile-alt'></i></div>
                        <?php echo ($row->contact_number)?>
                    </div>

                    <div class="location">
                        <div class="location-icon"><i class='fas fa-map-marker-alt'></i></div>
                        <?php echo ($row->current_address)?>
                    </div>
                </div>
        </div>
        <hr>
            <div class="buttom-container">
                
            <div class="personal-data">
                <div class="experience">Experience</div>
                <div class= "experience-val"><?php echo ($row->experience)."  Year"?></div>
                <div class="date">
                    <!-- <div class="date-of-birth">Date Of Birth </div>
                    <div class="datebirth">?php echo ($row->date_of_birth)?></div><br> -->
                    <div class="date-of-joining">Date of Joining </div>
                    <div class="datejoining"><?php echo ($row->date_of_joining)?></div>
                </div>

                <!-- <div class="blood">Blood Group</div>
                <div class="blood-val">?php echo ($row->blood_group)?></div><br> -->
                <div class="address">Address</div>
                <div class="address-val"><?php echo ($row->permament_address)?></div><br>
                <!-- <div class="emergency"> Emergency no</div>
                <div class="emergency-val">?php echo ($row->emergency_number)?></div><br> -->
                <div class="gender">Gender</div>
                <div class="gender-val"><?php echo ($row->gender)?></div>
            </div>

            <div class="company-details">
                <h2>Company Details</h2>
                <div class="company-name"><i class='fas fa-building'></i></div>
                <div class="name-val">Ideas2IT Technologies</div><br>

                <div class="owner-name"><i class='fas fa-portrait'></i></div>
                <div class="owner-val">Murali Vivekanandan</div><br>

                <div class="mail"><i class='fas fa-envelope-open'></i></div>
                <div class="mail-val">ideas2it@gmail.com</div><br>

                <div class="contact-no"><i class='fas fa-mobile-alt'></i></div>
                <div class = "contact-val">848849834</div><br>
                
                <div class="company-location"><i class='fas fa-map-marker-alt'></i></div>
                <div class="location-val">Chennai,guindy</div><br>

                <div class="social-media">
                    <div class="facebook">
                        <a href="https://www.facebook.com/Ideas2IT/"><i class='fab fa-facebook'></i></button></a>    
                    </div>
                    <div class="twitter">
                        <a href="https://twitter.com/ideas2it"><i class='fab fa-twitter'></i></button></a>    
                    </div>
                    <div class="instagram">
                        <a href="https://www.instagram.com/accounts/login/"><i class='fab fa-instagram'></i></button></a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    </fieldset></div>
    </form>
</body>
</html>