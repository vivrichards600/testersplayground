<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];
    if($valuesadded == 'ba09c56d-bca3-4637-b502-c633432f8b3f') {
      //
      $_SESSION['ChallengeLink'] = 'network-825e28bc-8e1a-4386-9cbb-048c3291a60d.php';
      header("Location: ChallengeComplete.php");
    }
  }
;?>

<?php include '_includes/header.php';?>

    <main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Hidden within <span tooltip="The 'Network' tab records information about each network operation on a page, including detailed timing data, HTTP request and response headers, cookies, and more." tooltip-position="right"><img src="assets/img/info.png" height="28px"/></span></h1>      
      </div>
    
      <h2>Input the hidden code!</h2>
      <div class="table-responsive">
        <p>The field below requires a hidden code in order to move on to the next challenge. Can you find the secret code?</p>
        
        <form action="network-f20aef14-f2c5-4b07-8237-89f51a85f03a.php" method="post">
          <div class="form-group col-md-4">
            <label for="inputSecretCode">Enter the hidden code</label>
            <input type="text" size="45" class="form-control" name="valuesadded" id="inputSecretCode">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
     
    </main>
  </div>
</div>


<script>
$runCount = 0;
$num = "";
 $(document).ready(function(){
  sendRequest();
  function sendRequest(){
      $.ajax({
        url: "hidden-code.php",
        success: 
          function(data){      
            if($runCount < 10) {
              $runCount += 1; 
            }    
        },
        complete: function() {
       setInterval(sendRequest, 10000); // The interval set to 10 seconds
     }
    });
  };
});
</script>


<?php include '_includes/footer.php';
