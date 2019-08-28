<?php
  if(isset($_POST['submit']))
  {
    session_start();
    $_SESSION['inputName'] = htmlentities($_POST['inputName']);
    $_SESSION['inputEmail'] = htmlentities($_POST['inputEmail']);
    $_SESSION['inputUsername'] = htmlentities($_POST['inputUsername']);
    $_SESSION['inputPassword'] = htmlentities($_POST['inputPassword']);
    $_SESSION['inputComment'] = htmlentities($_POST['inputComment']);
    $_SESSION['inputGender'] = htmlentities($_POST['inputGender']);
    header('Location: secondPage.php');
  }
?>

<!DOCTYPE HTML>  
<html>
<head>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">

	<title>Validation Form</title>
</head>
<style>
  #grad1 {
    height: 800px;
    background-image: linear-gradient(#c7cfbf, #6b8a6e); /* Standard syntax (must be last) */
  }
</style>

<body id ="grad1">  


<div class = "container col-lg-8" style="font-family: Lora;">

<br>
<br>
<div class = "text-center">
  <h2>PHP Form Validation Example</h2>
</div>
<br>
<br>

  <div class="row">
    <div class="col">
      <div class="text-center">
        <img src="Pic\planttwo.png" width ="450px" height="590px">
      </div>
    </div>

<!--     <div class="w-100"></div>
    <div class="col">Column</div>
    <div class="col">Column</div> -->
  <div class="col">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <!-- Name -->
      <div class="form-group row mb-1">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <!-- <div class="col-sm-10"> -->
          <input type="text" class="form-control" name="inputName" placeholder="Full Name" required autofocus>
        <!-- </div> -->
      </div>

      <!-- Email -->
      <div class="form-group row mb-1">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <!-- <div class="col-sm-10"> -->
          <input type="email" class="form-control" name="inputEmail" placeholder="Email" required>
        <!-- </div> -->
      </div>

      <!-- Username -->
      <div class="form-group row mb-1">
        <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
        <!-- <div class="col-sm-10"> -->
          <input type="username" class="form-control" name="inputUsername" placeholder="Username" required>
        <!-- </div> -->
      </div>

      <!-- Password -->
      <div class="form-group row mb-1">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <!-- <div class="col-sm-10"> -->
          <input type="password" class="form-control" name="inputPassword" placeholder="Password" required>
        <!-- </div> -->
      </div>

      <!-- Comment Box -->
      <div class="form-group row mb-1">
        <label for="inputComment" class="col-sm-2 col-form-label">Comment</label>
          <textarea class="form-control" name="inputComment" placeholder="Comment" rows="5" cols="40"></textarea>
      </div>

      <!-- Radio Button -->
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Gender: </legend>

          <!-- Male -->
          <div class="col-sm-10 pr-1">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="inputGender" class="custom-control-input" value="Male" required>
              <label class="custom-control-label" for="customRadioInline1">Male</label>
            </div>

          <!-- Female -->
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="inputGender" class="custom-control-input" value="Female" required>
              <label class="custom-control-label" for="customRadioInline2">Female</label>
            </div>
          </div>
        </div>
      </fieldset>

      <!-- Submit Button -->
      <div class="form-group row text-right">
        <div class="col-sm-12">
          <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
        </div>
      </div>
    </form>
  </div>
  </div>
</div>

</body>
</html>