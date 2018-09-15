<?php 
$usermessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];
    $usermessage = "";

    if($valuesadded == '452464bc-6ed4-41dd-a48c-67af0ff70196') {
      // job done!
      $usermessage = "<p><br><a href='device-368e1867-1459-4584-b404-349834e064dd.php' class='btn btn-success'>Next Challenge</a></p>";
    }
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
        <h1 class="h2">Inspect (Ctrl + Shift + C)</h1>    
        <p>The 'Inspect' tab enables you to select an element within the browser and have it's html markup selected in the Elements tab as you hover.</p>
        

      <h2>Input the magic code!</h2>
      <div class="table-responsive">
        <p>The field below requires a secret code in order to move on to the next challenge. Can you find the secret code?</p>
        
        <form action="inspect-c6912ea9-3522-4d90-96c1-5c0b34698614.php" method="post">
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