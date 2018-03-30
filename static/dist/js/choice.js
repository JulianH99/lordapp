'use strict';

(function () {
    var animation = anime({
        targets: '.race',
        opacity: 1,
        duration: 300,
        delay: function delay(el, i, l) {
            return i * 200;
        }
    });
})();