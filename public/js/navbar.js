// Navbar
const navbar = document.getElementsByClassName("nav-collapse")[0];
navbar.addEventListener("mouseover", function (event) {
    const collapse = document.getElementById("collapse");
    collapse.classList.add("translate-y-0");
});
navbar.addEventListener("mouseleave", function (event) {
    const collapse = document.getElementById("collapse");
    collapse.classList.remove("translate-y-0");
});
const collapse = document.getElementById("collapse");
collapse.addEventListener("mouseover", function (event) {
    collapse.classList.add("translate-y-0");
});
collapse.addEventListener("mouseleave", function (event) {
    collapse.classList.remove("translate-y-0");
});
//  End Navbar

// navbar pin
const pinNav = document.getElementById("pin");
const ul = document.querySelector(".ul-nav");
if (pinNav.value == "home") {
    ul.children[0].classList.add("bg-color1");
    ul.children[0].classList.add("text-white");
    ul.children[0].classList.remove("bg-white");
} else if (pinNav.value == "books") {
    ul.children[1].classList.add("bg-color1");
    ul.children[1].classList.add("text-white");
    ul.children[1].classList.remove("bg-white");
} else if (pinNav.value == "layanan") {
    ul.children[3].classList.add("bg-color1");
    ul.children[3].classList.add("text-white");
    ul.children[3].classList.remove("bg-white");
} else if (pinNav.value == "about") {
    ul.children[5].classList.add("bg-color1");
    ul.children[5].classList.add("text-white");
    ul.children[5].classList.remove("bg-white");
} else if (pinNav.value == "blog") {
    ul.children[4].classList.add("bg-color1");
    ul.children[4].classList.add("text-white");
    ul.children[4].classList.remove("bg-white");
}
console.log(ul.chindren);
console.log("gobloj");
// end navbar pin
