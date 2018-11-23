$('#Modal_Editar_Prueba').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
	      var id_prueba = button.data('id_prueba')
	      var nombre = button.data('nombre')
	      var id_ciudad = button.data('id_ciudad')
	      
	      
	      var modal = $(this)
		  modal.find('.modal-body #id_prueba').val(id_prueba)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #id_ciudad').val(id_ciudad)
		  
		 
		   $('.alert').hide();//Oculto alert
		})