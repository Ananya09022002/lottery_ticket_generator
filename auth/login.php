<h2>LOGIN FORM</h2>
<form action="loginform.php" method="POST">
<div class="modal-body">
          <div class="form-group">
            <label for="ID">USERNAME</label>
            <input type="text" name="ID" placeholder ="Username">
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name="password" placeholder ="Password">
          </div>
          <button type="submit" class="save" name="loginUser">Login</button>
        </div>
</form>
<?php include "footer.php" ; ?>