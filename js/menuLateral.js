$(document).ready(main);
var contador=true;


function main(){
    $('.menu_bar').click(function(){
        //$('#menu_lateral').toggle();
        if(contador){
            $('#menu_lateral').animate({
                left: '0'
            });
            contador=false;
        }else{
            contador=true;
                $('#menu_lateral').animate({
                    left: '-1000%'
        });
        
        }
    });
}



/*
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()>0){
            $('header').addClass('header2');
        }else{
            $('header').removeClass('header2');
        }
    })
});*/