<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];

    if($valuesadded == '113b840a-2a65-45c5-913e-d21dee774b79') {
      $_SESSION['ChallengeLink'] = 'device-368e1867-1459-4584-b404-349834e064dd.php';
      header("Location: ChallengeComplete.php");
    }
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Style is everything <span tooltip="(Windows/Linux Ctrl+Shift+C)(Mac Command+Option+C). The 'Inspect' tab enables you to select an element within the browser and have it's html markup selected in the Elements
		tab as you hover." tooltip-position="right"><img src="assets/img/info.png" alt="info" height="28px"/></span></h1>
		<span tooltip="Is there text on the page which is really, really, small?" tooltip-position="left"><span class="badge badge-warning badge-large">Hint</span></span>
	</div>


	<h2>Input the hidden code!</h2>
	<div class="table-responsive">
		<p>The field below requires a hidden code in order to move on to the next challenge. Can you find the secret code by altering the css?</p>

		<div style="font-size:1px;">
			<p>Hidden code: 113b840a-2a65-45c5-913e-d21dee774b79</p>
		</div>

		<form action="inspect-7e32aa77-f2a9-4080-a313-78c922260558.php" method="post">
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

<?php include '_includes/footer.php';

