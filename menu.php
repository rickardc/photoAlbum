<?php
  $currentPage = basename($_SERVER['PHP_SELF']);

  $pages = [
    "photoalbum.php" => "Photo Album",
    "photouploader.php" => "Photo Uploader",
    "photolookup.php" => "Photo Lookup"
];
?>

<ul class="nav">
  <?php foreach ($pages as $page => $title) { ?>
    <li><a href="<?php echo $page; ?>"
    <?php if($page == $currentPage) { echo " class='active' "; } ?>
    ><?php echo $title; ?></a></li>
  <?php } ?>
  <li class='name'>Student ID: 6512178</li>
  <li class='name'>Christopher Rickard</li>

</ul>