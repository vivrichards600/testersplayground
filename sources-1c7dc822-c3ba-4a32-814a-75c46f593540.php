<?php 
$usermessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];
    $usermessage = "";

    if($valuesadded == 'c0dfa570-bce6-4642-8dee-7daef956efd8') {
      // job done!
      $usermessage = "<p><br><a href='network-f20aef14-f2c5-4b07-8237-89f51a85f03a.php' class='btn btn-success'>Next Challenge</a></p>";
    }
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
        <h1 class="h2">Sources</h1>    
        <p>The 'Sources' tab enables you to view an edit various assets for the page.</p>
        

      <h2>Input the code from within a newly added asset!</h2>
      <div class="table-responsive">
        <p>The field below requires a string which is returned within newly added asset in order to move on to the next challenge. Can you find it within the assets?</p>        
        <form action="sources-1c7dc822-c3ba-4a32-814a-75c46f593540.php" method="post">
        Enter the secret code *: <input type="text" size="40" class="inputbox" name="valuesadded">
        <input type="submit">
        </form>
        <label><?php echo $usermessage; ?></label>

      </div>
    </main>
  </div>
</div>
<!--add this value in the secret code field to validate that you have looked at the page source : 452464bc-6ed4-41dd-a48c-67af0ff70196 -->
<?php include '_includes/footer.php';?>
<script src="assets/js/code-console.js"></script>

