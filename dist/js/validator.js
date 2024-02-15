$(document).ready(function() {
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  // Scripts de la entidad Suppliers  
    $('#supplierForm').validate({
      rules: {
        name: {
          required: true,
          minlength: 2,
          maxlength: 30
        },
        direction: {
          required: true,
        },
        city: {
          required: true,
        },
        province: {
          required: true,
        },
        cp: {
          required: true,
          minlength: 5
        },
        country: {
          required: true,
        },
        telephone: {
          required: true,
          minlength: 8
        },
        email: {
          required: true,
          email: true
        }
      },
      messages: {
        name: {
          required: "Por favor ingrese su nombre",
          minlength: "Su nombre debe contener como minimo dos(2) caracteres",
          maxlength: "Su nombre debe contener como maximo treinta(30) caracteres"
        },
        direction: {
          required: "Por favor ingrese su direccion"
        },
        city: {
          required: "Por favor ingrese su ciudad"
        },
        province: {
          required: "Por favor ingrese su provincia"
        },
        cp: {
          required: "Por favor ingrese su codigo postal"
        },
        country: {
          required: "Por favor ingrese su pais"
        },
        telephone: {
          required: "Por favor ingrese su numero de telefono",
          minlength: "El numero debe contener como minimo dos(8) digitos"
        },
        email: {
          required: "Por favor ingrese su email",
          email: "Por favor ingrese un email valido"
        },
      },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.input-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
      $(element).addClass('is-valid');
    },
    submitHandler: function (form) {
      var datos = $(form).serializeArray();
      //console.log(datos);
      //alert( "Form successful submitted!" );
      //form.submit();
      

      $.ajax({
        method: $(form).attr('method'),
        data: datos,
        url: 'index.php?controller=Suppliers&action=create',
        dataType: 'json',
        async: false,
        success: function(data) {
          console.log(data);
          var result = data[0];
          console.log(typeof(result[0]));
            if (result[0]) {
               Toast.fire({
                icon: 'success',
                title: 'Success',
                text: 'El Proveedor se registro correctamente'
              }).then(function(){
                  window.location = 'index.php?controller=Suppliers&action=index';
              })
              
            } else {
              Toast.fire({
                icon: 'error',
                title: 'Error',
                text: 'El proveedor ya existe'
              })
            }

            
          }
        })
      }
    })
    $('#updateSupplier').validate({
      rules: {
        name: {
          required: true,
          minlength: 2,
          maxlength: 30
        },
        direction: {
          required: true,
        },
        city: {
          required: true,
        },
        province: {
          required: true,
        },
        cp: {
          required: true,
          minlength: 5
        },
        country: {
          required: true,
        },
        telephone: {
          required: true,
          minlength: 8
        },
        email: {
          required: true,
          email: true
        }
      },
      messages: {
        name: {
          required: "Por favor ingrese su nombre",
          minlength: "Su nombre debe contener como minimo dos(2) caracteres",
          maxlength: "Su nombre debe contener como maximo treinta(30) caracteres"
        },
        direction: {
          required: "Por favor ingrese su direccion"
        },
        city: {
          required: "Por favor ingrese su ciudad"
        },
        province: {
          required: "Por favor ingrese su provincia"
        },
        cp: {
          required: "Por favor ingrese su codigo postal"
        },
        country: {
          required: "Por favor ingrese su pais"
        },
        telephone: {
          required: "Por favor ingrese su numero de telefono",
          minlength: "El numero debe contener como minimo dos(8) digitos"
        },
        email: {
          required: "Por favor ingrese su email",
          email: "Por favor ingrese un email valido"
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid');
      },
      submitHandler: function (form) {
        var datos = $(form).serializeArray();
        //console.log(datos);
        //alert( "Form successful submitted!" );
        //form.submit();
        

        $.ajax({
          method: $(form).attr('method'),
          data: datos,
          url: 'index.php?controller=Suppliers&action=update',
          dataType: 'json',
          async: false,
          success: function(data) {
            console.log(data);
            var result = data[0];
            console.log(typeof(result[0]));
            if (result[0]) {
               Toast.fire({
                icon: 'success',
                title: 'Success',
                text: 'El proveedor se actualizo correctamente'
              }).then(function(){
                  window.location = 'index.php?controller=Suppliers&action=index';
              })
              
            }
          }
        })
      }
    })

    // FIN VALIDADOR SUPPLIERS



    $('#userForm').validate({
      rules: {
        name: {
            required: true,
            minlength: 2,
            maxlength: 30,
        },
        lastname: {
            required: true,
            minlength: 2,
            maxlength: 30,
        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 5
        },
      },
      messages: {
        name: {
            required: "Por favor ingrese su nombre",
            minlength: "Su nombre debe contener como minimo dos(2) caracteres",
            maxlength: "Su nombre debe contener como maximo treinta(30) caracteres",
        },
        lastname: {
            required: "Por favor ingrese su apellido",
            minlength: "Su apellido debe contener como minimo dos(2) caracteres",
            maxlength: "Su apellido debe contener como maximo treinta(30) caracteres",
        },
        email: {
          required: "Por favor ingrese su email",
          email: "Por favor ingrese un email valido"
        },
        password: {
          required: "Por favor ingrese su password",
          minlength: "Su password debe contener como minimo cinco(5) caracteres"
        },
      telephone: {
        required: "Por favor ingrese su numero de telefono",
        minlength:"El numero debe contener como minimo dos(8) digitos"
      },
      email: {
        required: "Por favor ingrese su email",
        email: "Por favor ingrese un email valido"
      }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid');
      },
      submitHandler: function (form) {
        var datos = $(form).serializeArray();
        //console.log(datos);
        //alert( "Form successful submitted!" );
        //form.submit();
        

        $.ajax({
          method: $(form).attr('method'),
          data: datos,
          url: 'index.php?controller=Users&action=create',
          dataType: 'json',
          async: false,
          success: function(data) {
            console.log(data);
            var result = data[0];
            console.log(typeof(result[0]));
            if (result[0]) {
               Toast.fire({
                icon: 'success',
                title: 'Success',
                text: 'El susuario se registro correctamente'
              }).then(function(){
                  window.location = 'index.php?controller=Users&action=index';
              })
              
            } else {
              Toast.fire({
                icon: 'error',
                title: 'Error',
                text: 'El email ya existe, por favor ingrese otro email'
              })
            }

            //window.location = 'index.php?controller=Users&action=index';
            
          }
        })
      }
    })


    $('#login').validate({
      rules: {
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 5
        },
      },
      messages: {
        email: {
          required: "Por favor ingrese su email",
          email: "Por favor ingrese un email valido"
        },
        password: {
          required: "Por favor ingrese su password",
          minlength: "Su password debe contener como minimo cinco(5) caracteres"
        }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.input-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid');
      },
      submitHandler: function (form) {
        var datos = $(form).serializeArray();
        //console.log(datos);
        //alert( "Form successful submitted!" );
        //form.submit();
        

        $.ajax({
          method: $(form).attr('method'),
          data: datos,
          url: 'index.php?controller=Login&action=login',
          dataType: 'json',
          async: false,
          success: function(data) {
            console.log(data);
            var result = data;
            console.log(typeof(result));
            if (result.status == "ok") {
               Toast.fire({
                icon: 'success',
                title: 'Success',
                text: 'Bienvenid@ '+result.result[0].name+' !!!'
              }).then(function(){
                  window.location = 'index.php?controller=Index&action=index';
              })
              
            } else if(result.status == "passBad") {
              Toast.fire({
                icon: 'error',
                title: 'Error',
                text: 'Password incorrecto'
              })
            } else if(result.status == "emailBad") {
              Toast.fire({
                icon: 'error',
                title: 'Error',
                text: 'Email no existe'
              })
            }

            
          }
        })
      }

    })

    $('#updateUser').validate({
      rules: {
        name: {
            required: true,
            minlength: 2,
            maxlength: 30,
        },
        lastname: {
            required: true,
            minlength: 2,
            maxlength: 30,
        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 5,
        },
      },
      messages: {
        name: {
            required: "Por favor ingrese su nombre",
            minlength: "Su nombre debe contener como minimo dos(2) caracteres",
            maxlength: "Su nombre debe contener como maximo treinta(30) caracteres",
        },
        lastname: {
            required: "Por favor ingrese su apellido",
            minlength: "Su apellido debe contener como minimo dos(2) caracteres",
            maxlength: "Su apellido debe contener como maximo treinta(30) caracteres",
        },
        email: {
          required: "Por favor ingrese su email",
          email: "Por favor ingrese un email valido"
        },
        password: {
          required: "Por favor ingrese su password",
          minlength: "Su password debe contener como minimo cinco(5) caracteres"
        }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid');
      },
      submitHandler: function (form) {
        var datos = $(form).serializeArray();
        //console.log(datos);
        //alert( "Form successful submitted!" );
        //form.submit();
        

        $.ajax({
          method: $(form).attr('method'),
          data: datos,
          url: 'index.php?controller=Users&action=update',
          dataType: 'json',
          async: false,
          success: function(data) {
            console.log(data);
            var result = data[0];
            console.log(typeof(result[0]));
            if (result[0]) {
               Toast.fire({
                icon: 'success',
                title: 'Success',
                text: 'El usuario se registro correctamente'
              }).then(function(){
                  window.location = 'index.php?controller=Users&action=index';
              })
              
            } else {
              Toast.fire({
                icon: 'error',
                title: 'Error',
                text: 'El email ya existe, por favor ingrese otro email'
              })
            }

            //window.location = 'index.php?controller=Users&action=index';
            
          }
        })
      }
    })

    $(document).on('click','.delete', function(e){
      e.preventDefault();
      var id = $(this).attr('data-id');
      var controller = $(this).attr('data-controller');
      Swal.fire({
        icon: 'question',
        title: '¿Quiere borrar el registro?',
        showConfirmButton: true,
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if(result.isConfirmed) {
          $.ajax({
            type: 'post',
            dataType: 'json',
            url: "index.php?controller="+controller+"&action=delete",
            data: {id: id},
            success: function(){
              Toast.fire({
                icon: 'success',
                cancelButtonText: 'Cancelar',
                title: 'Se eliminado correctamente el registro ' + id
              }).then(function(){
                window.location = "index.php?controller="+controller+"&action=index";
            })
            }
          })
        }  
      })
    })
    // Scripts de la entidad Customers
    $('.select2').select2();
    $('#customerForm').validate({
      rules: {
        name: {
            required: true,
            minlength: 2,
            maxlength: 100,
        },
        cuit: {
            required: true,
            number: true,
            minlength: 11,
            maxlength: 11,
        },
        lastname: {
          required: true,
          minlength: 2,
          maxlength: 100,
        },
      },
      messages: {
        name: {
            required: "Por favor ingrese el nombre",
            minlength: "Su nombre debe contener como minimo dos(2) caracteres",
            maxlength: "Su nombre debe contener como maximo treinta(100) caracteres",
        },
        cuit: {
            required: "Por favor ingrese el cuit",
            minlength: "Su cuit debe contener once(11) caracteres",
            maxlength: "Su cuit debe contener once(11) caracteres",
        },
        lastname: {
          required: "Por favor ingrese el nombre",
          minlength: "Su nombre debe contener como minimo dos(2) caracteres",
          maxlength: "Su nombre debe contener como maximo treinta(100) caracteres",
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid');
      },
      submitHandler: function (form) {
        var datos = $(form).serializeArray();
        //console.log(datos);
        //alert( "Form successful submitted!" );
        //form.submit();
        

        $.ajax({
          method: $(form).attr('method'),
          data: datos,
          url: 'index.php?controller=Customers&action=create',
          dataType: 'json',
          async: false,
          success: function(data) {
            console.log(data);
            var result = data[0];
            console.log(typeof(result[0]));
            if (result[0]) {
               Toast.fire({
                icon: 'success',
                title: 'Success',
                text: 'El cliente se registro correctamente'
              }).then(function(){
                  window.location = 'index.php?controller=Customers&action=index';
              })
              
            } else {
              Toast.fire({
                icon: 'error',
                title: 'Error',
                text: 'El cuit ya existe'
              })
            }

            
          }
        })
      }
    })
    $('#updateCustomer').validate({
      rules: {
        name: {
            required: true,
            minlength: 2,
            maxlength: 100,
        },
        cuit: {
            required: true,
            number: true,
            minlength: 11,
            maxlength: 11,
        },
        lastname: {
          required: true,
          minlength: 2,
          maxlength: 100,
        },
      },
      messages: {
        name: {
            required: "Por favor ingrese el nombre",
            minlength: "Su nombre debe contener como minimo dos(2) caracteres",
            maxlength: "Su nombre debe contener como maximo treinta(100) caracteres",
        },
        cuit: {
            required: "Por favor ingrese el cuit",
            minlength: "Su cuit debe contener once(11) caracteres",
            maxlength: "Su cuit debe contener once(11) caracteres",
        },
        lastname: {
          required: "Por favor ingrese el nombre",
          minlength: "Su nombre debe contener como minimo dos(2) caracteres",
          maxlength: "Su nombre debe contener como maximo treinta(100) caracteres",
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid');
      },
      submitHandler: function (form) {
        var datos = $(form).serializeArray();
        //console.log(datos);
        //alert( "Form successful submitted!" );
        //form.submit();
        

        $.ajax({
          method: $(form).attr('method'),
          data: datos,
          url: 'index.php?controller=Customers&action=update',
          dataType: 'json',
          async: false,
          success: function(data) {
            console.log(data);
            var result = data[0];
            console.log(typeof(result[0]));
            if (result[0]) {
               Toast.fire({
                icon: 'success',
                title: 'Success',
                text: 'El cliente se actualizo correctamente'
              }).then(function(){
                  window.location = 'index.php?controller=Customers&action=index';
              })
              
            }
          }
        })
      }
    })
    
    // COMIENZO DE VALIDADOR
    $('#productForm').validate({
      rules: {
        name: {
          required: true,
          minlength: 2,
          maxlength: 250,
        },
          detail: {
          required: true,
          minlength: 2,
          maxlength: 255,
        }
      },
      messages: {
        name: {
          required: "Por favor ingrese el nombre del producto",
          minlength: "Su nombre debe contener como minimo dos(2) caracteres",
          maxlength: "Su nombre debe contener como maximo doscientos cincuenta (250) caracteres",
        },
        detail: {
          required: "Ingrese la descripcion del producto",
          minlength: "Su cuit debe contener dos(2) caracteres",
          maxlength: "Su cuit debe contener doscientos cincuenta y cinco(255) caracteres",
        }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid');
      },
      submitHandler: function (form) {
        var datos = $(form).serializeArray();
        //console.log(datos);
        //alert( "Form successful submitted!" );
        //form.submit();
        

        $.ajax({
          method: $(form).attr('method'),
          data: datos,
          url: 'index.php?controller=Products&action=create',
          dataType: 'json',
          async: false,
          success: function(data) {
            console.log(data);
            var result = data[0];
            console.log(typeof(result[0]));
            if (result[0]) {
               Toast.fire({
                icon: 'success',
                title: 'Success',
                text: 'El producto se registro correctamente'
              }).then(function(){
                  window.location = 'index.php?controller=Products&action=index';
              })
              
            }
            
          }
        })
      }

    })
//INICIO VALIDADOR SALIDA DE PRODUCTO

    $('#updateProduct').validate({
      rules: {
        name: {
          required: true,
          minlength: 2,
          maxlength: 250,
        },
          detail: {
          required: true,
          minlength: 2,
          maxlength: 255,
        },
      },
      messages: {
        name: {
          required: "Por favor ingrese el nombre del producto",
          minlength: "Su nombre debe contener como minimo dos(2) caracteres",
          maxlength: "Su nombre debe contener como maximo doscientos cincuenta (250) caracteres",
        },
        detail: {
          required: "Ingrese la descripcion del producto",
          minlength: "Su cuit debe contener dos(2) caracteres",
          maxlength: "Su cuit debe contener doscientos cincuenta y cinco(255) caracteres",
        }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid');
      },
      submitHandler: function (form) {
        var datos = $(form).serializeArray();
        //console.log(datos);
        //alert( "Form successful submitted!" );
        //form.submit();
        

        $.ajax({
          method: $(form).attr('method'),
          data: datos,
          url: 'index.php?controller=Products&action=update',
          dataType: 'json',
          async: false,
          success: function(data) {
            console.log(data);
            var result = data[0];
            console.log(typeof(result[0]));
            if (result[0]) {
               Toast.fire({
                icon: 'success',
                title: 'Success',
                text: 'El producto se actualizo correctamente'
              }).then(function(){
                  window.location = 'index.php?controller=Products&action=index';
              })
              
            }
          }
        })
      }
    })
    $('#outputproductForm').validate({
      rules: {
        amount: {
          required: true,
          minlength: 1,
          maxlength: 11,
        },
        output_date: {
          required: true
        },
        idcustomers:{
          required: true
        },
        idproducts:{
          required: true
        }
      },
      messages: {
        amount: {
          required: "Por favor ingrese la cantidad",
          minlength: "Su cantidad debe contener como minimo un (1) digito",
          maxlength: "Su cantidad debe contener como maximo once (11) digitos",
        
        },
        output_date: {
          required: "Ingrese la fecha del vencimiento"
        },
        idcustomers: {
          required: "Selecione un cliente"
        },
        idproducts:{     
          required: "Selecione un producto"
        }
      
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid');
      },
      submitHandler: function (form) {
        var datos = $(form).serializeArray();
        //console.log(datos);
        //alert( "Form successful submitted!" );
        //form.submit();
        

        $.ajax({
          method: $(form).attr('method'),
          data: datos,
          url: 'index.php?controller=Outputproducts&action=create',
          dataType: 'json',
          async: false,
          success: function(data) {
            console.log(data);
            var result = data[0];
            console.log(typeof(result[0]));
            if (result[0]) {
               Toast.fire({
                icon: 'success',
                title: 'Success',
                text: 'La salida del producto se registro correctamente'
              }).then(function(){
                  window.location = 'index.php?controller=Outputproducts&action=index';
              })
              
            }
            
          }
        })
      }

    })
// FIN DE VALIDADOR DE PRODUCTO

/////////////////////////////////////

//INICIO VALIDADOR ENTRADA DE PRODUCTO
$('#entryproductForm').validate({
  rules: {
    amount: {
      required: true,
      minlength: 1,
      maxlength: 11,
    },
    entry_date: {
      required: true
    },
    suppliers_id:{
      required: true
    },
    idproducts:{
      required: true
    }
  },
  messages: {
    amount: {
      required: "Por favor ingrese la cantidad",
      minlength: "Su cantidad debe contener como minimo un (1) digito",
      maxlength: "Su cantidad debe contener como maximo once (11) digitos",
    
    },
    entry_date: {
      required: "Ingrese la fecha del vencimiento"
    },
    suppliers_id: {
      required: "Seleccione un proveedor"
    }, 
    idproducts: {
      required: "Seleccione un producto"
    }
  },
  errorElement: 'span',
  errorPlacement: function (error, element) {
    error.addClass('invalid-feedback');
    element.closest('.form-group').append(error);
  },
  highlight: function (element, errorClass, validClass) {
    $(element).addClass('is-invalid');
  },
  unhighlight: function (element, errorClass, validClass) {
    $(element).removeClass('is-invalid');
    $(element).addClass('is-valid');
  },
  submitHandler: function (form) {
    var datos = $(form).serializeArray();
    //console.log(datos);
    //alert( "Form successful submitted!" );
    //form.submit();
    

    $.ajax({
      method: $(form).attr('method'),
      data: datos,
      url: 'index.php?controller=Entryproducts&action=create',
      dataType: 'json',
      async: false,
      success: function(data) {
        console.log(data);
        var result = data[0];
        console.log(typeof(result[0]));
        if (result[0]) {
           Toast.fire({
            icon: 'success',
            title: 'Success',
            text: 'La entrada del producto se registro correctamente'
          }).then(function(){
              window.location = 'index.php?controller=Entryproducts&action=index';
          })
          
        }
        
      }
    })
  }

})
//FIN VALIDADOR ENTRADA DE PRODUCTO



    // 
    // 



    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }


    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })


});
