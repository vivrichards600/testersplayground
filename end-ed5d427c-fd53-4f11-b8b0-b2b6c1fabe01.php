<?php 
$usermessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];
    $usermessage = "";

    if($valuesadded == '5e3e6b89-a0d8-416b-91a2-e42cbf056ff1') {
      // job done!
      $usermessage = "<p><br><a href='end-ed5d427c-fd53-4f11-b8b0-b2b6c1fabe01.php' class='btn btn-success'>Next Challenge</a></p>";
    }
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	
<div class="alert alert-success" role="alert">
		<h4 class="alert-heading">That's all folks!</h4>
		<p>Good job, you successfully completed all the challenges. Please check back soon as I will be adding more!</p>
    <p>You can find out more about Chrome DevTools by visiting the official page. <a href="https://developers.google.com/web/tools/chrome-devtools/">Chrome DevTools Homepage</a>.
		<img src="assets/img/trophy.png" height="160px" alt="trophy" />
		<hr>
		<p>I'd love your feedback and/or ideas which you can send to <a href="mailto:hello@vivrichards.co.uk">hello@vivrichards.co.uk</p>
	</div>

</main>
</div>
</div>

<?php include '_includes/footer.php';?>

<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
