<?php include "include/_header.php"; ?> 

<div id="container">
  <div id="landing">
    <div id="header">
      <h1>fong baatz</h1>
      <ul id="nav">
        <li><a href="figurative.php">Figurative</a></li>
        <li><a href="portrait.php">Portrait</a></li>
        <li><a href="stilllife.php">Still Life</a></li>
        <li><a href="photography.php">Photography</a></li>
        <li><a href="sketches.php">Sketches</a></li>
        <li><a href="chineseink.php">Chinese Ink</a></li>
      </ul>

    </div>
  </div>
<!--
  <div id="main">
    <div id="main-header">
      <h1>Work</h1>
      <ul id="main-nav">
        <li id="show-figure">Figurative</li>
        <li id="show-portrait">Portrait</li>
        <li id="show-still-life">Still Life</li>
        <li id="show-photography">Photography</li>
        <li id="show-charcoal">Sketches</li>
        <li id="show-ink">Chinese Ink</li>
      </ul>
    </div>

    <div id="main-container">
      <div class="content-container show" id="figure-container">
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
            }
        ?>
      </div>
      <div class="content-container" id="portrait-container">
        <?php
          foreach (glob("content/portrait/*/") as $filename) {
            $descfile = $filename . "desc.txt";
            $desc = fopen($descfile, "r");
            $thumbnail = $filename . "thumbnail.jpg"; 
            $desc_text = fgets($desc, 4096);
          ?>
            <a class="fancybox buttons" title="<?= $desc_text ?>" data-fancybox-group="button" href="<?= $thumbnail ?>">
              <div style="background-image:url(<?= $thumbnail ?>);"></div>
            </a>
          <?php
            }
        ?>
      </div>
      <div class="content-container" id="still-life-container">
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
            }
        ?>
      </div>
      <div class="content-container" id="photography-container">
        <?php
          foreach (glob("content/photography/*/") as $filename) {
            $descfile = $filename . "desc.txt";
            $desc = fopen($descfile, "r");
            $thumbnail = $filename . "thumbnail.jpg"; 
            $desc_text = fgets($desc, 4096);
          ?>
            <a class="fancybox buttons" title="<?= $desc_text ?>" data-fancybox-group="button" href="<?= $thumbnail ?>">
              <div style="background-image:url(<?= $thumbnail ?>);"></div>
            </a>
          <?php
            }
        ?>
      </div>
      <div class="content-container" id="charcoal-container">
        <?php
          foreach (glob("content/charcoal/*/") as $filename) {
            $descfile = $filename . "desc.txt";
            $desc = fopen($descfile, "r");
            $thumbnail = $filename . "thumbnail.jpg"; 
            $desc_text = fgets($desc, 4096);
          ?>
            <a class="fancybox buttons" title="<?= $desc_text ?>" data-fancybox-group="button" href="<?= $thumbnail ?>">
              <div style="background-image:url(<?= $thumbnail ?>);"></div>
            </a>
          <?php
            }
        ?>
      </div>
      <div class="content-container" id="ink-container">
        <?php
          foreach (glob("content/ink/*/") as $filename) {
            $descfile = $filename . "desc.txt";
            $desc = fopen($descfile, "r");
            $thumbnail = $filename . "thumbnail.jpg"; 
            $desc_text = fgets($desc, 4096);
          ?>
            <a class="fancybox buttons" title="<?= $desc_text ?>" data-fancybox-group="button" href="<?= $thumbnail ?>">
              <div style="background-image:url(<?= $thumbnail ?>);"></div>
            </a>
          <?php
            }
        ?>
      </div>
    </div>
  </div>
  -->
</div>

<?php include "include/_footer.php"; ?> 
