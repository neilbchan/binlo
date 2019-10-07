<?php
    session_start();

    define('DB_HOST' , 'localhost');
    define('DB_USER' , 'root');
    define('DB_PASS' , '');
    define('DB_NAME',  'project');

    #Create Connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()){
        echo 'Failed to connect to MySQL'.mysqli_connect_errno();
    }

 

    #Check submit
    if (isset($_POST['submit'])) {
        $centerOne = mysqli_real_escape_string($conn, $_POST['cqone']);
        $centerTwo = mysqli_real_escape_string($conn, $_POST['cqtwo']);
        $centerThree = mysqli_real_escape_string($conn, $_POST['cqthree']);
        $centerFour = mysqli_real_escape_string($conn, $_POST['cqfour']);
        $centerFive = mysqli_real_escape_string($conn, $_POST['cqfive']);
        $centerSix = mysqli_real_escape_string($conn, $_POST['cqsix']);
        $course = $_GET['course'];
        $users_id = $_SESSION['users_id'];

    #Query
    $query = "INSERT INTO center (center_course, users_id, evaCenterOne, evaCenterTwo, evaCenterThree, evaCenterFour,     evaCenterFive, evaCenterSix) 
              VALUES ('$course', '$users_id', '$centerOne', '$centerTwo', '$centerThree', '$centerFour', '$centerFive', '$centerSix')";

        if(mysqli_query($conn, $query)) {

            header("Location: ../creativewebdesign.php");

        }else {
            echo 'Error:' .mysqli_error($conn);
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Center</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- try.css -->
    <link rel="stylesheet" type="text/css" href="css/try.css?v=1.1">

            <script>
                function goBack() {
                window.history.back();
            }
            </script>

</head>
<body>

    <br>
    <div class="card-body text-center">
        <h1>Center</h1>
    </div> 
    <br>
    

    <div class="container col-lg-8" style="border-style: solid; border-radius: 25px; border-width: 2px;">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <table class="table table-striped" >
          <thead>
            <tr>
              <th scope="col">Question</th>
             <td scope="col"><b>Rate</b> (Low to High)</td>
            </tr>
          </thead>

          <tbody>
            <tr>
                <th scope="row">Is the house clean?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="cqone" value="1"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqone" value="2"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqone" value="3"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqone" value="4"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqone" value="5"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Is the laboratory clean?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="cqtwo" value="1"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqtwo" value="2"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqtwo" value="3"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqtwo" value="4"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqtwo" value="5"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Is the C.R. clean?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="cqthree" value="1"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqthree" value="2"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqthree" value="3"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqthree" value="4"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqthree" value="5"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Are the computers working properly?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="cqfour" value="1"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfour" value="2"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfour" value="3"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfour" value="4"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfour" value="5"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Are the staff approachable? </th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="cqfive" value="1"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfive" value="2"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfive" value="3"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfive" value="4"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfive" value="5"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Does the house good for learning?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="cqsix" value="1"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqsix" value="2"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqsix" value="3"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqsix" value="4"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqsix" value="5"> 5</label>
                    </div>
                </td>
            </tr>
          </tbody>
        </table>
    </div>

        <button type="button" onclick="goBack()" class="btn btn-secondary btn-lg" style="margin: 20px; margin-left: 250px; padding-left: 50px; padding-right: 50px">Back</button>
        

        <button onclick="goBack()" class="btn btn-secondary btn-lg" style="margin: 20px; margin-left: 540px; padding-left: 40px; padding-right: 40px; background-color: #4CAF50;" type="submit" name="submit">Submit</button>

        </form>
</body>
</html>