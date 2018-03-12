$(document).ready(function () {

    //Slow scroll to next section on arrow click on front page
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 800);
    });

    //Switch active class in portfolio menu on Portfolio page
    $(".portfolio-menu-link").click(function () {
        $(".portfolio-menu-link").removeClass("active-portfolio-link");
        $(this).addClass("active-portfolio-link");
    });

    //Isotope filtration on front page in works section
    var $portfolioList = $('.portfolio-list').isotope({
        itemSelector: '.portfolio-item'

    });

    $('.portfolio-menu').on('click', 'span', function () {
        var filterValue = $(this).attr('data-filter');
        $portfolioList.isotope({filter: filterValue});
    });
});