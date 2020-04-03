$(document).ready(function () {
  // For the Second level Dropdown menu, highlight the parent
  $(".dropdown-menu")
    .mouseenter(function () {
      $(this).parent('li').addClass('active');
    })
    .mouseleave(function () {
      $(this).parent('li').removeClass('active');
    });
});