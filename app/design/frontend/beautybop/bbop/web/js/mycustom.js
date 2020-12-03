define(["jquery"], function ($) {
  "use strict";

  $(document).ready(function ($) {
    /*$(".block-search").on("click", function() {
      console.log("DID IT! this jQuery log complete.");

    });*/
    window.responsive = function responsive() {
      //get the width of the window
      var width = $(window).width();

      if (width > 300 && width < 1025) {
        //width is larger than 500px and smaller than 900px
        $(".block-search").on("click", function () {
          console.log("DID IT! this jQuery log complete.");
          //alert("click works");

          $(".block-search input").toggle().css({
            display: "block",
          });
        });
      }
    };

    //filter dropdown

    $(".filter-options-title").on("click", function () {
      $(this).next(".filter-options-content").toggle();
    });

    //hover over level1 navigation to change display block
    /*$("#ui-id-5").hover(function(){
      $("ul.level1.submenu").css({ "display":"block" });
    });*/

    $("li.level0.nav-2").hover(function () {
      $("ul.level1.submenu").addClass("nav-dropdown feature-navigation");
      console.log("link works");
    });

    // function to add secure checkout to OneStepCheckout

    /*$(
      ".firecheckout .header"
    ).attr("class", "checkout-secure");

    $(
      ".onestepcheckout-index-index.page-layout-checkout_with_top_menu span.checkout-secure"
    ).append("Secure Checkout");*/

    // animate css
    /*You can add your custom jQuery code here*/
    $(".box1").hover(function () {
      $(".shadow").toggle();
    });

    /*You can add your custom jQuery code here*/
    $(".box2").hover(function () {
      $(".shadow2").toggle();
    });

    /*You can add your custom jQuery code here*/
    $(".box3").hover(function () {
      $(".shadow3").toggle();
    });

    // add secure checkout text
    $(".firecheckout .header .checkout-lock").append(
      document.createTextNode("Secure Checkout")
    );
  }); // end document ready

  //Call the function on load and resize
  $(window).on("ready load resize orientationchange", function () {
    responsive();
  });
  return;
});
