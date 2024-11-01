jQuery(document).ready(function(){
	
	  adsense = 'adsbygoogle';
  if(jQuery("." + adsense).length == 0) {
  } else {  	
  setTimeout(function(){
    var ad = jQuery('.adsbygoogle')[0];
    var ck = window.getComputedStyle(ad,null);
    console.log(ck.display);
    if(ck.display=='none'){
      jQuery('body > div').addClass('blur');
      jQuery('.asub00').fadeIn(500);
      jQuery('.asub00_msgWin').fadeIn(1000);
    }  
    else{ }
  },1200);
    
  }
  
});