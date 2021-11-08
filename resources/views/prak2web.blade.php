<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form | Putri Dwi Isabella</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <style>
        body{
           background: #00d2ff;  /* fallback for old browsers */
           background: -webkit-linear-gradient(to top, #928DAB, #00d2ff);  /* Chrome 10-25, Safari 5.1-6 */
           background: linear-gradient(to top, #928DAB, #00d2ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        h2{
            color: #2193b0;
            margin-bottom: 24px;
            text-align: center;
        }
            /*  top and bottom margins are 25px
                right and left margins are 50px*/
        .form-validation{
            width: 80%;
            padding: 20px;
            margin-top: 2%;
            margin-right: 10%;
            margin-bottom: 2%;
            margin-left: 10%;
            background-color: white;
            border-radius: 5px;

        }
        button{
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
            margin-top: 20px;
            margin-bottom: 20px;
        }

    </style>
    <div class="container">
        <div class="form-validation">
            <h2>Registration Form</h2>
            <hr>
            <form id="registration_form" action="https://www.youtube.com/watch?v=W4-5WM60gWg">
                <div class="row mb-3">
                    <label for="inputUserID" class="col-sm-2 col-form-label">User ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUserID" required>
                        <span id="valid-userid" class="valid-feedback">Looks Good</span>
                        <span id="invalid-userid" class="invalid-feedback">Must be of length 5 to 12</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" required>
                        <span id="valid-password" class="valid-feedback">Looks Good</span>
                        <span id="invalid-password" class="invalid-feedback">Must be of length 7 to 12</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" >
                        <span id="valid-name" class="valid-feedback">Looks Good</span>
                        <span id="invalid-name" class="invalid-feedback">Alphabates Only</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAddress">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputCountry" class="col-sm-2 col-form-label">Country</label>
                    <div class="col-sm-10">
                        <select id="inputCountry" class="form-select" >
                            <option value="0" selected>(Please Select a Country)</option>
                            <option>Indonesia</option>
                            <option>Singapura</option>
                            <option>Korea Selatan</option>
                            <option>Amerika</option>
                        </select>
                        <span id="valid-country" class="valid-feedback">The Country have selected</span>
                        <span id="invalid-country" class="invalid-feedback">Must Select a Country</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputZIPCode" class="col-sm-2 col-form-label">ZIP Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputZIPCode" >
                        <span id="valid-zip" class="valid-feedback">Input is Correct</span>
                        <span id="invalid-zip" class="invalid-feedback">Must be Numeric Only</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" required>
                        <span id="valid-email" class="valid-feedback">Input email is Correct</span>
                        <span id="invalid-email" class="invalid-feedback">Must be a Valid Email</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputSex" class="col-sm-2 col-form-label">Sex</label>
                    <div class="col-sm-10" style="margin-top: 5px;">
                        <input id="inputSex" class="form-check-input" type="radio" name="optradio"> Male
                        <input id="inputSex" class="form-check-input" type="radio" name="optradio"> Female
                        <span id="valid-sex" class="valid-feedback">The Sex Have Checked</span>
                        <span id="invalid-sex" class="invalid-feedback">Must be a Valid sex</span>
                    </div>
                </div>
                <div class="row mb-3 ">
                    <label class="col-sm-2 col-form-label">Language</label>
                    <div class="col-sm-10" style="margin-top: 5px;">
                        <input class="form-check-input" type="checkbox" name="english" > English
                        <input class="form-check-input" type="checkbox" name="non_english" > Non English
                        <span id="valid-language" class="valid-feedback">The Languange Have Checked</span>
                        <span id="invalid-language" class="invalid-feedback">Must be a Valid language</span>

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputAbout" class="col-sm-2 col-form-label">About</label>
                    <div class="col-sm-10">
                    <textarea name="" id="inputAbout" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>

                <button type="submit" id="submit" class="btn btn-primary" value="register">Submit</button>
            </form>
        </div>

    </div>
    <script>
        $(document).ready(function(){

            $('#invalid-userid').hide();
            $('#invalid-password').hide();
            $('#invalid-name').hide();
            $('#invalid-country').hide();
            $('#invalid-zip').hide();
            $('#invalid-email').hide();
            $('#invalid-sex').hide();
            $('#invalid-language').hide();

            var error_userId = false;
            var error_password = false;
            var error_name = false;
            var error_country = false;
            var error_zipCode = false;
            var error_email = false;
            var error_sex = false;
            var error_language = false;

            $('#inputUserID').focusout(function(){
                check_userId();
            })
            $('#inputPassword').focusout(function(){
                check_password();
            })
            $('#inputName').focusout(function(){
                check_name();
            })
            $('#inputCountry').focusout(function(){
                check_country();
            })
            $('#inputZIPCode').focusout(function(){
                check_zipCode();
            })
            $('#inputEmail').focusout(function(){
                check_email();
            })
            $('#inputSex').focusout(function(){
                check_sex();
            })

            function check_userId() {
                var userid_length = $('#inputUserID').val().length;
                if (userid_length <5 || userid_length > 12) {
                    $('#invalid-userid').show();
                    $('#valid-userid').hide();
                     error_userId = true;
                }
                else{
                    $('#invalid-userid').hide();
                }
            }
            function check_password() {
                var password_length = $('#inputPassword').val().length;
                if (password_length <7 || password_length > 12) {
                    $('#invalid-password').show();
                    $('#valid-password').hide();
                     error_password = true;
                }
                else{

                    $('#invalid-password').hide();
                }
            }
            function check_name() {
                 var pattern=new RegExp(/^[a-zA-Z\s]+$/);
                 if (pattern.test($('#inputName').val())) {

                    $('#invalid-name').hide();
                 }
                 else{
                    $('#invalid-name').show();
                    $('#valid-name').hide();
                     error_name = true;
                 }
            }
            function check_country() {
                var count=$('select option:selected').val();
                if (count==0) {
                    $('#valid-country').hide();
                    $('#invalid-country').show();
                    error_country = true;
                }
                else
                {
                    $('#invalid-country').hide();

                }
                //event.preventDefault();
            }
            function check_zipCode() {
                 var pattern=new RegExp(/^[0-9]+$/);
                 if (pattern.test($('#inputZIPCode').val())) {

                    $('#invalid-zip').hide();
                 }
                 else{
                    $('#invalid-zip').show();
                    $('#valid-zip').hide();
                     error_zipCode = true;
                 }
            }
            function check_email() {
                var pattern= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
                if (pattern.test($('#inputEmail').val())) {

                    $('#invalid-email').hide();
                 }
                 else{
                    $('#invalid-email').show();
                    $('#valid-email').hide();
                     error_email = true;
                 }
            }
             function check_sex() {
                var count_sex = $('input[type="radio"]:checked');
                if (count_sex.length > 0 ) {

                    $('#invalid-sex').hide();
                }
                else{
                    $('#invalid-sex').show();
                    $('#valid-sex').hide();
                     error_sex = true;
                }
            }
            function check_language() {
                var count_language = $('input[type="checkbox"]:checked');
                if (count_language.length > 0 ) {

                    $('#invalid-language').hide();
                }
                else{
                    $('#invalid-language').show();
                    $('#valid-language').hide();
                     error_language = true;
                }
            }
            $('#registration_form').submit(function () {
                  error_userId = false;
                  error_password = false;
                  error_name = false;
                  error_country = false;
                  error_zipCode = false;
                  error_email = false;
                  error_sex = false;
                  error_language = false;

                check_userId();
                check_password();
                check_name();
                check_country();
                check_zipCode();
                check_email();
                check_sex();
                check_language();

                 if (error_userId === false && error_password === false && error_name === false && error_country === false && error_zipCode === false && error_email === false && error_sex === false && error_language === false) {
                     alert("Success Registrtaion Form");
                    return true;
                 }
                 else{
                    alert("There ada data invalid, please check your input data again !")
                    return false;
                 }
            });
        });

    </script>
</body>
</html>
