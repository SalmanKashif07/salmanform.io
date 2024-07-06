<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Internship</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- jQuery Validation Plugin -->
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>
<body>
  <div class="container mt-6">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <pre style="font-weight: bold" class="mb-4">MultiStep Internship Form using HTML, CSS, JS, JQuery and Bootstrap
          1st step: Personal Information of a user i.e., First name, Last name, Email, mobile number,
          2nd step: Academic history,
          3rd step: In which field you are interested,
          4th step: Information,
          5th step: Links.
        </pre>
        <form id="form" method="post" action="submit.php">
          <div id="page1">

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="firstName">First Name </label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
              </div>
              <div class="form-group col-md-6">
                <label for="lastName">Last Name </label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="phone">Phone Number</label>
                <input type="phone" class="form-control" id="phone" name="phone" required>
              </div>
            </div>
             <div class="form-row">
              <div class="form-group col-md-6">
                <label for="cinc">Enter CNIC Number</label>
                <input type="text" class="form-control" id="cnic" name="cnic" required>
              </div>
             </div>
              <div class="form-group col-md-6">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
              </div>
            
            <button type="button" class="btn btn-primary next-btn">Next</button>
          </div>
          
          <div id="page2" style="display: none;">
            <div class="form-group">
              <label for="degree">Degree</label>
              <select class="form-control" id="degree" name="degree" required>
                <option value="">Select Degree</option>
                <option value="Matric">Matric</option>
                <option value="Inter">Inter</option>
                <option value="BSc">BSc</option>
                <option value="MSc">MSc</option>
              </select>
            </div>
            <div class="form-group">
              <label for="major">Major</label>
              <input type="text" class="form-control" id="major" name="major" required>
            </div>
            <div class="form-group">
              <label for="graduationYear">Graduation Year</label>
              <input type="text" class="form-control" id="graduationYear" name="graduationYear" required>
            </div>
            <div class="form-group">
              <label for="school">School/College Name</label>
              <input type="text" class="form-control" id="school" name="school" required>
            </div>
            <button type="button" class="btn btn-primary prev-btn">Previous</button>
            <button type="button" class="btn btn-primary next-btn">Next</button>
          </div>
          
          <div id="page3" style="display: none;">
            <div class="form-group">
              <label for="interest">Field of Interest</label>
              <select class="form-control" id="interest" name="interest" required>
                <option value="">Select Field</option>
                <option value="Web Development">Web Development</option>
                <option value="Data Science">Data Science</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
              </select>
            </div>
            <button type="button" class="btn btn-primary prev-btn">Previous</button>
            <button type="button" class="btn btn-primary next-btn">Next</button>
          </div>
          
          <div id="page4" style="display: none;">
            <div class="form-group">
              <label for="whyJoinUs">Why you want to join us?</label>
              <textarea class="form-control" id="whyJoinUs" name="whyJoinUs" rows="5" required></textarea>
            </div>
            <div class="form-group">
              <label for="whereHear">Where did you hear about us</label>
              <select class="form-control" id="whereHear" name="whereHear" required>
                <option value="">Select Source</option>
                <option value="LinkedIn">LinkedIn</option>
                <option value="Social Media">Social Media</option>
                <option value="Friend">Friend</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <button type="button" class="btn btn-primary prev-btn">Previous</button>
            <button type="button" class="btn btn-primary next-btn">Next</button>
          </div>
          
          <div id="page5" style="display: none;">
            <div class="form-group">
              <label for="linkedin">LinkedIn</label>
              <input type="url" class="form-control" id="linkedin" name="linkedin" required>
            </div>
            <div class="form-group">
              <label for="github">GitHub</label>
              <input type="url" class="form-control" id="github" name="github" required>
            </div>
            <div class="form-group">
              <label for="codepen">CodePen</label>
              <input type="url" class="form-control" id="codepen" name="codepen" required>
            </div>
            <button type="button" class="btn btn-primary prev-btn">Previous</button>
            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
          </div>
        </form>
        <div id="thankYou" style="display: none;">
          <p>Thank you for submitting your form!</p>
        </div>
      </div>
    </div>
  </div>

  <style>
    body {
      background: #f0f0f0;
      font-family: Arial, sans-serif;
    }
    
    
    .form-control {
      height: 45px;
      border-radius: 19px;
      border: 1px solid #5d5353;
      box-shadow: none;
    }
    
    .form-control:focus {
      border-color: #539c76;
      box-shadow: none;
    }
    
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-check-label {
      font-weight: normal;
    }
    
    .btn-primary {
      background-color: #5cb85c;
      border-color: #5cb85c;
      border-radius: 40px;
      font-weight: bold;
      min-width: 100px;
    }
    
    .btn-primary:hover {
      background-color: #4cae4c;
      border-color: #4cae4c;
    }
    
    #thankYou {
      text-align: center;
      font-size: 18px;
      color: #53adb7;
    }
    
  </style>

  <script>
    $(document).ready(function() {
      $('#form').validate({
        errorElement: 'span',
        errorClass: 'invalid-feedback',
  
        rules: {
          firstName: {required: true,minlength: 2},
          lastName: {required: true,minlength: 2},
          email: {required: true, email: true, customEmailValidation: true},
          dob: { required: true, date: true },
          school: {required: true,minlength: 2},
          phone:{required: true, minlength:11},
          major:{required: true, minlength:2},
          graduationYear:{required:true, minlength:2}
        },
        messages: {
          firstName: "Please enter your first name",
          lastName: "Please enter your last name",
          email: "Please enter a valid email address",
          cnic: "Please enter a valid CNIC number",
          dob: "Please enter a valid date of birth",
          phone: "Please enter a valid mobile number",
          school: "Please enter your school",
          degree: "Please select your degree",
          major: "Please enter your major",
          graduationYear: "Please enter your graduation year"
          },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid').removeClass('is-valid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid').addClass('is-valid');
        },
        errorPlacement: function(error, element) {
          if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
          } else {
            error.insertAfter(element);
          }
        },
    
        submitHandler: function(form) {
            form.submit(); // Allow form submission
        }
      });
       
      // Next button click handler
      $('.next-btn').click(function() {
        if ($('#form').valid()) { // Validate current step
          $(this).closest('div').hide(); // Hide current step
          $(this).closest('div').next().show(); // Show next step
        }
      });
    
      // Previous button click handler
      $('.prev-btn').click(function() {
        $(this).closest('div').hide(); 
        $(this).closest('div').prev().show();
      });
    
      // Submit button click handle
      $('.submit-btn').click(function() {
        if ($('#form').valid()) {
          $('#form').submit(); // Submit the form
        }
      });
          // CNIC formatting
    $('#cnic').on('input', function() {
      let value = $(this).val().replace(/\D/g, ''); // Remove non-digit characters
      if (value.length > 5) value = value.slice(0, 5) + '-' + value.slice(5);
      if (value.length > 13) value = value.slice(0, 13) + '-' + value.slice(13, 14);
      $(this).val(value);
      });
        // Custom method for email validation requiring dot (.) after @ symbol
  $.validator.addMethod("customEmailValidation", function(value, element) {
    return this.optional(element) || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
  }, "Please enter a valid email address");
    });
    
  </script>

</body>
</html>
