document.addEventListener("DOMContentLoaded", function () {
    const menuBurger = document.querySelector(".burger-open");
    const nav = document.querySelector("nav");

    function changeImageSrc(element, imageName) {
        let currentSrc = element.getAttribute("src");
        let srcArray = currentSrc.split("/");
        srcArray[srcArray.length - 1] = imageName;
        let newSrc = srcArray.join("/");
        element.setAttribute("src", newSrc);
    }

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