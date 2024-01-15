$(function(){

    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        //abrir menu através do fadein
        /*
        if(listaMenu.is(':hidden') == true)
            listaMenu.fadeIn();
        else
            listaMenu.fadeOut();
        */

        listaMenu.slideToggle();
    })

})