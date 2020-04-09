"use strict";

var overlay = document.getElementById("overlay");

window.onload = function () {
  setTimeout(function () {
    overlay.style.display = 'block';
  }, 10000);
};

overlay.addEventListener("click", function (e) {
  if (e.target.id === 'overlay') overlay.style.display = 'none';
});
var submit = document.getElementById('newsletter-submit');
submit.addEventListener('click', function () {
  overlay.style.display = 'none';
});