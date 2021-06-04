$(document).ready(function () {
  $(".cookie__btn").click((e) => {
    e.preventDefault();
    $(".cookie").remove();
  });
});
