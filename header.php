<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.mi
n.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title>Divisi TIK</title>
<style>
     /* Style The Dropdown Button */
.dropbtn {
  border: none;
  cursor: pointer;
  background-color:white;
  color:gray;
  margin: 7px;
  z-index:2;
}
.dropbtn2 {
  border: none;
  cursor: pointer;
  background-color: #f9f9f9;
  margin: 7px;
  z-index:2;
}
.dropbtn:hover{
  color:black;
}
.dropbtn2:hover{
  color:black;
}
/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  z-index:2;
}
.dropdown2 {
  position: relative;
  display: inline-block;
  z-index:2;
}
/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
  z-index: 2;
}
.dropdown2-content2 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
  z-index: 2;
  margin-left:-150px;
  margin-top:-40px;
}
/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown2-content2 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown2:hover .dropdown2-content2 {
  display: block;
}
.nama{
  font-weight: bold;
  font-size:20px;
  margin-left:100px;
  margin-top:5px;
}
body {font-family: Verdana, sans-serif;
      background-color:white;
}
.usericons{
  margin-left:5px;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white"
style="box-shadow: 4px 4px 5px -4px;">
<div class="container-fluid">
<a class="navbar-brand bg-white text-black" href="#"><img src="./img/Lambang.jpg" alt="Maaf, sedang terjadi masalah" width="50pt" height="50pt"> Divisi TIK </a>

<button class="navbar-toggler" type="button" data-bs-
toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation" >
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav" >
</div>
<ul class="navbar-nav">
<li class="nav-item" >
<a class="nav-link text-black" aria-current="page"
href="home.php">Beranda</a>
</li>
<li class="nav-item">
<div class="dropdown">
  <button class="dropbtn">Profil</button>
  
  <div class="dropdown-content">
  <div class="dropdown2">
  <button class="dropbtn2">Profil Divisi TIK</button>
    <div class="dropdown2-content2">
    <a href="rotekinfo.php">Rotekinfo </a>
    <a href="rotekkom.php">Rotekkom</a>
    <a href="Bagrenmin.php">Bagrenmin</a>
    <a href="Depoharkan.php">Depoharkan</a>
    <a href="Bagjementik.php">Bagjementik</a>
    </div>
  </div>
    <a href="struktur.php">Struktur organisasi</a>
    <a href="visiMisi.php">Visi dan Misi</a>
    
  </div>
</div>
</li>
<li class="nav-item">
<a class="nav-link text-black" aria-current="page"
href="berita.php?id=0">Berita</a>
</li>
<li class="nav-item">
<a class="nav-link text-black" aria-current="page"
href="event.php">event</a>
</li>
<?php
error_reporting(E_ERROR | E_PARSE);
if($_SESSION['status_login']!=true){
?>
<li class="nav-item">
<a class="nav-link text-black" aria-current="page"
href="login.php">Login</a>
</li>
<?php
}
?>
<?php
if($_SESSION['status_login']==true){
?>
<li class="nav-item">
<a class="nav-link text-black" aria-current="page"
href="user.php">User</a>
</li>
<li class="nav-item">
<a class="nav-link text-black" aria-current="page"
href="saran.php">Saran</a>
</li>
<?php
}
?>
<?php
if($_SESSION['status_login']==true){
?>
<li class="nav-item">
<a class="nav-link text-black" aria-current="page"
href="logout.php">Logout</a>
</li>
</ul>
<ul class="navbar-nav">
<li class="nama">
<?=$_SESSION['nama_user']?>
</li>
<li>
<img src="./img/profile-user.png" alt="" style="width:50px; height:50px;">
</li>
<?php
}
?>
</ul>
</div>
</nav>
<!-- <div class="container bg-light rounded" style="margin-top:10px"> -->