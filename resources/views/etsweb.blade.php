<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETS PWEB B| Putri Dwi Isabella</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        body{
            background: #AA076B;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #61045F, #AA076B);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #61045F, #AA076B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        .registration-form{
            margin-left: 25%;
            margin-right: 25%;
            margin-top: 5%;
            margin-bottom: 5%;
            background-color: white;
            padding: 35px;
            border-radius: 7px;
        }
        button{
            width: 80%;
            height: 40px;
            margin-top: 15px;
            margin-left: 10%;
            margin-right: 10%;

        }
        h3{
            text-align: center;
            margin-bottom: 30px;
        }
        label{
            padding-right: 50px;
        }
    </style>
    <div class="registration-form">
        <p>
            Putri Dwi Isabella <br>
            Putri <br>
            5026201036
        </p>
        <h3>Form Pendaftaran Kuota Internet</h3>
        <form id="registrasi" action="https://github.com/putriisabellaa/">


            <div class="row mb-3">
                <label for="inputNama" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputNama" required>
                    <span id="invalidNama" class="invalid-feedback">Nama Harus Alphabet dan tidak boleh hanya 1 huruf</span>
                    <span id="invalidCharacter" class="invalid-feedback">Nama Harus Alphabet</span>
                </div>
            </div>
             <div class="row mb-3">
                <label for="inputNRP" class="col-sm-3 col-form-label">NRP Mahasiswa</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputNRP" required>
                    <span id="invalidNRP" class="invalid-feedback">NRP  harus angka dan 10 digit</span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputJurusan" class="col-sm-3 col-form-label">Jurusan</label>
                <div class="col-sm-9">
                    <select name="" id="inputJurusan" class="form-select">
                        <option value="0" selected>(Pilih Jurusan)</option>
                        <option >Sistem Informasi</option>
                        <option >Elektro dan Informatika</option>
                    </select>
                    <span id="invalidJurusan" class="invalid-feedback">Harus memilih Jurusan</span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNo" class="col-sm-3 col-form-label">No Handphone</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputNo" required>
                    <span id="invalidNo" class="invalid-feedback">No Handphone  harus angka dan minim 10 digit</span>
                </div>
            </div>
          <div class="row mb-3">
              <div class="col-sm-6">
                    <button type="submit" id="submit" value="submit" class="btn btn-primary">Kirim</button>
              </div>
            <div class="col-sm-6">
                    <button type="reset" id="reset" value="reset" class="btn btn-success">Reset</button>
            </div>

        </div>

        </form>
    </div>
   <script>
       $(document).ready(function () {
           $('#invalidNama').hide();
           $('#invalidNRP').hide();
           $('#invalidJurusan').hide();
           $('#invalidNo').hide();

           var error_nama = false;
           var error_nrp = false;
           var error_jurusan = false;
           var error_no = false;

           $('#inputNama').focusout(function () {
               check_name();
           })
           $('#inputNRP').focusout(function () {
               check_nrp();
           })
           $('#inputJurusan').focusout(function () {
               check_jurusan();
           })
           $('#inputNo').focusout(function () {
               check_no();
           })

           function check_name() {
               var pattern = new RegExp(/^[a-zA-Z\s]+$/);
               var nama_length = $('#inputNama').val().length;
               if (pattern.test($('#inputNama').val()) && nama_length > 1){
                   $('#invalidNama').hide();
               }
               else{
                   $('#invalidNama').show();
                   error_name = true;
               }
           }
           function check_nrp() {
               var pattern = new RegExp(/^[0-9]+$/);
               var nrp_length = $('#inputNRP').val().length;
               if (pattern.test($('#inputNRP').val()) && nrp_length == 10){
                   $('#invalidNRP').hide();
               }
               else{
                   $('#invalidNRP').show();
                   error_nrp = true;
               }
           }
           function check_jurusan() {
               var count_jurusan = $('select option:selected').val();
               if (count_jurusan == 0) {
                   $('#invalidJurusan').show();
                   error_jurusan = true;
               }
               else{
                   $('#invalidJurusan').hide();
               }
           }
           function check_no() {
               var pattern = new RegExp(/^[0-9]+$/);
               var no_length = $('#inputNo').val().length;
               if (pattern.test($('#inputNo').val()) && (no_length > 10 )){
                   $('#invalidNo').hide();
               }
               else{
                   $('#invalidNo').show();
                   error_no = true;
               }
           }


           $('#registrasi').submit(function(){
                error_name = false;
                error_nrp = false;
                error_jurusan = false;
                error_no = false;

                check_name();
                check_nrp();
                check_name();
                check_jurusan();
                check_no();

                if (error_name === false && error_nrp === false && error_jurusan === false && error_no === false ) {
                    alert("Selamat Anda berhasil melakukan Registrasi");
                    return true;
                }
                else{
                     alert("Mohon maaf data yang anda masukkan tidak sesuai. Harap Cek kembali");
                    return false;
                }
           })
           $('#reset').click(function () {
                $('#invalidNama').hide();
                $('#invalidNRP').hide();
                $('#invalidJurusan').hide();
                $('#invalidNo').hide();
           })

       })

   </script>
</body>
</html>










