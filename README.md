# Belajar PHP Basic Web | Programmer Zaman Now (PZN) Udemy

## List materi yang sudah dipelajari

### Tanggal 15 Juni 2023

- Instalasi PHP
- Instalasi Web Server
- Instalasi Code Editor

### Tanggal 16 Juni 2023

- Turu

### Tanggal 17 Juni 2023

- XSS Cross Site Scripting
  Adalah metode yang digunakan untuk menyisipkan kode skrip berbahaya ke dalam sebuah situs web yang nantinya akan dieksekusi oleh browser korban melalui url yang dikirimkan kepadanya.

  Untuk menangai XSS kita bisa menggunakan fungsi `htmlspecialchars()` untuk mengubah karakter-karakter yang memiliki kemungkinan untuk di eksekusi menjadi string biasa.

  Contoh:

  ```php
  $name = "<script>alert('Hacked');</script>";
  echo htmlspecialchars($name);
  ```

  Hasilnya:

  ```html
  &lt;script&gt;alert(&#039;Hacked&#039;);&lt;/script&gt;
  ```

- Fungsi dari $\_POST di dalam PHP adalah untuk mengirimkan data dari form HTML ke dalam PHP.

  Contoh:

  ```php
  <form action="index.php" method="post">
    <input type="text" name="name" />
    <input type="submit" value="Submit" />
  </form>
  ```

  ```php
  <?php
  $name = $_POST["name"];
  echo $name;
  ?>
  ```

-
