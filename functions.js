 /**
  * Disable dropdowns without any value
  * 
  * @param {var} className 
  * @return {void}
  */
function DropdownListener(className) {
    var select = document.getElementsByClassName(className);
    for (let i = 0; i < select.length; i++) {
        setTimeout((i) => {
            select[i].onchange=()=>{
                for (let j = 0; j < select.length; j++) {
                    if( i != j && select[i].selectedIndex)
                        select[j].disabled=true;
                    else 
                        select[j].disabled=false;
                }
            }
        }, 1,i);
    }                        
}

/**
 * Reset all Dropdown Values
 * 
 * @param {var} className 
 * @return {void}
 */
function DropdownReset(className){
    var select = document.getElementsByClassName(className);
    for (let i = 0; i < select.length; i++) {
        select[i].selectedIndex = 0;
        select[i].disabled=false;
    }
}