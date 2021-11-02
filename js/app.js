// console.log("test");

let miniMenu = document.getElementById("minimenu"); // less complicated than a foreach or a loop with a class
function touchMenu() {
    miniMenu.classList.toggle("minimenu-open");
}

// click outside the minimenu to remove it
function remover() {
    if (miniMenu.classList.contains('minimenu-open')) {
        miniMenu.classList.remove("minimenu-open");
    }
}

const siteLogo_el = document.getElementsByClassName("site-logo"); // i can repeat this with other elements further down the page 
for (let item of siteLogo_el) { // newer browsers only
    item.addEventListener('click', remover, false);
}

// only some of the elements have an additional option
// currently this is just disabled but maybe it should be hidden?
// https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/change_event

let leg_v = document.getElementById("leg_v");
let v_leg_whole_half = document.getElementById("v_leg_whole_half");
let v_leg_third = document.getElementById("v_leg_third");

let legs_whole_half = ['leg roast', 'leg primals'];

// console.log(leg_v);
// console.log(leg_v.option);
// console.log(leg_v.selectedIndex);

leg_v.addEventListener('change', (event) => {

    // console.log("changed");
    // console.log(event.target.value);

    if (legs_whole_half.includes(event.target.value) && v_leg_whole_half == "third") {
        // console.log("leg roast or primals and third");
        
        v_leg_whole_half.removeAttribute("disabled", "");
        v_leg_third.setAttribute("disabled", "");


        // console.log("🦖");
        // console.log(v_leg_whole_half);

        v_leg_third.removeAttribute("selected", "");


    } else if (legs_whole_half.includes(event.target.value)) {

        v_leg_whole_half.addEventListener('change', (event) => {
            // this runs when it moves to third not when it moves above
            if (event.target.value == "third") {
                console.log("🐰");
                // console.log(v_leg_whole_half);
                console.log(v_leg_whole_half.selectedIndex);
                v_leg_whole_half.selectedIndex = 1;
            }
        });

        // console.log("🦄");
        // console.log(v_leg_whole_half);

        v_leg_whole_half.removeAttribute("disabled", "");
        v_leg_third.setAttribute("disabled", "");

    } else if (event.target.value == "ham") {
        v_leg_whole_half.removeAttribute("disabled", "");
        v_leg_third.removeAttribute("disabled", "");
    } else {
        v_leg_whole_half.setAttribute("disabled", "");
    }

/*     if (v_leg_whole_half == "third") {

        finish this 
        
    } */
});