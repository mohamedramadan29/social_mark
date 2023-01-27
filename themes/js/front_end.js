$(document).ready(function() {
    "use strict";

    /*START SCROLL TO TOP*/
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 400) {
            $("#scroll-top").fadeIn(100);
        } else {
            $("#scroll-top").fadeOut(100);
        }
    });

    $(".fa-close").click(function() {
        $(".mymessage").fadeOut(200)
    });

    $("#scroll-top").click(function() {
        $("body, html").animate({
                scrollTop: 0
            },
            1000
        );
    });

    // END SUC MESSAGE
    var siteSticky = function() {
        $(".js-sticky-header").sticky({ topSpacing: 0 });
    };
    siteSticky();

    var siteMenuClone = function() {
        $(".js-clone-nav").each(function() {
            var $this = $(this);
            $this
                .clone()
                .attr("class", "site-nav-wrap")
                .appendTo(".site-mobile-menu-body");
        });

        setTimeout(function() {
            var counter = 0;
            $(".site-mobile-menu .has-children").each(function() {
                var $this = $(this);

                $this.prepend('<span class="arrow-collapse collapsed">');

                $this.find(".arrow-collapse").attr({
                    "data-toggle": "collapse",
                    "data-target": "#collapseItem" + counter
                });

                $this.find("> ul").attr({
                    class: "collapse",
                    id: "collapseItem" + counter
                });

                counter++;
            });
        }, 1000);

        $(window).resize(function() {
            var $this = $(this),
                w = $this.width();

            if (w > 768) {
                if ($("body").hasClass("offcanvas-menu")) {
                    $("body").removeClass("offcanvas-menu");
                }
            }
        });

        $("body").on("click", ".js-menu-toggle", function(e) {
            var $this = $(this);
            e.preventDefault();

            if ($("body").hasClass("offcanvas-menu")) {
                $("body").removeClass("offcanvas-menu");
                $this.removeClass("active");
            } else {
                $("body").addClass("offcanvas-menu");
                $this.addClass("active");
            }
        });

        // click outisde offcanvas
        $(document).mouseup(function(e) {
            var container = $(".site-mobile-menu");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($("body").hasClass("offcanvas-menu")) {
                    $("body").removeClass("offcanvas-menu");
                }
            }
        });
    };
    siteMenuClone();
    // START COUNTER

    $(".counter").each(function() {
        $(this)
            .prop("Counter", 0)
            .animate({
                Counter: $(this).text()
            }, {
                duration: 300,
                easing: "swing",
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
    });

    /*START SCROLL TO TOP*/

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1000) {
            $("#scroll-top").fadeIn(100);
        } else {
            $("#scroll-top").fadeOut(100);
        }
    });

    $("#scroll-top").click(function() {
        $("body, html").animate({
                scrollTop: 0
            },
            1000
        );
    });


    /* INDEX SLIDER*/


    $(".testiSlide").slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [{
            breakpoint: 850,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true
            }
        }]
    });

    $(".testiSlide2").slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [{
            breakpoint: 850,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true
            }
        }]
    });
    // counter
    // DOM Element's
    const counters = document.querySelectorAll(".counter");




    /*** Same functionality, now using for...of ***/

    for (let n of counters) {
        const updateCount = () => {
            const target = +n.getAttribute("data-target");
            const count = +n.innerText;
            const speed = 250000;

            const inc = target / speed;

            if (count < target) {
                n.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1);
            } else {
                n.innerText = target;
            }
        };

        updateCount();
    }

    $(".shimabutton .togglecolor,.shimabutton2 .togglebutton").click(function() {
        $(this)
            .parent()
            .next("ul")
            .slideToggle();
    });

    $(".item .button_price ul li.button").click(function() {
        $(this)
            .next(".price")
            .slideToggle();
        $(this)
            .next(".price")
            .addClass("new_item");
    });

    $(".more .more_more_button .more_button").click(function() {
        $(this)
            .parent()
            .next(".more_more_price")
            .slideToggle();
    });
    var _createClass = function() {
        function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || false;
                descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true;
                Object.defineProperty(target, descriptor.key, descriptor); } } return function(Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

    function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

    var $window = $(window);
    var $body = $('body');

    var Slideshow = function() {
        function Slideshow() {
            var _this = this;

            var userOptions = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

            _classCallCheck(this, Slideshow);

            var defaultOptions = {
                $el: $('.slideshow'),
                showArrows: false,
                showPagination: true,
                duration: 10000,
                autoplay: true
            };

            var options = Object.assign({}, defaultOptions, userOptions);

            this.$el = options.$el;
            this.maxSlide = this.$el.find($('.js-slider-home-slide')).length;
            this.showArrows = this.maxSlide > 1 ? options.showArrows : false;
            this.showPagination = options.showPagination;
            this.currentSlide = 1;
            this.isAnimating = false;
            this.animationDuration = 1200;
            this.autoplaySpeed = options.duration;
            this.interval;
            this.$controls = this.$el.find('.js-slider-home-button');
            this.autoplay = this.maxSlide > 1 ? options.autoplay : false;

            this.$el.on('click', '.js-slider-home-next', function(event) {
                return _this.nextSlide();
            });
            this.$el.on('click', '.js-slider-home-prev', function(event) {
                return _this.prevSlide();
            });
            this.$el.on('click', '.js-pagination-item', function(event) {
                if (!_this.isAnimating) {
                    _this.preventClick();
                    _this.goToSlide(event.target.dataset.slide);
                }
            });

            this.init();
        }

        _createClass(Slideshow, [{
            key: 'init',
            value: function init() {
                this.goToSlide(1);

                if (this.autoplay) {
                    this.startAutoplay();
                }

                if (this.showPagination) {
                    var paginationNumber = this.maxSlide;
                    var pagination = '<div class="pagination"><div class="container">';

                    for (var i = 0; i < this.maxSlide; i++) {
                        var item = '<span class="pagination__item js-pagination-item ' + (i === 0 ? 'is-current' : '') + '" data-slide=' + (i + 1) + '>' + (i + 1) + '</span>';
                        pagination = pagination + item;
                    }

                    pagination = pagination + '</div></div>';

                    this.$el.append(pagination);
                }
            }
        }, {
            key: 'preventClick',
            value: function preventClick() {
                var _this2 = this;

                this.isAnimating = true;
                this.$controls.prop('disabled', true);
                clearInterval(this.interval);

                setTimeout(function() {
                    _this2.isAnimating = false;
                    _this2.$controls.prop('disabled', false);
                    if (_this2.autoplay) {
                        _this2.startAutoplay();
                    }
                }, this.animationDuration);
            }
        }, {
            key: 'goToSlide',
            value: function goToSlide(index) {
                this.currentSlide = parseInt(index);

                if (this.currentSlide > this.maxSlide) {
                    this.currentSlide = 1;
                }

                if (this.currentSlide === 0) {
                    this.currentSlide = this.maxSlide;
                }

                var newCurrent = this.$el.find('.js-slider-home-slide[data-slide="' + this.currentSlide + '"]');
                var newPrev = this.currentSlide === 1 ? this.$el.find('.js-slider-home-slide').last() : newCurrent.prev('.js-slider-home-slide');
                var newNext = this.currentSlide === this.maxSlide ? this.$el.find('.js-slider-home-slide').first() : newCurrent.next('.js-slider-home-slide');

                this.$el.find('.js-slider-home-slide').removeClass('is-prev is-next is-current');
                this.$el.find('.js-pagination-item').removeClass('is-current');

                if (this.maxSlide > 1) {
                    newPrev.addClass('is-prev');
                    newNext.addClass('is-next');
                }

                newCurrent.addClass('is-current');
                this.$el.find('.js-pagination-item[data-slide="' + this.currentSlide + '"]').addClass('is-current');
            }
        }, {
            key: 'nextSlide',
            value: function nextSlide() {
                this.preventClick();
                this.goToSlide(this.currentSlide + 1);
            }
        }, {
            key: 'prevSlide',
            value: function prevSlide() {
                this.preventClick();
                this.goToSlide(this.currentSlide - 1);
            }
        }, {
            key: 'startAutoplay',
            value: function startAutoplay() {
                var _this3 = this;

                this.interval = setInterval(function() {
                    if (!_this3.isAnimating) {
                        _this3.nextSlide();
                    }
                }, this.autoplaySpeed);
            }
        }, {
            key: 'destroy',
            value: function destroy() {
                this.$el.off();
            }
        }]);

        return Slideshow;
    }();

    (function() {
        var loaded = false;
        var maxLoad = 3000;

        function load() {
            var options = {
                showPagination: true
            };

            var slideShow = new Slideshow(options);
        }

        function addLoadClass() {
            $body.addClass('is-loaded');

            setTimeout(function() {
                $body.addClass('is-animated');
            }, 600);
        }

        $window.on('load', function() {
            if (!loaded) {
                loaded = true;
                load();
            }
        });

        setTimeout(function() {
            if (!loaded) {
                loaded = true;
                load();
            }
        }, maxLoad);

        addLoadClass();
    })();



});


$(window).load(function() {
    $(".loader").fadeOut();
});