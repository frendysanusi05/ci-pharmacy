<div align="center">
    <img  alt="logo" src="/login/logo.svg"/>
    <h1>Tugas Besar</h1>
    <h3>II3160 - Teknologi Sistem Terintegrasi</h3>
</div>
<br>

<div align="center">
    <img src="https://readme-typing-svg.herokuapp.com?font=Itim&size=48&pause=1000&color=4200FF&center=true&vCenter=true&random=false&width=1000&height=60&lines=Teknologi+Sistem+-+Terintegrasi;Sistem+Rumah+Sakit;Sistem+Apotek" alt="Typing SVG">
</div>

## List of Contents

1. [System Overview](#system-overview)
2. [Core Domain](#core-domain)
3. [Team Members](#team-members)
4. [Tech Stack](#tech-stack)
5. [How to Run](#how-to-run)
6. [Deployment](#deployment)
7. [Features](#features)
8. [Documentation](#documentation)

## System Overview

Sistem TST Apothecary adalah sistem yang yang diperuntukkan untuk pengelolaan obat yang ada di Apotek.

## Core Domain

Sistem apotek akan menjembatani pemesanan tiap obat yang dipesan oleh rumah sakit. Sistem apotek kemudian dapat menyimpulkan kebutuhan suplemen mayoritas pasien berdasarkan pesanan obat yang diterima tiap bulan. Suplemen ini kemudian akan direkomendasikan kepada dokter rumah sakit agar dapat mereka pertimbangkan dalam tiap kunjungan pasien yang mereka jalani.

## Team Members

<table>
    <tr align="center">
        <th>No.</th>
        <th>Nama</th>
        <th>NIM</th>
    </tr>
    <tr>
        <td>1.</td>
        <td>Frendy Sanusi</td>
        <td>18221041</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Nadira R. A.</td>
        <td>18221059</td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Vania Salsabila</td>
        <td>18221075</td>
    </tr>
</table>

## Tech Stack

- Codeigniter 4
- MySQLdb
- Github dan Git
- php
- Visual Studio Code
- Postman
- Docker

[![My Skills](https://skillicons.dev/icons?i=mysql,github,git,php,postman,docker,vscode)](https://skillicons.dev)

## How to run

1. Clone respository ini

2. Masuk ke directory

```
cd /ci-pharmacy
```

3. Copy konten file .env.example menjadi .env

4. Setup aplikasi menggunakan command berikut

```
composer install
npm install
php spark migrate
php spark db:seed DataSeeder
```

5. Jalankan aplikasi menggunakan command berikut dalam dua terminal berbeda
```
php spark serve
npx tailwindcss -i ./public/css/input.css -o ./public/css/styles.css --watch
```
6. Service berjalan pada http://localhost:8080 pada browser Anda

7. Gunakan informasi login berikut:
```
# Login sebagai admin
username: admin
password: password
```

## Deployment

## Features

1. **Login** - Dengan mmelakukan validasi dan autorisasi pengguna. terdapat 1 role dalam sistem ini, yaitu admin apotek yang bertugas mengelola stok obat, mengkonfirmasi pemesanan obat, dan mengirim informasi mengenai suplemen.

2. **Add/Edit/Delete Medicine** - Admin dapat melakukan pengelolaan obat, meliputi: menambahkan obat, mengedit nama, jenis, harga, stok dan deskripsi obat, serta menghapus obat

3. **Confirm Order** - Admin dapat melakukan konfirmasi order yang direquests oleh rumah sakit pada halaman order.

4. **Profile** - Admin dapat melihat data diri, serta melakukan Log Out pada halaman profil.

6. **See Recapitulations** - Admin dapat melihat rekapitulasi transaksi per bulannya yang dikirimkan oleh rumah sakit pada laman Transactions


## Documentation
[https://docs.google.com/document/d/11VVUq3s6EbKkoQnYY_Sl7ymabZufGoWuneDM68WyuzY/edit](Documentation)

*Development processes and interfaces are provided in the document.*
