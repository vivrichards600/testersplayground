<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['userInput'])){

   		$valuesadded = $_POST['userInput'];

			if (strpos($valuesadded, '<script>') !== false && strpos($valuesadded, "</script>") !== false)  {
				$_SESSION['ChallengeLink'] = 'a2-broken-authentication.php'; 
				header("Location: ChallengeComplete.php");
		}
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">A7 – Cross-Site Scripting (XSS)</h1>
		<span tooltip="Further information on this vulnerability can be viewed by visiting https://www.owasp.org/index.php/Top_10-2017_A1-Injection"
		 tooltip-position="left">
			<span class="badge badge-warning badge-large">Hint</span>
		</span>
		
	</div>
<p>XSS flaws occur whenever an application includes untrusted data in a new web page without proper validation or escaping,
			or updates an existing web page with user-supplied data using a browser API that can create HTML or JavaScript. XSS allows
			attackers to execute scripts in the victim’s browser which can hijack user sessions, deface web sites, or redirect the
			user to malicious sites.</p>

	<h2>Challenge</h2>
	<div class="table-responsive">
		<p>Can you input a script to reveal a basic xss attack on this page?</p>


		<form action="a7-xss.php" method="post">
			<div class="form-group col-md-4">
				<label for="inputSecretCode">Input xss command</label>
				<input type="text" size="40" class="form-control" name="userInput" id="userInput">
			</div>
			<button type="submit" class="btn btn-primary">Run</button>
		</form>
	</div>
</main>
</div>
</div>

<?php include '_includes/footer.php';

