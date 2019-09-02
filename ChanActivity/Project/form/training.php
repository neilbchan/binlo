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
?>


<!DOCTYPE html>
<html>
<head>
    <title>Training</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- try.css -->
    <link rel="stylesheet" type="text/css" href="css/try.css?v=1.1">

</head>
<body>

    <br>
    <div class="card-body text-center">
        <h1>Training</h1>
    </div> 
    <br>
    

    <div class="container col-lg-8" style="border-style: solid; border-radius: 25px; border-width: 2px;">
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
                        <label style="padding-right: 5px"><input type="radio" name="qone"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="qone"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="qone"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="qone"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="qone"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Are the printed learning materials clear, up-to-date, and well organized?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="qtwo"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="qtwo"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="qtwo"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="qtwo"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="qtwo"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Do you feel adequately prepared to complete the exercises based on the lecture?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="qthree" > 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="qthree" > 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="qthree" > 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="qthree" > 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="qthree" > 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Do you have enough time to complete each activity without feeling rushed?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="qfour" > 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="qfour" > 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="qfour" > 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="qfour" > 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="qfour" > 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Do the exercises help you to illustrate the lecture topics?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="qfive"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="qfive"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="qfive"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="qfive"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="qfive"> 5</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">Are you satisfied with the training?</th>
                <td>
                    <div class="radio">
                        <label style="padding-right: 5px"><input type="radio" name="qsix"> 1</label>
                        <label style="padding-right: 5px"><input type="radio" name="qsix"> 2</label>
                        <label style="padding-right: 5px"><input type="radio" name="qsix"> 3</label>
                        <label style="padding-right: 5px"><input type="radio" name="qsix"> 4</label>
                        <label style="padding-right: 5px"><input type="radio" name="qsix"> 5</label>
                    </div>
                </td>
            </tr>
          </tbody>
        </table>
    </div>

        <button onclick="goBack()" class="btn btn-secondary btn-lg" style="margin: 20px; margin-left: 250px; padding-left: 50px; padding-right: 50px">Back</button>
            <script>
                function goBack() {
                window.history.back();
            }
            </script>

        <button onclick="goBack()" class="btn btn-secondary btn-lg" style="margin: 20px; margin-left: 540px; padding-left: 40px; padding-right: 40px; background-color: #4CAF50;" type="submit" name="submit">Submit</button>
            <script>
                function goBack() {
                window.history.back();
            }
            </script>
</body>
</html>