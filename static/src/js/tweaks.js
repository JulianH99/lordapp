

let run = () => {

    ranges().forEach(range => {
        range.addEventListener('change', handleRangeChange )
        range.addEventListener('input', updateRangeValue)
    })

}

let updateRangeText = elem => {
    let parent = getParent('stat', elem)

    let textNode = parent.querySelector('.stat__value')

    // set new val on text
    textNode.textContent = elem.value
}

let updateRangeValue = function() {
    updateRangeText(this)
}

let updateRanges = (excludedIndex, sign) => {

    let props = proportions()

    let rgs = ranges()
    
    Object.keys(props).forEach(key => {
        if(key == excludedIndex)
            props[key] = 0
        if(sign === '-') {
            props[key] = (-1) * props[key]
        }
    })

    Object.keys(rgs).forEach(key => {
        let currentInput = rgs[key]
        let id = currentInput.getAttribute('id')
        let attr = id.replace("character_", "")
        
        let valueToApply = props[attr]

        if(id != `character_${excludedIndex}`){
           
            let finalValue = currentInput.value + valueToApply
            currentInput.value = finalValue
            updateRangeText(currentInput)
            
        }
            
    })
    

    console.log(props)
    console.log(rgs)


    
}


let handleRangeChange = function() {

    // get previous value
    let inputAttribute = this.getAttribute("id").replace("character_", "")

    let previousVal = parseInt(this.dataset.oldval)

    let valDifference = this.value - previousVal

    let props = proportions()

    if(Math.abs(valDifference) >= Math.abs(props[inputAttribute])){
        this.dataset.oldval = this.value
        updateRanges(inputAttribute, valDifference > 0? '+' : '-') 
    }
    else return;

}

let getParent = function(parentName, el) {

    var tempParent = el.parentNode

    while(tempParent.getAttribute("class") != parentName){
        tempParent = tempParent.parentNode
    }
        
    return tempParent
}

let proportions = () => JSON.parse(
    document.querySelector('.tweak-container').dataset.proportions
)

let ranges = () => document.querySelectorAll('.stat__input input[type="range"]')

document.addEventListener('DOMContentLoaded', run)