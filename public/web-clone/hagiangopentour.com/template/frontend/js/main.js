/*js icon menu bar*/

function myFunction(x) {

    x.classList.toggle("change");

}



// ?jquery mobile

(function ($) {

    var $main_nav = $('#main-nav');

    var $toggle = $('.toggle');



    var defaultData = {

        maxWidth: false,

        customToggle: $toggle,

        // navTitle: 'All Categories',

        levelTitles: true,

        pushContent: '#container'

    };



    // add new items to original nav

    $main_nav.find('li.add').children('a').on('click', function () {

        var $this = $(this);

        var $li = $this.parent();

        var items = eval('(' + $this.attr('data-add') + ')');



        $li.before('<li class="new"><a>' + items[0] + '</a></li>');



        items.shift();



        if (!items.length) {

            $li.remove();

        } else {

            $this.attr('data-add', JSON.stringify(items));

        }



        Nav.update(true);

    });



    // call our plugin

    var Nav = $main_nav.hcOffcanvasNav(defaultData);



    // demo settings update



    const update = (settings) => {

        if (Nav.isOpen()) {

            Nav.on('close.once', function () {

                Nav.update(settings);

                Nav.open();

            });



            Nav.close();

        } else {

            Nav.update(settings);

        }

    };



    $('.actions').find('a').on('click', function (e) {

        e.preventDefault();



        var $this = $(this).addClass('active');

        var $siblings = $this.parent().siblings().children('a').removeClass('active');

        var settings = eval('(' + $this.data('demo') + ')');



        update(settings);

    });



    $('.actions').find('input').on('change', function () {

        var $this = $(this);

        var settings = eval('(' + $this.data('demo') + ')');



        if ($this.is(':checked')) {

            update(settings);

        } else {

            var removeData = {};

            $.each(settings, function (index, value) {

                removeData[index] = false;

            });



            update(removeData);

        }

    });

})(jQuery);

wow = new WOW(

    {

        animateClass: 'animated',

        offset: 100,

        callback: function (box) {

            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")

        }

    }

);

wow.init();

// $(document).ready(function () {

//     var stickyTop = $("#header-site").offset().top;

//     jQuery(window).scroll(function () {

//         if (jQuery(window).scrollTop() > stickyTop) {

//             jQuery('#header-site').addClass('header-sticky');

//         } else {

//             jQuery('#header-site').removeClass('header-sticky');

//         }

//     });

// });

$(function () {

    $('a[href*=#]:not([href=#])').click(function () {

        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

            var target = $(this.hash);

            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            if (target.length) {

                $('html,body').animate({

                    scrollTop: target.offset().top - 78

                }, 500);

                $(".navMB > li > a").removeClass("active");

                $(this).addClass("active");

                return false;

            }

        }

    });

    $(window).scroll(function () {

        $("section").each(function () {

            if (ScrollView($(this))) {

                var id = $(this).attr("id");

                $(".navMB > li > a").removeClass("active");

                $(".navMB > li > a[href='#" + id + "']").addClass("active");

            }

        });

    });



    function ScrollView(element) {

        var win = $(window);

        var winTop = win.scrollTop();

        var winBottom = winTop + win.height();

        var elementTop = element.offset().top;

        var elementBottom = elementTop + element.height();



        if ((elementBottom <= winBottom) && (elementTop >= winTop)) {

            return true;

        }

        return false;

    }

});

$(document).ready(function () {

    $('#mailsubricre .error').hide();

    var uri = $('#mailsubricre').attr('action');

    $('#mailsubricre').on('submit', function () {

        var postData = $(this).serializeArray();

        $.post(uri, {

            post: postData,

            fullname: $('#mailsubricre .fullname').val(),

            phone: $('#mailsubricre .phone').val(),

            email: $('#mailsubricre .email').val()

        }, function (data) {

            var json = JSON.parse(data);

            $('#mailsubricre .error').show();

            if (json.error.length) {

                $('#mailsubricre .error').removeClass('alert alert-success').addClass('alert alert-danger');

                $('#mailsubricre .error').html('').html(json.error);

            } else {



                $('#mailsubricre .error').removeClass('alert alert-danger').addClass('alert alert-success');

                $('#mailsubricre .error').html('').html('Đăng ký tư vấn thành công.');

                $('#mailsubricre').trigger("reset");

                setTimeout(function () {

                    location.reload();

                }, 3000);

            }

        });

        return false;

    });

});

