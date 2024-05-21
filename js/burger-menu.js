document.addEventListener("DOMContentLoaded", function () {
    const menuBurger = document.querySelector(".burger-open");

    menuBurger.addEventListener("click", function () {
            if (nav.style.display === "flex") {
                nav.style.display = "none";
                changeImageSrc(menuBurger, "burger-open.png");

            } else {
                nav.style.display = "flex";
                changeImageSrc(menuBurger, "burger-close.png");
            }
        });
});