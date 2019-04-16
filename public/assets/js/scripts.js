$(document).ready(function () {
    $('.menu-bar').on('click', function (e) {
        e.preventDefault()
        $('.home-sidebar').toggleClass('toggled')
        $('.main-area').toggleClass('active')
    })
    $('.menu-bar-2').on('click', function () {
        $('.home-sidebar').toggleClass('toggled')
        $('.main-area').toggleClass('active')
    })

    $('.selection').selectpicker();
    // data tables
    $('#example').DataTable({
        responsive: true,
        searching: false,
        select: true,
        info: false,
        lengthChange: false,
        retrieve: true,


    });

})