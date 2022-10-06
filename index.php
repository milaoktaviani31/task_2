<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Produk</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <form action="action.php" method="GET">
      <h1>Input Data Produk</h1>
      <div class="content">
        <label class="data">ID Produk : <input type="text" name="id" placeholder="Masukkan ID Produk" required /></label>
        <label class="data">Nama Produk : <input type="text" name="name" placeholder="Masukkan Nama Produk" required /></label>
        <button>Submit</button>
      </div>
    </form>
  </body>
</html>
