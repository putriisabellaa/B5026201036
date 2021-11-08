<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 | Perhitungan </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        .container {
            margin-top: 5%;
        }

        .section-info {
            margin-bottom: 3%;

        }

        a {
            margin-top: 10px;
        }
    </style>

    <div class="container">
        <?php
        $n_default = 0;
        $n_awal = $_POST['n_awal']; //3
        $n_limit = $_POST['n_limit']; //5
        ?>
        <h1>Fibonacci Calculation</h1>
        <div class="section-info">
            <div class="card">
                <div class="card-header">
                    Data Information
                </div>
                <div class="card-body">
                    <h6 class="card-title">The following information is based on the data entered</h6>
                    <p class="card-text"></p>
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="p-3 border bg-light">
                                <p class="card-text">First Value <?php echo $n_awal ?></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border bg-light">
                                <p class="card-text">Limit Value <?php echo $n_limit ?></p>
                            </div>
                        </div>
                    </div>
                    <a href="index.html" class="btn btn-warning">Go Back</a>
                </div>
            </div>
        </div>
        <div class="section-table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope=" col">#</th>
                        <th scope="col">Fibonnaci</th>
                        <th scope="col">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Fibonnaci ke - 1</td>
                        <td><?php echo $n_awal ?></td>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i < $n_limit; $i++) {
                            $no = $i + 2;
                            $n_ketiga = $n_default + $n_awal;
                        ?>
                            <th scope="row"><?php echo $no ?></th>
                            <td><?php echo "Fibonnaci ke - " . $no ?></td>
                            <td><?php echo $n_ketiga ?></td>
                    </tr>
                <?php
                            $n_default = $n_awal;
                            $n_awal = $n_ketiga;
                        } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
