jQuery(document).ready(function($){
 
        $('.styleswitcher__trigger').on('click' , function(){
        
        var parent = $(this).parent();
        
        if(parent.hasClass('openbox')){
            
            parent.removeClass('openbox').addClass('closebox');
           
        }else{
            
            parent.removeClass('closebox').addClass('openbox');
           
        }
        
    });
  
    $('[data-set-theme]').on('click' , function(){
        
        var theme = $(this).attr('data-set-theme').replace(/ /g,'');        
        var url   = window.location.href.split('/');
        var name  = url[url.length-1];
        
       window.location.href= "../"+theme+"/"+name;
    });
    
});