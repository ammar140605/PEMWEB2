<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
         <h1>Data yang dikirim</h1>


         <?php
         //periksa metode pengiriman data (POST atau GET)
         if ($_SERVER["REQUEST_METHOD"] == "POST"){
            //ambil data dari post
            $nama  = isset($_POST['nama'])
                     ? $_POST['nama'] : "";
            $email = isset($_POST['email'])
                     ? $_POST['email'] : "";
            $messege = isset($_POST['messege'])
                     ? $_POST['messege'] : ""; 
                     
         $datauser = array(
            "nama" => $nama
            "email" => $email
            "messege" => $messege
            );

        echo "<h2> Data yang dikirim melalui POST : </h>";
        echo '<ul class="list-group">';

        foreach ($datauser as $key => $value){
            if (!empty($valeu)){
                echo '<li class="list-group-item"><strong>'
                .ucfirst($key) . '</strong>' .htmlspecialchars($value);

            }
            else {
                echo '<li class="list-group-item"><strong>'
                .ucfirst($key) .'</strong> Data Kosong</li>';

            }    

            
        }



    }
    ?>
    </div>
</body>
</html>