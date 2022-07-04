/* ----------- Auto B/W theme Selection ----------- */

const theme = sessionStorage.getItem("theme");
if (theme == "dark") {
    document.body.classList.add("dark");
} else if (theme == "light") {
    document.body.classList.add("light");
} else {
    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
    if (prefersDarkScheme.matches) {
        document.body.classList.add("dark");
    } else {
        document.body.classList.add("light");
    }
}

/* ----------- Manual B/W theme Selection ----------- */

function chengtoggle() {
    if (document.querySelector("body").classList.contains("dark")) {
        document.body.classList.remove("dark");
        document.body.classList.add("light");
        sessionStorage.setItem("theme", "light");
    } else {
        document.body.classList.remove("light");
        document.body.classList.add("dark");
        sessionStorage.setItem("theme", "dark");
    }
}

/* ================= Hide And Show on Scroll Navbar ================ */

var navbar = document.querySelector("nav");
var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
    if (this.pageYOffset > 60) {
        navbar.classList.add("top-not");
    } else {
        navbar.classList.remove("top-not");
    }
}

/* ================= Top Navbar Menu ================= */

function openmenu() {
    document.body.classList.toggle("open-menu");
}

// Clase menu when Clack Ousite the menu

document.addEventListener("click", function(e) {
    if (!e.target.closest(".nav-menu") && !e.target.closest(".nav-menu-btn")) {
        document.body.classList.remove("open-menu");
    }
});

/* ================= product img ================= */
function openimg(e) {
    let fullimg = document.querySelector(".full-img img")
    fullimg.src = e.src;
    console.log(fullimg.src)

} /* ======================== Latest Products Swiper =================== */

var swiper = new Swiper(".Latest_Products", {
    slidesPerView: 4,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    mousewheel: true,
    keyboard: true,
});
/* ======================== categeories Swiper =================== */

var swiper = new Swiper(".categeories", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    mousewheel: true,
    keyboard: true,
});
/* ======================== collaboration Swiper =================== */

var swiper = new Swiper(".collaboration", {
    slidesPerView: 4,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    mousewheel: true,
    keyboard: true,
});

/* ======================== feature Swiper =================== */
var swiper = new Swiper(".feature", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
/* ======================== Login form =================== */

const formInputs = document.querySelectorAll(".input-box");

formInputs.forEach((formInput) => {
    let thisLabel = formInput.nextElementSibling;

    formInput.addEventListener("focus", () => {
        thisLabel.classList.add("active");
    });

    formInput.addEventListener("blur", () => {
        if (formInput.value === "") {
            thisLabel.classList.remove("active");
        }
    });

});