$('#slider-home').owlCarousel({

    loop: true,

    margin: 0,

    dots: false,

    nav: true,

    autoplay: true,

    autoplayTimeout: 5000,

    autoplaySpeed: 1500,

    lazyLoad: false,

    navText: ['<span aria-label="Previous">‹</span>', '<span aria-label="Next">›</span>'],

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 1

        }

    }

});

$('#slider-home-partner').owlCarousel({

    loop: true,

    margin: 30,

    dots: false,

    nav: true,

    autoplay: true,

    autoplayTimeout: 5000,

    autoplaySpeed: 1500,

    lazyLoad: false,

    navText: ['<span aria-label="Previous">‹</span>', '<span aria-label="Next">›</span>'],

    responsive: {

        0: {

            items: 2

        },

        600: {

            items: 4

        },

        1000: {

            items: 5

        }

    }

});

$('#slider-home-album').owlCarousel({

    loop: true,

    margin: 0,

    dots: false,

    nav: false,

    autoplay: true,

    autoplayTimeout: 4000,

    autoplaySpeed: 1500,

    lazyLoad: false,

    navText: ['<span aria-label="Previous">‹</span>', '<span aria-label="Next">›</span>'],

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 1

        }

    }

});

var owl = $("#slider-home-chitiet").owlCarousel({

    loop: false,

    margin: 0,

    dots: true,

    dotsContainer: '#carousel-custom-dots',

    nav: false,

    autoplay: false,

    autoplayTimeout: 5000,

    autoplaySpeed: 1500,

    lazyLoad: false,

    navText: ['<span aria-label="Previous">‹</span>', '<span aria-label="Next">›</span>'],

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 1

        }

    },

    startPosition: randomPosition()



});

$('.owl-dot').click(function () {

    owl.trigger('to.owl.carousel', [$(this).index(), 300]);

});

//Random index generator

function randomPosition() {

    var r_hb = $('#carousel-custom-dots li').length;

    var randomize = null;





    randomize = 1





    if (randomize != 0) {

        return (Math.floor(Math.random() * r_hb));

    }

    else {

        return 0;

    }

}

//Sort random function

function random(owlSelector) {

    owlSelector.children().sort(function () {

        return Math.round(Math.random()) - 0.5;

    }).each(function () {

        $(this).appendTo(owlSelector);

    });

}

$('#slider-hagiang').owlCarousel({

    loop: false,

    margin: 0,

    dots: true,

    nav: true,

    autoplay: true,

    autoplayTimeout: 5000,

    autoplaySpeed: 1500,

    lazyLoad: false,

    navText: ['<span aria-label="Previous">‹</span>', '<span aria-label="Next">›</span>'],

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 1

        }

    }

});
$('.product-category-owl').owlCarousel({

    loop: true,

    margin: 30,

    dots: false,

    nav: true,

    autoplay: true,

    autoplayTimeout: 7000,

    autoplaySpeed: 1500,

    lazyLoad: false,
    stagePadding: 40,
    navText: ['<span aria-label="Previous">‹</span>', '<span aria-label="Next">›</span>'],

    responsive: {

        0: {

            items: 2

        },

        600: {

            items: 2

        },

        1000: {

            items: 4

        }

    }

});
$('.product-item-owl').owlCarousel({

    loop: false,

    margin: 30,

    dots: false,

    nav: true,

    autoplay: true,

    autoplayTimeout: 5000,

    autoplaySpeed: 1500,

    lazyLoad: false,

    navText: ['<span aria-label="Previous">‹</span>', '<span aria-label="Next">›</span>'],

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 2

        },

        1000: {

            items: 3

        }

    }

}),$('#slider-ykien').owlCarousel({

    loop: true,

    margin: 30,

    dots: true,

    nav: false,

    autoplay: true,

    autoplayTimeout: 5000,

    autoplaySpeed: 1500,

    lazyLoad: false,

    navText: ['<span aria-label="Previous">‹</span>', '<span aria-label="Next">›</span>'],

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 2

        },

        1000: {

            items: 2

        }

    }

}),

