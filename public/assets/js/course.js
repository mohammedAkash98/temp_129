
$(document).ready(function () {
    $(".sidebar-arrow").click(function () {
        const $sideBar = $(this).children('.arrow').toggleClass('open');
        $('.sidear').not($sideBar).removeClass('open');
    });
});
