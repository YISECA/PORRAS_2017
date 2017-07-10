$(function() {

    function cargar() {


    $.ajax({url:'listar_datos',type:  'post',success:  function (response) {
        $('#loading').show();
        $('#div-tabla').html(response);
        },complete: function(){

           $('#lista').DataTable({"language": {"url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
                  },
                   dom: 'Bfrtip',"bPaginate": false,

        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]


            });
           $('#loading').hide();


          }

      });
    }
    cargar();

    $('body').delegate("#form_eliminar","submit",function(e)
    {

        if (confirm("Realmente deseas eliminar el equipo?")){

            var formObj = $(this);
            var formURL = formObj.attr("action");
            var formData = new FormData(this);
            $.ajax({
                url: formURL,
                type: 'POST',
                data:  formData,
                mimeType:"multipart/form-data",
                contentType: false,
                cache: false,
                processData:false,
                success: function(data, textStatus, jqXHR)
                {
                    cargar();
                }
            });
        }

        e.preventDefault();
    });


$('#a-registro').hide();
$('#a-descarga').hide();
$('#a-login').hide();
$('#a-cerrar').show();



});