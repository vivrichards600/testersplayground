<?php 
$usermessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];
    $usermessage = "";

    if($valuesadded == 'ba09c56d-bca3-4637-b502-c633432f8b3f') {
      // job done!
      $usermessage = "<p><br><a href='performance.php' class='btn btn-success'>Next Challenge</a></p>";
    }
  }
;?>

<?php include '_includes/header.php';?>
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
        Enter the secret code *: <input type="text" size="40" class="inputbox" name="valuesadded">
        <input type="submit">
        </form>
        <label><?php echo $usermessage; ?></label>

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
        url: "network-code.php",
        success: 
          function(data){      
            if($runCount < 139) {
              $runCount += 21; 
            }    
        },
        complete: function() {
       setInterval(sendRequest, 15000); // The interval set to 20 seconds
     }
    });
  };
});
</script>

<?php include '_includes/footer.php';?>
