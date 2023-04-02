// $(window).scroll(function() { 
//     if ($(window).scrollTop() >=  $("section:nth-of-type(2)").offset().top - 1000) {
//         $(".progress-bar").each(function () {
//             $(this).animate({
//                 width: $(this).attr("aria-valuenow") + "%",
//               }, 1000
//             );
//         });
//     }
// });

$(".progress-bar").each(function () {
    $(this).animate({
        width: $(this).attr("aria-valuenow") + "%",
        }, 1000
    );
});

function updateProgress(progress) {
    const progressFill = document.querySelector('.persentase .progress-bar-fill');
    progressFill.style.width = `${progress}%`;
}

