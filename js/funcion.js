$(document).ready(function(){
    $("p").click(function(){
      $(this).hide();
    });
  });


  $(document).ready(function(){
    $("#btn4").click(function(){
      alert("Text: " + $("#test").text());
    });


    $("#btn3").click(function(){
      alert("HTML: " + $("#test").html());
    });
    

  });

  


  
  $(document).ready(function(){
    $("#btn5").click(function(){
      
      $("article").css("background-color", "#5B2929");
      $("#titulomain").css("background-color", "#96736C");
      $("nav").css("background-color", "5B2929");  
    });

  

  });

  





