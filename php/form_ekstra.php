<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $scan = $_FILES['scan1'];

    header("location: form_akhir.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTM HILANG</title>
    <link rel="stylesheet" href="../styles/form_ekstra.css">
</head>
<body>
    <div class="container">
        <h1 class="scan">Submit Hasil Scan</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <label>Submit hasil scan laporan kehilangan dari polisi (Berformat PDF)</label>
            <input type="file" accept="application/pdf" name="scan1" required>
            <button type="submit" class="next">Next</button>
        </form> 
    </div>
</body>
</html>