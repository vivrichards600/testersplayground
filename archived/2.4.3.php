<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['accessibility'])){

   		$valuesadded = $_POST['accessibility'];
		$str = strtolower($valuesadded);
	
			if ($str == "tabs")  {
				$_SESSION['ChallengeLink'] = 'end-6ff47aac-89b1-4a3c-82fc-9000006c6387.php'; 
				header("Location: ChallengeComplete.php");
		}
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Let's have some order!</h1>
		<span tooltip="Try and navigate this page without using a touch pad or mouse. Notice anything odd?" tooltip-position="left">
			<span class="badge badge-warning badge-large">Hint</span>
		</span>
	</div>
	<p>Your users need to find their way around your website in a sequential and meaningful order. You can control this with the
		‘focus order’ of your website.
	</p>
	<hr>

	<div class="table-responsive pt-3 px-4">
		<h2>Add a new computer</h2>

		<div class="form-group col-md-4">
			<label for="computerName">Computer name</label>
			<input type="text" size="40" tabindex="4" class="form-control" name="computerName" id="computerName">
		</div>
		<div class="form-group col-md-4">
			<label for="ram">RAM</label>
			<input type="text" size="40" tabindex="1" class="form-control" name="ram" id="ram">
		</div>
		<div class="form-group col-md-4">
			<label for="processor">Processor</label>
			<input type="text" size="40" tabindex="7" class="form-control" name="processor" id="processor">
		</div>
		<div class="form-group col-md-4">
			<label for="battery">Battery life</label>
			<input type="text" size="40" tabindex="2" class="form-control" name="battery" id="battery">
		</div>
		
	</div>

	<div class="table-responsive pt-3 px-4 alert alert-success">
	<h2>Please select the correct answer</h2>
	<p>What is wrong with the form above?</p>
	
<form action="testersplayground/archived/2.4.3.php" method="post">
<div class="form-group col-md-4">
  <input type="radio" name="accessibility" value="casing" checked> Text casing is wrong<br>
  <input type="radio" name="accessibility" value="styles"> Input styling isn't right<br>
  <input type="radio" name="accessibility" value="tabs"> Tab ordering incorrect
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



	</div>
</main>
</div>
</div>



<?php include '_includes/footer.php';

