document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById("menurendszer");
    const nav = document.getElementById("nav");

    if (menuBtn && nav) {
        menuBtn.addEventListener("click", function () {
            nav.classList.toggle("open");
        });
    }
});
