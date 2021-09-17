/**
 * NOTICE OF LICENSE
 *
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement.
 *
 * You must not modify, adapt or create derivative works of this source code
 *
 *  @author    CorreosExpress/Departamento de integracion y desarrollo
 *  @copyright 2015-2018 Correos Express - Grupo Correos
 *  @license   LICENSE.txt
 *  @email peticiones@correosexpress.com
 */
function changeCustomOptions(intro){   
    intro.setOption('nextLabel', '<i class="fas fa-chevron-right"></i>');
    intro.setOption('prevLabel', '<i class="fas fa-chevron-left"></i>');
    intro.setOption('skipLabel', '<i class="fas fa-times"></i>');
    intro.setOption('doneLabel', '<i class="fas fa-check"></i>');
}


function introjsOrder(){   
    if ((jQuery)("#select_etiqueta").val()=='3') {
        (jQuery)("#introjsPosicionEtiquetas").removeClass('d-none');
    } 
    var intro = introJs();
    changeCustomOptions(intro);
    intro.setOptions({
        steps: [
        { 
            element: document.querySelector('#introjsFormRemitente'),
            intro: introjsFormRemitente
        },
        { 
            element: document.querySelector('#introjsCopiarRemitente'),
            intro: introjsCopiarRemitente
        },
        { 
            element: document.querySelector('#introjsRemitente'),
            intro: introjsRemitente
        },
        { 
            element: document.querySelector('#introjsValoresRemitente'),
            intro: introjsValoresRemitente
        },
        { 
            element: document.querySelector('#introjsObservacionesRemitente'),
            intro: introjsObservacionesRemitente
        },
        {
            element: document.querySelector('#introjsFormDestinatario'),
            intro: introjsFormDestinatario
        },
        {
            element: document.querySelector('#introjsDevolucion'),
            intro: introjsDevolucion
        },
        {
            element: document.querySelector('#introjsValoresDestinatario'),
            intro: introjsValoresDestinatario
        },
        {
            element: document.querySelector('#introjsObservacionesEntrega'),
            intro: introjsObservacionesEntrega
        },
        {
            element: document.querySelector('#introjsFormExtra'),
            intro: introjsFormExtra
        },
        {
            element: document.querySelector('#introjsCodCliente'),
            intro: introjsCodCliente
        },
        {
            element: document.querySelector('#introjsFechaEntrega'),
            intro: introjsFechaEntrega
        },
        {
            element: document.querySelector('#introjsHHMM'),
            intro: introjsHHMM
        },
        {
            element: document.querySelector('#introjsRefEnvio'),
            intro: introjsRefEnvio
        },
       /* {
            element: document.querySelector('#introjsPaisDestino'),
            intro: introjsPaisDestino
        },*/
        {
            element: document.querySelector('#introjsContrareembolso'),
            intro: introjsContrareembolso
        },
        {
            element: document.querySelector('#introjsValorContrareembolso'),
            intro: introjsValorContrareembolso
        },
        {
            element: document.querySelector('#introjsValorAsegurado'),
            intro: introjsValorAsegurado
        },
        {
            element: document.querySelector('#introjsBultosKilos'),
            intro: introjsBultosKilos
        },
        {
            element: document.querySelector('#introjsModalidadEnvio'),
            intro: introjsModalidadEnvio
        },
        {
            element: document.querySelector('#introjsTipoEtiquetas'),
            intro: introjsTipoEtiquetas
        },
        {
            element: document.querySelector('#introjsPosicionEtiquetas'),
            intro: introjsPosicionEtiquetas
        },
        {
            element: document.querySelector('#grabar_recogida'),
            intro: grabar_recogida
        },
        {
            element: document.querySelector('#grabar_envio'),
            intro: grabar_envio
        },
        {
            element: document.querySelector('#tabla_historico'),
            intro: tabla_historico
        }]
    });
    intro.start();
    (jQuery)('.introjs-skipbutton').hide();
}

function checkIntroJS(){
    if( (jQuery)('#toggleOrderIntroJS').prop('checked') ) {        
        (jQuery)("#manualInteractivoOrder").removeClass('d-none');
    }else{
        (jQuery)("#manualInteractivoOrder").addClass('d-none');

    }
}