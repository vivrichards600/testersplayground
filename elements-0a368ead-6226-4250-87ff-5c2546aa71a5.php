<?php session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];
   
    if(empty($valuesadded)) {
      //do nowt
    } else {
      if (!ctype_digit($valuesadded)) {
        $_SESSION['ChallengeLink'] = 'console-5d63b2b2-3822-4a01-8197-acd8aa7e1343.php';
        header("Location: ChallengeComplete.php");
      }
    }
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Challenge Three</h1>
	</div>


	<h1 class="h2">Elements
		<span class="shortcuts">(Windows/Linux Ctrl+Shift+C)(Mac Command+Shift+C)</span>
	</h1>
	<p>The 'Elements' tab give users the ability to look at the html/css for the rendered page.</p>
	<p>As you hover over the page source you can see the element(s) being selected.</p>

	<h2>Bypass html 5 validations</h2>
	<div class="table-responsive">
		<p>The field below has
			<a href="http://www.the-art-of-web.com/html/html5-form-validation/" target="_blank">html5</a> validation. Can you pass the validation and add something that is not a number?</p>





		<form action="elements-0a368ead-6226-4250-87ff-5c2546aa71a5.php" method="post">
			<div class="form-group col-md-4">
				<label for="inputSecretCode">Enter a number value</label>
				<input type="number" size="15" class="form-control" name="valuesadded" id="inputSecretCode">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>
</main>
</div>
</div>
<?php include '_includes/footer.php';