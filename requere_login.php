<button type="button" class="btn btn-light" data-toggle="modal" data-target=".bd-example2-modal-lg">Log in</button>

    <div class="modal fade bd-example2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="row p-5">
            <div class="col-md-6">
              <h3 class="black-letter"> Log in</h3>
              <p class="black-letter">
                If you have an account please write your username and password
              </p>
          <form action="login.php" method="post" class="form-group">
            <input type="text" name="uid" class="form-control" id="formGroupExampleInput" placeholder="Username" required>
            <input type="password" name="pwd" class="form-control" id="formGroupExampleInput2" placeholder="Password" required>
            <button type="submit" class="btn btn-primary">Log in</button>
          </form>
          <a href="#" id="btn2" <p>If you haven't an account Sign up</p></a>
          </div>

            <section class="col-md-6 signup" id="two2" style="display:none">
              <h3 class="black-letter"> Sign up</h3>
              <p class="black-letter">
                If you haven't an account you can create it. Please fill the fields.
              </p>
          <form action="signup.php" method="post" class="form-group">
            <input type="text" name="first" class="form-control" id="formGroupExampleInput3" placeholder="Firstname">
            <input type="text" name="last" class="form-control" id="formGroupExampleInput4" placeholder="Lastname">
            <input type="text" name="uid" class="form-control" id="formGroupExampleInput5" placeholder="Username" required>
            <input type="password" name="pwd" class="form-control" id="formGroupExampleInput6" placeholder="Password" required>
            <button type="submit" class="btn btn-primary">Sign up</button>
          </form>
          </section>
          </div>


          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
