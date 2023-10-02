<?php session_start();
$challengeHeading = "";
$challengeFeedback = "";
$challengeUrl = "";

$cookie_name = 'HiddenCode';
unset($_COOKIE[$cookie_name]);
// empty value and expiration one hour before
$res = setcookie($cookie_name, '', time() - 3600);

if ( isset( $_SESSION['ChallengeLink'] ) ) {  
    $challengeUrl = $_SESSION['ChallengeLink'];
    $completedChallengeURL = $_SESSION['CompletedChallengeLink'];
    echo "<script>localStorage.setItem('$completedChallengeURL', 'Complete');</script>";

} else {
    // error, no challenge url received
    //return user back to start page!
	header('Location: index.php');
}
?>



<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">

	<div class="alert alert-success" role="alert">
		<h4 class="alert-heading">Challenge complete!</h4>
		<p>Good job, you successfully completed the challenge.</p>
		<img src="assets/img/trophy.png" height="160px" alt="trophy"/>
		<hr>
		<a href='<?php echo $challengeUrl;?>' class='btn btn-success'>Next challenge</a>
	</div>


</main>
</div>
</div>

<?php include '_includes/footer.php';
