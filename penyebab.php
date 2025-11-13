<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Penyebab - SIMBAT</title>

<style>
:root{
  --bg:#fbf3e8;
  --nav-bg:#ffffff;
  --accent:#1f2b7a;
  --subtitle:#1a2aa8;
  --text:#222;
}

body{
  margin:0;
  font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
  background:var(--bg);
  color:var(--text);
}

/* NAVBAR */
.topbar{
  position:fixed;
  top:0; left:0; right:0;
  height:60px;
  background:#fff;
  display:flex;
  align-items:center;
  padding:0 28px;
  box-shadow:0 1px 0 rgba(0,0,0,0.06);
  z-index:10;
}

.nav{
  display:flex;
  gap:28px;
  margin-left:40px;
  font-weight:600;
  font-size:15px;
}

.nav a{
  text-decoration:none;
  color:#333;
  padding:8px 12px;
  border-radius:12px;
}

.nav a.active{
  background:#f0f0f5;
}

/* LOGO NAV */
.logo-small{
  height:42px;
}

/* CONTENT WRAPPER */
.container{
  margin-top:120px;
  padding:0 60px;
}

/* INTRO BOX */
.intro-box{
  width:100%;
  max-width:900px;
  height:180px;
  background:#d0d0d0;
  margin:0 auto;
  display:flex;
  justify-content:center;
  align-items:center;
  font-size:20px;
  color:#333;
  border-radius:2px;
}

/* TWO COLUMNS */
.section{
  margin-top:50px;
  display:flex;
  justify-content:space-between;
}

/* LEFT CONTENT */
.left{
  width:60%;
  font-size:16px;
}

.left h2{
  margin-bottom:6px;
}

/* RIGHT LIST */
.right{
  width:35%;
  text-align:center;
  font-size:16px;
  line-height:30px;
}

</style>
</head>
<body>

<!-- NAVIGATION -->
<div class="topbar">
    <img src="assets/logo.png" class="logo-small">
    <nav class="nav">
        <a href="index.php">Beranda</a>
        <a href="#" class="active">Penyebab</a>
        <a href="#">Jenis</a>
        <a href="#">Penanggulangan</a>
        <a href="#">Mitigasi</a>
        <a href="#">Dampak</a>
    </nav>
</div>

<!-- MAIN CONTENT -->
<div class="container">

    <!-- INTRO GRAY BOX -->
    <div class="intro-box">
        kata pengantar untuk penyebab
    </div>

    <!-- TWO COLUMN SECTION -->
    <div class="section">

        <!-- LEFT SIDE -->
        <div class="left">

            <h2>1. Perbedaan tekanan</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <h2>2. Suhu udara yang sangat panas</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

        </div>

        <!-- RIGHT SIDE LIST -->
        <div class="right">
            1
