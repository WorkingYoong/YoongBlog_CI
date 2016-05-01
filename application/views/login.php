<div class="modal show" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <form class="form-horizontal" action="/YoongBlog_CI/index.php/auth/authentication" method='post'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">로그인</h4>
      </div>
      <div class="modal-body">

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="id" name="id" placeholder="ID">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
          </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
    </form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
