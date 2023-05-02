<?php
// isset untuk memeriksa apakah suatu variabel sudah diatur atau belum
if (isset($_POST["submit"])) {
    $operator = $_POST['operator'];
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];

    if($operator == "+") {
        $hasil = $angka1 + $angka2;
    } else if($operator == "-") {
        $hasil = $angka1 - $angka2;
    } else if($operator == "*") {
        $hasil = $angka1 * $angka2;
    } else if($operator == "/") {
        $hasil = $angka1 / $angka2;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
            /* background-color: antiquewhite; */
        form{
            padding: 10px;
            background-color: pink; 
            width: 500px;
            height: auto;
            text-align: center;
            margin-left: 400px;
            margin-top: 200px;         
            border-radius: 30px;
            box-shadow: 0 20px 75px black;
        }


        input{
            border-radius: 20px;
            border: none;
        }

        select,option{
            background-color: brown; 
        }
        select:hover{
            background-color: aqua; 
        }
        button{
            background-color: blueviolet; 
        }

        button:hover{
            background-color: aquamarine; 
        }
        
    </style>
</head>
<body>
    <!-- untuk membuat form -->
    <form action="" method="post">
        <h2>Kalkulator</h2>
        <div class="input-group">
        <!-- untuk membuat label dalam form-->
            <label for="angka1">Angka Pertama</label>
            <!-- untuk membuat inputan angka yang akan dimasukkan -->
            <input type="number" id="angka1" name="angka1" value="<?= (isset($_POST['submit'])) ? $angka1 : '' ?>">
        </div>
        <div class="input-group">
            <label for="angka2">Angka Kedua</label>
            <input type="number" id="angka2" name="angka2" value="<?= (isset($_POST['submit'])) ? $angka2 : '' ?>">
        </div>
        <br>
        <div class="input-group">
            <label for="operator">Operator</label>
            <select name="operator" id="operator">
                <!-- option value untuk membuat pilihan operator -->
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <label for="hasil">Hasil</label>
            <input type="text" id="hasil" name="hasil" value="
            <?= (isset($_POST['submit'])) ? $hasil : "" ?>" readonly>
        </div>
        <br>
        <!-- untuk membuat tombol submit  -->
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>