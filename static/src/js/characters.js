

let run = () => {
   
    animateCharacters()
    detectCharacterClick()
}

let animateCharacters = () => {
    anime({
        targets: '.character',
        //left: 0,
        opacity: 1,
        delay: (el, i, l) => {
            return i * 400
        }
    })
}

let detectCharacterClick = () => {

    let characters = document.querySelector('.characters')
    characters.addEventListener('click', function(event) {

        let character = event.target.closest('.character')

        let characterId = character.getAttribute('id')

        let charById = `#${characterId}`

        let form = document.querySelector("#char-form")

        let input = form.querySelector('#char-input')

        let animation = anime({
            targets: charById,
            scale: 2,
            opacity: 0
        })


        animation.finished.then(() => {
            input.value = characterId.substr(0, characterId.length - 1) // remove the number
            form.submit()
        })

    })

}

document.addEventListener('DOMContentLoaded', run)

