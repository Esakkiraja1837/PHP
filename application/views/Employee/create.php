<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href='http://localhost/CodeIgniter-2.2.6/assets/createstyle.css' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <div class="container">
<h1>Employee Information Form</h1>
<hr>
    <form action="EmployeeController/insert" method = "POST">
        <fieldset>
            <h2>Personal Information</h2>
            <div class = "name">
            <div class="firstname" >
            FirstName 
            <input type = "text" class = "fname" name = "firstname" value ="<?php echo set_value("firstname");?>">
            <br><br></div>

            <div class="lastname" >
            LastName 
            <input type = "text" class = "lname" name = "lastname" value ="<?php echo set_value("lastname");?>">
            <br><br></div></div>

            <div class="email-contact">
            <div class="email">
            <lable for = "email">Email Id </lable>
            <input type = "email" class = "mail" name = "emailid" value ="<?php echo set_value("emailid");?>">
            <br><br></div>

            <div class="contact" >
            Contact No 
            <input type = "text" class = "econtact" name = "contactnumber" value ="<?php echo set_value("contactnumber");?>">
            <br><br></div></div>

            <div class="date">
            <div class="date_of_birth" >
            <lable for=""start> Date-Of-Birth </lable>
            <input type = "date" class = "dateofbirth" name = "dateofbirth" 
             min="1940-01-01" max="2023-10-10" value ="<?php echo set_value("dateofbirth");?>">
            <br><br></div>

            <div class="joining_date" >
            <lable for=""start> Date-of-joining  </lable>
            <input type = "date" class = "joiningdate" name = "joiningdate" 
             min="1940-01-01" max="2023-10-10" value ="<?php echo set_value("joiningdate");?>">
            <br><br></div></div>

            <div class = "dest-qulif">

            <div class="destination" >
            <label for="edestination">Destination </label>
                <select name="destination" id="blood" value ="<?php echo set_value("destination");?>">
                <option value="Computer systems manager">Computer systems manager</option>
                <option value="Network architect">Network architect</option>
                <option value="Systems analyst">Systems analyst</option>
                <option value="IT coordinator">IT coordinator</option>
                <option value="Network administrator">Network administrator</option>
                <option value="Network engineer">Network engineer</option>
                <option value="Service desk analyst">Service desk analyst</option>
                <option value="System administrator">System administrator</option>
                <option value="Database administrator">Database administrator</option>
                <option value="Database analyst">Database analyst</option>
                <option value="SQL database administrator">SQL database administrator</option>
                <option value="Business intelligence specialist/analyst">Business intelligence specialist/analyst</option>
                <option value="Business systems analyst">Business systems analyst</option>
                <option value="Data analyst">Data analyst</option>
                <option value="Data analytics developer">Data analytics developer</option>
                <option value="Data modeling analyst">Data modeling analyst</option>
                <option value="Data warehouse manager">Data warehouse manager</option>
                <option value="Back-end developer">Back-end developer</option>
                <option value="Cloud/software architect">Cloud/software architect</option>
                <option value="Cloud/software developer">Cloud/software developer</option>
                <option value="Cloud/software applications engineer">Cloud/software applications engineer</option>
                <option value="DevOps engineer">DevOps engineer</option>
                <option value="Front-end developer">Front-end developer</option>
                <option value="Full-stack developer">Full-stack developer</option>
                <option value="Java developer">Java developer</option>
                <option value="Release manager">Release manager</option>
                <option value="Software engineer">Software engineer</option>
                <option value="UI (user interface) designer">UI (user interface) designer</option>
                <option value="Web developer">Web developer</option>
                <option value="IT security engineer">IT security engineer</option>
                <option value="IT support specialist">IT support specialist</option>
                <option value="Customer service representative">Customer service representative</option>
                <option value="Technical product manager">Technical product manager</option>
                <option value="Project manager">Project manager</option>
                <option value="Program manager">Program manager</option>
            </select> <br><br></div>

            <div class="qualification" >
            Qualification
            <input type = "text" class = "equalification" name = "qualification" value ="<?php echo set_value("qualification");?>">
            <br><br></div></div>

            <div class="current_address" >
            <p><label for="address">Current address </label></p>
            <textarea id="caddress" name="currentaddress" rows="2" cols="102" value ="<?php echo set_value("currentaddress");?>"></textarea>
            <br><br></div>

            <div class="permanent_address" >
            <p><label for="paddress">Permanent address </label></p>
            <textarea id="paddress" name="permanentaddress" rows="2" cols="102" value ="<?php echo set_value("permanentaddress");?>"></textarea>
            <br><br></div>

            <div class="exp_blood_gender">
            <div class="Year_of_experience" >
            <label for = "experience">Year of experience :</label>
            <input type = "number" id = "experience" min="0" max="50" class = "experience" name = "experience" value ="<?php echo set_value("experience");?>">
            <br><br></div>

            <div class="blood_group" >
            <label for="blood" >Blood group :</label>
                <select name="bloodgroup" id="blood" value ="<?php echo set_value("bloodgroup");?>">
                <option value="A+ve">A+ve</option>
                <option value="A+ve">A-ve</option>
                <option value="B+ve">B+ve</option>
                <option value="B+ve">B-ve</option>
                <option value="B+ve">AB+ve</option>
                <option value="B+ve">AB-ve</option>
                <option value="O+ve">O+ve</option>
                <option value="O+ve">O-ve</option>
            </select> <br><br></div>
           
            <div class="gender" >
            gender
            <input type = "text" class = "gender" name = "gender" value ="<?php echo set_value("gender");?>">
            <br><br></div></div>

            <div class ="emg_pic">
            <div class="Emergency_number" >
            Emergency number
            <input type = "text" class = "emergency" name = "emergencynumber" value ="<?php echo set_value("emergencynumber");?>">
            <br><br></div>

            <div class="profile_photo" >
            <lable for="file">Profile photo :</lable>
            <input type = "file" id = "file" class = "profile" name = "profilephoto">
            <br><br></div></div>

            <div class="technology" >
            <label for="tecnology">Known Languages: </label><br>
             <select name = "technology[ ]" id = "technology" multiple>
                <option value="1" <?php echo set_select('technology[]', '1'); ?>>Php</option>
                <option value="2" <?php echo set_select('technology[]', '2'); ?>>Java</option>
                <option value="3" <?php echo set_select('technology[]', '3'); ?>>Phython</option>
                <option value="4" <?php echo set_select('technology[]', '4'); ?>>Html</option>
                <option value="5" <?php echo set_select('technology[]', '5'); ?>>Css</option>
                <option value="6" <?php echo set_select('technology[]', '6'); ?>>JavaScript</option>
                <option value="7" <?php echo set_select('technology[]', '7'); ?>>Angular</option>
                <option value="8" <?php echo set_select('technology[]', '8'); ?>>React</option>
                <option value="9" <?php echo set_select('technology[]', '9'); ?>>Go</option>
                <option value="10" <?php echo set_select('technology[]', '10'); ?>>C#</option>
                <option value="11" <?php echo set_select('technology[]', '11'); ?>>C & C++</option>
            </select><br /><br></div>
    
    <div class="company">
    <label for="company">Company: </label>
    <select class="company" name="companyid" id="companyid">
        <option value="2" <?php echo set_select('company', '2'); ?>>TCS</option>
        <option value="3" <?php echo set_select('company', '3'); ?>>Ideas2It</option>
    </select><br><br></div>

            <div class="option">
            <input type = "submit" class = "submit" name = "submit" value = "Submit">
            <input type = "submit" class = "cancel" name = "cancel" value = "Back">
        </fieldset></div>
    </form>
    </div>
</body>
</html>