<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];
    if($valuesadded == 'ba09c56d-bca3-4637-b502-c633432f8b3f') {
      $_SESSION['ChallengeLink'] = 'application-cf590198-e290-4896-a60f-24def18bc101.php';
      header("Location: ChallengeComplete.php");
    }
  }
;?>

<?php include '_includes/header.php';?>

<script>
$runCount = 0;
$num = "";

$(document).ready(function(){
  sendRequest();
  function sendRequest(){
      $.ajax({
        url: "network-code.php",
        success: 
          function(data){      
            if($runCount < 139) {
              $runCount += 21; 
            }    
        },
        complete: function() {
       setInterval(sendRequest, 5000); // The interval set to 20 seconds
     }
    });
  };
});
</script>

    <main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Challenge Six</h1>        
      </div>
      <h1 class="h2">Network</h1>    
        <p>The 'Network' tab records information about each network operation on a page, including detailed timing data, HTTP request and response headers, cookies, and more.</p>
        

      <h2>Input the hidden code!</h2>
      <div class="table-responsive">
        <p>The field below requires a hidden code in order to move on to the next challenge. Can you find the secret code?</p>
        
        <form action="network-f20aef14-f2c5-4b07-8237-89f51a85f03a.php" method="post">
          <div class="form-group col-md-4">
            <label for="inputSecretCode">Enter the secret code</label>
            <input type="text" size="45" class="form-control" name="valuesadded" id="inputSecretCode">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
     
    </main>
  </div>
</div>

<?php include '_includes/footer.php';