let Url = window.location.protocol + "://" + window.location.host + "/senado/64_3/" ;
let senadoresList = null;
let lectura = false;
let $senadorBuscar = [];
let $partidos = [
    { 'abreviatura': 'morena', 'nombre':'Grupo Parlamentario del Movimiento Regeneración Nacional', 'total': 0, 'color': '#610200' },
    { 'abreviatura': 'PAN', 'nombre':'Grupo Parlamentario del Partido Acción Nacional', 'total': 0, 'color': '#19589a' },
    { 'abreviatura': 'PRI', 'nombre':'Grupo Parlamentario del Partido Revolucionario Institucional', 'total': 0, 'color': '#5DA456' },
    { 'abreviatura': 'Movimiento Ciudadano', 'nombre':'Grupo Parlamentario del Movimiento Ciudadano', 'total': 0, 'color': '#F38215' },
    { 'abreviatura': 'PT', 'nombre':'Grupo Parlamentario del Partido del Trabajo', 'total': 0, 'color': '#bb2a22' },
    { 'abreviatura': 'PVEM', 'nombre':'Grupo Parlamentario del Partido Verde Ecologista de México', 'total': 0, 'color': '#78d154' },
    { 'abreviatura': 'PES', 'nombre':'Grupo Parlamentario del Partido Encuentro Social', 'total': 0, 'color': '#752F8B' },
    { 'abreviatura': 'PRD', 'nombre':'Grupo Parlamentario del Partido de la Revolución Democrática', 'total': 0, 'color': '#FFD807' },
    { 'abreviatura': 'SG', 'nombre':'Sin Grupo Parlamentario', 'total': 0, 'color': '#A9AAAD' },
];
let $principiosEleccion = [
    { 'id': 1, 'titulo': 'Senadoras y Senadores electos por el principio de mayoría relativa'},
    { 'id': 2, 'titulo': 'Senadoras y Senadores electos por el principio de primera minoría'},
    { 'id': 3, 'titulo': 'Senadoras y Senadores electos por el principio de representacion proporcional'},
];
$(document).ready(function(e) {   
    
    leerSenadores().then( resp =>{
        if ( resp ){
            lectura = true;
            ordenarSenadores( 'Mujer' );
        }else    
            lectura = false;       
    });
    $h1 = $(".portada2").find("h1");
    //$h1.css({'font-size': '35px'});
    // fadeIn()
    $( "#contPrincipio1" ).slideToggle('fast'); cambia_icon('cont_1');
    $('.cont_1').click(function() { $( "#contPrincipio1" ).slideToggle('fast'); cambia_icon('cont_1') });
    $( "#contPrincipio2" ).slideToggle('fast'); cambia_icon('cont_2')
    $('.cont_2').click(function() { $( "#contPrincipio2" ).slideToggle('fast'); cambia_icon('cont_2') });
    $( "#contPrincipio3" ).slideToggle('fast'); cambia_icon('cont_3')
    $('.cont_3').click(function() { $( "#contPrincipio3" ).slideToggle('fast'); cambia_icon('cont_3') });
      
}); 

