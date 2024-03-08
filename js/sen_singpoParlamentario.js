let senadoresList = null;
let lectura = false;
let $senadorBuscar = [];
let $partidos = [
    // { 'abreviatura': 'morena', 'nombre':'Grupo Parlamentario del Movimiento Regeneración Nacional', 'total': 0, 'color': '#610200' },
    // { 'abreviatura': 'PAN', 'nombre':'Grupo Parlamentario del Partido Acción Nacional', 'total': 0, 'color': '#19589a' },
    // { 'abreviatura': 'PRI', 'nombre':'Grupo Parlamentario del Partido Revolucionario Institucional', 'total': 0, 'color': '#5DA456' },
    // { 'abreviatura': 'Movimiento Ciudadano', 'nombre':'Grupo Parlamentario del Movimiento Ciudadano', 'total': 0, 'color': '#F38215' },
    // { 'abreviatura': 'PT', 'nombre':'Grupo Parlamentario del Partido del Trabajo', 'total': 0, 'color': '#bb2a22' },
    // { 'abreviatura': 'PVEM', 'nombre':'Grupo Parlamentario del Partido Verde Ecologista de México', 'total': 0, 'color': '#78d154' },
    // { 'abreviatura': 'PES', 'nombre':'Grupo Parlamentario del Partido Encuentro Social', 'total': 0, 'color': '#752F8B' },
    // { 'abreviatura': 'PRD', 'nombre':'Grupo Parlamentario del Partido de la Revolución Democrática', 'total': 0, 'color': '#FFD807' },
    { 'abreviatura': 'SG', 'nombre':'Sin Grupo Parlamentario', 'total': 0, 'color': '#A9AAAD' },
];

$(document).ready(function(e) {   
    
    leerSenadores().then( resp =>{
        if ( resp ){
            lectura = true;
            cambiarGenero( 'Mujer' );
        }else    
            lectura = false;       
    });
});

