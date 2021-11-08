<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #ffca28;

        }

        .btn-play {
            height: 200px;
            width: 200px;
            position: absolute;
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: transparent;
            border: 4px solid white;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 3px;
            border-radius: 40px;
            cursor: pointer;
            color: white;
        }

        .btn-play:before,
        .btn-play:after {
            position: absolute;
            content: "";
            height: 200px;
            width: 200px;
            border: 4px solid white;
            border-radius: 40px;
            bottom: -4px;
            left: -4px;
            transition: 1s;
        }

        .btn-play:hover:before {
            transform: rotate(30deg);
        }

        .btn-play:hover:after {
            transform: rotate(60deg);
        }
    </style>
    <div class="center">
        <div class="outer-button">
            <button type="button" class="btn-play" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Play</button>
        </div>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fibonacci Calculation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="submition" action="calculation" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="inputFirstValue" class="col-form-label">First Value</label>
                            <input type="text" class="form-control" name="n_awal" id="inputFirstValue" autocomplete="">
                            <span id="invalidFirstValue" class="invalid-feedback">Value must be numeric and grather then 0</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputLimitValue" class="col-form-label">Limit</label>
                            <input type="text" class="form-control" name="n_limit" id="inputLimitValue" autocomplete="">
                            <span id="invalidLimitValue" class="invalid-feedback">Value must be numeric and grather then 0</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" value="submit" id="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <script>
                    $(document).ready(function() {
                        $('#invalidFirstValue').hide();
                        $('#invalidLimitValue').hide();

                        var error_first_value = false;
                        var error_limit_value = false;

                        $('#inputFirstValue').focusout(function() {
                            check_first_value();
                        })
                        $('#inputLimitValue').focusout(function() {
                            check_limit_value();
                        })

                        function check_first_value() {
                            var pattern = new RegExp(/^[0-9]+$/);

                            if (pattern.test($('#inputFirstValue').val()) && $('#inputFirstValue').val() > 0) {
                                $('#invalidFirstValue').hide();
                            } else {
                                $('#invalidFirstValue').show();
                                error_first_value = true;
                            }
                        }

                        function check_limit_value() {
                            var pattern = new RegExp(/^[0-9]+$/);
                            if (pattern.test($('#inputLimitValue').val()) && $('#inputLimitValue').val() > 0) {
                                $('#invalidLimitValue').hide();
                            } else {
                                $('#invalidLimitValue').show();
                                error_limit_value = true;
                            }
                        }

                        $('#submition').submit(function() {
                            error_first_value = false;
                            error_limit_value = false;

                            check_first_value();
                            check_limit_value();

                            if (error_first_value === false && error_limit_value === false) {
                                alert("Congratulations you have successfully entered data");
                                return true;
                            } else {
                                alert("Sorry, the data you entered is not correct. Please check again");
                                return false;
                            }
                        })
                        $('#reset').click(function() {
                            $('#invalidFirstValue').hide();
                            $('#invalidLimitValue').hide();
                        })

                    })
                </script>
            </div>
        </div>
    </div>
</body>

</html>
