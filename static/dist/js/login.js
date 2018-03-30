"use strict";

/* useful variables */
var errorColor = "#d81532";

console.log("error");

/* detect keypress on login */

document.querySelector("#login-form").addEventListener('submit', function (e) {

    e.preventDefault();

    var input = document.querySelector("#login-input");

    var value = input.value;

    if (value !== null && value !== "") {
        document.querySelector("#login-form").submit();
    } else {

        input.style.setProperty('--shadow-color', errorColor);
        console.log("nope");
    }
});