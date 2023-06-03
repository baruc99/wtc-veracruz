/*general settings*/
$(document).ready(function() {
	// $("#form-contacto").validate({
    //     highlight: function(element) {
    //     },
    //     unhighlight: function(element) {
    //     },
    //     submitHandler: function(form) {
    //         var formData = new FormData($(form)[0]);
    //         formData.append('action', 'sendmail');
    //         formData.append('permalink', wpurl_ajax.permalink );
    //         var self = $(form);

    //         $.ajax({
    //             url: wpurl_ajax.templateUrl,
    //             type: "POST",
    //             data: formData,
    //             processData: false,
    //             contentType: false,
    //             beforeSend: function (){
    //                 self.find('button').html('Enviando... <i class="fas fa-spinner fa-spin"></i>');
    //             },
    //             success: function(data){
    //                 data = JSON.parse(data);
    //                 $($(form)).prepend("<span class='d-block alert alert-"+data.estatus+"'>"+data.mensaje+"</span>");
    //                 $($(form)).each (function(){
    //                     this.reset();
    //                 });
    //             },
    //             complete: function() {
    //                 self.find('button').html('Enviado');
    //                 $(this).animate({
    //                     scrollTop: 0
    //                 }, 800);
    //                 return false;
    //             },
    //             error: function(xhr) {
    //                 console.log("Ocurrio un error, intente otra vez");
    //                 self.find('button').text('Error');
    //             }
    //         });
    //     }
    // });

    console.log("hola mundo");
    // const menuResponsive = document.getElementById("menu-responsive");

    // menuResponsive.addEventListener('click', function() {
    //     console.log('click');
    // });



});