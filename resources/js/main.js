$("#header").vegas({
    transition: 'flash2',
    animation: 'random',
    timer: false,
    slides: [{
            video: {
                src: [
                    '/assets/images/tattooing.mp4',
                ],
                loop: false,
                mute: true
            },
            src: '/assets/images/slider1.jpg'
        },
        {
            src: '/assets/images/slider4.jpg',

        }
    ]
});

AOS.init();

//  $("#ex1").modal({
//   fadeDuration: 100
//  });
