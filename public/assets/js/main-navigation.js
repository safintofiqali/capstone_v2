const input = document.querySelector(".navigation__input");
input.addEventListener("change", () => {
    const items = document.querySelectorAll(".navigation__item");
    items.forEach((item, index) => {
        item.style.animation = `navLinkFade 3s ease forward ${index/5}s`;
        console.log(item, index);
    });
})