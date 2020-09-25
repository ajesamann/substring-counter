//the options menu functionality using jquery
$(".options").click(() => {
  if ($(".options").attr("opened") == "false") {
    $(".input-container").fadeIn();
    $(".input-container").css("display", "flex");
    $(".options").attr("opened", "true");
  } else if ($(".options").attr("opened") == "true") {
    $(".input-container").css("display", "none");
    $(".options").attr("opened", "false");
  }
});
