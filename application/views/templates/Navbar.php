<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>">
  <script type="text/javascript">
  	function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
  }

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

  </script>
  <style>
    .card{
        border: none;
    }
  </style>  
  <title><?php echo $judul ?></title>
</head>
<body>
 <!-- Header -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/logo.png')?>" class="rounded float-left" style="margin-left: 160px;"height="80" width="80"></a>
  <button class="navbar-toggler" type="button" onclick="myFunction()">
    <span class="navbar-toggler-icon"></span>
  </button>  

  <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02" id="myDropdown" style="margin-right: 150px;">
    <strong>
      <ul class="navbar-nav" style="font-size:0.9em">
        <li class="nav-item" >
          <a class="nav-link" href="<?= base_url(); ?>">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>produk">SHOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">STOCKLIST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>kontak/add">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">CART</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>produk/add">INPUT</a>
        </li>
      </ul>
    </strong>
  </div>
  </nav>
 <!-- End Of Header -->