function cambiarGenero( $sexo ){
    //$partidos.find( ( item, index ) => (item.abreviatura == $senador.Fraccion) ? $partidos[index].total += 1 : '' );
    for (var i=0; i<$partidos.length; i++){
        $partidos[i].total = 0;
    }
    $(".btnTextSenadoras, .btnTextSenadores").css( {'font-weight': 'normal'} );
    if( $sexo == 'Mujer'){
        $(".btnTextSenadoras").css( {'font-weight': 'bold'} );
    }else{
        $(".btnTextSenadores").css( {'font-weight': 'bold'} );
    }   
    $("#contSenadoras, #tblPartidos").empty();
    ordenarSenadores( $sexo );
}
async function ordenarSenadores( $sexo ) {
    $senadorBuscar = senadoresList;
    let inicio = true;
                    
    
    // obtener senadores por genero
    // $.each( senadoresList, async function( key, senador ) {
    //     //console.log( senador );
    //     if( senador.Sexo == $sexo )
    //         await $senadorBuscar.push( senador );
    // })
    
    $card = '';
    $senadorBuscar2 = [];
    $.each( $partidos,  function( key, partido ) {
        $nombre = (partido.abreviatura == "Movimiento Ciudadano") ? 'MC' : partido.abreviatura.toUpperCase() + '';
        //nombres.push( $nombre );
        //total.push( partido.total );
        
        
        $senadorBuscar2 = $senadorBuscar.filter( senador => senador.Fraccion == partido.abreviatura );
        $senadorBuscar2 = $senadorBuscar2.sort((a, b) => a.Apellidos.localeCompare(b.Apellidos));
        
        // si no hay elementos para el genero seleccionado saltar
        if ( !$senadorBuscar2.length ) return;
        // btn-directorio data-fraccion="${$logo}"
        $logo=`<img src="../images/iconos_partidos/${$nombre}_.png" width="55" class="zoom" alt=""></img>`;
        //$("#contSenadoras").append(' <div class="row hand btn-directorio mt-1 " data-bs-toggle="modal" data-bs-target="#directorioIntegrantes" data-fraccion="'+$nombre+'" id="scrollGo_'+$nombre+'" ><div class="col-md-1">'+$logo+'</div><div class="col-md-11 fs-3">  '+partido.nombre+' </div></div> ');
        $contCards = $('<div/>', {
            'class': 'row',        
            'id': 'contCards_'+$nombre
        });

        $.each( $senadorBuscar2, function( key, $senador ) {
            
            // Sumar totales por partido
            $partidos.find( ( item, index ) => (item.abreviatura == $senador.Fraccion) ? $partidos[index].total += 1 : '' );

            //console.log( partido.abreviatura );
            $logo = ($senador.Fraccion == "Movimiento Ciudadano") ? 'MC_.png' : $senador.Fraccion.toUpperCase()+'_.png';
            $fracc = ($senador.Fraccion == "Movimiento Ciudadano") ? 'MC' : $senador.Fraccion.toUpperCase();
            $class = "card_senado_" + $fracc;
            // v5   col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12
            // v3   col-xs-12 col-sm-12 col-md-4 col-lg-4
            $card = $('<div/>', {
                'class': 'col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-2 my-2 card  ' + $class,        
                'id_senador': $senador.idSenador
            });
    
            $card.append( '<div class="card_head" >');
            $card.append( '<div class="cardNombre" >');
            $card.find('.card_head').append( '<div class="card_top_foto" >');
            $card.find('.card_head').append( '<div class="card_top_escudo" >');
            $card.find('.card_head').append( '<div class="card_top_edo" >');
            $card.find('.card_head').append( '<div class="card_top_logo" >');
    
            $card.find('.cardNombre').html( '<a href="../senador/'+$senador.idSenador+'">' + $senador.Nombre + " " + $senador.Apellidos + '</a>');
    
            $senador.Estado = ( $senador.Estado == 'Veracruz de Ignacio de la Llave' ) ? "Veracruz" : $senador.Estado;
            $card.find('.card_top_edo').html( '<span class="badge rounded-pill text-bg-secondary" style="margin: -1px 0 0 0; width: 140px;">' + $senador.Estado + '</span>' );
    
            // $card.find('.card_top_foto').append( $('<img>').attr({
            //         'src': '../images/senadores/64/'+$senador.Foto, 
            //         'width': '100%'
            //         })
            // ); 
            $card.find('.card_top_foto').html( '<a href="../senador/'+$senador.idSenador+'"><img class="rounded "  src="../images/senadores/64/'+$senador.Foto+'" alt="" width="100%"> </a>');

            $card.find('.card_top_escudo').append( $('<img>').attr({
                'src': '../images/escudos/'+$senador.Escudo, 
                'width': '50px'
                })
            ); 
            /*$card.find('.card_top_logo').append( $('<img>').attr({
                'src': '../images/iconos_partidos/'+$logo, 
                'width': '60px'
                })
            );*/ 

            $card.find('.card_top_logo').append( $('<br>').attr({                
                })
            ); 
    
            $card.append( '<div class="card-body" style="position: absolute;padding: 1rem 1px;margin: 120px 0 0 0;">');
            $card.find(".card-body").append($senador.direccion +'<br><br>');
            $card.find(".card-body").append('<div class="cardInfo"><strong>Tel.</strong>: <span class=""><a href="tel:+52'+$senador.telefono+'">'+ $senador.telefono +'</a></span> <strong><br>ext.</strong>: '+ $senador.extension +'<br></div>' );
            $card.find(".card-body").append('<div class="cardInfo"><strong>Correo electrónico:</strong><br><a href="mailto:'+$senador.correo+'">' + $senador.correo + '</a></div>');
                     
            let $texto = '';
            if( $senador.url_sitio != '' ) {
                $texto+='<a href="'+$senador.url_sitio+'" target="_blank" class="" style="margin-left:4px;">';
                $texto+='<i class="fa-solid fa-globe fa-1x btn-reddit zoom" style="padding-top: 8px;width: 30px;height: 30px;text-align: center;"></i>';
                $texto+='</a>';
            }
            if($senador.facebook != '') {
                $texto+='<a href="'+$senador.facebook+'" target="_blank" class="" style="margin-left:4px;">';
                $texto+='<i class="fa-brands fa-facebook-f fa-1x btn-facebook zoom" style="padding-top: 8px;width: 30px;height: 30px;text-align: center;"></i>';
                $texto+='</a> ';
            }
            if($senador.twitter != '') {
                $texto+='<a href="'+$senador.twitter+'" target="_blank" class="" style="margin-left:1px;">';
                $texto+='<i class="fa-brands fa-x-twitter fa-1x btn-twitter zoom" style="padding-top: 8px;width: 30px;height: 30px;text-align: center;"></i>';
                $texto+='</a>';
            }
            if($senador.instagram != '') {
                $texto+='<a href="'+$senador.instagram+'" target="_blank" class="" style="margin-left:4px;">';
                $texto+='<i class="fa-brands fa-instagram fa-1x btn-instagram zoom" style="padding-top: 8px;width: 30px;height: 30px;text-align: center;"></i>';
                $texto+='</a>';
            }
            if($senador.youtube != '') {
                $texto+='<a href="'+$senador.youtube+'" target="_blank" class="" style="margin-left:4px;">';
                $texto+='<i class="fa-brands fa-youtube fa-1x btn-youtube zoom" style="padding-top: 8px;width: 30px;height: 30px;text-align: center;"></i>';
                $texto+='</a>';
            }    
            //$("#infoRedesSoc").html( $texto );

            $card.append( '<div class="cardFooter" style="position: absolute;padding: 1rem 1px;margin: 370px 0 0 0; width: 300px; ">') 
            $card.find(".cardFooter").append('<center>' + $texto + '</center>');
            //$card.appendTo("#contSenadoras").fadeIn();
            $contCards.append( $card.fadeIn() )
            $("#contSenadoras").append( $contCards );
        });
        
    });
    tblTotalesPartidos($partidos);
    //graficaIntegracion($partidos)

}
async function leerSenadores() {
    
    
    return await new Promise( (resolve, reject) =>{
        $.getJSON( '../js/senadores.json', {_: new Date().getTime()} )
            .done( function( senadores ) {
                senadoresList = senadores;
                //buscarSenadores( 'A' )                
                resolve(true);
             }).fail( function(){
                reject('error al leer los datos')
            });
    }); 
}
 

