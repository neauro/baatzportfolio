<?php include "include/_header.php"; ?> 

<div id="container">
  <h1>Still Life</h1>
  <?php
    foreach (glob("content/still_life/*/") as $filename) {
      $descfile = $filename . "desc.txt";
      $desc = fopen($descfile, "r");
      $thumbnail = $filename . "thumbnail.jpg"; 
      $desc_text = fgets($desc, 4096);
    ?> 
      <a class="fancybox buttons" title="<?= $desc_text ?>" data-fancybox-group="button" href="<?= $thumbnail ?>">
        <div style="background-image:url(<?= $thumbnail ?>);"></div>
      </a>
    <?php
      } ?> 
</div>

<?php include "include/_footer.php"; ?> 
