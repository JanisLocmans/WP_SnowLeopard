 window.onload = function()
    {   	
        document.getElementById('side-bar-button').addEventListener( 'click' , function() {

// TODO:Inset Logic, If element is currently on screen.
        	toggle_class('js-sidebar','sidebar-wrapper','sidebar-wrapper-open');
        	toggle_class('blog-container-id','blog-post-container','blog-post-container-open');
        	toggle_class('site-header-id','site-header-wrap','site-header-wrap-open');
        } );
    }
function toggle_class(el_id, el_cls, el_new_cls){
	var _el_id = document.getElementById(el_id);
	var regOff = new RegExp('(\\s|^)' + el_cls + '(\\s|$)');
	var regOn = new RegExp('(\\s|^)' + el_new_cls + '(\\s|$)');
	if ( _el_id.className.match(regOff)){
		_el_id.className =
	   	_el_id.className.replace(regOff, ' ');
	    _el_id.className += el_new_cls;  
	} else {
		_el_id.className =
	   	_el_id.className.replace(regOn, ' ');
	    _el_id.className += el_cls;
	}
}
/*
_class: Specify class which values to change
_attr: What attribute we are changing.
_value: What values we are changing.
_first and _last: Specifies range in which we want to change class
used if more than 1 same class DOM needs to be changed.
*/
function change_class_style(_class,_attr,_value,_first,_last) {
	var  _el = document.getElementsByClassName(_class);
    var first;
    var last;
    //Checks if both inputs are integers.
	if((typeof _first==='number' && (_first%1)===0) && 
		(typeof _last==='number' && (_last%1)===0)) {
			first = _first - 1;
			last = _last - 1;
				//if not, checks if we are applying changes to all class elements.
		 		} else if((typeof _first==='number' &&
		 				 (_first%1)===0) &&
		 				 (_last == 'last')) {			 			
			 		first = _first - 1;
			 		last = _el.length; 
			 	//by default if _first and last is not defined then 
			 	//apply to first element of the class
			 	} else {
			 		first = 0;
			 		last  = 1;
			 	}
    for(i = 1; first < last; first++) {
     _el[first].style[_attr] = _value;
	}
} 


