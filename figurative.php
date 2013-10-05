<?php include "include/_header.php"; ?> 

<div id="container">
  <h2>Figurative</h2>
  <?php
    foreach (glob("content/figurative/*/") as $filename) {
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
  <?php include "include/_copyright.php"; ?> 
</div>

<?php include "include/_footer.php"; ?> 
