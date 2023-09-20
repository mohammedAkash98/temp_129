
$(document).ready(function () {
    // sidebar arrow rotate
    $(".sidebar-arrow").click(function () {
        const $sideBar = $(this).children('.arrow').toggleClass('open');
        $('.sidear').not($sideBar).removeClass('open');
    });

    // quize input radio button
    $('input[type="radio"]').on('click', function () {
        $('.rounded-pill').removeClass('bg-success');
        $(this).closest('.rounded-pill').addClass('bg-success');
    });
});


