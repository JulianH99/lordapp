'use strict';

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

var run = function run() {
    anime({
        targets: '.race',
        opacity: 1,
        duration: 300,
        delay: function delay(el, i, l) {
            return i * 200;
        }
    });

    detectRaceClick();
};

var detectRaceClick = function detectRaceClick() {

    // detect click on choosing race
    var races = document.querySelector('.races');

    races.addEventListener('click', function (event) {

        console.log('click');
        var race = event.target.closest(".race");

        var raceId = race.getAttribute("id");

        var raceById = '#' + raceId;

        var raceSiblings = siblings(race);

        var animateOtherRaces = function animateOtherRaces() {
            anime({
                targets: raceSiblings,
                opacity: 0,
                translateX: '-100%',
                delay: function delay(el, i, l) {
                    return i * 200;
                }
            });
        };

        var animateChosenRace = function animateChosenRace() {
            return anime({
                targets: raceById,
                scale: '1.8',
                opacity: 0,
                delay: 1000
            });
        };

        var sendForm = function sendForm() {
            document.querySelector("#chosen-race").value = raceId;
            document.querySelector('#race-form').submit();
        };

        animateOtherRaces();
        animateChosenRace().finished.then(function () {
            return sendForm();
        });
    });
};

/**
 * Gets the siblings elements of elem
 * @param elem
 * @returns {*[]}
 */
var siblings = function siblings(elem) {
    var sibls = [].concat(_toConsumableArray(elem.parentElement.children)).filter(function (el) {
        return el !== elem;
    });

    return sibls;
};

document.addEventListener('DOMContentLoaded', run);