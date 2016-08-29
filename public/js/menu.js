var menutoggle = document.querySelector('#menu-toggle');
var hidden = document.querySelector('#hidden-menu');

menutoggle.addEventListener('click', function() {
  if(hasClass(hidden, 'slideFromLeft')) {
    removeClass(hidden, 'slideFromLeft');
  }else {
    hidden.className += ' slideFromLeft';
  }
});


function hasClass(el, cls) {
  return el.className && new RegExp("(\\s|^)" + cls + "(\\s|$)").test(el.className);
}

function removeClass(el, cls) {
  var reg = new RegExp("(\\s|^)" + cls + "(\\s|$)");
  el.className = el.className.replace(reg, " ").replace(/(^\s*)|(\s*$)/g,"");
}