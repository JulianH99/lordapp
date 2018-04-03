'use strict';

var run = function run() {

    ranges().forEach(function (range) {
        range.addEventListener('change', handleRangeChange);
        range.addEventListener('input', updateRangeValue);
    });
};

var updateRangeText = function updateRangeText(elem) {
    var parent = getParent('stat', elem);

    var textNode = parent.querySelector('.stat__value');

    // set new val on text
    textNode.textContent = elem.value;
};

var updateRangeValue = function updateRangeValue() {
    updateRangeText(this);
};

var updateRanges = function updateRanges(excludedIndex, sign) {

    var props = proportions();

    var rgs = ranges();

    Object.keys(props).forEach(function (key) {
        if (key == excludedIndex) props[key] = 0;
        if (sign === '-') {
            props[key] = -1 * props[key];
        }
    });

    Object.keys(rgs).forEach(function (key) {
        var currentInput = rgs[key];
        var id = currentInput.getAttribute('id');
        var attr = id.replace("character_", "");

        var valueToApply = props[attr];

        if (id != 'character_' + excludedIndex) {

            var finalValue = currentInput.value + valueToApply;
            currentInput.value = finalValue;
            updateRangeText(currentInput);
        }
    });

    console.log(props);
    console.log(rgs);
};

var handleRangeChange = function handleRangeChange() {

    // get previous value
    var inputAttribute = this.getAttribute("id").replace("character_", "");

    var previousVal = parseInt(this.dataset.oldval);

    var valDifference = this.value - previousVal;

    var props = proportions();

    if (Math.abs(valDifference) >= Math.abs(props[inputAttribute])) {
        this.dataset.oldval = this.value;
        updateRanges(inputAttribute, valDifference > 0 ? '+' : '-');
    } else return;
};

var getParent = function getParent(parentName, el) {

    var tempParent = el.parentNode;

    while (tempParent.getAttribute("class") != parentName) {
        tempParent = tempParent.parentNode;
    }

    return tempParent;
};

var proportions = function proportions() {
    return JSON.parse(document.querySelector('.tweak-container').dataset.proportions);
};

var ranges = function ranges() {
    return document.querySelectorAll('.stat__input input[type="range"]');
};

document.addEventListener('DOMContentLoaded', run);