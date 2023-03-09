<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='http://localhost/CodeIgniter-2.2.6/assets/technologystyle.css' />
    <script src="https://kit.fontawesome.com/c05f39e131.js" crossorigin="anonymous"></script>
    <title>technologypage</title>
</head>
<body>
    <fieldset>
        <form action="EmployeeController/employeebytechnology" method="post">

            <div class="back">

                <div class="link">
                    <a href="http://localhost/CodeIgniter-2.2.6/index.php/employee"><i class='fas fa-arrow-circle-left'></i></button></a>
                </div>

                <div class="top-container">
                    <h2>Click the button to see employees </h2><hr>
                </div>
            </div>

        <div class="language">
            <div class="row-1">
                <div class="php">
                <button type="submit" name="technology" value="1"> PHP </button><br><br>
                </div>

                <div class="java">
                    <button type="submit" name="technology" value="2"> JAVA </button><br><br>
                </div>

                <div class="phython">
                    <button type="submit" name="technology" value="3"> PHYTHON </button><br><br>
                </div>
            </div>

            <div class="row-2">
                <div class="html">
                    <button type="submit" name="technology" value="4"> HTML </button><br><br>
                </div>

                <div class="css">
                    <button type="submit" name="technology" value="5"> CSS </button><br><br>
                </div>

                <div class="javascript">
                    <button type="submit" name="technology" value="6"> JAVASCRIPT </button><br><br>
                </div>
            </div>

            <div class="row-3">
                <div class="go">
                    <button type="submit" name="technology" value="9"> Go</button><br><br>
                </div>

                <div class="react">
                    <button type="submit" name="technology" value="8"> REACT </button><br><br>
                </div>

                <div class="angular">
                    <button type="submit" name="technology" value="7"> ANGULAR </button><br><br>
                </div>

            </div>

            <div class="row-4">
                <div class="cold">
                    <button type="submit" name="technology" value="10"> C#</button><br><br>
                </div>

                <div class="old-c">
                    <button type="submit" name="technology" value="11"> C & C++</button>
                </div>
            </div>
        </div>
        </form>
    </fieldset>
</body>
</html>