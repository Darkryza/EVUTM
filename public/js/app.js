window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");

    if (loader) {
        loader.classList.add("loader-hidden");

        const onTransitionEnd = () => {
            if (loader && loader.parentElement) {
                loader.parentElement.removeChild(loader);
            }
            loader.removeEventListener("transitionend", onTransitionEnd);
        };

        loader.addEventListener("transitionend", onTransitionEnd);
    }
});
