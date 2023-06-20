/*general settings*/
$(document).ready(function () {
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

    var breakpoint = window.matchMedia("(max-width: 768px)");
    var url = window.location.pathname;

    breakpoint.addListener(handleBreakpointChange);  // Registra el listener inicial


});

function menuResponsive() {

    const breakpoint = window.matchMedia("(max-width: 768px)");

}

function handleBreakpointChange(event) {
    if (event.matches) {
        // Se ha alcanzado el breakpoint de 768px o menos
        console.log("Estás en el breakpoint de 768px o menos.");

        var firtsLi = document.querySelector('#main-menu ul li:first-child');


        document.querySelector('#main-menu ul li:first-child a').href = '#';


        firtsLi.addEventListener('click', function (event) {
            // event.preventDefault();
            console.log("click");
            document.querySelectorAll('#main-menu ul li:first-child ul')[0].classList.add('menuUp');
        });

        $(document).on('click', function (event) {
            if (!$(event.target).closest(firtsLi).length) {
                // Código para el clic fuera de firtsLi
                $('#main-menu ul li:first-child ul').removeClass('menuUp');
                console.log("otro lado");
            }
        });



    }
    else {
        // Se ha superado el breakpoint de 768px
        console.log("Estás por encima del breakpoint de 768px.");
        // Realiza las acciones correspondientes
    }
}