
  var i = setInterval(function () {

      clearInterval(i);

      document.getElementById("loading").style.display = "none";
      document.getElementById("conteudo").style.display = "inline";

  }, 3000);

  $('.carousel').carousel({
  interval: 4000
  });
