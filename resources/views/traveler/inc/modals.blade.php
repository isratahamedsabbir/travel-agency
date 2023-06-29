<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Review Submit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('review/insert/function') }}" method="post" enctype="multipart/form-data">
          @csrf
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Company:</label>
            <input type="text" class="form-control" id="recipient-name" name="company">
          </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Photo:</label>
            <input type="file" class="form-control" id="recipient-name" name="photo">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" name="message"></textarea>
          </div>
		  <div class="form-group">
            <button class="btn btn-primary" type="submit" name="submit" value="insert">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>