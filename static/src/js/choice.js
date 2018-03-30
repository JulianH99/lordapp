
(() => {
    let animation = anime({
        targets: '.race',
        opacity: 1,
        duration: 300,
        delay: (el, i, l) => {
            return i * 200
        }
    })
})()



