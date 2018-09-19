<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['userInput'])){

   		$valuesadded = $_POST['userInput'];

			if (strpos($valuesadded, ';') !== false || strpos($valuesadded, "'") !== false)  {
				$_SESSION['ChallengeLink'] = 'a7-xss.php'; 
				header("Location: ChallengeComplete.php");
		}
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">A1:SQL Injection</h1>
		<span tooltip="Further information on this vulnerability can be viewed by visiting https://www.owasp.org/index.php/Top_10-2017_A1-Injection"
		 tooltip-position="left">
			<span class="badge badge-warning badge-large">Hint</span>
		</span>
	</div>
	<p>Injection flaws, such as SQL, NoSQL, OS, and LDAP injection, occur when untrusted data is sent to an interpreter as part
		of a command or query. The attacker’s hostile data can trick the interpreter into executing unintended commands or accessing
		data without proper authorization.
	</p>

	<h2>Challenge</h2>
	<div class="table-responsive">
		<p>Can you input some sql to reveal a basic sql injection attack on this page?</p>


		<form action="a1-sql-injection.php" method="post">
			<div class="form-group col-md-4">
				<label for="inputSecretCode">Input sql command</label>
				<input type="text" size="40" class="form-control" name="userInput" id="userInput">
			</div>
			<button type="submit" class="btn btn-primary">Execute</button>
		</form>
	</div>
</main>
</div>
</div>

<?php include '_includes/footer.php';

