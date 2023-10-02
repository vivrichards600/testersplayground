<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];

    if($valuesadded == '452464bc-6ed4-41dd-a48c-67af0ff70196') {
      $_SESSION['ChallengeLink'] = 'inspect-7e32aa77-f2a9-4080-a313-78c922260558.php';
      header("Location: ChallengeComplete.php");
    }
  }
;?>


<?php include '_includes/header.php';?>

<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Open Sesame <span tooltip="DevTools is a set of web developer tools built directly into the browser. " tooltip-position="right">
		<img src="assets/img/info.png" alt="info" height="28px"/></span></h1>
		<span tooltip="Open the DevTools window - make sure the window is not un-docked!" tooltip-position="left"><span class="badge badge-warning badge-large">Hint</span></span>
	</div>
		
	


		
		<form action="device-368e1867-1459-4584-b404-349834e064dd.php" method="post">
			
<div id="complete">
	<div class="row">
		<div class="col-3">
			<div class="alert alert-success text-center" role="alert">
				<h4 class="alert-heading">Challenge complete!</h4>
				<p>Good job, you successfully completed the challenge.</p>
				<img src="assets/img/trophy.png" height="160px" />
				<hr>
				<a href="inspect-c6912ea9-3522-4d90-96c1-5c0b34698614.php" class="btn btn-success">Next Challenge</a>
			</div>
				
		</div>
		<div class="col-9">
			<div class="alert alert-info " role="alert">
				<h4 class="alert-heading">Opening DevTools</h4>
				<p>There are many ways to open developer tools within the browser:
					<ul>
						<li>Click the web browser Menu, Select 'More Tools' and then Click on ' Developer tools'</li>
						<li>Right click an area of the web page and then click on 'Inspect'</li>
						<li>Windows/Linux Press Ctrl+Shift+I or F12</li>
						<li>Mac Press Command+Option+I</li>
					</ul>
				</p>
				<p>Once the developer tools window has opened you can then also choose to dock the window within the browser sidebar, bottom or undocked.</p>

			</div>
		</div>
	</div>
</div>



		</form>



</main>

<script src="assets/js/devtools-detect.js"></script>
<script>
    const complete = document.querySelector('#complete');
    complete.style.display = window.devtools.open ? 'block' : 'none';

	window.addEventListener('devtoolschange', function (e) {
		complete.style.display = e.detail.open ? 'block' : 'none';
        if(e.detail.open) {
            localStorage.setItem("open-f453d3ff-b3cc-451a-b7de-b0e3c99e8d52.php", "Complete");
        }
	});
</script>

<?php include '_includes/footer.php';
