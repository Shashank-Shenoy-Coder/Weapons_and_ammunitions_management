$(document).ready(function () {
    /*var $list = $(".card-product-box .card").hide(),
      $curr;*/
  
    $(".button")
      .on("click", function () {
        var $this = $(this);
        $this.addClass("active").siblings().removeClass("active");
        /*$curr = $list.filter("." + this.id).hide();
        $curr.slice(0, 4).show(400);
        $list.not($curr).hide(300);*/
      })
      .filter(".active")
      .click();
  
    /*$("#LoadMore").on("click", function () {
      $curr.filter(":hidden").slice(0, 4).slideDown("slow");
    });*/
  });
  document.getElementById("button").addEventListener("click",function(){
    document.getElementsByClassName("contact-form ")
    [0].classList.add("active");
  });