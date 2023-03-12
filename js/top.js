$(window).on('load', function () {
  gsap.timeline()
    .to('.top-mv__logo', {
      opacity: 1,
      delay: 0.7
    })
    .to('.top-mv__logo', {
      opacity: 0,
      delay: 1
    })
    .add(function () {
      $('.top-mv__bg').addClass('fade-in');
    })
    .to('.js-fade-in', {
      opacity: 1,
      duration: 1.5,
      delay: 2
    });

  gsap.timeline({
      scrollTrigger: {
        trigger: '.service',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        pin: true,
      }
    })
    .to('.service__item--01', {
      opacity: 0
    })
    .from('.service__item--02', {
      opacity: 0
    })
    .to('.service__item--02', {
      opacity: 0
    })
    .from('.service__item--03', {
      opacity: 0
    });

  ScrollTrigger.matchMedia({
    "(min-width: 768px)": function () {
      const listWrapper = document.querySelector('.slide__list-wrapper');
      const list = document.querySelector('.slide__list');

      gsap.to(list, {
        x: () => -(list.clientWidth - listWrapper.clientWidth),
        ease: 'none',
        scrollTrigger: {
          trigger: '.slide',
          start: 'top top',
          end: () => `+=${list.clientWidth - listWrapper.clientWidth}`,
          scrub: true,
          pin: true,
          invalidateOnRefresh: true,
        },
      });

      gsap.to('.facility__img img.pc', {
        y: -200,
        scrollTrigger: {
          trigger: '.facility__img img.pc',
          start: 'top bottom',
          end: 'bottom top',
          scrub: true,
          invalidateOnRefresh: true,
        }
      });
    },

    "(max-width: 767px)": function () {
      gsap.to('.facility__img img.sp', {
        y: -100,
        scrollTrigger: {
          trigger: '.facility__img img.sp',
          start: 'top bottom',
          end: 'bottom top',
          scrub: true,
          invalidateOnRefresh: true,
        }
      });
    },
  });
});