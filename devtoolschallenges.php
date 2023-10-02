<?php include '_includes/header.php';  	
	$_SESSION['ChallengeLink'] = ''; 
    $_SESSION['ChallengeHeading'] = ''; 
    $_SESSION['ChallengeFeedback'] = ''; ?>
	
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Chrome DevTools</h1>
	</div>

	<p>Below you can find a link which will take you directly to the chosen DevTools challenge.

		<h2>Challenges</h2>
		<div class="table-responsive">
			<p>
				<ul class="list-group">
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href="open-f453d3ff-b3cc-451a-b7de-b0e3c99e8d52.php">Open Sesame</a>
                        <span id="open-f453d3ff-b3cc-451a-b7de-b0e3c99e8d52.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
					</li>				
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href="inspect-c6912ea9-3522-4d90-96c1-5c0b34698614.php">Inspector gadget</a>
                        <span id="inspect-c6912ea9-3522-4d90-96c1-5c0b34698614.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href="inspect-7e32aa77-f2a9-4080-a313-78c922260558.php">Style is everything</a>
                        <span id="inspect-7e32aa77-f2a9-4080-a313-78c922260558.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href="device-368e1867-1459-4584-b404-349834e064dd.php">Be mobile</a>
                        <span id="device-368e1867-1459-4584-b404-349834e064dd.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href="elements-0a368ead-6226-4250-87ff-5c2546aa71a5.php">Validator</a>
                        <span id="elements-0a368ead-6226-4250-87ff-5c2546aa71a5.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href="console-5d63b2b2-3822-4a01-8197-acd8aa7e1343.php">404 (Not Found)</a>
                        <span id="console-5d63b2b2-3822-4a01-8197-acd8aa7e1343.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href="sources-1c7dc822-c3ba-4a32-814a-75c46f593540.php">Sourcerer</a>
                        <span id="sources-1c7dc822-c3ba-4a32-814a-75c46f593540.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href="network-f20aef14-f2c5-4b07-8237-89f51a85f03a.php">Hidden within</a>
                        <span id="network-f20aef14-f2c5-4b07-8237-89f51a85f03a.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href="network-825e28bc-8e1a-4386-9cbb-048c3291a60d.php">Slow down</a>
                        <span id="network-825e28bc-8e1a-4386-9cbb-048c3291a60d.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href="network-546b4156-78c7-4542-b72b-0c79adb0bc01.php">Image is everything</a>
                        <span id="network-546b4156-78c7-4542-b72b-0c79adb0bc01.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href="application-cf590198-e290-4896-a60f-24def18bc101.php">I'm hungry!</a>
                        <span id="application-cf590198-e290-4896-a60f-24def18bc101.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
					</li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="application-02e05778-28e7-483b-b5c1-9054349b0b8b.php">Storage hunter</a>
                        <span id="application-02e05778-28e7-483b-b5c1-9054349b0b8b.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="senses-52b3e9ed-db2e-415c-b1ee-7c23f234ea02.php">Hello from Tokyo</a>
                        <span id="senses-52b3e9ed-db2e-415c-b1ee-7c23f234ea02.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="network-e33730f6-2df2-44c3-816a-c4a61474dd66.php">iUser</a>
                        <span id="network-e33730f6-2df2-44c3-816a-c4a61474dd66.php" class="badge badge-info badge-pill" style="display:none">Complete</span>
                    </li>
				</ul>
			</p>

		</div>
</main>
</div>
</div>
<script>
    const listOfChallenges = [
        "open-f453d3ff-b3cc-451a-b7de-b0e3c99e8d52.php",
        "inspect-c6912ea9-3522-4d90-96c1-5c0b34698614.php",
        "inspect-7e32aa77-f2a9-4080-a313-78c922260558.php",
        "device-368e1867-1459-4584-b404-349834e064dd.php",
        "elements-0a368ead-6226-4250-87ff-5c2546aa71a5.php",
        "console-5d63b2b2-3822-4a01-8197-acd8aa7e1343.php",
        "sources-1c7dc822-c3ba-4a32-814a-75c46f593540.php",
        "network-f20aef14-f2c5-4b07-8237-89f51a85f03a.php",
        "network-825e28bc-8e1a-4386-9cbb-048c3291a60d.php",
        "network-546b4156-78c7-4542-b72b-0c79adb0bc01.php",
        "application-cf590198-e290-4896-a60f-24def18bc101.php",
        "application-02e05778-28e7-483b-b5c1-9054349b0b8b.php",
        "senses-52b3e9ed-db2e-415c-b1ee-7c23f234ea02.php",
        "network-e33730f6-2df2-44c3-816a-c4a61474dd66.php"
    ];
    const arrayLength = listOfChallenges.length;
    for (let i = 0; i < arrayLength; i++) {
        if(listOfChallenges[i] in localStorage) {
            document.getElementById(listOfChallenges[i]).style.display = "block";
        }
    }
</script>
<?php include '_includes/footer.php';