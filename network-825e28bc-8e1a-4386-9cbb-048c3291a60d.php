<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];

    if($valuesadded == 'bebc0dfa-b67a-429e-a98b-233e26bfd68f') {
		$_SESSION['ChallengeLink'] = 'application-cf590198-e290-4896-a60f-24def18bc101.php';
      header("Location: ChallengeComplete.php");
    }
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Slow down<span tooltip="The 'Network' tab records information about each network operation on a page, including detailed timing data, HTTP request and response headers, cookies, and more." tooltip-position="right"><img src="assets/img/info.png" height="28px"/></span></h1>      
      </div>


	<h2>Input the hidden code!</h2>
	<div class="table-responsive">
		<p>The field below requires a hidden code in order to move on to the next challenge. Can you change the network to simulate
			being on a slow 3g network in order to find the secret code?</p>

		<div id="network3g">
			<div class="alert alert-warning" role="alert">
					<h4 class="alert-heading">Reminder!</h4>
					<p>Remember to un-throttle your browser network within the 'Network' tab before moving on to the next challenge.</p>
				</div>
			<p>Hidden code: bebc0dfa-b67a-429e-a98b-233e26bfd68f</p>
		</div>

		<form action="network-825e28bc-8e1a-4386-9cbb-048c3291a60d.php" method="post">
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
	function status() {
		var threeGDiv = document.getElementById('network3g');
		threeGDiv.style.display = 'none';

		if (navigator.connection.effectiveType == "2g") {
			threeGDiv.style.display = 'block';
		}

		setTimeout(status, 1000);
	}

	status();
</script>
<?php include '_includes/footer.php';

