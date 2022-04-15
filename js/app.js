const sidebarSlide = () => {
    const burger = document.querySelector(".burger");
    const close = document.querySelector(".sidebar-modal-content > ul > li");
    const modalContent = document.querySelector(".sidebar-modal-content");

    burger.addEventListener("click", () => {
        modalContent.classList.toggle("active");
    });

    close.addEventListener("click", () => {
        modalContent.classList.toggle("active");
    });
};

cartBtn.addEventListener("click", () => {
    const cartContent = document.querySelector(".cart-content");
    alterClass(cartContent, "cart-content--visible", "toggle");
});

const readMore = () => {
    const readMore = document.querySelector(".jeans-read-more");
    const extraText = document.getElementsByClassName("jeans-extra-text")[0];

    readMore.addEventListener("click", () => {
        if (extraText.style.display === "") {
            readMore.textContent = "Read less..."
            extraText.style.display = "block";
        } else {
            extraText.style.display = "";
            readMore.textContent = "Read more..."
        }
    });
}

sidebarSlide();
readMore();