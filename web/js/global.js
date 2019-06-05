$(document).ready(function(){
    $(".elim").click(function(){
        var id=$(this).attr("data-id");
        var url=$(this).attr("data-url");
        Swal.fire({
            title: 'Esta seguro que desea eliminar este empleado?',
            text: "",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!'
          }).then((result) => {
            if (result.value) {
              Swal.fire(
                'Registro eliminado!',
                '',
                'success'
              );
              
                $( this ).parent().parent().hide( 3000, function() {
                  $( this ).remove();
                  $.ajax({
                    url:url,
                    data:"id="+id,
                    type:"POST"
                });
                });
              
             
            }
          })
    });


    $(".edi").click(function(){
      var id=$(this).attr("data-id");
      var url=$(this).attr("data-url");
      $.ajax({
        url:url,
        type:"get",
        data:"id="+id,
        success:function(r){
          $(".respuesta").html("");
          $(".respuesta").html(r);

        }
      });
    });
});