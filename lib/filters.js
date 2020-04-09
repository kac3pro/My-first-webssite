"use strict";

function toggleCb(e) {
  e.checked = !e.checked;
  var checked = e.getAttribute("aria-checked");
  if (checked === "true") e.setAttribute('aria-checked', "false");else e.setAttribute('aria-checked', 'true');
}

function focusCb(e) {
  if (e.code === 'Space') toggleCb(e.target);
}

var checkboxes_real = document.getElementsByClassName('cb');
var checkmarks = document.getElementsByClassName('checkmark');

var _loop = function _loop(i) {
  var b = checkmarks[i];
  var cb = checkboxes_real[i];
  b.addEventListener("click", function () {
    toggleCb(checkboxes_real[i]);
  });
  b.addEventListener('keydown', function (e) {
    if (e.code === 'Space') {
      toggleCb(checkboxes_real[i]);
      event.preventDefault();
    }
  });
};

for (var i = 0; i < checkmarks.length; i++) {
  _loop(i);
}

var inputs = document.querySelectorAll(".filters input");

function sendForm(e) {
  var formData = new FormData(document.getElementById("filters"));
  fetch('api/search.php', {
    method: 'POST',
    body: formData
  }).then(function (response) {
    return response.json();
  })["catch"](function (error) {
    return console.error("Error:", error);
  }).then(function (response) {
    fetch("partial/item_card.html").then(function (response) {
      return response.text();
    }).then(function (template) {
      var rendered = Mustache.render(template, response);
      var results = document.getElementById("results");
      results.innerHTML += rendered;
    });
  });
}

inputs.forEach(function (input) {
  addEventListener("click", sendForm);
});