<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ktm = $_POST['ktm'];
    if($ktm === "hilang") {
        header("location: form_ekstra.php");
        exit;
    } else if($ktm === "rusak") {
        header("location: form_akhir.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM KTM</title>
    <link rel="stylesheet" href="../styles/formform.css">
</head>
<body>
    <div class="container">
        <h1 class="judul">Form Pengisian KTM Rusak / Hilang</h1>
        <form action="" method="post">
            <p>Masukkan Nrp : </p>
            <input type="text" class="input1" maxlength="10" placeholder="Nrp.." required>
            <p>Masukkan Nama : </p>
            <input type="text" class="input1" placeholder="Nama.." required>
            <p>Masukkan No Hp : </p>
            <input type="text" class="input1" maxlength="15" placeholder="No Hp.." required>
            <p>Masukkan Email : </p>
            <input type="email" class="input1" placeholder="Email.." required>
            <p>KTM Hilang / Rusak ? </p>
            <div class="container2">
                <input type="radio" value="hilang" class="radio1" name="ktm" required>
                <label for="">Hilang</label>
                <input type="radio" value="rusak" class="radio1" name="ktm" required>
                <label for="">Rusak</label>
                <button type="reset" class="clear">Clear</button>
            </div>
            <button type="submit" class="next">Next</button>
        </form>
    </div>
</body>
</html>