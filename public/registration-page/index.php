<?php
	require "../config/config.php";

  //Registration codes
  $error = error_reporting(E_ALL);

  $fname = "";
  $sname = "";
  $edu_level = "";
	$email = "";
  $number = "";
	$error = array();

  if (isset($_POST['reg_button'])) {
    //First name
    $fname = strip_tags($_POST['f_name']);
  	$fname = str_replace(' ', '', $fname);
  	$fname = ucfirst(strtolower($fname));

    //Second name
    $sname = strip_tags($_POST['s_name']);
  	$sname = str_replace(' ', '', $sname);
  	$sname = ucfirst(strtolower($sname));

		//email
		$email = strip_tags($_POST['email']);
	  $email = str_replace(' ', '', $email);
	  $email = ucfirst(strtolower($email));

    //Education Level
    $edu_level = strip_tags($_POST['edu_level']);
  	$edu_level = str_replace(' ', '', $edu_level);
  	$edu_level = ucfirst(strtolower($edu_level));

    //Number
    $number = strip_tags($_POST['number']);
    $number = str_replace(' ', '', $number);
    
    $query = mysqli_query($connection, "INSERT INTO coders VALUES('', '$fname', '$sname', '$email', '$edu_level', '$number' ) " );

		array_push($error,"<span style='color:rgb(21, 239, 239);'>Thank you for registering!</span><br>");
  }
 ?>

<!doctype html>
<html>
  <head>
		<title>Talent House</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" >
  </head>
  <body>
    <div class="home-wrapper">
			<h1 class="heading">TALENT HOUSE</h1>
			<h3 class="sub-heading">Welcome to Talent House Please fill out the form below to Register !</h3>
        <div class="home-wrapper-pg">
            <div class="landing-main-pg">
                <div class="landing-sub-pg">
                  <form action="index.php" method="POST">
                    <input type="text" name="f_name" placeholder="First Name" required>
                    <input type="text" name="s_name" placeholder="Last Name" required>
										<input type="email" name="email" placeholder="Email" required>
										<select name="edu_level" class="select-level" value="" required>
											<option disabled selected>--Educational Level--</option>
											<option value="Tertiary">Tertiary</option>
											<option value="Senior High School">Senior High School</option>
											<option value="Junior High School">Junior High School</option>
											<option value="Self Education">Self Education</option>
											<option value="Education of Life">Education of Life</option>
										</select>
                    <input type="text" name="number" placeholder="+233 | Phone Number" required>
                    <input type="submit" name="reg_button" value="Register">
										<?php if(in_array("<span style='color:rgb(21, 239, 239);'>Thank you for registering!</span><br>", $error)){
													echo "<span style='color:rgb(21, 239, 239); font-size: 20px;'>". $fname ." Thank you for registering!</span><br>" ;
												}elseif (in_array("<span style='color:rgb(21, 239, 239);'>Sorry your registration didn't go through!</span><br>", $error)) {
													echo "<span style='color:rgb(21, 239, 239);'>Sorry your registration didn't go through!</span><br>" ;
												}
										 ?>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
