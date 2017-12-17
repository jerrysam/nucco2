/**
 * In this file, we're adding minor customisations to Magnific Popup's "open" and "close" function.
 * This customisation causes the video to "pause" or "play", when the popup "appears" or "closes" respectively.
 * A play and pause function are the only changes, and these have been commented inline. The rest of the function matches Magnific Popup's core.
 */


$.magnificPopup.instance.open = function(obj) {

  $('video')[0].pause();

  // You may call parent ("original") method like so:
  $.magnificPopup.proto.open.call(this, obj /*, optional arguments */);
};


// Do the "close" function too


$.magnificPopup.instance.close = function(obj) {

  $('video')[0].play();

  // You may call parent ("original") method like so:
  $.magnificPopup.proto.close.call(this, obj /*, optional arguments */);
};