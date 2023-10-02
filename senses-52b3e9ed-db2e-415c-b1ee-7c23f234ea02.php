<?php session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
    if (isset($_POST['valuesadded'])){

        $valuesadded = $_POST['valuesadded'];

        if($valuesadded == 'c0dfa570-bce6-4642-8dee-7daef956efd8') {
            $_SESSION['ChallengeLink'] = 'end-ed5d427c-fd53-4f11-b8b0-b2b6c1fabe01.php';
            header("Location: ChallengeComplete.php");
        }
    }
;?>

<?php include '_includes/header.php';?>

    <main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Hello from Tokyo!<span tooltip="(Windows/Linux Ctrl+Shift+P)(Mac Command+Shift+P), type `Sensors`, select `Show Sensors`, and press Enter. The 'Sensors' tab gives users the ability to emulate sensor input of any device." tooltip-position="right">
		<img src="assets/img/info.png" alt="info" height="28px"/></span></h1>
            <span tooltip="The `Sensors` tab lets users change Location." tooltip-position="left"><span class="badge badge-warning badge-large">Hint</span></span>
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
        let complete = document.querySelector('#complete');
        complete.style.display = 'none';

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
        } else {
            console.log("Geolocation is not supported by this browser.");
        }

        function successFunction(position) {
            console.log(position);
            const currentLatitude = position.coords.latitude.toString();
            const currentLongitude = position.coords.longitude.toString();

            const tokyoLatitude = "35.689487";
            const tokyoLongitude = "139.691706";

            if (currentLatitude === tokyoLatitude && currentLongitude === tokyoLongitude) {
                console.log("Konnichiwa from Tokyo!");
                complete.style.display = 'block';
                localStorage.setItem("senses-52b3e9ed-db2e-415c-b1ee-7c23f234ea02.php", "Complete");
            } else {
                complete.style.display = 'none';
            }
        }

        function errorFunction() {
            console.log("Unable to retrieve your location.");
        }

        const reference = navigator.geolocation.watchPosition(successFunction, errorFunction);
    </script>



<?php include '_includes/footer.php';
