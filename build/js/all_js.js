"use strict";

$(document).ready(function () {
  $(".cookie__btn").click(function (e) {
    e.preventDefault();
    $(".cookie").remove();
  });
});