$("#header").vegas({
    transition: 'flash2',
    animation: 'random',
    timer: false,
    preloadVideo: true,
    slides: [
        {
            video: {
                src: [
                    '/assets/images/highway.mp4',
                ],
                mute: true,
                loop: true
            }
        },
        // { src: "/assets/images/slider4.jpg" },
        // { src: "/assets/images/slider2.jpg" }
    ]
});

AOS.init();

//  $("#ex1").modal({
    //   fadeDuration: 100
    //  });