<?php session_start();

// if ($_SERVER['REQUEST_METHOD'] == 'POST')
//   if (isset($_POST['valuesadded'])){

//     $valuesadded = $_POST['valuesadded'];

//     if($valuesadded == 'bebc0dfa-b67a-429e-a98b-233e26bfd68f') {
// 		$_SESSION['ChallengeLink'] = 'application-cf590198-e290-4896-a60f-24def18bc101.php';
//       header("Location: ChallengeComplete.php");
//     }
//   }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Slow down
			<span tooltip="The 'Network' tab records information about each network operation on a page, including detailed timing data, HTTP request and response headers, cookies, and more."
			 tooltip-position="right">
				<img src="assets/img/info.png" alt="info" height="28px" />
			</span>
		</h1>
		<span tooltip="Network Conditioning is turned on through the Network tab. Select a connection from the dropdown to apply network throttling and latency manipulation." tooltip-position="left"><span class="badge badge-warning badge-large">Hint</span></span>
	</div>


	<div class="table-responsive">
		<p>Can you change the network to simulate being on a slow 3G network in order to complete the challenge?</p>

		<div id="network3g">
			<div class="alert alert-warning" role="alert">
				<h4 class="alert-heading">Reminder!</h4>
				<p>Remember to un-throttle your browser network within the 'Network' tab after you have moved to the next challenge.</p>
			</div>

			<div class="alert alert-success" role="alert">
				<h4 class="alert-heading">Challenge complete!</h4>
				<p>Good job, you successfully completed the challenge.</p>
				<img src="assets/img/trophy.png" height="160px" />
				<hr>
				<a href="application-cf590198-e290-4896-a60f-24def18bc101.php" class="btn btn-success">Next Challenge</a>
			</div>
		</div>

		<!-- <form action="network-825e28bc-8e1a-4386-9cbb-048c3291a60d.php" method="post">
			<div class="form-group col-md-4">
				<label for="inputSecretCode">Enter the hidden code</label>
				<input type="text" size="40" class="form-control" name="valuesadded" id="inputSecretCode">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form> -->
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

