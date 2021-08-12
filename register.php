<!DOCTYPE html>
<html>
    <head>
        <!-- META -->
        <title>Job Find | Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="" />

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
        <link rel="stylesheet" type="text/css" href="style.css" media="all" /> 

        <!-- Javascript -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/kickstart.js"></script>
    </head>
    <body>
        <div id="container" class="grid">
            <header>
                <div class="col_6 column">
                    <h1><a href="index.php"><strong>Job</strong>Finds</a></h1>
                </div>
                <div class="col_6 column right">
                    <form id="add_job_link">
                        <button class="large green "><i class="fa fa-plus"></i>Add Job</button>
                    </form>
                </div>
            </header>

            <div class="col_12 column">
                <!-- Menu Horizontal -->
                <ul class="menu">
                    <li class="current"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="jobs.php"><i class="fa fa-search"></i> Browse Jobs</a></li>                  
                    <li><a href="register.php"><i class="fa fa-user"></i> Register</a></li>
                    <li><a href="login.php"><i class="fa fa-key"></i> Login</a>


                </ul>
            </div>
           
            <div class="col_12 column">
                
                <form id="reg_form">
                    <fieldset>
                    <legend>Create an Account</legend>
                    <p>
                        <label for="username">Username</label>
                        <input id="username" type="text" name="username">
                    </p>
                    <p>
                        <label for="first_name">First Name</label>
                        <input id="first_name" type="text" name="first_name">
                    </p>
                    <p>
                        <label for="last_name">Last Name</label>
                        <input id="last_name" type="text" name="last_name">
                    </p>
                    <p>
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email">
                    </p>
                    <p>
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password">
                    </p>
                    <p>
                        <label for="password2">Confirm Password</label>
                        <input id="password2" type="password2" name="password2">
                    </p>
                    <p>
                        
                        <input id="" type="submit" name="submit" value="Create">
                    </p>
                    </fieldset>
                </form>
            </div> 

            <div class="clearfix"></div>
            <footer>
                <p>&copy;  Copyright 2018, Job Finds, All Rights Reserved</p>
            </footer>
        </div> <!-- End Grid -->
    </body>
</html>