function tblTotalesPartidos($partidos){
     
    $trs = $('<tbody/>');
    $.each( $partidos, async function( key, partido ) {
        //$trs = 
        $logo = (partido.abreviatura == "Movimiento Ciudadano") ? 'MC' : partido.abreviatura.toUpperCase()+'';
        $th = $(`<tr class="borderb${$logo} btn-directorio" onclick="scrollGo( '${$logo}' )" data-bs-toggle="modal" data-bs-target="#directorioIntegrantes" data-fraccion="${$logo}" >
            <td align="left" width="110">
               <!-- <a href="#" >
                    <img src="../images/iconos_partidos/${$logo}_.png" width="55" class="zoom" alt="">
                </a>-->
            </td>
            <td style="vertical-align: middle; font-size: 25px; font-weight:normal; text-align: left;" class="txtNegro">
                <a href="#" >
                    ${partido.nombre}
                </a>
            </td>
            <td style="vertical-align: middle; font-size: 25px; font-weight:bold;width: 100px;text-align: end;" class="txtNegro">
                <a href="#" >
                    ${partido.total}
                </a>
            </td>
        </tr>`);

        //$th = $(`<tr><td>${partido.nombre}</td><td class="text-center">${partido.total}</td>`);
        $trs.append( $th)
        //console.log(partido);
    });
    $("#tblPartidos").append( $trs );
}

 
function scrollGo( $gp ){ 
    if ( $('#scrollGo_'+$gp).length ){ 
        var posicion_boton = $('#scrollGo_'+$gp).offset().top - 120;
        $("html, body").animate( {scrollTop: posicion_boton+"px"}, 1000 ); 
    }
}