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
        $trainingOne = mysqli_real_escape_string($conn, $_POST['tqone']);
        $trainingTwo = mysqli_real_escape_string($conn, $_POST['tqtwo']);
        $trainingThree = mysqli_real_escape_string($conn, $_POST['tqthree']);
        $trainingFour = mysqli_real_escape_string($conn, $_POST['tqfour']);
        $trainingFive = mysqli_real_escape_string($conn, $_POST['tqfive']);
        $trainingSix = mysqli_real_escape_string($conn, $_POST['tqsix']);

    #Query
    $query = "INSERT INTO evaluation (evaTrainingOne, evaTrainingTwo, evaTrainingThree, evaTrainingFour, evaTrainingFive, evaTrainingSix) 
              VALUES ('$trainingOne', '$trainingTwo', '$trainingThree', '$trainingFour', '$trainingFive', '$trainingSix')";

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
    <title>Training</title>

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
        <h1>Training</h1>
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
                <th scope="row">Are the materials and equipment available before s/he starts the class?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="tqone" value="1"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqone" value="2"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqone" value="3"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqone" value="4"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqone" value="5"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Are the printed learning materials clear, up-to-date, and well organized?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="tqtwo" value="1"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqtwo" value="2"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqtwo" value="3"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqtwo" value="4"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqtwo" value="5"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Do you feel adequately prepared to complete the exercises based on the lecture?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="tqthree" value="1"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqthree" value="2"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqthree" value="3"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqthree" value="4"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqthree" value="5"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Do you have enough time to complete each activity without feeling rushed?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="tqfour" value="1"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqfour" value="2"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqfour" value="3"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqfour" value="4"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqfour" value="5"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Do the exercises help you to illustrate the lecture topics?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="tqfive" value="1"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqfive" value="2"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqfive" value="3"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqfive" value="4"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqfive" value="5"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Are you satisfied with the training?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="tqsix" value="1"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqsix" value="2"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqsix" value="3"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqsix" value="4"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="tqsix" value="5"> 5</label>
                    </div>
                </td>
            </tr>
          </tbody>
        </table>
    </div>

            <button type="button" onclick="goBack()" class="btn btn-secondary btn-lg" style="margin: 20px; margin-left: 250px; padding-left: 50px; padding-right: 50px">Back</button>

            <button class="btn btn-secondary btn-lg" style="margin: 20px; margin-left: 540px; padding-left: 40px; padding-right: 40px; background-color: #4CAF50;" type="submit" name="submit">Submit</button>
        </form>
</body>
</html>