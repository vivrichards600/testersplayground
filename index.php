  <?php include '_includes/header.php';?>
  <style>
    
  a.disabled {
      /* Make the disabled links grayish*/
      color: gray !important;
      /* And disable the pointer events */
      pointer-events: none;
  }
  </style>
      <main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Welcome!</h1>        
        </div>
        
        <p>This web site contains various challenges designed to help testers learn as well as challenge their current knowledge and skills.</p>
      
        <div class="table-responsive">
        <h2>Challenges</h2>
          <p>

          <ul class="list-group">

            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="devtools.php"><img src="assets/img/chrome.png" alt="chrome"/> Chrome DevTools <span class="badge badge-primary">New</span></a>
                <span class="badge badge-primary badge-pill">10 Challenges</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="owasp.php"><img src="assets/img/owasp.png" alt="security"/> OWASP <span class="badge badge-primary">New</span></a>
                <span class="badge badge-primary badge-pill">3 Challenges</span>
              </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a href="#" class="disabled"><img src="assets/img/accessibility.png" alt="accessibility"/> Accessibility <span class="badge badge-secondary">Coming Soon</span></a>
                <span class="badge badge-primary badge-pill">0 Challenges</span>
              </li>
            </ul>
          </p>
          <p>Have ideas for new types of challenges or want to give some feedback? I'd love to hear from you <a href="mailto:hello@vivrichards.co.uk">hello@vivrichards.co.uk</a></p>
        </div>
      </main>
    </div>
  </div>
  <?php 

  ?>
<?php include '_includes/footer.php';