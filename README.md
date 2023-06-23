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

### Tanggal 23 Juni 2023

- Session di PHP
  Session adalah cara untuk menyimpan informasi di dalam server. Session biasanya digunakan untuk menyimpan informasi login, keranjang belanja, dan lain-lain.

  Contoh:

  ```php
  <?php
  session_start();
  $_SESSION["name"] = "Rizky";
  ?>
  ```

  ```php
  <?php
  session_start();
  echo $_SESSION["name"];
  ?>
  ```

- Session itu memiliki kekurangan karena ia di simpan di dalam sebuah file, ketika kita membuat 2 web server maka session hanya akan menyimpan file tersebut di dalam server yang satu saja dan ketika kita meng-akses ke server kedua maka session akan hilang karena session yang telah kita buat hanya ada dan berfungsi di server satu saja. Jadi itulah yang membuat session cukup buruk untuk aplikasi php yang scale nya gede beda dengan aplikasi php yang kecil, menggunakan session sudah cukup saja.
