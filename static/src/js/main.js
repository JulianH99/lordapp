


/* detect keypress on login */

document.querySelector("#login-input").addEventListener('keypress', function(e){

    let charCode = e.keyCode

    let value = this.value

    if(charCode === 13) {
        if(!value.empty()) {
            fetch("http://localhost/lordapp/?c=home&m=login", {
                method: 'post',
                body: JSON.stringify({name: value}),
                headers: new Headers({
                    'Content-Type': 'application/json'
                })
            })
                .then(res => res.json())
                .then(res => window.location = `http://localhost/${res}`)
                .catch(error => alert(error))

        }
        else{

        }
    }

})