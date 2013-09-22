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
});
