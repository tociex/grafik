$('#search-daily').on('click', function () {
    let d = $('#daily-search-form');
    if(d.hasClass('d-none')){
        d.removeClass('d-none');
    }else{
        d.addClass('d-none');
    }
    $('#daily-view-datatable').addClass('d-none');
});

$('#daily-view-data').on('click', function () {
    let d = $('#daily-view-datatable');
    if (d.hasClass('d-none')) {
        d.removeClass('d-none');
    } else {
        d.addClass('d-none');
    }
    $('#daily-search-form').addClass('d-none')
});

$('#search-mau').on('click', function () {
    let d = $('#mau-search-form');
    if (d.hasClass('d-none')) {
        d.removeClass('d-none');
        $('#restore-mau').removeClass("d-none");
    } else {
        d.addClass('d-none');
        $('#restore-mau').addClass("d-none");
    }
    $('#mau-view-datatable').addClass('d-none');
});

$('#mau-view-data').on('click', function () {
    let d = $('#mau-view-datatable');
    if (d.hasClass('d-none')) {
        d.removeClass('d-none');
    } else {
        d.addClass('d-none');
    }
    $('#mau-search-form').addClass('d-none')
});

$('#restore-mau').on('click', function () {
    let d = $('#restore-mau');
    if (d.hasClass('d-none')) {
        d.removeClass('d-none');
    } else {
        d.addClass('d-none');
    }
    $('#mau-search-form').addClass('d-none')
});

$('#search-merchant').on('click', function () {
    let d = $('#merchant-search-form');
    if (d.hasClass('d-none')) {
        d.removeClass('d-none');
        $('#restore-merchant').removeClass("d-none");
    } else {
        d.addClass('d-none');
        $('#restore-merchant').addClass("d-none");
    }
    $('#merchant-view-datatable').addClass('d-none');
});

$('#merchant-view-data').on('click', function () {
    let d = $('#merchant-view-datatable');
    if (d.hasClass('d-none')) {
        d.removeClass('d-none');
    } else {
        d.addClass('d-none');
    }
    $('#merchant-search-form').addClass('d-none')
});

$('#restore-merchant').on('click', function () {
    let d = $('#restore-merchant');
    if (d.hasClass('d-none')) {
        d.removeClass('d-none');
    } else {
        d.addClass('d-none');
    }
    $('#merchant-search-form').addClass('d-none')
});

