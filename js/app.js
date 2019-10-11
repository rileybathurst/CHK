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

