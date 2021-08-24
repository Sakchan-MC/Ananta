(function ($) {
    "use strict";

    var fullHeight = function () {
        $(".js-fullheight").css("height", $(window).height());
        $(window).resize(function () {
            $(".js-fullheight").css("height", $(window).height());
        });
    };
    fullHeight();

    $("#sidebarCollapse").on("click", function () {
        $("#sidebar").toggleClass("active");
    });
})(jQuery);
// Login
const cards = document.querySelectorAll(".card");

/* View Controller
-----------------------------------------*/
const btns = document.querySelectorAll(".js-btn");
btns.forEach(btn => {
    btn.addEventListener("click", on_btn_click, true);
    btn.addEventListener("touch", on_btn_click, true);
});

function on_btn_click(e) {
    const nextID = e.currentTarget.getAttribute("data-target");
    const next = document.getElementById(nextID);
    if (!next) return;
    bg_change(nextID);
    view_change(next);
    return false;
}

/* Add class to the body */
function bg_change(next) {
    document.body.className = "";
    document.body.classList.add("is-" + next);
    document.body.classList.add("login");
}

/* Add class to a card */
function view_change(next) {
    cards.forEach(card => {
        card.classList.remove("is-show");
    });
    next.classList.add("is-show");
}
// herb
var $animation_elements = $(".animation-element");
var $window = $(window);

function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = window_top_position + window_height;

    $.each($animation_elements, function () {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = element_top_position + element_height;

        //check to see if this current container is within viewport
        if (
            element_bottom_position >= window_top_position &&
            element_top_position <= window_bottom_position
        ) {
            $element.addClass("in-view");
        } else {
            $element.removeClass("in-view");
        }
    });
}

$window.on("scroll resize", check_if_in_view);
$window.trigger("scroll", check_if_in_view);
