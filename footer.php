<?php
@session_start();
function make_footer() {

//function to make footer
//if a session for a admin user exists a button to return to admin menu will appear on footer
//contact us link to form where a customer can send us a message
//or access of number and email
?>

<nav class="navbar fixed-bottom navbar-dark bg-success">
  <div class="container">
   
    <div class="row-footer justify-content-center">
    
<?php 
      if (is_null(@$_SESSION['admin_user'])) {
?> 

<?php
      } else {
?>
        
          <a href="admin_menu.php" class="btn btn-warning btn-sm active" role="button" aria-pressed="true">Go back to Admin menu </a><br>

<?php 
      }  
?>
      
        <a class="navbar-brand" href="contact.php">Contact Us</a>
      
    </div>
  </div>

</nav>
        <script src="form-validation.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

<?php
}



?>
