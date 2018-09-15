<?php 
$usermessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
  if (isset($_POST['valuesadded'])){

    $valuesadded = $_POST['valuesadded'];
    $usermessage = "";

    if($valuesadded == '184ebfa4-52d7-406b-aeaa-cba4bd5b78f3.js') {
      // job done!
      $usermessage = "<p><br><a href='sources-1c7dc822-c3ba-4a32-814a-75c46f593540.php' class='btn btn-success'>Next Challenge</a></p>";
    }
  }
;?>

<?php include '_includes/header.php';?>
<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
        <h1 class="h2">Console (Ctrl + Shift + J)</h1>    
        <p>The 'Console' tab enables you to stack redundant messages or display them on their own lines, clear or persist output or save it to a file, filter output, and access additional Console settings.</p>

      <h2>Input the missing asset!</h2>
      <div class="table-responsive">
        <p>The field below requires a broken asset file name in order to move on to the next challenge. Can you find it?</p>
        
        <form action="console-5d63b2b2-3822-4a01-8197-acd8aa7e1343.php" method="post">
        Enter the missing asset filename *: <input type="text" size="40" class="inputbox" name="valuesadded">
        <input type="submit">
        </form>
        <label><?php echo $usermessage; ?></label>

      </div>
    </main>
  </div>
</div>
<script src="input-code-184ebfa4-52d7-406b-aeaa-cba4bd5b78f3.js"/>
<!--add this value in the secret code field to validate that you have looked at the page source : 452464bc-6ed4-41dd-a48c-67af0ff70196 -->
<?php include '_includes/footer.php';?>