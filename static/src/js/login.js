
/* useful variables */
let errorColor = "#d81532"

console.log("error")

/* detect keypress on login */

document.querySelector("#login-form").addEventListener('submit', function(e) {

    e.preventDefault()

    let input = document.querySelector("#login-input")

    let value = input.value;

    if(value !== null && value !== "") {
        document.querySelector("#login-form").submit()
    }
    else{

        input.style.setProperty('--shadow-color', errorColor)
        console.log("nope")
    }
})