function (i) {

    i.fn.appear = function (n, e) {

        var d = i.extend({data: void 0, one: !0, accX: 0, accY: 0}, e);

        return this.each(function () {

            var u, t, e, h = i(this);

            h.appeared = !1, n ? (u = i(window), t = function () {

                var e, t, n, i, o, s, r, a, l, c;

                h.is(":visible") ? (e = u.scrollLeft(), t = u.scrollTop(), n = (c = h.offset()).left, i = c.top, o = d.accX, s = d.accY, r = h.height(), a = u.height(), l = h.width(), c = u.width(), t <= i + r + s && i <= t + a + s && e <= n + l + o && n <= e + c + o ? h.appeared || h.trigger("appear", d.data) : h.appeared = !1) : h.appeared = !1

            }, e = function () {

                var e;

                h.appeared = !0, d.one && (u.unbind("scroll", t), 0 <= (e = i.inArray(t, i.fn.appear.checks)) && i.fn.appear.checks.splice(e, 1)), n.apply(this, arguments)

            }, d.one ? h.one("appear", d.data, e) : h.bind("appear", d.data, e), u.scroll(t), i.fn.appear.checks.push(t), t()) : h.trigger("appear", d.data)

        })

    }, i.extend(i.fn.appear, {

        checks: [], timeout: null, checkAll: function () {

            var e = i.fn.appear.checks.length;

            if (0 < e) for (; e--;) i.fn.appear.checks[e]()

        }, run: function () {

            i.fn.appear.timeout && clearTimeout(i.fn.appear.timeout), i.fn.appear.timeout = setTimeout(i.fn.appear.checkAll, 20)

        }

    }), i.each(["append", "prepend", "after", "before", "attr", "removeAttr", "addClass", "removeClass", "toggleClass", "remove", "css", "show", "hide"], function (e, t) {

        var n = i.fn[t];

        n && (i.fn[t] = function () {

            var e = n.apply(this, arguments);

            return i.fn.appear.run(), e

        })

    })

}(jQuery);

$(function () {



    $(".count-element").each(function () {

        $(this).appear(function () {

            $(this).prop("Counter", 0).animate({Counter: $(this).text()}, {

                duration: 4e3,

                easing: "swing",

                step: function (e) {

                    $(this).text(Math.ceil(e))

                }

            })

        }, {accX: 0, accY: 0})

    })

});

$('.title-day').click(function () {

});

function titleday(stt) {

    $('.title-day'+stt).toggleClass('active');

    $('.accordion-description'+stt).toggleClass('active');



}

$(document).ready(function() {



    var sync1 = $("#sync1");

    var sync2 = $("#sync2");

    var slidesPerPage = 3; //globaly define number of elements per page

    var syncedSecondary = true;



    sync1.owlCarousel({

        items : 1,

        slideSpeed : 2000,

        nav: false,

        autoplay: true,

        dots: false,

        lazyLoad: false,

        loop: true,

        responsiveRefreshRate : 200,

        navText: ['',''],

    }).on('changed.owl.carousel', syncPosition);



    sync2

        .on('initialized.owl.carousel', function () {

            sync2.find(".owl-item").eq(0).addClass("current");

        })

        .owlCarousel({

            items : slidesPerPage,

            dots: false,

            nav: false,

            smartSpeed: 200,

            margin: 10,

            slideSpeed : 500,

            lazyLoad: false,

            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel

            responsiveRefreshRate : 100

        }).on('changed.owl.carousel', syncPosition2);



    function syncPosition(el) {

        //if you set loop to false, you have to restore this next line

        //var current = el.item.index;



        //if you disable loop you have to comment this block

        var count = el.item.count-1;

        var current = Math.round(el.item.index - (el.item.count/2) - .5);



        if(current < 0) {

            current = count;

        }

        if(current > count) {

            current = 0;

        }



        //end block



        sync2

            .find(".owl-item")

            .removeClass("current")

            .eq(current)

            .addClass("current");

        var onscreen = sync2.find('.owl-item.active').length - 1;

        var start = sync2.find('.owl-item.active').first().index();

        var end = sync2.find('.owl-item.active').last().index();



        if (current > end) {

            sync2.data('owl.carousel').to(current, 100, true);

        }

        if (current < start) {

            sync2.data('owl.carousel').to(current - onscreen, 100, true);

        }

    }



    function syncPosition2(el) {

        if(syncedSecondary) {

            var number = el.item.index;

            sync1.data('owl.carousel').to(number, 100, true);

        }

    }



    sync2.on("click", ".owl-item", function(e){

        e.preventDefault();

        var number = $(this).index();

        sync1.data('owl.carousel').to(number, 300, true);

    });

});

wow = new WOW(

    {

        animateClass: 'animated',

        offset: 100,

        callback: function (box) {

            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")

        }

    }

);

wow.init();
