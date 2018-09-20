<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['userInput'])){

   		$valuesadded = $_POST['userInput'];
		$str = strtolower($valuesadded);
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
		<span tooltip="Can you input a basic sql injection attack in the below form?"
		 tooltip-position="left">
			<span class="badge badge-warning badge-large">Hint</span>
		</span>
	</div>
	<p>Injection flaws, such as SQL, NoSQL, OS, and LDAP injection, occur when untrusted data is sent to an interpreter as part
		of a command or query. The attacker’s hostile data can trick the interpreter into executing unintended commands or accessing
		data without proper authorization.
	</p>
	<p>Further information on this vulnerability can be viewed by visiting the official <a href="https://www.owasp.org/images/7/72/OWASP_Top_10-2017_%28en%29.pdf.pdf" target="_blank">OWASP top 10</a>.</p>
<hr>

	<div class="table-responsive">
		<h2>Add a new computer</h2>
			
				<form action="a1-sql-injection.php" method="post">
					<div class="form-group col-md-4">
						<label for="userInput">Computer name</label>
						<input type="text" size="40" class="form-control" name="userInput" id="userInput">
					</div>
					<button type="submit" class="btn btn-primary">Save</button>
				</form>
	</div>
</main>
</div>
</div>

<?php include '_includes/footer.php';

