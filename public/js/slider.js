// scroll book
const slider = document.querySelector(".scroll-content");
const right = document.getElementById("right");
const left = document.getElementById("left");
const geser = document.getElementById("geserValue");
let content = (slider.offsetWidth - window.innerWidth) / slider.children.length;
content = content + parseInt(geser.value) + slider.children.length;
let currentIndex = 0;

left.addEventListener("click", () => {
    currentIndex =
        (currentIndex - 1 + slider.children.length) % slider.children.length;
    posisi();
});
right.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % slider.children.length;
    posisi();
});
function posisi() {
    const newPosition = -currentIndex * content;
    slider.style.transform = `translateX(${newPosition}px)`;
}

// console.log(slider.offsetWidth);

// const gambar = document.getElementById("gambar-info");
// console.log(gambar.offsetWidth);
// console.log(gambar.offsetHeight);
// End Scroll Book
