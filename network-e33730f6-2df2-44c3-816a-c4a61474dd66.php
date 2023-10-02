<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
    if (isset($_POST['valuesadded'])){

        $valuesadded = $_POST['valuesadded'];

        if($valuesadded == '7d74e2d2-fa15-4d12-bae1-1261501d02fa') {
            $_SESSION['ChallengeLink'] = 'end-ed5d427c-fd53-4f11-b8b0-b2b6c1fabe01.php';
            $_SESSION['CompletedChallengeLink'] = 'network-e33730f6-2df2-44c3-816a-c4a61474dd66.php';
            header("Location: ChallengeComplete.php");
        }
    }
;?>

<?php include '_includes/header.php';?>

    <main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">iUser<span tooltip="(Windows/Linux Ctrl+Shift+P)(Mac Command+Shift+P), type `Network conditions`, and press Enter. The 'Network conditions' tab gives users the ability to apply network throttling as well as set the user agent." tooltip-position="right">
		<img src="assets/img/info.png" alt="info" height="28px"/></span></h1>
            <span tooltip="What happens if you change the user agent?" tooltip-position="left"><span class="badge badge-warning badge-large">Hint</span></span>
        </div>

        <form action="end-ed5d427c-fd53-4f11-b8b0-b2b6c1fabe01.php" method="post">

            <div id="complete">
                <div class="row">
                    <div class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Challenge complete!</h4>
                            <p>Good job, you successfully completed the challenge.</p>
                            <img src="assets/img/trophy.png" height="160px" />
                            <hr>
                            <a href="end-ed5d427c-fd53-4f11-b8b0-b2b6c1fabe01.php" class="btn btn-success">Next Challenge</a>
                        </div>

                    </div>
                </div>
            </div>



        </form>



    </main>




    <script>
        function refresh() {
            if (navigator.userAgent.includes("iPad")){
                localStorage.setItem("network-e33730f6-2df2-44c3-816a-c4a61474dd66.php", "Complete");
                complete.style.display = 'block';
            } else {
                complete.style.display = 'none';
            }
            setTimeout(refresh, 500);
        }

        setTimeout(refresh, 500);
    </script>

<?php include '_includes/footer.php';