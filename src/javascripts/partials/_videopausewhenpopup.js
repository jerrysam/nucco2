/**
 * In this file, we're adding minor customisations to Magnific Popup's "open" and "close" function.
 * This customisation causes the video to "pause" or "play", when the popup "appears" or "closes" respectively.
 * A play and pause function are the only changes, and these have been commented inline. The rest of the function matches Magnific Popup's core.
 */


// When MagnificPopup's open [popup] function is triggered, pause the background video (specifically, the first video in the DOM)
$.magnificPopup.instance.open = function(obj) {

  $('video')[0].pause();

  // You may call parent ("original") method like so:
  $.magnificPopup.proto.open.call(this, obj /*, optional arguments */);
};



// When MagnificPopup's close [popup] function is triggered, play the background video (specifically, the first video in the DOM)
$.magnificPopup.instance.close = function(obj) {

  $('video')[0].play();

  // You may call parent ("original") method like so:
  $.magnificPopup.proto.close.call(this, obj /*, optional arguments */);
};