$( document ).ready(function() {
				function createPopupContent( data ) {
					return '<div class="item-detail item-popup-block clearfix">' +
						'<div class="item-info">' +
							'<h3 class="title">' + data.title + '</h3>' +
						'</div>' +
						'<div class="item-info">' +
							data.description +
							'<div class="clearfix">' +
								'<hr>' +
							'</div>' +
						'</div>' +
						'<div class="item-media">' +
							(data.media? $.map( data.media, function( media ) {
								var result = '';
								var i=0;
								var len= data.media.length;
									for (;i<len;){
										switch( media.type ) {
											case 'image':
												result = '<img src="' + media.src + '" alt="" title="' + (media.title? media.title : '') + '">';
												i=i+1;
										break;
											case 'video':
												result = media.embed ;
												i=i+1;
										break;
											case 'text':
												result = media.text;
												i += 1;
												break;
										default:
										break;
										}
									}
								return '<div class="media">' + result + '</div>';
							}).join( '' ) : '') +
						'</div>' +
					'</div>';
				}

			//	$( '.worksection' ).each( function() {

					// Cache Variables
			/*		var $container = $( this ).find( '.banana');
					var $filter =  $( this ).find( '.filter' );
					var $filterActive = $( '<span class="active-label" data-toggle="dropdown"></span>' ).prependTo( $filter );

					if( $filter.data( 'label' ) ) {
						$filterActive.attr( 'data-label', $filter.data( 'label' ) );
					}*/

				/*	$container.imagesLoaded(function() {

						// Initialize Isotope
						$( this ).isotope({
							itemSelector: '.item',
							masonry: {
								columnWidth: $container.width() / 12
							}
						}); 

						// Handle Window Resize
						$( window ).on( 'smartresize orientationchange', function() {
							$container.isotope({
								masonry: {
									columnWidth: $container.width() / 12
								}
							});
						}); 

						// Handle Filtering
						$filter.on( 'click', 'a', function( e ) {

							$container.isotope({
								filter: $( this ).data( 'filter' )
							});
							$( this ).closest( 'li' ).addClass( 'active' ).siblings( 'li' ).removeClass( 'active' );
							$( '.active-label', $filter ).text( $( this ).text() );

							e.preventDefault();
						});

						$filter.find( 'li a[data-filter="*"]' ).parent().addClass( 'active' );
						$filterActive.text( $filter.find( 'li a[data-filter="*"]' ).text() );
*/
						// Portfolio Popup
						if( $.fn.magnificPopup ) {
							$('.worksection').find( '.item-link' ).magnificPopup({
								type: 'ajax',
								ajax: {
									settings: {
										cache: false
									}
								},
								removalDelay: 300,
								mainClass: 'mfp-zoom-in',
								overflowY: 'scroll',
								callbacks: {
									
									parseAjax: function( jqXHR ) {
										var response = $.parseJSON( jqXHR.responseText );
										jqXHR.responseText = createPopupContent( response );
									},
									
								}
							});
						}

				//	});

				//});
	});
