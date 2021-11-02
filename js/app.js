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


// http://canterburyhomekill.co.nz/order-deer/
// Some of Leg options have an additional option field
// leg roast and leg primals have whole and half options
// ham has options for whole, half and third

let leg_v = document.getElementById("leg_v");
let v_leg_whole_half = document.getElementById("v_leg_whole_half");
let v_leg_third = document.getElementById("v_leg_third");

let legs_whole_half = ['leg roast', 'leg primals'];

// this has to be on top
leg_v.addEventListener('change', (event) => {

    if (legs_whole_half.includes(event.target.value) && v_leg_whole_half.value === "third") {
        // console.log("🦄");

        v_leg_whole_half.value = "";
        v_leg_whole_half.removeAttribute("disabled", "");
        v_leg_third.setAttribute("disabled", "");

    } else if (legs_whole_half.includes(event.target.value)) {
        // console.log("🦖");

        v_leg_whole_half.removeAttribute("disabled", "");
        v_leg_third.setAttribute("disabled", "");

    } else if (event.target.value == "ham") {
        // console.log("🐮");

        v_leg_whole_half.removeAttribute("disabled", "");
        v_leg_third.removeAttribute("disabled", "");

    } else {
        // console.log("🍔");

        v_leg_whole_half.setAttribute("disabled", "");
    }

});