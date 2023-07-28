<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Store</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="{{ asset('favicon.svg')}}" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com')}}">
  <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com')}}" crossorigin>
  <link
    href="{{ asset('https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap')}}"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
</head>
<style>
.product-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr); /* Mengulang kolom sebanyak 4 kali dengan lebar yang sama */
  grid-gap: 10px; /* Jarak antara produk */
  max-width: 1200px; /* Lebar container maksimum */
  margin: 0 auto; /* Pusatkan container */
  justify-items: center; /* Menengahkan item secara horizontal */
}

.product-item {
  width: 100%; /* Setiap produk mengisi lebar kolom sepenuhnya */
  /* (Tambahkan properti CSS lainnya sesuai kebutuhan) */
}

/* Media query untuk tampilan mobile */
@media (max-width: 767px) {
  .product-container {
    grid-template-columns: repeat(2, 1fr); /* Tampilan 2x2 pada perangkat mobile */
    align-items: center; /* Menengahkan item secara vertikal pada perangkat mobile */
  }
}

</style>
<body id="top">