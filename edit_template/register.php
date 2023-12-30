<?php include'headermain.php';?>
<div class="container">

  <form method="POST" action="registerprocess.php">

  <fieldset><br>
    <legend>Registration Form</legend>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Identity Card</label>
      <input type="text" name="fic" class="form-control" id="exampleInputPassword1" placeholder="IC Number" autocomplete="off" fdprocessedid="qjkq83" required>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Full Name</label>
      <input type="text" name="fname" class="form-control" id="exampleInputPassword1" placeholder="Name According to IC" autocomplete="off" fdprocessedid="qjkq83" required>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" name="fpwd" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off" fdprocessedid="qjkq83" required>
    </div>

        <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Phone Number/label>
      <input type="text" name="fphone" class="form-control" id="exampleInputPassword1" placeholder="Please include country code" autocomplete="off" fdprocessedid="qjkq83" required>
    </div>

        <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="email" name="femail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" fdprocessedid="217a3" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">License Number</label>
      <input type="text" name="flic" class="form-control" id="exampleInputPassword1" placeholder="Name According to IC" autocomplete="off" fdprocessedid="qjkq83">
    </div>

    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Address</label>
      <textarea class="form-control" name="fadd" id="exampleTextarea" rows="3"></textarea>
    </div>

    <div class="form-group">
      <label for="formFile" class="form-label mt-4">Default file input example</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <br>

    <button type="submit" class="btn btn-primary" fdprocessedid="xtsch">Submit</button>
  </fieldset>
  <br>

<button type="submit" class="btn btn-primary" fdprocessedid="bf046c">Register</button>
<button type="reset" class="btn btn-secondary" fdprocessedid="o5eomv">Reset</button>

<br>
<br>
<br>

</form>

</div></div></div></div>
</div>

<?php include'footer.php';?>