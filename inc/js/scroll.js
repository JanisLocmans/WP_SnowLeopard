/* window.onload = function()
    { 
    var arf = document.getElementById('blog-container-id');
    initialize(arf, 'marginLeft');
}
//node:number;
//style:string;
function initialize(node, style){
    var base = parseInt(getStyle(node, style));
    if ('onmousewheel' in node) {
    node.onmousewheel = function(e) {
        e = e || window.event;
      listener(e, node, style);
        }
    } else {
    node.addEventListener('DOMMouseScroll', listener)
    }
}
function normalize_mousewheel(e) {
    var //o = e.originalEvent,
        o = e,
        d = o.detail, w = o.wheelDelta,
        n = 225, n1 = n-1;   
    // Normalize delta
    d = d ? w && (f = w/d) ? d/f : -d/1.35 : w/120;
    // Quadratic scale if |d| > 1
    d = d < 1 ? d < -1 ? (-Math.pow(d, 2) - n1) / n : d : (Math.pow(d, 2) + n1) / n;
    // Delta *should* not be greater than 2...
    e.delta = Math.min(Math.max(d / 2, -1), 1);
}
function listener(e, node, style) {
    normalize_mousewheel(e);
    base = parseInt(getStyle(node, style));
    node.style[style] = base - ( 100 * e.delta) + 'px';
}
function getStyle(el, cssprop){

 if (el.currentStyle) //IE
  return el.currentStyle[cssprop]
 else if (document.defaultView && document.defaultView.getComputedStyle) //Firefox
  return document.defaultView.getComputedStyle(el, "")[cssprop]
 else //try and get inline style
  return el.style[cssprop]
}*/