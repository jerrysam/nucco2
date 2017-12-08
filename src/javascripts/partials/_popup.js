import magnific from 'magnific-popup'


$(document).ready(function () {
    $('.js-topvideo').magnificPopup({
        items: {
            src: 'http://vimeo.com/80302495'
        },
        type: 'iframe' // this is default type
    });
});
