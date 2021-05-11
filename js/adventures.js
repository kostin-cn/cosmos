jQuery.noConflict();
(function($){
    $(function(){


        if ($('#adventureSlider').length) {

            function adv_b_slide_hide_next(info) {

                $('.adventuresSlider-controls').addClass('in_process');

                setTimeout(function () {
                    $('.adventuresSlider-controls').removeClass('in_process');

                }, 1500);

                let index = info['displayIndex'];
                let index_c = info['indexCached'];
                let total = info['slideCount'];


                $('#currSlide').text(index);


                if (index > index_c) {
                    $('#adventureSlider').find('.slide').each(function () {
                        if ($(this).data('key') < index) {
                            $(this).addClass('hided');
                        } else {
                            $(this).removeClass('hided');
                        }

                    });
                    b_slide_switch_next(index - 1);

                } else {
                    b_slide_switch_prev(index - 1);
                }

                if (index === total) {
                    setTimeout(function () {
                        $adventureSlider.goTo(0);

                        $('#adventureSlider').find('.slide').each(function () {
                            if ($(this).data('key') < 1) {
                                $(this).addClass('hided');
                            } else {
                                $(this).removeClass('hided');
                            }

                        });

                    }, 4000);
                }


            }
            function adv_b_slide_hide_prev(info) {


                let index = info['displayIndex'];
                let index_c = info['indexCached'];


                if (index == index_c) {
                    $('#adventureSlider').find('.slide').each(function () {
                        if ($(this).data('key') < index) {
                            $(this).addClass('hided');
                        } else {
                            $(this).removeClass('hided');
                        }

                    });

                }
            }

            function b_slide_switch_next(next_i) {


                let $current = $('.wide-slide-container').find('.active');
                let $next = $('.wide-slide-container').find('.b-slide').eq(next_i);

                $current.addClass('active_out');
                $next.addClass('next');

                setTimeout(function () {
                    $next.addClass('ani_ready active');
                }, 10);
                setTimeout(function () {
                    $current.removeClass('active active_out');
                    $next.removeClass('next ani_ready');
                }, 1000);
            }
            function b_slide_switch_prev(next_i) {

                let $current = $('.wide-slide-container').find('.active');
                let $next = $('.wide-slide-container').find('.b-slide').eq(next_i);

                $next.addClass('active active_out');
                $current.addClass('ani_ready next');

                setTimeout(function () {
                    $next.removeClass('active_out');
                    $current.removeClass('active');

                }, 10);
                setTimeout(function () {
                    $current.removeClass('ani_ready next');
                }, 1100);

            }

            let $adventureSlider = tns({
                container: '#adventureSlider',
                slideBy: 1,
                center: true,
                mode: 'carousel',
                axis: 'vertical',
                items: 1,
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
                autoplay: false,
                // autoplay: true,
                autoplayTimeout: 5000,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
                controls: true,
                nav: false,
                loop: false,
                lazyload: false,
                prevButton: '.adventuresArrow.prev',
                nextButton: '.adventuresArrow.next'
            });

            $adventureSlider.events.on('transitionStart', adv_b_slide_hide_next);
            $adventureSlider.events.on('transitionEnd', adv_b_slide_hide_prev);


            const slideItems = $adventureSlider.getInfo().slideItems;
            [...slideItems].map((slItem)=>{
                slItem.addEventListener("click",function() {
                    let slIndex = [...this.parentElement.children].indexOf(this);
                    $adventureSlider.goTo(slIndex);
                    //setTimeout(nextSlide,slideDelay*0.5);
                });
            });

        }


    });
})(jQuery);
