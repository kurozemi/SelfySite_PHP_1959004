<?php
  include "./include/header.php"
?>
  <div class="container">
    <div class="data">
      <h1>CONTACT US</h1>
      <form name="contact-form">
        <h2>YOUR NAME</h2>
        <input class="input" type="text" name="fname" placeholder="First name">
        <input type="text" name="lname" placeholder="Last name"> <br>
        <h2>EMAIL ADDRESS</h2>
        <input type="email" name="email" placeholder="Eg. example@email.com"> <br>
        <h2>PHONE NUMBER</h2>
        <input type="number" name="phone" placeholder="Eg. 1 800 0000"> <br>
        <h2>MESSAGE</h2>
        <textarea name="mess" rows="8" cols="40" placeholder = "Please enter your comments..." ></textarea> <br>
        <button type="button" name="submit">Submit →</button>
      </form>
    </div>

  </div>
<?php
  include "./include/footer.php"
?>
