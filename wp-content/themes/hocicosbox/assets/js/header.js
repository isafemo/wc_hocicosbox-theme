let uppercaseMenuHeader = $('#mega-menu-hocicosbox_header_menu_mobile').find('.mega-menu-flyout');
uppercaseMenuHeader.each(function (index, element) {
    if ((index + 1) !== uppercaseMenuHeader.length) {
        $(element).after('<hr class="line-mobile">')
    } else {
        console.log('else');
        $(element).after('' +
            '<div class="container">' +
            '<div class="row">' +
            '<div class="col-12">' +
            'BUSCAR' +
            '</div> ' +
            '</div>' +
            '<div class="row">' +
            '<div class="col-12">' +
            '<button class="btn btn-primary">Rebajas</button>' +
            '</div> ' +
            '<div class="col-12">' +
            '<button class="btn btn-primary">Promos</button>' +
            '</div>' +
            '</div>' +
            '<div class="row">' +
            '<div class="col-12">' +
            'icon | icon |icon' +
            '</div>' +
            '</div>' +
            '</div>');
    }
})