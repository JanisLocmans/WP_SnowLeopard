 window.onload = function()
    {   	
        document.getElementById("side-bar-button").addEventListener( 'click' , function() {

// TODO:Inset Logic, If element is currently on screen.
        	toggle_class("js-sidebar","sidebar-wrapper","sidebar-wrapper-open");
        	toggle_class("blog-container-id","blog-post-container","blog-post-container-open");
        	toggle_class("site-header-id","site-header-wrap","site-header-wrap-open");
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
	}
	else{
		_el_id.className =
	   	_el_id.className.replace(regOn, ' ');
	    _el_id.className += el_cls;
	}
}
