<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>D-C-P </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
<?php
  error_reporting(0);
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$fname = stripslashes($_REQUEST['fname']);
	$fname = mysqli_real_escape_string($con,$fname);
	$pno = stripslashes($_REQUEST['pno']);
	$pno = mysqli_real_escape_string($con,$pno);
	$address = stripslashes($_REQUEST['address']);
	$address = mysqli_real_escape_string($con,$address);

	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `dusers` (dusername,fullname,email,phone,address,status, password, trn_date)
VALUES ('$username','$fname','$email','$pno', '$address','NULL', '".md5($password)."', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
           echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("successfully Registred");
            window.location="dlogin.php";
            </script>
			<?php 
        }
    }else{
?>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form name="dsignup" action="" method="post">
              <h1>Create Account</h1>
              <div>
  <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="none" pattern="[A-Za-z .]+"required="" />
  <span id="usernameError" style="color: red;"></span>
</div>

<script>
  // Get the input element
  var usernameInput = document.querySelector('input[name="username"]');

  // Add an event listener for input changes
  usernameInput.addEventListener('input', function() {
    var username = usernameInput.value;

    // Regular expression to allow only letters
    var regex = /^[A-Za-z]+$/;

    // Check if the input matches the regex pattern
    if (!regex.test(username)) {
      document.getElementById('usernameError').textContent = 'Please enter only letters.';
    } else {
      document.getElementById('usernameError').textContent = '';
    }
  });
</script>


              <div>
  <input type="text" name="fname" class="form-control" placeholder="Full name" autocomplete="none" pattern="[A-Za-z .]+"required="" />
  <span id="nameError" style="color: red;"></span>
</div>

<script>
  // Get the input element
  var fullNameInput = document.querySelector('input[name="fname"]');

  // Add an event listener for input changes
  fullNameInput.addEventListener('input', function() {
    var fullName = fullNameInput.value;

    // Regular expression to allow only letters
    var regex = /^[A-Za-z]+$/;

    // Check if the input matches the regex pattern
    if (!regex.test(fullName)) {
     // document.getElementById('nameError').textContent = 'Please enter only letters.';
    } else {
      document.getElementById('nameError').textContent = '';
    }
  });
</script>

<div>
  <input type="tel" maxlength="10" minlength="10" name="pno"  pattern="[0-9]{10}" class="form-control" placeholder="Phone Number" autocomplete="none" required="" />
  <span id="phoneError" style="color: red;"></span>
</div>

<script>
  // Get the input element
  var phoneInput = document.querySelector('input[name="pno"]');

  // Add an event listener for input changes
  phoneInput.addEventListener('input', function() {
    var phoneNumber = phoneInput.value;

    // Regular expression to match Indian phone number format
    var regex = /^[6-9]\d{9}$/;

    // Check if the input matches the regex pattern
    if (!regex.test(phoneNumber)) {
      document.getElementById('phoneError').textContent = 'Please enter a valid Indian phone number.';
    } else {
      document.getElementById('phoneError').textContent = '';
    }
  });
</script>

			  <br>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="none" required="" />
              </div>
			 
			  <br>
			   <div>
             <textarea name="address"  id="autocomplete" placeholder="Enter your address" autocomplete="none" required=""
             onFocus="geolocate()" type="textrequired="required class="form-control"></textarea>
              </div>
			  <br>
			  <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPJaq8h4L3_LgeKhYA9c3ZS6rLuQF75gU&libraries=places&callback=initAutocomplete"
        async defer></script>
        <div>
  <input name="password" type="password" class="form-control" placeholder="Password" id="myInput" required="" />
  <input type="checkbox" onclick="myFunction()">Show Password
  <span id="passwordError" style="color: red;"></span>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

// Get the input element
var passwordInput = document.querySelector('input[name="password"]');

// Add an event listener for input changes
passwordInput.addEventListener('input', function() {
  var password = passwordInput.value;

  // Regular expressions to check password strength
  var uppercaseRegex = /[A-Z]/;
  var lowercaseRegex = /[a-z]/;
  var specialCharRegex = /[!@#$%^&*(),.?":{}|<>]/;

  // Check if the password meets the strength requirements
  var isStrong = uppercaseRegex.test(password) && lowercaseRegex.test(password) && specialCharRegex.test(password);

  // Display the error message based on password strength
  if (!isStrong) {
    document.getElementById('passwordError').textContent = 'Password must contain at least one uppercase letter, one lowercase letter, and one special character.';
  } else {
    document.getElementById('passwordError').textContent = '';
  }
});
</script>

              <div>
			  <input class="btn btn-default submit" name="submit" type="submit"  value="Register" />
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="dlogin.php" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

               
              </div>
            </form>
          </section>
        </div>

      
      </div>
    </div>
	<?php } ?>                                                                                                                                                                                                      
  </body>
</html>
