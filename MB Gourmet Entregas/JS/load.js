
$(document).ready(function(){
  var i = setInterval(function () {

      clearInterval(i);

      // O código desejado é apenas isto:
      document.getElementById("loading").style.display = "none";
      document.getElementById("conteudo").style.display = "inline";

  }, 3000);

//   $.ajax({
//     beforeSend: function() {
//       $('#loading').css({display:"block"});
//       $('#conteudo').css({display:"none"});
//     },
//
//     complete: function() {
//       $('#loading').css({display:"none"});
//       $('#conteudo').css({display:"block"});
//     }
//
//   });
});
