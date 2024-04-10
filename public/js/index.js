$(function () {
    $(".treatment-slick").slick({
        loop: true,
        dots: true,
        arrows: true,
        autoplay: true,
        infinite: true,
        speed: 1500,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    let mode = "mousemove";
    if ($(window).width() > 768) {
        mode = "mousemove";
    } else {
        mode = "drag";
    }
    $("#myImageCompare").imagesCompare({
        initVisibleRatio: 0.5,
        interactionMode: mode,
        addSeparator: true,
        addDragHandle: true,
        animationDuration: 450,
        animationEasing: "linear",
        precision: 2,
    });

});
