/* initialize weapon slider */

(() =>{


    let updateWeaponVal = (weapon) => {
        document.querySelector("#character_weapon").value = weapon.dataset.name
    }

    let weapons = document.querySelectorAll('.weapon-slide')
    


    let weaponsLenght = weapons.length

    let slider = document.querySelector('.weapons-slider')

    slider.style.setProperty('--width', (weaponsLenght * 100) + '%' )

    
    // handle slider
    let currentIndex = 1

    let prev = document.querySelector('#prev')
    let next = document.querySelector('#next')

    prev.addEventListener('click', () => {
        
        if(currentIndex === 0){
            return;
        }else{
            let leftValue = ((--currentIndex) * (-100)) + '%'
            slider.style.setProperty('--left', leftValue)
            updateWeaponVal(weapons[currentIndex])
        }
    })

    next.addEventListener('click', () => {
        if(currentIndex == weaponsLenght - 1)
            return;
        else{
            let leftValue = ((++currentIndex) * (-100)) + '%'
            slider.style.setProperty('--left', leftValue)
            updateWeaponVal(weapons[currentIndex])
        }
    })

})()

