/*
 * Custom JS - AllRiverBatteries
 * Author - 5150Studios
 */

/*--- IE 10 & WP 8 FIX ---*/
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style')
  msViewportStyle.appendChild(
    document.createTextNode(
      '@-ms-viewport{width:auto!important}'
    )
  )
  document.querySelector('head').appendChild(msViewportStyle)
}
/*--- END IE 10 & WP 8 FIX ---*/

/*--- Android <select> FIX ---*/
var nua = navigator.userAgent
var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
if (isAndroid) {
  $('select.form-control').removeClass('form-control').css('width', '100%')
}
/*--- END Android <select> FIX ---*/