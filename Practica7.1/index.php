<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
  
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  


    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5>Validacion</h5>
          <form id="accountForm" method="post" class="form-horizontal">
            <div class="tab-content">
                <div class="tab-pane active" id="info-tab">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Full name</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="fullName" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Company</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="company" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Job title</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="jobTitle" />
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="address-tab">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Address</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="address" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">City</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="city" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Country</label>
                        <div class="col-lg-5">
                            <select class="form-control" name="country">
                                <option value="">Select a country</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                <option value="IT">Italy</option>
                                <option value="JP">Japan</option>
                                <option value="RU">Russian</option>
                                <option value="US">United State</option>
                                <option value="GB">United Kingdom</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-5 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary">Validate</button>
                </div>
            </div>
        </form>
    
        </div>
        <div class="col-md-6">
          <style type="text/css">
#buttonGroupForm.form-horizontal .has-feedback .form-control-feedback {
    top: 0;
    right: -30px;
}
</style>
          <form id="buttonGroupForm" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-lg-3 control-label">Gender</label>
        <div class="col-lg-9">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" name="gender" value="male" /> Male
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="gender" value="female" /> Female
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="gender" value="other" /> Other
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Languages</label>
        <div class="col-lg-9">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="checkbox" name="languages[]" value="english" /> English
                </label>
                <label class="btn btn-default">
                    <input type="checkbox" name="languages[]" value="german" /> German
                </label>
                <label class="btn btn-default">
                    <input type="checkbox" name="languages[]" value="french" /> French
                </label>
                <label class="btn btn-default">
                    <input type="checkbox" name="languages[]" value="russian" /> Russian
                </label>
                <label class="btn btn-default">
                    <input type="checkbox" name="languages[]" value="italian"> Italian
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-9 col-lg-offset-3">
            <button type="submit" class="btn btn-primary">Validate</button>
        </div>
    </div>
</form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">

          <form id="ratyForm" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-lg-3 control-label">Rating</label>
        <div class="col-lg-5">
            <div id="ratyRating"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Review title</label>
        <div class="col-lg-5">
            <input type="text" class="form-control" name="title" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Your review</label>
        <div class="col-lg-5">
            <textarea rows="5" class="form-control" name="content"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-5 col-lg-offset-3">
            <button type="submit" class="btn btn-primary">Validate</button>
        </div>
    </div>
</form>

        </div>
      </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    
    
    <script>
      $(document).ready(function() {
          $('#accountForm').bootstrapValidator({
                  // Only disabled elements are excluded
                  // The invisible elements belonging to inactive tabs must be validated
                  excluded: [':disabled'],
                  feedbackIcons: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },
                  fields: {
                      fullName: {
                          validators: {
                              notEmpty: {
                                  message: 'The full name is required'
                              }
                          }
                      },
                      company: {
                          validators: {
                              notEmpty: {
                                  message: 'The company name is required'
                              }
                          }
                      },
                      address: {
                          validators: {
                              notEmpty: {
                                  message: 'The address is required'
                              }
                          }
                      },
                      city: {
                          validators: {
                              notEmpty: {
                                  message: 'The city is required'
                              }
                          }
                      }
                  }
              });
      });
      </script>

      <script>
$(document).ready(function() {
    $('#buttonGroupForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        // Since the Bootstrap Button hides the radio and checkbox
        // We exclude the disabled elements only
        excluded: ':disabled',
        fields: {
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            'languages[]': {
                validators: {
                    choice: {
                        min: 1,
                        max: 2,
                        message: 'Please choose 1 - 2 languages you can speak'
                    }
                }
            }
        }
    });
});
</script>

<!-- Include Raty JS file -->
<script src="js/jquery.raty.min.js"></script>
<script>
$(document).ready(function() {
    // Raty example
    $('#ratyRating').raty({
        path: '/images',
        size: 24,
        // The name of hidden field generated by Raty
        scoreName: 'star',
        // Re-validate the star rating whenever user change it
        click: function (score, evt) {
            $('#ratyForm')
                .data('bootstrapValidator')             // Return the bootstrapValidator instance
                .updateStatus('star', 'NOT_VALIDATED')  // Mark the star field as not validated yet
                .validateField('star');                 // Validate it again
        }
    });
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
                star: {
                    validators: {
                        notEmpty: {
                            message: 'The rating is required'
                        }
                    }
                },
                title: {
                    validators: {
                        notEmpty: {
                            message: 'The review title is required'
                        }
                    }
                },
                content: {
                    validators: {
                        notEmpty: {
                            message: 'The review content is required'
                        },
                        stringLength: {
                            max: 200,
                            message: 'The review content must be less than 200 characters'
                        }
                    }
                }
            }
        });
});
</script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

  </body>
</html>