<!DOCTYPE html>
<html lang="en">
<head>
  <title>[ fong baatz ] portfolio</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut-icon" type="image/x-icon" href="images/favicon.ico"/>

    <link rel="stylesheet" href="styles/styles.css" type="text/css"/>
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="scripts/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="scripts/scripts.js"></script>
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>
<link href='http://fonts.googleapis.com/css?family=Rambla|Arbutus+Slab|Oleo+Script+Swash+Caps' rel='stylesheet' type='text/css'>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-4623377-4']);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();
  </script>
</head>
<body>
  <div id="container">
    <div id="landing">
      <div id="header">
        <h1>Hello!</h1>
        <h2>I'm <span id="name">Fong,</span></h2>
        <h3>an artist and teacher</h3>
        <h4>in the Pacific Northwest</h4>
        <!-- <h5>&amp; etc.</h5> -->

        <ul id="nav">
          <!-- <li><a href="http://neauro.com/files/nadine_aurora_tabing__resume.pdf" class="nav-resume">resume</a></li> -->
          <!-- <li><a href="http://nuubu.blogspot.com" class="nav-blog">blog</a></li> -->
          <li><span class="nav-work" id="work-button">work</a></li>
          <li><span class="nav-about" id="about-button">about</a></li>
        </ul>
      </div>
    </div>
    <div id="main">
      <div id="main-header">
        <h1>Work</h1>
        <ul id="main-nav">
          <!-- <li id="show-all">All</li> -->
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
    COPYRIGHT
  </div>
</body>
</html>

