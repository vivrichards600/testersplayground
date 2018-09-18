<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];

    if($valuesadded == '33fabfd0-14d4-45c7-a933-080bace7da17') {
      $_SESSION['ChallengeLink'] = 'end-ed5d427c-fd53-4f11-b8b0-b2b6c1fabe01.php';
      header("Location: ChallengeComplete.php");
    }
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">I'm hungry!
			<span tooltip="The 'Application' tab allows you to see all resources that are loaded, including IndexedDB or Web SQL databases, local and
		session storage, cookies, Application Cache, images, fonts, and stylesheets." tooltip-position="right">
				<img src="assets/img/info.png" alt="info" height="28px" />
			</span>
		</h1>
		<span tooltip="The application tab contains some tasty cookies!" tooltip-position="left"><span class="badge badge-warning badge-large">Hint</span></span>
	</div>




	<h2>Input the hidden code!</h2>
	<div class="table-responsive">
		<p>The field below requires a hidden code in order to move on to the next challenge. Can you find the hidden code?</p>

		<form action="application-cf590198-e290-4896-a60f-24def18bc101.php" method="post">
			<div class="form-group col-md-4">
				<label for="inputSecretCode">Enter the hidden code</label>
				<input type="text" size="40" class="form-control" name="valuesadded" id="inputSecretCode">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</main>
</div>
</div>


<?php
$cookie_name = "HiddenCode";
$cookie_value = "33fabfd0-14d4-45c7-a933-080bace7da17";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php include '_includes/footer.php';