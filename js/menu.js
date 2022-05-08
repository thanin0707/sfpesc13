function dropdown() {
    const menu = document.getElementById("menu");
    const navbar = document.getElementById("nav-bar");
    const navtag =document.getElementById("navtag");
    if (menu.src == "http://[::1]/codeigniter/img/menu-128.png") {
        menu.src = "http://[::1]/codeigniter/img/menu-retracted-128.png";
        navbar.classList.remove("collapse")
        navtag.classList.remove("collapse");

    } else {
        menu.src = "http://[::1]/codeigniter/img/menu-128.png";
        navbar.classList.add("collapse")
        navtag.classList.add("collapse")
    }
}

