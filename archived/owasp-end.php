<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['userInput'])){

   		$valuesadded = $_POST['userInput'];

			if (strpos($valuesadded, ';') !== false || strpos($valuesadded, "'") !== false)  {
				$_SESSION['ChallengeLink'] = 'a2-broken-authentication.php'; 
				header("Location: ChallengeComplete.php");
		}
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
<div class="alert alert-success" role="alert">
		<h4 class="alert-heading">That's all folks!</h4>
		<p>Good job, you successfully completed all the challenges.</p>
    <p>You can find out more about the OWASP (Open Web Application Security Project) by visiting the official <a target="_blank" href="https://www.owasp.org/images/7/72/OWASP_Top_10-2017_%28en%29.pdf.pdf"> OWASP top 10</a> page.</p>
		<p><img src="testersplayground/assets/img/trophy.png" height="160px" alt="trophy" /></p>
		<hr>
    <p>More challenges will be added soon. <a href="testersplayground/archived/owaspchallenges.php">Click here to view a full list of the OWASP challenges</a>.</p>
	
	</div>



	

</main>
</div>
</div>

<?php include '_includes/footer.php';

