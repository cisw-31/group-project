<?php
//grabs function files
include("functions.php");
//creates html header (see functions.php) TEST COMMENT
make_header();
?>
<html>

  <head>
    <link rel="stylesheet" href="contact_page.css">
  </head>

  <body>

    <h1>Contact Us</h1>

    <div class="container">
      <div style="text-align:center">
      </div>
      <div class="row">
        <div class="column">
          <h4>Phone Number:</h4>
          <p>1(800) 438-5323</p>
          <br />
          <hr class="line1">
          <h4>Address:</h4>
          <p>Jejeti</p>
          <p>15873 Plant Lane</p>
          <p>Walnut, California</p>
          <p>91789</p>
          <br />
          <hr class="line2">
          <h4>Email:</h4>
          <p>info@jejeti.com</p>
          <p>support@jejeti.com</p>
        </div>
        <div class="column">
          <form>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your first name.." required>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
            <label for="email">Email</label>
            <input type="text" id="email" name="Email" placeholder="Email address" required>
            <label for="message">Message</label>
            <textarea id="subject" name="subject" placeholder="Type your message..." style="height:170px" required></textarea>
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>

  </body>

</html>

<?php
//creates html footer (see functions.php)
make_footer();
?>
