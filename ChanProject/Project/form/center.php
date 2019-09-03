<?php
    define('DB_HOST' , 'localhost');
    define('DB_USER' , 'root');
    define('DB_PASS' , '');
    define('DB_NAME',  'project');
?>

<?php
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

    #Query
    $query = "INSERT INTO evaluation (evaCenterOne, evaCenterTwo, evaCenterThree, evaCenterFour, evaCenterFive, evaCenterSix) 
              VALUES ('$centerOne', '$centerTwo', '$centerThree', '$centerFour', '$centerFive', '$centerSix')";

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
                        <label style="padding-right: 5px"><input type="radio" name="cqone"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqone"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqone"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqone"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqone"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Is the laboratory clean?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="cqtwo"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqtwo"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqtwo"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqtwo"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqtwo"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Is the C.R. clean?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="cqthree" > 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqthree" > 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqthree" > 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqthree" > 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqthree" > 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Are the computers working properly?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="cqfour" > 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfour" > 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfour" > 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfour" > 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfour" > 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Are the staff approachable? </th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="cqfive"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfive"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfive"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfive"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqfive"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Does the house good for learning?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="cqsix"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqsix"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqsix"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqsix"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="cqsix"> 5</label>
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