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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">That's all folks!</h1>        
      </div>
      <h2>That's all for now!!</h2>
      <div class="table-responsive">
        <p>I'd love your feedback - this is a work in progress...</p><p>hello@vivrichards.co.uk</p>
      </div>
    </main>
  </div>
</div>

<?php include '_includes/footer.php';?>

<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>