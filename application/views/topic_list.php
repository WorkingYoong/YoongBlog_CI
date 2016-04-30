<div class="col-md-3">
  <ul>
  <?php
  foreach($topics as $entry){
  ?>
      <li><a href="/YoongBlog_CI/index.php/topic/get/<?=$entry->id?>"><?=$entry->title?></a></li>
  <?php
  }
  ?>
  </ul>
</div>
