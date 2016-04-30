<div class="col-md-2">
  <ul class="nav nav-pills nav-stacked">
  <?php
  foreach($topics as $entry){
  ?>
      <li><a href="/YoongBlog_CI/index.php/topic/get/<?=$entry->id?>"><?=$entry->title?></a></li>
  <?php
  }
  ?>
  </ul>
</div>
