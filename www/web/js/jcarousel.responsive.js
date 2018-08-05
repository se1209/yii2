(function($) {
    $(function() {
        var jcarousel = $('.jcarousel');
        jcarousel
        .on('jcarousel:reload jcarousel:create', function () {
            var carousel = $(this), width = carousel.innerWidth();
            if (width >= 992) {
                width = (width / 3) - 50;
            }
            else if (width >= 768) {
                width = (width / 2) - 50;
            }
            carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
        }
        )
        .jcarousel( {
            wrap: 'circular'
        }
        );
        $('.jcarousel-control-prev')
        .jcarouselControl( {
            target: '-=1'
        }
        );
        $('.jcarousel-control-next')
        .jcarouselControl( {
            target: '+=1'
        }
        );
        $('.jcarousel-pagination')
        .on('jcarouselpagination:active', 'a', function() {
            $(this).addClass('active');
        }
        )
        .on('jcarouselpagination:inactive', 'a', function() {
            $(this).removeClass('active');
        }
        )
        .on('click', function(e) {
            e.preventDefault();
        }
        ).jcarouselPagination({
                perPage: 3,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
    }
    );
}
)(jQuery);