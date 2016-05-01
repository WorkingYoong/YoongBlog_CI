
<form action="/YoongBlog_CI/index.php/topic/add" method="post" class="col-md-10">
  <?php echo validation_errors(); ?>
  <label for="form-title">제목</label>
  <div class="form-group">
  <input type="text" class="form-control" name="title" id="form-title" placeholder="제목">
</div>
<div class="form-group">
  <label for="form-author">작성자</label>
  <input type="text" class="form-control" name="author" id="form-author" placeholder="작성자">
</div>
<div class="form-group">
  <label for="form-description">본문</label>
  <textarea class="form-control" rows="20" name="description" id="form-description" placeholder="본문을 적어주세요."></textarea>
</div>
  <input type="submit" name="name" class="btn btn-success">
</form>

<script src="/YoongBlog_CI/static/lib/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('description', {
    'filebrowserUploadUrl' : '/YoongBlog_CI/index.php/topic/upload_receive_fromCK'
  });
</script>
