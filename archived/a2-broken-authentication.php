<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['userInput'])){

   		$valuesadded = $_POST['userInput'];

			if ($valuesadded == "test" || $valuesadded == "qwerty" || $valuesadded == "123456" )  {
				$_SESSION['ChallengeLink'] = 'owasp-end.php'; 
				header("Location: ChallengeComplete.php");
		}
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">A2:Broken Authentication</h1>
		<span tooltip="An application can become vulnerable if it permits default, weak, or well-known passwords." tooltip-position="left">
			<span class="badge badge-warning badge-large">Hint</span>
		</span>

	</div>
	<p>Application functions related to authentication and session management are often implemented incorrectly, allowing attackers
		to compromise passwords, keys, or session tokens, or to exploit other implementation flaws to assume other users’ identities
		temporarily or permanently.
	</p>
	<p>Further information on this vulnerability can be viewed by visiting the official
		<a href="https://www.owasp.org/images/7/72/OWASP_Top_10-2017_%28en%29.pdf.pdf"
		 target="_blank">OWASP top 10</a>.</p>

	<hr>
	<div class="table-responsive">
		<h2>User Login</h2>

		<form action="testersplayground/archived/a2-broken-authentication.php" method="post">
			<div class="form-group col-md-4">
				<label for="usernameInput">Username</label>
				<input type="text" size="40" class="form-control" name="userInput" id="usernameInput">
			</div>
			<div class="form-group col-md-4">
				<label for="userInput">Password</label>
				<input type="password" size="40" class="form-control" name="userInput" id="userInput">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>


</main>
</div>
</div>
<?php include '_includes/footer.php';

