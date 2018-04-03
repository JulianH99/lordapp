'use strict';

/* initialize weapon slider */

(function () {

    var updateWeaponVal = function updateWeaponVal(weapon) {
        document.querySelector("#character_weapon").value = weapon.dataset.name;
    };

    var weapons = document.querySelectorAll('.weapon-slide');

    var weaponsLenght = weapons.length;

    var slider = document.querySelector('.weapons-slider');

    slider.style.setProperty('--width', weaponsLenght * 100 + '%');

    // handle slider
    var currentIndex = 1;

    var prev = document.querySelector('#prev');
    var next = document.querySelector('#next');

    prev.addEventListener('click', function () {

        if (currentIndex === 0) {
            return;
        } else {
            var leftValue = --currentIndex * -100 + '%';
            slider.style.setProperty('--left', leftValue);
            updateWeaponVal(weapons[currentIndex]);
        }
    });

    next.addEventListener('click', function () {
        if (currentIndex == weaponsLenght - 1) return;else {
            var leftValue = ++currentIndex * -100 + '%';
            slider.style.setProperty('--left', leftValue);
            updateWeaponVal(weapons[currentIndex]);
        }
    });
})();