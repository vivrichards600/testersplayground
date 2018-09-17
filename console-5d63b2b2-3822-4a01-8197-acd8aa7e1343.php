<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];

    if($valuesadded == '184ebfa4-52d7-406b-aeaa-cba4bd5b78f3.js') {
      $_SESSION['ChallengeLink'] = 'sources-1c7dc822-c3ba-4a32-814a-75c46f593540.php';
      header("Location: ChallengeComplete.php");
    }
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Challenge Four</h1>
	</div>
	<h1 class="h2">Console
		<span class="shortcuts">(Windows/Linux Ctrl+Shift+J)(Mac Command+Option+J)</span>
	</h1>
	<p>The 'Console' tab enables you to stack redundant messages or display them on their own lines, clear or persist output or
		save it to a file, filter output, and access additional Console settings.</p>

	<h2>Input the missing asset name!</h2>
	<div class="table-responsive">
		<p>The field below requires a broken asset file name in order to move on to the next challenge. Can you find it?</p>

		<form action="console-5d63b2b2-3822-4a01-8197-acd8aa7e1343.php" method="post">
			Enter the missing asset filename *:
			<input type="text" size="40" class="inputbox" name="valuesadded">
			<input type="submit">
		</form>

	</div>
</main>
</div>
</div>
<script src="184ebfa4-52d7-406b-aeaa-cba4bd5b78f3.js" />
<!--add this value in the secret code field to validate that you have looked at the page source : 452464bc-6ed4-41dd-a48c-67af0ff70196 -->

<?php include '_includes/footer.php';?>