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
    <link rel="stylesheet" href='http://localhost/CodeIgniter-2.2.6/assets/createstyle.css' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <div class="container">
<h1>Edit - Employee Details</h1>
<hr>
    <form action="" method = "POST">
        <fieldset>
            <?php foreach($details as $employee) { ?>
            <div class = "name">
            <div class="firstname" >
            FirstName 
            <input type = "text" class = "fname" name = "firstname" value="<?php echo $employee->first_name; ?>">
            <!-- ?php echo form_error('firstname'); ?> -->
            <br><br></div>

            <div class="lastname" >
            LastName 
            <input type = "text" class = "lname" name = "lastname" value="<?php echo $employee->last_name; ?>">
            <br><br></div></div>

            <div class="email-contact">
            <div class="email">
            <lable for = "email">Email Id </lable>
            <input type = "email" class = "mail" name = "emailid" value="<?php echo $employee->emailid; ?>">
            <br><br></div>

            <div class="contact" >
            Contact No 
            <input type = "text" class = "econtact" name = "contactnumber" value="<?php echo $employee->contact_number; ?>">
            <br><br></div></div>

            <div class="date">
            <div class="date_of_birth" >
            <lable for=""start> Date-Of-Birth </lable>
            <input type = "date" class = "dateofbirth" name = "dateofbirth" value="<?php echo $employee->date_of_birth; ?>"
             min="1940-01-01" max="2023-02-10" >
            <br><br></div>

            <div class="joining_date" >
            <lable for=""start> Date-of-joining  </lable>
            <input type = "date" class = "joiningdate" name = "joiningdate" value="<?php echo $employee->date_of_joining; ?>"
             min="1940-01-01" max="2023-02-10" >
            <br><br></div></div>

            <div class = "dest-qulif">
            <div class="destination" >
            <label for="edestination">Destination </label>
                <select name="destination" id="blood" >
                <option value="Computer systems manager"
                <?php if ($employee->designation == "Computer systems manager") {
                        echo "selected";} ?>>Computer systems manager</option>

                <option value="Network architect"<?php if ($employee->designation == "Network architect") {
                        echo "selected";} ?>>Network architect</option>
                        
                <option value="Systems analyst"<?php if ($employee->designation == "Systems analyst") {
                        echo "selected";} ?>>Systems analyst</option>

                <option value="IT coordinator"<?php if ($employee->designation == "IT coordinator") {
                        echo "selected";} ?>>IT coordinator</option>

                <option value="Network administrator"<?php if ($employee->designation == "Network administrator") {
                        echo "selected";} ?>>Network administrator</option>

                <option value="Network engineer" <?php if ($employee->designation == "Network engineer") {
                        echo "selected";} ?>>Network engineer</option>

                <option value="Service desk analyst" <?php if ($employee->designation == "Service desk analyst") {
                        echo "selected";} ?>>Service desk analyst</option>

                <option value="System administrator"<?php if ($employee->designation == "System administrator") {
                        echo "selected";} ?>>System administrator</option>

                <option value="Database administrator"<?php if ($employee->designation == "Database administrator") {
                        echo "selected";} ?>>Database administrator</option>

                <option value="Database analyst" <?php if ($employee->designation == "Database analyst") {
                        echo "selected";} ?>>Database analyst</option>

                <option value="SQL database administrator"<?php if ($employee->designation == "SQL database administrator") {
                        echo "selected";} ?>>SQL database administrator</option>

                <option value="Business intelligence specialist/analyst"<?php if ($employee->designation == "Business intelligence specialist/analyst") {
                        echo "selected";} ?>>Business intelligence specialist/analyst</option>

                <option value="Business systems analyst"<?php if ($employee->designation == "Business systems analyst") {
                        echo "selected";} ?>>Business systems analyst</option>

                <option value="Data analyst"<?php if ($employee->designation == "Data analyst") {
                        echo "selected";} ?>>Data analyst</option>

                <option value="Data analytics developer"<?php if ($employee->designation == "Data analytics developer") {
                        echo "selected";} ?>>Data analytics developer</option>

                <option value="Data modeling analyst"<?php if ($employee->designation == "Data modeling analyst") {
                        echo "selected";} ?>>Data modeling analyst</option>

                <option value="Data warehouse manager"<?php if ($employee->designation == "Data warehouse manager") {
                        echo "selected";} ?>>Data warehouse manager</option>

                <option value="Back-end developer"<?php if ($employee->designation == "Back-end developer") {
                        echo "selected";} ?>>Back-end developer</option>

                <option value="Cloud/software architect"<?php if ($employee->designation == "Cloud/software architect") {
                        echo "selected";} ?>>Cloud/software architect</option>

                <option value="Cloud/software developer"<?php if ($employee->designation == "Cloud/software developer") {
                        echo "selected";} ?>>Cloud/software developer</option>

                <option value="Cloud/software applications engineer"<?php if ($employee->designation == "Cloud/software applications engineer") {
                        echo "selected";} ?>>Cloud/software applications engineer</option>

                <option value="DevOps engineer"<?php if ($employee->designation == "DevOps engineer") {
                        echo "selected";} ?>>DevOps engineer</option>

                <option value="Front-end developer"<?php if ($employee->designation == "Front-end developer") {
                        echo "selected";} ?>>Front-end developer</option>

                <option value="Full-stack developer"<?php if ($employee->designation == "Full-stack developer") {
                        echo "selected";} ?>>Full-stack developer</option>

                <option value="Java developer"<?php if ($employee->designation == "Java developer") {
                        echo "selected";} ?>>Java developer</option>

                <option value="Release manager"<?php if ($employee->designation == "Release manager") {
                        echo "selected";} ?>>Release manager</option>

                <option value="Software engineer"<?php if ($employee->designation == "Software engineer") {
                        echo "selected";} ?>>Software engineer</option>

                <option value="UI (user interface) designer"<?php if ($employee->designation == "UI (user interface) designer") {
                        echo "selected";} ?>>UI (user interface) designer</option>

                <option value="Web developer"<?php if ($employee->designation == "Web developer") {
                        echo "selected";} ?>>Web developer</option>

                <option value="IT security engineer"<?php if ($employee->designation == "IT security engineer") {
                        echo "selected";} ?>>IT security engineer</option>

                <option value="IT support specialist"<?php if ($employee->designation == "IT support specialist") {
                        echo "selected";} ?>>IT support specialist</option>

                <option value="Customer service representative"<?php if ($employee->designation == "Customer service representative") {
                        echo "selected";} ?>>Customer service representative</option>

                <option value="Technical product manager"<?php if ($employee->designation == "Technical product manager") {
                        echo "selected";} ?>>Technical product manager</option>

                <option value="Project manager"<?php if ($employee->designation == "Project manager") {
                        echo "selected";} ?>>Project manager</option>

                <option value="Program manager"<?php if ($employee->designation == "Program manager") {
                        echo "selected";} ?>>Program manager</option>
            </select> 
            <br><br></div>

            <div class="qualification" >
            Qualification
            <input type = "text" class = "equalification" name = "qualification" value="<?php echo $employee->qualification; ?>">
            <br><br></div></div>

            <div class="current_address" >
            <p><label for="address">Current_address </label></p>
            <textarea id="caddress" name="currentaddress" rows="2" cols="102" value="<?php echo $employee->current_address; ?>" ></textarea>
            <br><br></div>

            <div class="permanent_address" >
            <p><label for="paddress">Permanent_address </label></p>
            <textarea id="paddress" name="permanentaddress" rows="2" cols="102" value="<?php echo $employee->permament_address; ?>"></textarea>
            <br><br></div>

            <div class="exp_blood_gender">
            <div class="Year_of_experience" >
            <label for = "experience">Year_of_experience :</label>
            <input type = "number" id = "experience" min="0" max="50" class = "experience" name = "experience" value="<?php echo $employee->experience; ?>" >
            <br><br></div>

            <div class="blood_group" >
            <label for="blood" >Blood_group :</label>
                <select name="bloodgroup" id="blood" value="<?php echo $employee->blood_group; ?>">
                <option value="A+ve" <?php if($employee->blood_group == "A+ve"){echo "selected";} ?>>A+ve</option>
                <option value="A-ve" <?php if($employee->blood_group == "A-ve"){echo "selected";} ?>>A-ve</option>
                <option value="B+ve" <?php if($employee->blood_group == "B+ve"){echo "selected";} ?>>B+ve</option>
                <option value="B-ve" <?php if($employee->blood_group == "B-ve"){echo "selected";} ?>>B-ve</option>
                <option value="AB+ve"<?php if($employee->blood_group == "AB+ve"){echo "selected";} ?>>AB+ve</option>
                <option value="AB-ve"<?php if($employee->blood_group == "AB-ve"){echo "selected";} ?>>AB-ve</option>
                <option value="O+ve" <?php if($employee->blood_group == "O+ve"){echo "selected";} ?>>O+ve</option>
                <option value="O-ve" <?php if($employee->blood_group == "O-ve"){echo "selected";} ?>>O-ve</option>
            </select> 
            <br><br></div>
           
            <div class="gender" >
            gender
            <input type = "text" class = "gender" name = "gender" value="<?php echo $employee->gender; ?>">
            <br><br></div></div>

            <div class ="emg_pic">
            <div class="Emergency_number" >
            Emergency number
            <input type = "text" class = "emergency" name = "emergencynumber" value="<?php echo $employee->emergency_number; ?>">
            <br><br></div>

            <div class="profile_photo" >
            <lable for="file">Profile photo :</lable>
            <input type = "file" id = "file" class = "profile" name = "profilephoto" value="<?php echo $employee->picture; ?>">
            <br><br></div></div>

            <div class="technology" >
    <label for="tecnology">Known Languages: </label><br>
    <select name = "technology" id = "technology" value="<?php echo $employee->technology;?>"multiple>
        <option value="1" ?php echo set_select('technology[]', '1'); ?>>Php</option>
        <option value="2" ?php echo set_select('technology[]', '2'); ?>>Java</option>
        <option value="3" ?php echo set_select('technology[]', '3'); ?>>Phython</option>
        <option value="4" ?php echo set_select('technology[]', '4'); ?>>Html</option>
        <option value="5" ?php echo set_select('technology[]', '5'); ?>>Css</option>
        <option value="6" ?php echo set_select('technology[]', '6'); ?>>JavaScript</option>
        <option value="7" ?php echo set_select('technology[]', '7'); ?>>Angular</option>
        <option value="8" ?php echo set_select('technology[]', '8'); ?>>React</option>
        <option value="9" ?php echo set_select('technology[]', '9'); ?>>Go</option>
        <option value="10"?php echo set_select('technology[]', '10'); ?>>C#</option>
        <option value="11"?php echo set_select('technology[]', '11'); ?>>C & C++</option>
    </select><br /><br></div> 
        <?php } ?>

            <div class="option">
            <input type = "submit" class = "submit" name = "submit" value = "Submit">
            <input type = "submit" class = "cancel" name = "back" value = "Back">

        </fieldset></div>
    </form>
    </div>
</body>
</html>
<?php 
    if(isset($_POST['back'])){
        header('location:Employee/view.php');
}
?>