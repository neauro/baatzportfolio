$(document).ready(function() {
  $('.fancybox').fancybox({
     helpers : {
       buttons: {
         position : 'top'
       },
       overlay: {
             locked: false
                 },
       title: {
        type: "outside"
       }
    },
    onComplete: function() {
      $(document).scrollTop(0);
    }
  });

  function showContainer(containerToShow) {
    if (!$(containerToShow).hasClass("show")) {
      $(".show").fadeOut("fast", function() {
      $(".show").removeClass("show");
        $(containerToShow).fadeIn("fast", function() {
        });
        $(containerToShow).addClass("show");
      });
    } 
  }

  //event handlers
  $("#show-figure").on("click", function() {
    showContainer("#figure-container");
  });

  $("#show-portrait").on("click", function() {
    showContainer("#portrait-container");
  });

  $("#show-still-life").on("click", function() {
    showContainer("#still-life-container");
  });

  $("#show-photography").on("click", function() {
    showContainer("#photography-container");
  });

  $("#show-charcoal").on("click", function() {
    showContainer("#charcoal-container");
  });

  $("#show-ink").on("click", function() {
    showContainer("#ink-container");
  }); 



 $("#work-button").click( function() {
     $("html, body").animate( {
         scrollTop: $("#main").offset().top
       }, 1000);
  });

 $("#about-button").click( function() {
     $("html, body").animate( {
         scrollTop: $("#about").offset().top
       }, 1000, function() {
           $("#about h1").animate( {
               fontSize: "56px"
             },500, function() {
                 $("#about h1").animate( {
                     fontSize: "46px"
                   },200);
               });
         });
  });
});
