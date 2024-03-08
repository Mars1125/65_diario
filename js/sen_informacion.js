senadoresList = null;
let $partidos = [
    { 'abreviatura': 'morena', 'nombre':'Morena', 'total': 0 },
    { 'abreviatura': 'PAN', 'nombre':'Partido Acción Nacional', 'total': 0 },
    { 'abreviatura': 'PRI', 'nombre':'Partido Revolucionario Institucional', 'total': 0 },
    { 'abreviatura': 'Movimiento Ciudadano', 'nombre':'Movimiento Ciudadano', 'total': 0 },
    { 'abreviatura': 'PVEM', 'nombre':'Partido Verde Ecologista de México', 'total': 0 },
    { 'abreviatura': 'PT', 'nombre':'Partido del Trabajo', 'total': 0 },
    { 'abreviatura': 'SG', 'nombre':'Sin Partido', 'total': 0 },
    { 'abreviatura': 'PES', 'nombre':'Encuentro Social', 'total': 0 },
    { 'abreviatura': 'PRD', 'nombre':'Partido de la Revolución Democrática', 'total': 0 },
];
//URL = 'http://10.1.18.88/senado/64_3/';
$(document).ready(function(e) { 
         
    leerSenadores(id_senador).then( resp =>{
        // ****************************************************************************** DETALLES SENADOR
        // console.log('id_senador', id_senador);
        // console.log('senadoresList', senadoresList);
            $senadorId = id_senador;
            // $senador = senadoresList.find( senador => senador.idSenador == $senadorId )
            $senador = senadoresList;
            // console.log( $senador );
 
 
            
            $("#cont_mapa").hide();
            $("#cont_detalle").show();

            let $infoFotoWidth = 120;
            let $infoLogoEdoGpo = 60;
            let $infoTipoEleccion = 16;
            let $infoEstadoWidth = '16px';
            let $redesWidth = 'width: 30px;height: 30px;';
            let contWidth = $("#contMapa").width();
            if ( contWidth <= 380 || device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i)) {
                $("#cont_detalle").css({
                    "font-size":"10px",
                    "width": "100%",
                });
                $(".infoEstado").css({ "font-size":"12px!important" });
                $infoFotoWidth = 80;
                $infoLogoEdoGpo = 40;
                $redesWidth = 'width: 20px;height: 20px;';
                $infoEstadoWidth = '12px!important';
            }

            $("#infoFoto").html( `
                    <div class="conte_imagen mx-auto" style="width:${$infoFotoWidth}px;">
                        <a href="../senador/${$senador.idSenador}">
                            <img class="rounded "  src="../images/senadores/64/${$senador.Foto}" alt="" width="${$infoFotoWidth}"> 
                            <div class="activa_hover"></div>
                        </a>
                    </div>
                `);

            let $genero = '';
            if( $senador.Sexo == 'Mujer')
                $genero = "Senadora";
            else
                $genero = "Senador";
            
            $("#asistLink").attr('href', '../asistencias/' + $senadorId);
            $("#voteLink").attr('href', '../votaciones/' + $senadorId);
            $("#infoNombre").html( '<a href="../senador/'+$senador.idSenador+'">' + $genero + ' ' + $senador.Nombre + ' <br> ' + $senador.Apellidos + ' </a> ');

            $("#infoLogoEdo").attr({
                'src': '../images/escudos/'+$senador.Escudo,
                'width': $infoLogoEdoGpo
            });
            
            $("#infoEstado").css({ "font-size": $infoEstadoWidth }).html( $senador.Estado );

            $logo = ($senador.Fraccion == "Movimiento Ciudadano") ? 'MC_.png' : $senador.Fraccion.toUpperCase()+'_.png';
            $gp = ($senador.Fraccion == "Movimiento Ciudadano") ? 'movimiento_ciudadano' : $senador.Fraccion.toLowerCase();
            $("#infoLogoPartido").attr({
                'src': '../images/iconos_partidos/'+$logo,
                'width': $infoLogoEdoGpo
            });
            if( $senador.tipoEleccion){

                if( $senador.tipoEleccion.length > 90)
                    $("#infoTipoEleccion").html( $senador.tipoEleccion ).css("font-size", ($infoTipoEleccion - 2 )+"px");    
                else
                    $("#infoTipoEleccion").html( $senador.tipoEleccion ).css("font-size", $infoTipoEleccion+"px"); 
            }

                //$("#infoSuplente").parent().eq(0).addClass()
            $("#infoSuplente").html( $senador.Suplente );
            $("#infoDireccion").html( $senador.direccion );
            $("#infoCorreo").html( $senador.correo );
             
            if ( $senador.telefono !== null ) {
                $("#infoTel").html( '01 (55) ' + $senador.telefono + ', Ext. ' + $senador.extension );                
            }


            
            let $texto = '';
            if( $senador.url_sitio != '' && $senador.url_sitio != null  ) {
                $texto+='<a href="'+$senador.url_sitio+'" target="_blank" class="" style="margin-left:4px;">';
                $texto+='<i class="fa fa-globe fa-1x btn-reddit zoom" style="padding-top: 8px;text-align: center;'+$redesWidth+'"></i>';
                $texto+='</a>';
            }
            if($senador.facebook != '' && $senador.facebook != null ) {
                $texto+='<a href="'+$senador.facebook+'" target="_blank" class="" style="margin-left:4px;">';
                $texto+='<i class="fa fa-facebook fa-1x btn-facebook zoom" style="padding-top: 8px;text-align: center;'+$redesWidth+'"></i>';
                $texto+='</a> ';
            }
            if($senador.twitter != '' && $senador.twitter != null ) {
                $texto+='<a href="'+$senador.twitter+'" target="_blank" class="" style="margin-left:1px;">';
                $texto+='<i class="fa fa-twitter fa-1x btn-twitter zoom" style="padding-top: 8px;text-align: center;'+$redesWidth+'"></i>';
                $texto+='</a>';
            }
            if($senador.instagram != '' && $senador.instagram != null ) {
                $texto+='<a href="'+$senador.instagram+'" target="_blank" class="" style="margin-left:4px;">';
                $texto+='<i class="fa fa-instagram fa-1x btn-instagram zoom" style="padding-top: 8px;text-align: center;'+$redesWidth+'"></i>';
                $texto+='</a>';
            }
            if($senador.youtube != '' && $senador.youtube != null ) {
                $texto+='<a href="'+$senador.youtube+'" target="_blank" class="" style="margin-left:4px;">';
                $texto+='<i class="fa fa-youtube-play fa-1x btn-youtube zoom" style="padding-top: 8px;text-align: center;'+$redesWidth+'"></i>';
                $texto+='</a>';
            }
                
            $("#infoRedesSoc").html( $texto );
            
            $("#infoActLeg").empty();
            $senador.informes.forEach( informe => {
                // console.log(  ); 
                // $("#infoActLeg").append( '<div class="zoomx2 mt-1 brillo" style="background:#707070;margin: 15px 15px 15px 10px;float: left;width: 200px;text-align: center;color: white;font-size: 12px;border-radius: 8px;"><a href="https://infosen.senado.gob.mx/sgsp/senadores/64/'+informe.pdf+'" target="popup" onclick="window.open(this.href, this.target, \'width=680,height=700\'); return false;"><img width="150" class="" src="../images/senadores/informes/'+informe.img + '" style="margin: 5px 0 0 0px;max-height: 200px;"><div style="width: 90%;margin: 0 auto;margin-top: 5px;margin-bottom: 5px;position: relative;color: #040404;background-color: #ebeff3;border-radius: 8px;">'+informe.texto + '</div></a><span></span></div>' );
                $("#infoActLeg").append(`
                    <div idInforme=${informe.id} class="zoomx2 mt-1 brillo" 
                        style="background:#707070;margin: 5px 15px 10px 1px; float: left;width: 175px;text-align: center;color: white;font-size: 12px;border-radius: 8px;">
                    <a href="https://infosen.senado.gob.mx/sgsp/senadores/64/${informe.pdf}" 
                        target="popup" onclick="window.open(this.href, this.target, \'width=680,height=700\'); return false;">
                        <div class="conte_imagen">
                            <img width="150" class="" src="../images/senadores/informes/${informe.img}" style="margin: 5px 0 0 0px;max-height: 200px; height: 200px; border-radius: 8px;">
                            <div class="activa_hover"></div>
                        </div>
                        <div style="width: 90%;margin: 0 auto;margin-top: 5px;margin-bottom: 5px;position: relative;color: #040404;background-color: #ebeff3;border-radius: 8px;">
                            ${informe.texto}
                        </div>
                    </a>
                    </div>`);
            });

            $('.lds-roller').fadeOut();
            $('.infoSenador').fadeIn();


    });

  
});

async function leerSenadores(id_senador) {
    return await new Promise( async (resolve, reject) =>{
        //console.log('URL::', webUrl);
        // $.getJSON( "../js/senadores.json", {_: new Date().getTime()} )
        //     .done(async function( senadores ) {
        //         senadoresList = senadores;
        //         let inicio = true; 
        //         await resolve(true);
        //     }).fail( function(){
        //         reject('error al leer los datos')
        //     });

        $.ajax({
            type: "GET",
            contentType: "application/x-www-form-urlencoded", 
            url: '../app/senadores/functionInformacionSenador.php',
            data: { accion: "getJSONSenadores", senadorId: id_senador, _: new Date().getTime()},
            beforeSend:function(){ /* $("#ajax_respuesta").html($load); */ },	 
            success: function(datos){ 
                $senador = JSON.parse(datos);	
                senadoresList = $senador;
                resolve(true);
            }
        });    
    }); 
}
 

function cerrarDetalle(){
    $("#cont_mapa").show()
    $("#cont_detalle").hide()
}

 
