"use strict";

$(document).ready(function () {
  $(".cookie__btn").click(function (e) {
    e.preventDefault();
    $(".cookie").remove();
  });
  $(".necessity-list__item-num").each(function (i, e) {
    console.log(e);
    console.log(i);
    $(e).text(i + 1);
  });
});