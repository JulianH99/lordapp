
let run = ()=> {


    anime({
        targets: '.race',
        opacity: 1,
        duration: 300,
        delay: (el, i, l) => {
            return i * 200
        }
    })

    detectRaceClick()

}

let detectRaceClick = () => {

    // detect click on choosing race
    let races = document.querySelector('.races')

    races.addEventListener('click', function (event){

        console.log('click')
        let race = event.target.closest(".race")

        let raceId = race.getAttribute("id")

        let raceById = `#${raceId}`


        let raceSiblings = siblings(race)


        let animateOtherRaces = () => {
            anime({
                targets: raceSiblings,
                opacity: 0,
                translateX: '-100%',
                delay: (el, i , l) => {
                    return i * 200;
                }
            })
        }

        let animateChosenRace = () => {
             return anime({
                targets: raceById,
                scale: '1.8',
                opacity: 0,
                delay: 1000
            })
        }

        let sendForm = () => {
            document.querySelector("#chosen-race").value = raceId
            document.querySelector('#race-form').submit()
        }

        animateOtherRaces()
        animateChosenRace().finished.then(() => sendForm())

    })
}


/**
 * Gets the siblings elements of elem
 * @param elem
 * @returns {*[]}
 */
let siblings = (elem) => {
    let sibls = [...elem.parentElement.children].filter(el => el !== elem)

    return sibls
}


document.addEventListener('DOMContentLoaded', run)



