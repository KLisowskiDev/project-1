const headerSticky= () => {
    const navigation = document.querySelector(".navbar");
    const header = document.querySelector('.header__top-panel');

    const sectionOneOptions = {
        rootMargin: "0px 0px 0px 0px"
    };
    
    const sectionOneObserver = new IntersectionObserver(function (
            entries,
            sectionOneObserver
        ) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    navigation.classList.add("sticky");
                } else {
                    navigation.classList.remove("sticky");
                }
            });
        },
        sectionOneOptions);

    sectionOneObserver.observe(header);
}

export default headerSticky;
