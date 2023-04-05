# Tugas 6 - Content Management System (Mini Boss)
<br>

## Perkenalan
<p>Nama        : Fardi Khalik Ramadhan</p>
<p>Universitas : Institut Teknologi Indonesia</p>
<br>

## Fitur Aplikasi 
<ul>
    <li>CRUD Category</li>
    <li>CRUD Product</li>
    <li>Upload Image</li>
    <li>Native Authentication (Regist, Login, dan Logout) menggunakan Laravel</li>
</ul>
<br>

## Penjelasan Singkat Mengenai Fitur Aplikasi
<ul>
    <li>CRUD Category berfungsi untuk memanajemen kategori dari produk-produk yang ada di aplikasi</li>
    <li>CRUD Product berfungsi untuk memanajemen produk-produk yang ada di aplikasi</li>
    <li>Upload Image berfungsi untuk upload gambar produk sebagai komponen dari produk yang ada di aplikasi</li>
    <li>Native Authentication (Regist, Login, dan Logout) menggunakan Laravel berfungsi untuk proses authentikasi user, tetapi user dalam aplikasi ini hanya admin saja yang bertugas untuk mengatur kategori dan produk</li>
</ul>
<br>

## Instalasi 
- <p>Clone dari Github dengan menggunakan terminal</p>
    <code>git clone https://github.com/Fardi18/gits-msib4-tugas6-cms.git </code>
    
- <p>Install Composer</p>
    <code>composer install</code>
   
- <p>konfigurasi file .env</p>
    <code>cp .env.example .env</code>
    
- <p>Buat database dengan nama gits_tugas_cms pada phpMyAdmin</p>
    <code>create database gits_tugas_cms</code>
    
- <p>Migration pada terminal</p>
    <code>php artisan migrate</code>
    
- <p>Menghubungkan folder storage dengan folder public</p>
    <code>php artisan storage:link</code>
    
- <p>Menjalankan Aplikasi</p>
    <code>php artisan serve</code>

- <p>ctrl + click pada port yang diberi setelah menjalankan perintah <code>php artisan serve</code></p>
<br>
<hr>
