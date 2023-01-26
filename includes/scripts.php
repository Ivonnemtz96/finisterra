<!-- Place all Scripts Here -->
<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- Popper -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Inview -->
<script src="assets/js/jquery.inview.min.js"></script>
<!-- Slick Slider -->
<script src="assets/js/slick.min.js"></script>
<!-- Nice Select -->
<script src="assets/js/jquery.nice-select.js"></script>
<!-- Range Slider -->
<script src="assets/js/jquery-ui.js"></script>
<!-- Morris Chart -->
<script src="assets/js/raphael-min.js"></script>
<script src="assets/js/morris.min.js"></script>
<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
<!-- Custom Js -->
<script src="assets/js/custom.js"></script>
<!-- /Place all Scripts Here -->

<script>
    (function($) {
  var wa_time_out, wa_time_in;
  $(document).ready(function() {
    $(".wa__btn_popup").on("click", function() {
      if ($(".wa__popup_chat_box").hasClass("wa__active")) {
        $(".wa__popup_chat_box").removeClass("wa__active");
        $(".wa__btn_popup").removeClass("wa__active");
        clearTimeout(wa_time_in);
        if ($(".wa__popup_chat_box").hasClass("wa__lauch")) {
          wa_time_out = setTimeout(function() {
            $(".wa__popup_chat_box").removeClass("wa__pending");
            $(".wa__popup_chat_box").removeClass("wa__lauch");
          }, 400);
        }
      } else {
        $(".wa__popup_chat_box").addClass("wa__pending");
        $(".wa__popup_chat_box").addClass("wa__active");
        $(".wa__btn_popup").addClass("wa__active");
        clearTimeout(wa_time_out);
        if (!$(".wa__popup_chat_box").hasClass("wa__lauch")) {
          wa_time_in = setTimeout(function() {
            $(".wa__popup_chat_box").addClass("wa__lauch");
          }, 100);
        }
      }
    });

    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
      var expires = "expires=" + d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
      var name = cname + "=";
      var ca = document.cookie.split(";");
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    $("#nta-wa-gdpr").change(function() {
      if (this.checked) {
        setCookie("nta-wa-gdpr", "accept", 30);
        if (getCookie("nta-wa-gdpr") != "") {
          $('.nta-wa-gdpr').hide(500);
          $('.wa__popup_content_item').each(function(){
            $(this).removeClass('pointer-disable');
            $('.wa__popup_content_list').off('click');
          })
        }
      }
    });

    if (getCookie("nta-wa-gdpr") != "") {
      $('.wa__popup_content_list').off('click');
    } else{
      $('.wa__popup_content_list').click(function(){
        $('.nta-wa-gdpr').delay(500).css({"background" : "red", "color" : "#fff"});
      });
    }
  });
})(jQuery);
</script>