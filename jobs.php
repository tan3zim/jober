<!DOCTYPE html>
<html>
    <head>
        <!-- META -->
        <title>Job Find | Browse Jobs</title>
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
            <div id="search_area" class="col_12 column">
                <form class="horizontal" method="post" action="">
                    <input id="keywords" type="text" placeholder="Enter Keywords">

                    <select id="state_select">
                        <option>Select District</option>
                        <option value="dhaka">Dhaka</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="sylhet">Sylhet</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="khulna">Khulna</option>
                        <option value="barisal">Barisal</option>
                    </select>
                    <select id="category_select">
                        <option>Select Category</option>
                        <option>Accounting & Banking</option>
                        <option>Construction</option>
                        <option>Fashion & Style</option>
                        <option>Healthcare</option>
                        <option>Food & Restaurant</option>
                        <option>Technology</option>
                    </select>
                    <button type="submit">Submit</button>

                </form>
            </div>
            
            <div id="category_block" class="col_12 column">
                <h3>Browse Jobs</h3>
                <ul>
                    <li><a href="">Accounting & Banking</a></li>
                   <li><a href="">Construction</a></li>
                    <li><a href="">Fashion & Style</a></li>
                    <li><a href="">Healthcare</a></li>
                    <li><a href="">Food & Restaurant</a></li>
                   <li><a href="">Technology</a></li>
                    
                </ul>
            </div>
            
            
            <div class="col_12 column">
               
                <ul id="listings">
                    <li>
                        <div class="type">
                            <span class="green">Full Time</span>
                        </div>
                        <div class="description">
                            <h5>Senior Graphic Designer</h5>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                            dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            <a href="details.php"><i class="fa fa-plus"></i>Read More</a>
                        </div>
                    </li>


                    <li>
                        <div class="type">
                            <span class="blue">Part Time</span>
                        </div>
                        <div class="description">
                            <h5>Wordpress Developer</h5>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                            dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            <a href="details.php"><i class="fa fa-plus"></i>Read More</a>
                        </div>
                    </li>
                </ul>
            </div> 

            <div class="clearfix"></div>
            <footer>
                <p>&copy;  Copyright 2018, Job Finds, All Rights Reserved</p>
            </footer>
        </div> <!-- End Grid -->
    </body>
</html>
