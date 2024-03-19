<?php
    $fruits = [
        [
            "fruitID" => 1,
            "fruitName" => "Kiwi",
            "fruitColor" => "HIjau, Coklat",
            "fruitStock" => 150,
            "fruitPrice" => 10000,
            "fruitDesk" => "Memiliki rasa manis dan sedikit asam dengan tekstur yang lembut <br> serta Kaya akan vitamin C dan serat."
        ],

        [
            "fruitID" => 2,
            "fruitName" => "Strawberry",
            "fruitColor" => "Merah",
            "fruitStock" => 300,
            "fruitPrice" => 25000,
            "fruitDesk" => "Memiliki bentuk kecil berwarna merah cerah <br> dengan Rasanya yang manis dan asam."
        ],

        [
            "fruitID" => 3,
            "fruitName" => "Mangga",
            "fruitColor" => "Hijau, Kuning",
            "fruitStock" => 150,
            "fruitPrice" => 10000,
            "fruitDesk" => "Memiliki rasa manis dan segar dengan tekstur yang lembut <br> serta Kaya akan vitamin A dan C. "
        ],

        [
            "fruitID" => 4,
            "fruitName" => "Durian",
            "fruitColor" => "Kuning kehijauan",
            "fruitStock" => 70,
            "fruitPrice" => 30000,
            "fruitDesk" => "Memiliki aroma yang khas, Dagingnya berwarna kuning, tebal, <br> dan berlemak serta Rasanya yang manis."
        ],

        [
            "fruitID" => 5,
            "fruitName" => "Semangka",
            "fruitColor" => "HIjau, Merah",
            "fruitStock" => 50,
            "fruitPrice" => 8000, 
            "fruitDesk" => "Memiliki kandungan air tinggi dan rendah kalori <br> dan juga Rasanya yang manis dan segar."
        ]
     
        ];
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
         foreach ($fruits as $fruit) {
        ?>
            <tr>
                <td><?= $fruit["fruitID"]?></td>
                <td><?= $fruit["fruitName"]?></td>
                <td><?= $fruit["fruitColor"]?></td>
                <td><?= $fruit["fruitStock"]?></td>
                <td>Rp <?= number_format($fruit["fruitPrice"], 0, ",", ".") ?></td>               
                <td><?= $fruit["fruitDesk"]?></td>
            </tr>
          
        <?php
          } ?> 
       
      </tbody>
    </table>
  </div>
</body>
</html>