jQuery(function ($) {
  /*var current_page = 1
        var max_pages = 3
        var true_posts = 2*/
  // $( ".custom-pagination .page-numbers:contains("+current_page+")" ).addClass('current');
  $(".custom-pagination .page-numbers").each(function (index, element) {
    $(element).click(function (event) {
      event.preventDefault();
      event.stopPropagation();
      if ($(this).hasClass("active")) {
        return;
      }
      if ($(this).hasClass("next")) {
        // current_page += 1;
        console.log(current_page);
        if (current_page < max_pages) {
          current_page += 1;
        }
      } else if ($(this).hasClass("prev")) {
        // current_page -= 1;
        console.log(current_page);

        if (current_page > 1) {
          current_page -= 1;
        }
      } else {
        current_page = $(this).html();
      }
      var $this = $(
        ".custom-pagination .page-numbers:contains(" + current_page + ")",
      );

      jQuery.ajax({
        url: misha_loadmore_params.ajaxurl,
        data: { action: "loadmore", page: current_page, query: true_posts },
        type: "POST",
        success: function (data) {
          $(".custom-pagination .page-numbers").removeClass("active");
          $($this).addClass("active");
          console.log(data);
          jQuery(".action-item__wrapper").html(data);
        },
      });
    });
  });
});
