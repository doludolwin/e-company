<!-- post modal -->

<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="pro-pic">
<<<<<<< HEAD
            <img src="/uploads/avatars/{{ $admin->avatar }}" alt="{{ $admin->avatar }}" height="35px" width="35px">
        </div>
        <h6>{{ $user->name }}</h6>
      </div>
      <div class="modal-body">
        <form class="" method="post" action="/admin/blogpost" enctype="multipart/form-data" >
        {{ csrf_field() }}
       
=======

>>>>>>> post-and-card
            <div class="post-form">
              <input type="text" name="title" value="" placeholder="Title">
              <input type="hidden" name="published_at" value="{{ Carbon\Carbon::now() }}">
              <textarea name="body" rows="5" cols="50" placeholder="Body content"></textarea>
            </div>
            <div class="image">
                <h6>uploaded</h6>
                <label>
                    <input type="file" name="image" value="">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                </label>
                 <button type="submit" name="button">post</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
