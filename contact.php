
<?php
//grabs function files 
include("functions.php");
//creates html header (see functions.php) TEST COMMENT
make_header(); 
?>

<form>
  <div class="form-group">
    <label for="exampleInputLastName">Last name</label>
    <input type="Text" class="form-control" id="exampleInputLastName" placeholder="Enter last name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputFirstName">First name</label>
    <input type="Text" class="form-control" id="exampleInputFirstName" placeholder="Enter first name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

<div class="form-group">
    <label for="exampleInputSubject">Subject</label>
    <input type="Text" class="form-control" id="exampleInputSubject" placeholder="Enter Subject">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

<?php
//creates html footer (see functions.php)
make_footer();
?>