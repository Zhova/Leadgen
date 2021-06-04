$(document).ready(function () {
  $(".cookie__btn").click((e) => {
    e.preventDefault();
    $(".cookie").remove();
  });

  $(".necessity-list__item-num").each((i, e) => {
    console.log(e);
    console.log(i);
    $(e).text(i + 1);
  });
});
