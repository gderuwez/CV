<?php
  include('./partials/header.php');
?>

<h2>Contact</h2>
<form class="form" action="./presentation.html" method="post">
  <label>First Name</label><br/>
  <input type="text" name="firstName" value=""><br/>
  <label>Last name</label><br/>
  <input type="text" name="lastName" value=""><br/>
  <label>Message</label><br/>
  <textarea name="message" rows="8" cols="80"></textarea><br/>
  <button type="submit" name="form" value="contact">Send</button>
</form>

<?php
include('./partials/footer.php');
 ?>
