<div class="col-md-10">
  <article>
      <h1><?=$topic->title?></h1>
      <h1><?=$topic->author?></h1>
      <div>
        <div><?=kdate($topic->created)?></div>
        <div><?=$topic->description?></div>
      </div>
  </article>
  <div>
    <a href="/YoongBlog_CI/index.php/topic/add" class="btn btn-default btn-lg">추가</a>
  </div>
</div>
