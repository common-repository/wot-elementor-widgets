
// document.addEventListener('DOMContentLoaded', function () {
//     function initTestimonialSliderContainers(container) {
//         let currentIndex = 0;
//         let slides = container.querySelectorAll('.wot-slider-slide-repeater');
//         let totalSlides = slides.length;
//         let nextButton = container.querySelector('.slider-button-next');
//         let prevButton = container.querySelector('.slider-button-prev');
//         let indicators = container.querySelectorAll('.wot-testimonial-slider-indicator .btn');
//         let animationSpeedEle = container.querySelector('#wot-testimonial-slider-id');
//         let animationSpeed = animationSpeedEle ? parseInt(animationSpeedEle.dataset.animationspeed) : 3000;
//         let pauseOnHover = animationSpeedEle ? animationSpeedEle.dataset.pause === 'true' : true;
//         let infiniteLoop = animationSpeedEle ? animationSpeedEle.dataset.infinite === 'true' : true;
//         let slideRow = container.querySelector('.wot-slider-slide-row');
//         let intervalId;

//         function showSlide(index) {
//             slides.forEach((slide, i) => {
//                 // slide.style.display = (i === index) ? 'block' : 'none';
//                 if (i === index) {
//                     slide.classList.add('active-slide');
//                 } else {
//                     slide.classList.remove('active-slide');
//                 }
//                 // slide.style.transition = 'transition: all 1s ease-out;';
             
//             });

//             if (indicators.length > 0) {
//                 indicators.forEach((indicator, i) => {
//                     indicator.classList.toggle('wot-active', i === index);
//                 });
//             }
//         }



//         function nextSlide() {
//             if (infiniteLoop) {
//                 currentIndex = (currentIndex + 1) % totalSlides;
//                 console.log(currentIndex);
               
//             } else {
//                 if (currentIndex < totalSlides - 1) {
//                     currentIndex = currentIndex + 1;
//                 } else {
//                     stopAutoSlide();
//                 }
//             }
//             // updateSlide()
//             showSlide(currentIndex);
//         }

//         function prevSlide() {
//             if (infiniteLoop) {
//                 currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
//             } else {
//                 currentIndex = Math.max(currentIndex - 1, 0);
//             }
//             showSlide(currentIndex);
//             // updateSlide()
//         }

//         function startAutoSlide() {
//             if (animationSpeed > 500) {
//                 intervalId = setInterval(nextSlide, animationSpeed);
//             }
//         }

//         function stopAutoSlide() {
//             clearInterval(intervalId);
//         }

//         if (nextButton && prevButton) {
//             nextButton.addEventListener('click', () => {
//                 stopAutoSlide();
//                 nextSlide();
//                 startAutoSlide();
//             });
//             prevButton.addEventListener('click', () => {
//                 stopAutoSlide();
//                 prevSlide();
//                 startAutoSlide();
//             });
//         }

//         // Add event listeners to indicators
//         indicators.forEach((btn, index) => {
//             btn.addEventListener('click', () => {
//                 stopAutoSlide();
//                 showSlide(index);
//                 startAutoSlide();
//             });
//         });

//         if (pauseOnHover) {
//             slides.forEach((slide) => {
//                 slide.addEventListener('mouseenter', stopAutoSlide);
//                 slide.addEventListener('mouseleave', startAutoSlide);
//             });
//         }

//         startAutoSlide();
//         showSlide(currentIndex);
//     }

//     function initTestimonialSlider() {
//         document.querySelectorAll("[id^='testimonial-slider-container']").forEach(container => {
//             initTestimonialSliderContainers(container);
//         });
//     }

//     function checkElementor() {
//         if (typeof elementor !== "undefined" && typeof elementorFrontend !== "undefined") {
//             // Initialize slider for the first time
//             initTestimonialSlider();

//             // Listen for Elementor live editor changes
//             elementorFrontend.hooks.addAction('frontend/element_ready/wot_testimonial_slider.default', function ($scope) {
//                 initTestimonialSliderContainers($scope[0]);
//             });

//             elementorFrontend.hooks.addAction('frontend/element_ready/widget', function ($scope) {
//                 if ($scope.hasClass('elementor-widget-wot_testimonial_slider')) {
//                     initTestimonialSliderContainers($scope[0]);
//                 }
//             });
//         } else {
//             setTimeout(checkElementor, 100);
//         }
//     }

