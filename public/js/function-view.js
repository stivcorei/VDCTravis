
$(document).ready(function() {
    $('#table-estate').dataTable();
    $('#table-update-person').dataTable();
    $('label[for="id"]').hide()
    $('input[for="id-estate-remove"]').hide();
    $('input[for="id-estate"]').hide();
    $('input[for="identification-add-estate"]').hide();
} );

function editEstate(id)
{

     var name = document.getElementById('name'+id).innerHTML;
     var address = document.getElementById('address'+id).innerHTML;
     var altitude = document.getElementById('altitude'+id).innerHTML;
     var municipalities_id = document.getElementById('municipalities_id'+id).innerHTML;
     var vereda = document.getElementById('vereda'+id).innerHTML;
     var identification = document.getElementById('identification'+id).innerHTML;
     // var codigo_region = document.getElementById('codigo_region'+id).innerHTML;

     $("#modal-edit-estate").modal();

     document.getElementById('names-estate').value=name;
     document.getElementById('address-estate').value=address;
     document.getElementById('altitude-estate').value=altitude;
     document.getElementById('city-estate').value=municipalities_id;
     document.getElementById('vereda-estate').value=vereda;
     document.getElementById('id-estate').value=id;


}

function removeEstate(id)
{

  $("#modal-remove-estate").modal();
  document.getElementById('id-estate-remove').value=id;

}

function addEstate(id)
{
     $("#modal-add-estate").modal();
     document.getElementById('identification-add-estate').value=id;

}

function addLots(id)
{
  document.getElementById('id-estate').value=id;
   $("#modal-add-lots").modal();
}

/**
**Ojo revisar.
**/
function onlyLetters(e){
      key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toLowerCase();
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
      especiales = "8-37-39-46";

      tecla_especial = false
      for(var i in especiales){
           if(key == especiales[i]){
               tecla_especial = true;
               break;
           }
       }

       if(letras.indexOf(tecla)==-1 && !tecla_especial){
           return false;
       }
   }

   function onlyNumberId(evt)
   {
     if(window.event){//asignamos el valor de la tecla a keynum
       keynum = evt.keyCode; //IE
     }
     else{
       keynum = evt.which; //FF
     }
     //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
     if((keynum > 44 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
       return true;
     }
     else{
       return false;
     }

   }

   function onlyNumber(evt)
   {
     if(window.event){//asignamos el valor de la tecla a keynum
       keynum = evt.keyCode; //IE
     }
     else{
       keynum = evt.which; //FF
     }
     //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
     if((keynum > 44 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
       return true;
     }
     else{
       return false;
     }

   }
