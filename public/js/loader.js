document.addEventListener("DOMContentLoaded", () => {
    gsap.fromTo(
        ".loader",
        { opacity: 1 },
        {
            opacity: 0,
            duration: 1,
            delay: 1,
            onComplete: () =>
                (document.querySelector(".loader").style.display = "none"),
        }
    );
});
