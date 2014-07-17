      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div><!--/.container-->

    <script type="text/javascript">
        $(document).ready(function() {
            $(".formulario").fancybox({
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'width': 680,
                'height': 450,
                'type': 'iframe'
            });
        });
    </script>

    <script>
    $(document).ready(function() {
        $('#seleccionarch').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                portada: {
                    validators: {
                        file: {
                            extension: 'jpeg,png',
                            type: 'image/jpeg,image/png',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'The selected file is not valid'
                        }
                    }
                }
            }
        });
    });
  </script>

  <script>
      $(document).ready(function() {
          $('#formregistro').bootstrapValidator({
                  // Only disabled elements are excluded
                  // The invisible elements belonging to inactive tabs must be validated
                  excluded: [':disabled'],
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
                      volumen: {
                          validators: {
                              notEmpty: {
                                  message: 'El volumen es requerido.'
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
                                  message: 'El subtitulo es requerido'
                              }
                          }
                      },
                      clave: {
                          validators: {
                              notEmpty: {
                                  message: 'El titulo es requerido.'
                              }
                          }
                      },

                  }
              });
      });
      </script>

      <script>
    $(document).ready(function() {
        $('#integerForm').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                number: {
                    validators: {
                        integer: {
                            message: 'The value is not an integer'
                        }
                    }
                }
            }
        });
    });
    </script>

    <script>
  $(document).ready(function() {
      $('#fecha').datetimepicker();

      $('#fechaform').bootstrapValidator({
          feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
              meeting: {
                  validators: {
                      date: {
                          format: 'MM/DD/YYYY h:m A',
                          message: 'The value is not a valid date'
                      }
                  }
              }
          }
      });

      $('#datetimePicker')
          .on('dp.change dp.show', function(e) {
              // Validate the date when user change it
              $('#meetingForm')
                  // Get the bootstrapValidator instance
                  .data('bootstrapValidator')
                  // Mark the field as not validated, so it'll be re-validated when the user change date
                  .updateStatus('meeting', 'NOT_VALIDATED', null)
                  // Validate the field
                  .validateField('meeting');
          });
  });
  </script>

  <script type="text/javascript">
       $(function () {
           $('#fechaform').datetimepicker({
               language: 'es'
           });
         });  
  </script>

  <script>
$(document).ready(function() {
    $('#ratyForm')
        .bootstrapValidator({
            // The disabled elements are excluded
            // Hidden elements (including the rating star) are included
            excluded: ':disabled',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                directorio: {
                    validators: {
                        notEmpty: {
                            message: 'El directorio es requerido'
                        }
                    }
                },
                    editorial: {
                    validators: {
                        notEmpty: {
                            message: 'La editorial es requerida'
                        }
                    }
                },
                
            }
        });
});
</script>





	<script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>




  </body>
</html>