<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];
    if($valuesadded == '1M4GE' || $valuesadded == '1m4ge') {
      //
      $_SESSION['ChallengeLink'] = 'application-cf590198-e290-4896-a60f-24def18bc101.php';
      header("Location: ChallengeComplete.php");
    }
  }
;?>

<?php include '_includes/header.php';?>

    <main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Image is everything <span tooltip="The 'Network' tab records information about each network operation on a page, including detailed timing data, HTTP request and response headers, cookies, and more." tooltip-position="right"><img src="assets/img/info.png" alt="info" height="28px"/></span></h1>      
        <span tooltip="Within the Network tab, you can select image file requests and preview them.." tooltip-position="left"><span class="badge badge-warning badge-large">Hint</span></span>
      </div>
    
      <h2>Input the hidden code!</h2>
      <div class="table-responsive">
        <p>The field below requires a hidden code in order to move on to the next challenge. Can you find the secret code within the Network tab?</p>
        <div style="display:none;"><img src="assets/img/none.png"/></div>
        <form action="network-546b4156-78c7-4542-b72b-0c79adb0bc01.php" method="post">
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




<?php include '_includes/footer.php';
