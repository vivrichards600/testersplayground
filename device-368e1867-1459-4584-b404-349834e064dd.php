<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Be mobile
			<span tooltip="(Windows/Linux Ctrl+Shift+M)(Mac Command+Shift+M). The device tab gives you the ability to look at a webpage on different size devices."
			 tooltip-position="right">
				<img src="assets/img/info.png" alt="info" height="28px" />
			</span>
		</h1>
		<span tooltip="Chrome DevTools can simulate mobile device rendering - have you googled to see how?" tooltip-position="left"><span class="badge badge-warning badge-large">Hint</span></span>
	</div>

	<p>How does this page look on a simulated mobile device?</p>

		<div class="table-responsive mobileShow">

			<form action="device-368e1867-1459-4584-b404-349834e064dd.php" method="post">
				<div class="alert alert-warning" role="alert">
					<h4 class="alert-heading">Reminder!</h4>
					<p>Remember to exit device mode before moving on to the next challenge.</p>
				</div>

				<div class="alert alert-success" role="alert">
					<h4 class="alert-heading">Challenge complete!</h4>
					<p>Good job, you successfully completed the challenge.</p>
					<img src="assets/img/trophy.png" height="160px" />
					<hr>
					<a href="elements-0a368ead-6226-4250-87ff-5c2546aa71a5.php" class="btn btn-success">Next Challenge</a>
				</div>

			</form>


		</div>
</main>
</div>
</div>
<script>
    let mql = window.matchMedia("(max-width: 480px)");
    mql.onchange = (e) => {
        if (e.matches) {
            /* the viewport is 480 */
            localStorage.setItem("device-368e1867-1459-4584-b404-349834e064dd.php", "Complete");
        }
    };
</script>
<?php include '_includes/footer.php';
