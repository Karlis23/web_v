    <hr>
    <div class="row">
      <div class="col-md-12">
          <p>Programación Web
            <br/>
            Examen 3
          </p>
      </div>

    </div>

    </div><!--/.container-->
<!--FancyBox-->
    <script>
        $(document).ready(function() {
            $(".fancyy").fancybox({
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'width': 680,
                'height': 450,
                'type': 'iframe'
            });
        });
    </script>
<!--Valida el formulario autor-->
  <script type="text/javascript">
    $(document).ready(function() {
        $('#Form_autor').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                nombre: {
                    validators: {
                        notEmpty: {
                            message: 'El nombre es requerido.'
                        }
                    }
                },
                apellidos: {
                    validators: {
                        notEmpty: {
                            message: 'Los apellidos son requeridos.'
                        }
                    }
                },
                email: {
                    validators: {
                        emailAddress: {
                            message: 'The value is not a valid email address'
                        }
                    }
                },
            }
        });
    });

  </script>

  <!--Valida el formulario Revista-->
  <script type="text/javascript">
    $(document).ready(function() {
        $('#Form_revista').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                nombre: {
                    validators: {
                        notEmpty: {
                            message: 'El nombre es requerido.'
                        }
                    }
                },
                portada: {
                    validators: {
                        file: {
                            extension: 'jpeg,png',
                            type: 'image/jpeg,image/png',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'The selected file is not valid'
                        }
                    }
                },
                volumen: {
                    validators: {
                        integer: {
                            message: 'solo enteros'
                        }
                    }
                },
                titulo: {
                    validators: {
                        notEmpty: {
                            message: 'El titulo es requerido.'
                        }
                    }
                },
                subtitulo: {
                    validators: {
                        notEmpty: {
                            message: 'El subtitulo es requerido.'
                        }
                    }
                },
                numero: {
                    validators: {
                        integer: {
                            message: 'solo enteros'
                        }
                    }
                },
                clave: {
                    validators: {
                        integer: {
                            message: 'solo enteros'
                        }
                    }
                },
                directorio: {
                    validators: {
                        notEmpty: {
                            message: 'El directorio es requerido.'
                        }
                    }
                },
                editorial: {
                    validators: {
                        notEmpty: {
                            message: 'El directorio es requerido.'
                        }
                    }
                },
                status: {
                    validators: {
                        integer: {
                            message: 'solo enteros'
                        }
                    }
                },
                

            }
        });
    });

  </script>

  <!--Valida el formulario Articulo-->
  <script type="text/javascript">
    $(document).ready(function() {
        $('#Form_articulo').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                nombre: {
                    validators: {
                        notEmpty: {
                            message: 'El nombre es requerido.'
                        }
                    }
                },
                archivo_pdf: {
                          validators: {
                              notEmpty: {
                                  message: 'El archivo_pdf es requerido.'
                              }
                          }
                      },
                volumen: {
                    validators: {
                        integer: {
                            message: 'solo enteros'
                        }
                    }
                },
                resumen: {
                    validators: {
                        notEmpty: {
                            message: 'El resumen es requerido.'
                        }
                    }
                },
                abstract: {
                    validators: {
                        notEmpty: {
                            message: 'El abstract es requerido.'
                        }
                    }
                },
                conclusiones: {
                    validators: {
                        notEmpty: {
                            message: 'Las conclusiones son requeridas.'
                        }
                    }
                },
                /*fecha_creacion: {
                    validators: {
                        notEmpty: {
                            message: 'Las fecha es requerida.'
                        }
                    }
                },*/
                referencias: {
                    validators: {
                        notEmpty: {
                            message: 'Las referencias son requeridas.'
                        }
                    }
                },
                introduccion: {
                    validators: {
                        notEmpty: {
                            message: 'La introduccion es requerida.'
                        }
                    }
                },
                metodologia: {
                    validators: {
                        notEmpty: {
                            message: 'La metodologia es requerida.'
                        }
                    }
                },
                contenido: {
                    validators: {
                        notEmpty: {
                            message: 'El contenido es requerido.'
                        }
                    }
                },
                status: {
                    validators: {
                        integer: {
                            message: 'solo enteros'
                        }
                    }
                },              
            }
        });
    });

  </script>

  <!--Valida el formulario status-->
  <script type="text/javascript">
    $(document).ready(function() {
        $('#Form_status').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                status: {
                    validators: {
                        notEmpty: {
                            message: 'El status es requerido.'
                        }
                    }
                },
            }
        });
    });

  </script>

  <!--datepicker-->

    <script type="text/javascript">
        $(function () {
            $('#fecha_creacion').datetimepicker({
                language: 'es'
            });
        });
    </script>



  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>




  </body>
 
</html>