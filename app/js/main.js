$(document).ready(function () {
    $('.slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ],
        prevArrow:"<img src='../img/arrow%20left@1X.png' class='prev'>",
        nextArrow:"<img src='../img/arrow%20right@1X.png' class='next'>"
    });
});
$('.mn .nm').click(function() {
    $('.current').removeClass('current');
    $(this).addClass('current');
});

var accordion = function() {
    var $id = $("#accordion");
    var $open = $id.data("open");
    $id.find(".title").on("click", function() {
        if ($open === false) {
            $id.find(".content:visible").slideUp();
            if ($(this).hasClass("active")) {
                $(this).toggleClass("active");
            } else {
                $id.find(".title").removeClass("active");
                $(this).toggleClass("active");
            }
        } else {
            $(this).toggleClass("active");
        }
        $(this)
            .next(".content")
            .not(":animated")
            .slideToggle();
    });
};

accordion();
$('.form').find('input, textarea').on('keyup blur focus', function (e) {

    var $this = $(this),
        label = $this.prev('label');

    if (e.type === 'keyup') {
        if ($this.val() === '') {
            label.removeClass('active highlight');
        } else {
            label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
        if( $this.val() === '' ) {
            label.removeClass('active highlight');
        } else {
            label.removeClass('highlight');
        }
    } else if (e.type === 'focus') {

        if( $this.val() === '' ) {
            label.removeClass('highlight');
        }
        else if( $this.val() !== '' ) {
            label.addClass('highlight');
        }
    }

});

$('.tab a').on('click', function (e) {

    e.preventDefault();

    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');

    target = $(this).attr('href');

    $('.tab-content > div').not(target).hide();

    $(target).fadeIn(600);

});