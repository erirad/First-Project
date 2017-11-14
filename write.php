
<!-- Modal -->
<div class="modal fade bd-example-modal-lg text-left" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-dialog modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get In Touch With Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="container" action="email.php" method="post">
          <div class="row">
                <div class="col-md-12 mb-3">
              <label for="validationCustom01">First name</label>
             <input type="text" name="name" class="form-control is-valid" id="validationCustom01" placeholder="First name">
            </div>
          </div>

            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="validationServer01">Tema</label>
                <input type="text" name="tema" class="form-control is-valid" id="validationServer02" placeholder="Tema">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="validationServer01">Email</label>
              <input type="email" name="email" class="form-control is-valid" id="inputEmail3" placeholder="example@gmail.com" required>
                <div class="invalid-feedback">
                  Please provide a valid email.
                </div>
              </div>
            </div>

        <div class="row">
          <div class="col-md-12 mb-3">
          <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea name="textarea" class="form-control is-valid" id="exampleFormControlTextarea1" rows="4" placeholder="Write a post.."></textarea>
            </div>
            <button class="btn btn-outline-primary btn-lg" type="submit">Send</button>
          </div>
        </div>
      </form>

      </div>
      <div class="modal-footer">
        <p>We are here to help. Want to learn more about our services? Please get in touch, we'd love to hear from you!</p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