function cambia_icon(id){
  icon = $("."+id).find("i");
  if (icon.hasClass("fa-caret-right") ){
    icon.addClass("fa-caret-down").removeClass("fa-caret-right").css({'color': '#61af48'});
  }else{
    icon.addClass("fa-caret-right").removeClass("fa-caret-down").css({'color': '#7f8bad'});
  }
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
    $.each( $principiosEleccion,  function( key, principio ) {
        //$nombre = (partido.abreviatura == "Movimiento Ciudadano") ? 'MC' : partido.abreviatura.toUpperCase() + '';
        //nombres.push( $nombre );
        //total.push( partido.total );
        
        // (orden_estado='1' OR orden_estado='2') AND id_estado<>'1'
        $suplente = '';
        if( principio.id == 1 ){
            $senadorBuscar2 = $senadorBuscar.filter( senador => ( senador.titular == 'S' && senador.tipo_puesto == 'S' && senador.finado == 'N' && senador.licencia == 'S' ) );
            $(".contSenTotal1").html( '(' + $senadorBuscar2.length + ')'  );
        }
        if( principio.id == 2 ){ // tipo_puesto='S' AND ejercieroncargo='S' AND finado='N' AND titular='N'
            $senadorBuscar2 = $senadorBuscar.filter( senador => senador.tipo_puesto == 'S' && senador.ejercieroncargo == 'S' && senador.finado == 'N' && senador.titular == 'N' );
            $(".contSenTotal2").html( '(' + $senadorBuscar2.length + ')' );            
        }
        if( principio.id == 3 ){
            $senadorBuscar2 = $senadorBuscar.filter( senador => senador.tipo_puesto == 'S' && senador.ejercieroncargo == 'S' && senador.finado == 'S' );
            $(".contSenTotal3").html( '(' + $senadorBuscar2.length + ')'  );
        }

        $senadorBuscar2 = $senadorBuscar2.sort((a, b) => a.Apellidos.localeCompare(b.Apellidos));
 
        // si no hay elementos para el genero seleccionado saltar
        if ( !$senadorBuscar2.length ) return;
        // btn-directorio data-fraccion="${$logo}"
        //$logo=`<img src="../images/iconos_partidos/${$nombre}_.png" width="55" class="zoom" alt=""></img>`;
        // $("#contSenadoras").append(' <div class="col-md-11 fs-3  principio_' + principio.id + '">  '+principio.titulo+' </div>  ');
        $contCards = $('<div/>', {
            'class': 'row justify-content-center',        
            'id': 'contCards_' 
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
                'class': 'col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-2 my-2 card ' + $class + ' principioCards_' + principio.id,        
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
    
            $card.find('.card_top_foto').append( $('<img>').attr({
                    'src': '../images/senadores/64/'+$senador.Foto, 
                    'width': '100%'
                    })
            ); 
            $card.find('.card_top_foto').html( "<a href='../senador/"+$senador.idSenador+"'><img src='../images/senadores/64/"+$senador.Foto+"' width='100%'> </a>");
            
            $card.find('.card_top_escudo').append( $('<img>').attr({
                'src': '../images/escudos/'+$senador.Escudo, 
                'width': '50px'
                })
            ); 
            $card.find('.card_top_logo').append( $('<img>').attr({
                'src': '../images/iconos_partidos/'+$logo, 
                'width': '60px'
                })
            ); 
    
            $card.append( '<div class="card-body" style="position: absolute;padding: 1rem 1px;margin: 120px 0 0 0;">');
   
            if( $senador.nombreSuplenteDe && principio.id != 1 )
                $card.find(".card-body").append('<div class="cardInfo">'+$senador.nombreSuplenteDe+'</div>' );
            
            if( $senador.nombreSuplente && principio.id != 1  )
                $card.find(".card-body").append('<div class="cardInfo">'+$senador.nombreSuplente+'</div>' );

            $card.find(".card-body").append('<div class="cardInfo"><br><br>'+$senador.observaciones+'</div>' );
            let $texto = '';
      

            $card.append( '<div class="cardFooter" style="position: absolute;padding: 1rem 1px;margin: 370px 0 0 0; width: 300px; ">') 
          
            //$card.appendTo("#contSenadoras").fadeIn();
            $contCards.append( $card.fadeIn() );

            if( principio.id == 1 ){
                $("#contPrincipio1").append( $contCards );
                
            }
            if( principio.id == 2 ){
                //console.log( $senador.titular );
                $("#contPrincipio2").append( $contCards );
                
            }
            if( principio.id == 3 ){
                $("#contPrincipio3").append( $contCards );     
                $card.find('.card_head').append( $('<img>').attr({
                    'src': '../images/senadores/64/monio.png', 
                    'width': '100%'
                    }).css({
                        'position': 'absolute',
                        'margin': '-30px 0 0 -50px'
                    })
                ); 
            }
                                          
        });
        
    });
    tblTotalesPartidos($partidos);
    //graficaIntegracion($partidos)

}
 
async function leerSenadores() {
    
    
    return await new Promise( (resolve, reject) =>{
        //$link = Url+"js/senadores.json";
        //console.log('senadores.json', $link);
        $.getJSON( '../js/senadoresAll.json', {_: new Date().getTime()} )
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
                <a href="#" >
                    <img src="../images/iconos_partidos/${$logo}_.png" width="55" class="zoom" alt="">
                </a>
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