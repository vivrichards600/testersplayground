<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];

    if($valuesadded == '7d74e2d2-fa15-4d12-bae1-1261501d02fa') {
      $_SESSION['ChallengeLink'] = 'senses-52b3e9ed-db2e-415c-b1ee-7c23f234ea02.php';
      header("Location: ChallengeComplete.php");
    }
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Storage hunter
			<span tooltip="The 'Application' tab allows you to see all resources that are loaded, including IndexedDB or Web SQL databases, local and
		session storage, cookies, Application Cache, images, fonts, and stylesheets." tooltip-position="right">
				<img src="assets/img/info.png" alt="info" height="28px" />
			</span>
		</h1>
		<span tooltip="The application tab contains local database storage!" tooltip-position="left">
			<span class="badge badge-warning badge-large">Hint</span>
		</span>
	</div>




	<h2>Input the hidden code!</h2>
	<div class="table-responsive">
		<p>The field below requires a hidden code in order to move on to the next challenge. Can you find the hidden code?</p>

		<form action="application-02e05778-28e7-483b-b5c1-9054349b0b8b.php" method="post">
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

<script>
	var db = openDatabase('testersplayground', '1.0', 'Testers playground database', 2 * 1024 * 1024);
	db.transaction(function(tx) {
		tx.executeSql('CREATE TABLE IF NOT EXISTS SecretCode (id unique, text)');
		tx.executeSql('INSERT INTO SecretCode (id, text) VALUES (1, "7d74e2d2-fa15-4d12-bae1-1261501d02fa")');
	});


</script>

<?php include '_includes/footer.php';