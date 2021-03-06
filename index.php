<?php
    include("header.php");
    include("nav.php");
?>

<div class="container">
  <center>
      <?php
      if (isset($_SESSION['success'])) {
          echo "<p class='alert alert-success success' role='alert'>" . $_SESSION['success'] . "</p>"
          ;
          unset($_SESSION['success']);
      }
      if (isset($_SESSION['error'])) {
          echo "<p class='alert'>" . $_SESSION['error'] . "</p>";
          unset($_SESSION['error']);
      }
      if (isset($_GET['error']) && $_GET['error'] == 'db') {
          echo "<p class='alert'>Error in connecting to database!</p>";
      }
      if (isset($_GET['error']) && $_GET['error'] == 'inurl') {
          echo "<p class='alert'>Not a valid URL!</p>";
      }
      if (isset($_GET['error']) && $_GET['error'] == 'dnp') {
          echo "<p class='alert'>Ok! So I got to know you love playing! But don't play here!!!</p>";
      }
      ?>
      <form method="POST" action="functions/shorten.php">
        <img class="mb-4" src="https://hiveam.com/themes/default/frontend/images/tour/icons/fbpixel.png" alt="" width="72" height="72">
        <blockquote class="blockquote">
          <h3 class="mb-0">Smally</h3>
          <footer class="blockquote-footer">Small links matter!</footer>
        </blockquote>

          <div class="section group">
              <div class="col span_3_of_3">
                  <input type="url" id="input" name="url" class=" form-control-lg p-2" placeholder="Enter a URL here">
              </div>
              <div class="col span_1_of_3">
                  <input type="text" id="custom" name="custom" class=" form-control-lg p-2" placeholder="Enable custom text"
                        disabled>
              </div>
              <div class="col span_2_of_3">
                  <div class="onoffswitch">
                      <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch"
                            onclick="toggle()">
                      <label class="onoffswitch-label" for="myonoffswitch"></label>
                  </div>
              </div>
          </div>
          <input class="btn btn-outline-primary btn-lg" type="submit" value="Go" class="submit">
          <div class="p-3">Made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> <a target="_blank" href="https://www.facebook.com/renzthegeek">Lorence</a></div>
      </form>
      <script>
        function toggle () {
          if (document.getElementById('myonoffswitch').checked) {
            document.getElementById('custom').placeholder = 'Enter your custom text'
            document.getElementById('custom').disabled = false
            document.getElementById('custom').focus()
          }
          else {
            document.getElementById('custom').value = ''
            document.getElementById('custom').placeholder = 'Enable custom text'
            document.getElementById('custom').disabled = true
            document.getElementById('custom').blur()
            document.getElementById('input').focus()
          }
        }
      </script>
</div>
<?php
    include("footer.php");
?>
