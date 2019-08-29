<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/sb.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <title>Side Bar</title>
</head>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Evaluation Project</h3>
            </div>

            <ul class="list-unstyled components">
                <h6 style="margin-bottom: -15px; margin-left: 10px">Good day</h6>
                <p>Dummy Heading</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Courses</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Creative Web Design</a>
                        </li>
                        <li>
                            <a href="#">Web Development</a>
                        </li>
                        <li>
                            <a href="#">Mobile Development</a>
                        </li>
                        <li>
                            <a href="#">Events Management</a>
                        </li>
                        <li>
                            <a href="#">Training Methodology</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Report</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <button type="button" class="btn btn-secondary btn-lg" style="margin-left: 40px; padding-left: 50px; padding-right: 50px">
                <a href="index.php">Logout</a>
            </button>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div>
                        <img src="images/img-01.jpg" alt="IMG" width="70px">
                    </div>
                </div>
            </nav>
            
           <ul class="list-unstyled CTAs">

            <p>
                <span style="font-size: 30px; margin-right: 220px; margin-left: 75px">Instructor</span> 
                <span style="font-size: 30px; margin-right: 240px;">Training</span>  
                <span style="font-size: 30px;">Center</span>
            </p>

   
                <p>
                    <img src="images/instructor.png" alt="IMG" width="300px" style="margin-right: 50px; margin-top: 35px">
                    <img src="images/training.png" alt="IMG" width="300px" style="margin-right: 50px; margin-top: 35px">
                    <img src="images/home.png" alt="IMG" width="300px" style="margin-top: 35px">
                </p>
            </ul>
        </div>
    </div>

</body>
   <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script src="js/sb.js"></script>
</html>







