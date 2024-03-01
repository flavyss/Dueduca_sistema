const drop = () => {
    const menuContent = document.querySelector(".menuContent");

    menuContent.addEventListener("click", (event) => {
        const content = event.target.closest(".content");
        if (content) {
            const down = content.nextElementSibling;
            down.classList.toggle("drop");
        }
    });
    
};

drop();
