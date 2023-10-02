<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];

    if($valuesadded == '452464bc-6ed4-41dd-a48c-67af0ff70196') {
      $_SESSION['ChallengeLink'] = 'inspect-7e32aa77-f2a9-4080-a313-78c922260558.php';
      $_SESSION['CompletedChallengeLink'] = 'inspect-c6912ea9-3522-4d90-96c1-5c0b34698614.php';
      header("Location: ChallengeComplete.php");
    }
  }
;?>


<?php include '_includes/header.php';?>

<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Inspector gadget <span tooltip="(Windows/Linux Ctrl+Shift+C)(Mac Command+Option+C). The 'Inspect' tab enables you to select an element within the browser and have it's html markup selected in the Elements
		tab as you hover." tooltip-position="right"><img src="assets/img/info.png" alt="info" height="28px"/></span></h1>
		<span tooltip="Look for a hidden field!" tooltip-position="left"><span class="badge badge-warning badge-large">Hint</span></span>
	</div>

	<h2>Input the hidden code!</h2>
	<div class="table-responsive">
		<p>The field below requires a hidden code in order to move on to the next challenge. Can you find the secret code?</p>

		<form action="inspect-c6912ea9-3522-4d90-96c1-5c0b34698614.php" method="post">
			<div class="form-group col-md-4">
				<label for="inputSecretCode">Enter the hidden code</label>
				<input type="text" size="40" class="form-control" name="valuesadded" id="inputSecretCode">
				<input type="hidden" name="hiddencode" value="452464bc-6ed4-41dd-a48c-67af0ff70196">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</main>
</div>
</div>

<?php include '_includes/footer.php';
