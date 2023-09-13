// $(document).ready(function () {
//     $('.showSingle').click(function () {
//         $('#div' + $(this).attr('target')).removeClass("d-none");
//         $('.targetDiv').hide();
//         $(this).addClass("active");
//         $('#div' + $(this).attr('target')).show();
//     });
// });

var div = document.getElementById('sidebar-arrow');
var icon = document.getElementById('arrow');
var open = false;

div.addEventListener('click', function () {
    if (open) {
        icon.className = 'arrow';
    } else {
        icon.className = 'arrow open';
    }

    open = !open;
});
