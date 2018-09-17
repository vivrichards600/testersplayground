<?php session_start();
$challengeUrl = "";
if ( isset( $_SESSION['ChallengeLink'] ) ) {  
    $challengeUrl = $_SESSION['ChallengeLink']; 
} else {
    // error, no challenge url received
    //return user back to where they came from!
}
?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="alert alert-success" role="alert">
		<h4 class="alert-heading">Challenge complete!</h4>
		<p>Good job, you successfully completed the challenge.</p>
		<img src="assets/img/trophy.png" height="160px"/>
		<hr>
		<a href='<?php echo $challengeUrl;?>' class='btn btn-success'>Next challenge 🡪</a>
	</div>

</main>
</div>
</div>
<?php include '_includes/footer.php';