'use strict';

var run = function run() {

    animateCharacters();
    detectCharacterClick();
};

var animateCharacters = function animateCharacters() {
    anime({
        targets: '.character',
        //left: 0,
        opacity: 1,
        delay: function delay(el, i, l) {
            return i * 400;
        }
    });
};

var detectCharacterClick = function detectCharacterClick() {

    var characters = document.querySelector('.characters');
    characters.addEventListener('click', function (event) {

        var character = event.target.closest('.character');

        var characterId = character.getAttribute('id');

        var charById = '#' + characterId;

        var form = document.querySelector("#char-form");

        var input = form.querySelector('#char-input');

        var animation = anime({
            targets: charById,
            scale: 2,
            opacity: 0
        });

        animation.finished.then(function () {
            input.value = characterId.substr(0, characterId.length - 1); // remove the number
            form.submit();
        });
    });
};

document.addEventListener('DOMContentLoaded', run);