//     checkElementor();
//     initTestimonialSlider();
// });




document.addEventListener('DOMContentLoaded', function () {
    function initTestimonialSliderContainers(container) {
        let currentIndex = 0;
        let slides = container.querySelectorAll('.wot-slider-slide-repeater');
        let totalSlides = slides.length;
        let nextButton = container.querySelector('.slider-button-next');
        let prevButton = container.querySelector('.slider-button-prev');
        let indicators = container.querySelectorAll('.wot-testimonial-slider-indicator .btn');
        let animationSpeedEle = container.querySelector('#wot-testimonial-slider-id');
        let animationSpeed = animationSpeedEle ? parseInt(animationSpeedEle.dataset.animationspeed) : 3000;
        let pauseOnHover = animationSpeedEle ? animationSpeedEle.dataset.pause === 'true' : true;
        let infiniteLoop = animationSpeedEle ? animationSpeedEle.dataset.infinite === 'true' : true;
        let intervalId;

        function showSlide(index, direction) {
            slides.forEach((slide, i) => {
                slide.classList.remove('wot-slider-active-slide', 'wot-slider-slide-enter-left', 'wot-slider-slide-enter-right', 'wot-slider-slide-exit-left', 'wot-slider-slide-exit-right');

                if (i === index) {
                    slide.classList.add('wot-slider-active-slide', direction === 'next' ? 'wot-slider-slide-enter-right' : 'wot-slider-slide-enter-left');
                } else if (i === currentIndex) {
                    slide.classList.add(direction === 'next' ? 'wot-slider-slide-exit-left' : 'wot-slider-slide-exit-right');
                }
                setTimeout(() => {
                    slide.classList.remove('wot-slider-slide-enter-left', 'wot-slider-slide-enter-right', 'wot-slider-slide-exit-left', 'wot-slider-slide-exit-right');
                }, 10);
            });

            if (indicators.length > 0) {
                indicators.forEach((indicator, i) => {
                    indicator.classList.toggle('wot-active', i === index);
                });
            }
            currentIndex = index;
        }

        function nextSlide() {
            let nextIndex = (currentIndex + 1) % totalSlides;
            if (!infiniteLoop && nextIndex === 0) return;
            showSlide(nextIndex, 'next');
        }

        function prevSlide() {
            let prevIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            if (!infiniteLoop && prevIndex === totalSlides - 1) return;
            showSlide(prevIndex, 'prev');
        }

        function startAutoSlide() {
            if (animationSpeed > 500) {
                intervalId = setInterval(nextSlide, animationSpeed);
            }
        }

        function stopAutoSlide() {
            clearInterval(intervalId);
        }

        if (nextButton && prevButton) {
            nextButton.addEventListener('click', () => {
                stopAutoSlide();
                nextSlide();
                startAutoSlide();
            });
            prevButton.addEventListener('click', () => {
                stopAutoSlide();
                prevSlide();
                startAutoSlide();
            });
        }

        indicators.forEach((btn, index) => {
            btn.addEventListener('click', () => {
                stopAutoSlide();
                showSlide(index, index > currentIndex ? 'next' : 'prev');
                startAutoSlide();
            });
        });

        if (pauseOnHover) {
            slides.forEach((slide) => {
                slide.addEventListener('mouseenter', stopAutoSlide);
                slide.addEventListener('mouseleave', startAutoSlide);
            });
        }

        startAutoSlide();
        showSlide(currentIndex, 'next');
    }

    function initTestimonialSlider() {
        document.querySelectorAll("[id^='testimonial-slider-container']").forEach(container => {
            initTestimonialSliderContainers(container);
        });
    }

    function checkElementor() {
        if (typeof elementor !== "undefined" && typeof elementorFrontend !== "undefined") {
            initTestimonialSlider();

            elementorFrontend.hooks.addAction('frontend/element_ready/wot_testimonial_slider.default', function ($scope) {
                initTestimonialSliderContainers($scope[0]);
            });

            elementorFrontend.hooks.addAction('frontend/element_ready/widget', function ($scope) {
                if ($scope.hasClass('elementor-widget-wot_testimonial_slider')) {
                    initTestimonialSliderContainers($scope[0]);
                }
            });
        } else {
            setTimeout(checkElementor, 100);
        }
    }

    checkElementor();
    initTestimonialSlider();
});
