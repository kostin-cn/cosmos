jQuery.noConflict();
(function($){
    $(function(){

        //посчитаем 100vh для любого устройства
        let vh100 = window.innerHeight;
        if (window.innerWidth <960) {
            vh100 = window.innerHeight - 60;
        }
        document.documentElement.style.setProperty('--vh100', `${vh100}px`);
        window.addEventListener('resize', ()=>{
            vh100 = window.innerHeight;
            if (window.innerWidth <960) {
                vh100 = window.innerHeight - 60;
            }
            document.documentElement.style.setProperty('--vh100', `${vh100}px`);
        });

        $('#burger').click(function () {
            // $(this).toggleClass('active');
            $('#mobMenu').toggleClass('active');
            $('body').toggleClass('lock-scroll');
        });

        $('#brgr').click(function () {
            $('#mobMenu').removeClass('active');
            $('body').removeClass('lock-scroll');
        });

        $('.blkCntnt a').click(function () {
            $('#mobMenu').removeClass('active');
            $('body').removeClass('lock-scroll');
        });

        $('.mobDropMenu .blockA').click(function () {
            if ($(this).parent().hasClass('active')) {
                $('.mobDropMenu').removeClass('active')
            }else {
                $('.mobDropMenu').removeClass('active');
                $(this).parent().addClass('active')
            }
        });

        $('.mobSubDropMenu .blockB').click(function () {
            if ($(this).parent().hasClass('clicked')) {
                $('.mobSubDropMenu').removeClass('clicked')
            }else {
                $('.mobSubDropMenu').removeClass('clicked');
                $(this).parent().addClass('clicked')
            }
        });

        if ($('#indexSlider').length) {
            let slMode = 'gallery';
            if (window.innerWidth < 960) {
                slMode = 'carousel';
            }
            let $indexSlider = tns({
                container: '#indexSlider',
                items: 1,
                slideBy: 'page',
                mode: slMode,
                animateDelay: true,
                autoplay: true,
                autoplayTimeout: 7000,
                speed: 700,
                autoplayButtonOutput: false,
                controls: true,
                nav: false,
                loop: true,
                lazyload: true,
                prevButton: '.indexArrow.prev',
                nextButton: '.indexArrow.next'
            });

            $indexSlider.events.on(`transitionStart`, function() {
                $('#currSlide').text($('.tns-slide-active').data('key'));
            });
        }

        if ($('#promoSlider').length) {
            let $promoSlider = tns({
                container: '#promoSlider',
                items: 1,
                gutter: 20,
                responsive: {
                    500: {
                        items: 1,
                        gutter: 10,
                    },
                    960: {
                        items: 3
                    },
                },
                slideBy: 'page',
                mode: 'carousel',
                animateDelay: true,
                autoplay: false,
                autoplayTimeout: 7000,
                speed: 700,
                autoplayButtonOutput: false,
                controls: true,
                nav: false,
                loop: false,
                lazyload: false,
                prevButton: '.promoArrow.prev',
                nextButton: '.promoArrow.next'
            });
        }

        if ($('#awardsSlider').length) {
            let $awardsSlider = tns({
                container: '#awardsSlider',
                items: 1,
                responsive: {
                    500: {
                        items: 1
                    },
                    960: {
                        items: 3
                    },
                },
                slideBy: 'page',
                mode: 'carousel',
                animateDelay: true,
                autoplay: false,
                autoplayTimeout: 7000,
                speed: 700,
                autoplayButtonOutput: false,
                controls: true,
                nav: false,
                loop: false,
                lazyload: false,
                prevButton: '.awardsArrow.prev',
                nextButton: '.awardsArrow.next'
            });
        }

        if ($('#eventsSlider').length) {
            let $eventsSlider = tns({
                container: '#eventsSlider',
                items: 1,
                responsive: {
                    500: {
                        items: 1
                    },
                    960: {
                        items: 3
                    },
                },
                slideBy: 'page',
                mode: 'carousel',
                animateDelay: true,
                autoplay: false,
                autoplayTimeout: 7000,
                speed: 700,
                autoplayButtonOutput: false,
                controls: true,
                nav: false,
                loop: false,
                lazyload: false,
                prevButton: '.eventsArrow.prev',
                nextButton: '.eventsArrow.next'
            });
        }

        if ($('#attachSlider').length) {
            let $attachSlider = tns({
                container: '#attachSlider',
                items: 1,
                slideBy: 'page',
                mode: 'gallery',
                animateDelay: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplayButtonOutput: false,
                controls: true,
                nav: false,
                loop: false,
                lazyload: false,
                prevButton: '.attachArrow.prev',
                nextButton: '.attachArrow.next'
            });
        }

        if ($('#adventureSlider').length) {
            let $adventureSlider = tns({
                container: '#adventureSlider',
                items: 4,
                slideBy: 1,
                center: true,
                mode: 'carousel',
                axis: 'vertical',
                animateDelay: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplayButtonOutput: false,
                controls: true,
                nav: false,
                loop: false,
                lazyload: false,
                prevButton: '.adventuresArrow.prev',
                nextButton: '.adventuresArrow.next'
            });
        }

        if ($('#mobAdvSlider').length) {
            let $advSlider = tns({
                container: '#mobAdvSlider',
                slideBy: 1,
                center: true,
                mode: 'carousel',
                items: 1.3,
                responsive: {
                    500: {
                        items: 2
                    },
                    960: {
                        items: 4,
                    },
                },
                speed: 900,
                animateDelay: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
                controls: true,
                nav: false,
                loop: false,
                lazyload: false,
                prevButton: '.advArrow.prev',
                nextButton: '.advArrow.next'
            });
        }

        if ($('#restaurantSlider').length) {
            let $restaurantSlider = tns({
                container: '#restaurantSlider',
                items: 1,
                responsive: {
                    500: {
                        items: 1.2,
                        gutter: 0,
                        edgePadding: 0,
                    },
                },
                slideBy: 1,
                mode: 'carousel',
                gutter: 15,
                edgePadding: 30,
                animateDelay: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplayButtonOutput: false,
                controls: true,
                nav: true,
                lazyload: false,
                prevButton: '.restaurantArrow.prev',
                nextButton: '.restaurantArrow.next'
            });

            let index;
            $restaurantSlider.events.on("indexChanged", () => {
                const info = $restaurantSlider.getInfo();
                const originalCount = info.slideCount;
                const allCount = info.slideCountNew;
                const itemsCount = info.items;
                const indexCurrent = info.index;
                if (index !== indexCurrent) {
                    index = indexCurrent;
                    if (index === 1) {
                        info.slideItems[originalCount + 1].classList.add("current");
                    } else if (index === allCount - itemsCount) {
                        info.slideItems[allCount - itemsCount - originalCount + 1].classList.add("current");
                    }
                }
            });
        }

        if ($('.advantagesSlider').length) {

            $('.catLink').on("click", function () {
                let link = $(this).data('id');
                $('.catLink').removeClass('active');
                $(this).addClass('active');
                $('.sectionRecreation .sliderContainer').addClass('hidden');

                // $advantagesSlider.destroy();
                // $advantagesSlider = tns({
                //     container: link+' .advantagesSlider',
                //     items: 1,
                //     slideBy: 1,
                //     mode: 'gallery',
                //     gutter: 15,
                //     edgePadding: 30,
                    // responsive: {
                    //     500: {
                    //         gutter: 0,
                    //         edgePadding: 0,
                    //     },
                    //     960: {
                    //         gutter: 15,
                    //         edgePadding: 30,
                    //     }
                    // },
                    // animateDelay: true,
                    // autoplay: false,
                    // autoplayTimeout: 5000,
                    // autoplayButtonOutput: false,
                    // controls: true,
                    // nav: false,
                    // lazyload: false,
                    // prevButton: '.advantagesArrow.prev',
                    // nextButton: '.advantagesArrow.next'
                // });

                $(link).removeClass('hidden');
            });

            // let $advantagesSlider = tns({
            //     container: '#slider-0 .advantagesSlider',
            //     items: 1,
            //     slideBy: 1,
            //     responsive: {
            //         500: {
            //             gutter: 0,
            //             edgePadding: 0,
            //         },
            //         960: {
            //             gutter: 15,
            //             edgePadding: 30,
            //         }
            //     },
            //     mode: 'gallery',
            //     animateDelay: true,
            //     autoplay: false,
            //     autoplayTimeout: 5000,
            //     autoplayButtonOutput: false,
            //     controls: true,
            //     nav: false,
            //     lazyload: false,
            //     prevButton: '.advantagesArrow.prev',
            //     nextButton: '.advantagesArrow.next'
            // });

        }

        if ($('.sectionServices').length) {





            let $servicesCatSlider = tns({
                container: "#servicesCategories",
                autoWidth:true,
                items: 2,
                slideBy: 1,
                gutter:15,
                mode: "carousel",
                autoplay: false,
                autoplayButtonOutput: false,
                controls: true,
                nav: false,
                lazyload: false,
                loop: false,
                mouseDrag: true,
                prevButton: '.catArrow.prev',
                nextButton: '.catArrow.next'
            });

            let $svcSlider = tns({
                container: '#block-0 .itemSlider',
                items: 1,
                slideBy: 1,
                mode: 'carousel',
                animateDelay: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplayButtonOutput: false,
                controls: false,
                nav: true,
                lazyload: false,
            });

            $('.catLinkSvc').click(function () {
                const index = $(this).index();
                $servicesCatSlider.goTo(index);

                let link = $(this).data('id');
                $('.catLinkSvc').removeClass('active');
                $(this).addClass('active');
                $('.sectionServices .itemBlock').addClass('hidden');

                $svcSlider.destroy();
                $svcSlider = tns({
                    container: link+' .itemSlider',
                    items: 1,
                    slideBy: 1,
                    mode: 'gallery',
                    gutter: 15,
                    edgePadding: 30,
                    animateDelay: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplayButtonOutput: false,
                    controls: false,
                    nav: true,
                    lazyload: false,
                });

                $(link).removeClass('hidden');
            });

        }

        // $('.indexArrow').click(function () {
        //     $('#currSlide').text($('.tns-slide-active').data('key'));
        // });

        function isFilled() {
            scrolled = window.pageYOffset || document.documentElement.scrollTop;

            if(scrolled > 10){
                $("#mainNav").addClass("filled");
                $(".hotelNav").addClass("filled");
            }
            if(10 > scrolled){
                $("#mainNav").removeClass("filled");
                $(".hotelNav").removeClass("filled");
            }
        }
        isFilled();

        function iOS() {
            return [
                    'iPad Simulator',
                    'iPhone Simulator',
                    'iPod Simulator',
                    'iPad',
                    'iPhone',
                    'iPod'
                ].includes(navigator.platform)
                // iPad on iOS 13 detection
                || (navigator.userAgent.includes("Mac") && "ontouchend" in document)
        }

        if ($('.bgFix').length) {
            if (iOS()) {
                $('.bgFix').addClass('itsIphone');
            } else {
                $('.bgFix').addClass('notIphone');
            }
        }

        let w_p;
        window.onscroll = function() {
            isFilled();
            show_jq_hidden();

            w_p = $(window).scrollTop() - 10;
            if ($('.respons__block').length) {
                if (window.innerWidth > 960) {
                    $('.respons__block').each(function () {
                        let b_h = $(this).outerHeight();
                        if (b_h >= w_p) {
                            $(this).animate({
                                'background-position-x': '50%',
                                'background-position-y': $(window).scrollTop()/3
                            }, 0);
                        }
                    });
                }else {
                    $('.respons__block').each(function () {
                        let b_h = $(this).outerHeight();
                        if (b_h >= w_p) {
                            $(this).animate({
                                'background-position-x': '50%',
                                'background-position-y': 0
                            }, 0);
                        }
                    });
                }
            }
            // if ($('.bgFix').length) {
            //     $('.bgFix').each(function () {
            //         if ($(this).hasClass('itsIphone')) $(this).css({"background-position-y": w_p+10-$(this).offset().top+"px"});
            //     });
            // }

        };

        // if ($('.form-accordeon').length) {
        //     $('.accordeonHead').click(function () {
        //         $('.form-accordeon').toggleClass('active')
        //     })
        // }

        if ($('.footer-accordeon').length) {
            $('.footer-accordeonHead').click(function () {
                if ($(this).parent().hasClass('active')) {
                    $('.footer-accordeon').removeClass('active');
                }else {
                    $('.footer-accordeon').removeClass('active');
                    $(this).parent().addClass('active')
                }
            })
        }

        if ($('.dropdownNav').length) {
            $('.dropdownNav .current').click(function () {
                if ($(this).parent().hasClass('active')) {
                    $('.dropdownNav').removeClass('active');
                    $('.navTop').removeClass('active');
                }else {
                    $('.dropdownNav').removeClass('active');
                    $(this).parent().addClass('active')
                    $('.navTop').addClass('active');
                }
            })
        }

        //Change img on hover in hotel page
        if (window.innerWidth >960) {
            const hoverHandler = (data) => {
                const thisImages = document.querySelectorAll('.thisImg');
                thisImages.forEach(el => {
                    el.classList.remove('active');
                    if (el.dataset.key === data) {
                        el.classList.add('active');
                        el.src = `${el.dataset.src}`;
                    }
                })
            }

            const hoverElems = document.querySelectorAll('.hoverElem');
            hoverElems.forEach(el => {
                el.addEventListener('mouseover', function () {
                    hoverHandler(el.dataset.key);
                });
            });

        }

        //Contacts Accordeon
        const liHead = document.querySelectorAll('.liHead');
        const liBody = document.querySelectorAll('.liBody');

        liHead.forEach((el, i) => {
            el.addEventListener('click', function () {
                if (el.classList.contains('active')) {
                    el.classList.remove('active');
                    liBody[i].classList.remove('active');
                } else {
                    liHead.forEach(e => e.classList.remove('active'));
                    liBody.forEach(e => e.classList.remove('active'));
                    el.classList.add('active');
                    liBody[i].classList.add('active');
                }
            });
        });

        //Hotel dropdown active toggle
        const dropBtn = document.querySelector('#dropdownMenu');
        const hotelDropdown = document.querySelector('#hotelsDropMenu');
        let mainNav = document.querySelector('#mainNav');
        if (mainNav == null) {
            mainNav = document.querySelector('.hotelNav');
        }
        dropBtn.addEventListener('click', function () {
            if (dropBtn.classList.contains('clicked') && hotelDropdown.classList.contains('active') && mainNav.classList.contains('drop-active')) {
                dropBtn.classList.remove('clicked');
                hotelDropdown.classList.remove('active');
                mainNav.classList.remove('drop-active');
            } else {
                dropBtn.classList.add('clicked');
                hotelDropdown.classList.add('active');
                mainNav.classList.add('drop-active');
            }
        });

        show_jq_hidden();
        function show_jq_hidden() {
            $('.jq_hidden').each(function(){
                let scroll_pos = window.pageYOffset;
                if ($(this).offset().top < scroll_pos + $(window).height() + 300) {

                    // SVG анимация

                    if (!$(this).hasClass('jq_active')) {
                        if ($(this).hasClass('vivusItem')) {
                            let vivus;
                            let duration = 200;
                            vivus = new Vivus(this.getElementsByTagName('svg')[0], {
                                // type: 'delayed',
                                duration: duration,
                                start: 'autostart',
                                // animTimingFunction: Vivus.EASE
                            } ,function(){});
                        }
                    }

                    $(this).addClass('jq_active');
                }
                if ($(this).offset().top > scroll_pos + $(window).height() + 300) {
                    $(this).removeClass('jq_active');
                }
            });
        }

    });
})(jQuery);
