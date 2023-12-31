</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0">
	<title>Aplikasi KUPI</title>
	{{-- <link rel="stylesheet"
		href="dashboard.css"> --}}
	<link rel="stylesheet"
		href="responsive.css">
    <!-- <link rel="stylesheet" href="produkindex.css"> -->
	
		<script>
			function redirectToBeban() {
				window.location.href = "{{ route('beban.index') }}";
			}
		</script>
</head>
<style>
    h1 {
 text-align: center;
 margin-top: 1px;
}
/* Menata label dan input */
form {
 margin-top: 30px; 
 width: 50%;
 margin: 20px auto;
 padding: 20px;
 border: 1px solid #ccc;
 border-radius: 5px;
 box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
label {
 display: block;
 margin-bottom: 1px;
 font-weight: bold;
}
input[type="text"],
input[type="number"],
textarea {
 width: calc(100% - 12px);
 padding: 8px;
 margin-bottom: 5px;
 border: 1px solid #ccc;
 border-radius: 3px;
}

select {
    width: calc(100% - 12px);
 padding: 8px;
 margin-bottom: 5px;
 border: 1px solid #ccc;
 border-radius: 3px;
}
textarea {
 height: 100px;
}
@import url(
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family:  'Battambang', Regular;
}
:root {
--background-color1: #1093B5;
--background-color2: #1093B5;
--background-color3: #ededed;
--background-color4: #cad7fda4;
--primary-color: #4b49ac;
--secondary-color: #0c007d;
--Border-color: #172434;
--one-use-color: #172434;
--two-use-color: #172434;
}
body {
background-color: var(--background-color4);
max-width: 100%;
overflow-x: hidden;
}

header {
height: 70px;
width: 100vw;
padding: 0 30px;
background-color: var(--background-color1);
position: fixed;
z-index: 100;
box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825);
display: flex;
justify-content: space-between;
align-items: center;
}

.logo {
font-size: 27px;
font-weight: 600;
color: rgb(239, 245, 241);
}
.img {
	height: 50px;
}

.icn {
height: 50px;
}
.menuicn {
cursor: pointer;
}

.searchbar,
.message,
.logosec {
display: flex;
align-items: center;
justify-content: center;
}

.searchbar2 {
display: none;
}

.logosec {
gap: 10px;
}

.searchbar input {
width: 250px;
height: 42px;
border-radius: 50px 0 0 50px;
background-color: var(--background-color3);
padding: 0 20px;
font-size: 15px;
outline: none;
border: none;
}
.searchbtn {
width: 50px;
height: 42px;
display: flex;
align-items: center;
justify-content: center;
border-radius: 0px 50px 50px 0px;
background-color: var(--secondary-color);
cursor: pointer;
}

.message {
gap: 5px;
position: relative;
cursor: pointer;
}
.circle {
height: 5px;
width: 5px;
position: absolute;
border-radius: 50%;
left: 19px;
top: 8px;
}
.dp {
height: 45px;
width: 45px;
border-radius: 400%;
display: flex;
align-items: center;
justify-content: center;
overflow: hidden;
}

.main-container {
display: flex;
width: 100vw;
position: relative;
top: 70px;
z-index: 1;
}

.dpicn {
height: 40px;
}

.main {
height: calc(100vh - 70px);
width: 100%;
overflow-y: scroll;
overflow-x: hidden;
padding: 40px 30px 30px 30px;
}

.main::-webkit-scrollbar-thumb {
background-image: 
		linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50));
}
.main::-webkit-scrollbar {
width: 5px;
}
.main::-webkit-scrollbar-track {
background-color: #9e9e9eb2;
}
.box-container > .container{
    background-color: #ffffff;
    padding: 16px 16px;
    border-radius: 16px;
}
.box-container {
display: flex;
justify-content: space-evenly;
align-items: center;
flex-wrap: wrap;
gap: 50px;
}
.nav {
min-height: 91vh;
width: 250px;
background-color: var(--background-color2);
position: absolute;
top: 0px;
left: 00;
box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
display: flex;
flex-direction: column;
justify-content: space-between;
overflow: hidden;
padding: 30px 0 20px 10px;
}
.navcontainer {
height: calc(100vh - 70px);
width: 250px;
position: relative;
overflow-y: scroll;
overflow-x: hidden;
transition: all 0.5s ease-in-out;
}
.navcontainer::-webkit-scrollbar {
display: none;
}
.navclose {
width: 80px;
}
.nav-option {
width: 250px;
height: 60px;
display: flex;
align-items: center;
padding: 0 30px 0 20px;
gap: 20px;
transition: all 0.1s ease-in-out;
}
.nav-option:hover {
border-left: 5px solid #a2a2a2;
background-color: #dadada;
cursor: pointer;
}
.nav-img {
height: 30px;
}

.nav-upper-options {
display: flex;
flex-direction: column;
align-items: center;
gap: 30px;
}

.option4 {
border-left: 5px solid #1093B5;
background-color: var(--Border-color);
color: white;
cursor: pointer;
}
.option4:hover {
border-left: 5px solid #00580caf;
background-color: var(--Border-color);
}
.box {
height: 130px;
width: 230px;
border-radius: 20px;
box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751);
padding: 20px;
display: flex;
align-items: center;
justify-content: space-around;
cursor: pointer;
transition: transform 0.3s ease-in-out;
}
.box:hover {
transform: scale(1.08);
}

.box:nth-child(1) {
background-color: var(--one-use-color);
}
.box:nth-child(2) {
background-color: var(--two-use-color);
}
.box:nth-child(3) {
background-color: var(--one-use-color);
}
.box:nth-child(4) {
background-color: var(--two-use-color);
}

.box img {
height: 50px;
}
.box .text {
color: white;
}
.topic {
font-size: 13px;
font-weight: 400;
letter-spacing: 1px;
}

.topic-heading {
font-size: 30px;
letter-spacing: 3px;
}

.report-container {
min-height: 300px;
max-width: 1200px;
margin: 70px auto 0px auto;
background-color: #ffffff;
border-radius: 30px;
box-shadow: 3px 3px 10px rgb(188, 188, 188);
padding: 0px 20px 20px 20px;
}
.report-header {
height: 80px;
width: 100%;
display: flex;
align-items: center;
justify-content: space-between;
padding: 20px 20px 10px 20px;
border-bottom: 2px solid rgba(0, 20, 151, 0.59);
}

.recent-Articles {
font-size: 30px;
font-weight: 600;
color: #172434;
}

.view {
height: 35px;
width: 90px;
border-radius: 8px;
background-color: #172434;
color: white;
font-size: 15px;
border: none;
cursor: pointer;
}

.report-body {
max-width: 1160px;
overflow-x: auto;
padding: 20px;
}
.report-topic-heading,
.item1 {
width: 1120px;
display: flex;
justify-content: space-between;
align-items: center;
}
.t-op {
font-size: 18px;
letter-spacing: 0px;
}

.items {
width: 1120px;
margin-top: 15px;
}

.item1 {
margin-top: 20px;
}
.t-op-nextlvl {
font-size: 14px;
letter-spacing: 0px;
font-weight: 600;
}

.label-tag {
width: 100px;
text-align: center;
background-color: rgb(0, 177, 0);
color: white;
border-radius: 4px;
}

.tanggal{
	display: flex;
	justify-content: end;
	width: 100%;
}
.batal-button {
    margin-left: 405px;
    padding: 5px 15px;
    text-decoration: none;
    color: white;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    background-color: red; 
}
.batal-button:hover {
    opacity: 0.7;
}

.button:hover,
.batal-button:hover {
    opacity: 0.7;
}
button {
 padding: 8px 15px;
 border: none;
 border-radius: 3px;
 background-color: #007bff;
 color: white;
 cursor: pointer;
}
button:hover {
 opacity: 0.8;
}
/* Main CSS Here */
.img {
	height: 50px;
}

span{
    color: crimson;
}

a{
    text-decoration: none;
    color: black;
}



	</style>
<body>

	<!-- for header part -->
	<header>
		<div class="logosec">
            <div class="logo">Keuangan Pintar</div>
            <i class="fas fa-bars icn menuicn" id="menuicn" ></i>
            <img src="images/imageslogokupi.png" class="img" alt="" >
		</div>
	 
		<div class="message">
		   <a href="{{route('profile')}}">
			  <div class="circle"></div>
			  <img src="images/profile.png" class="icn" alt="">
		   </a>
		   <div class="dp">
			  <img src="images/notifikasi.png" class="dpicn" alt="dp">
		   </div>
		</div>
	 </header>	 

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<a href="/dashboard">
						<div class="nav-option option1">
							
							<h3> Dashboard</h3>
						</div>
					
					</a>

					<div class="nav-option option2" onclick="redirectToProduk()">
						<h3> Produk</h3>
					</div>

					<div class="nav-option option2">
						
						<h3> Pendapatan </h3>
					</div>	
					
					
					@if (auth()->user()->role->nama_role == 'admin')
					<div class="nav-option option4" onclick="redirectToBeban()">
						<h3> Beban </h3>
					</div>

					<div class="nav-option option5">
						
						<h3> Laba Rugi</h3>
					</div>

					<div class="nav-option option6">
						
						<h3> Arus Kas</h3>
					</div>

					<div class="nav-option option7">
						
						<h3> Riwayat</h3>
					</div>

				<a href="{{route('tambah-pegawai')}}" class="tambah">
						<div class="nav-option option8">
							
							<h3> Tambah Pegawai</h3>
						</div>
					</a>
					@endif
					
					<div class="nav-option logout">
						<form action="{{route('logout')}}" method="POST">
							@csrf
						<button type="submit">Logout</button>
					</form>  
					</div>

				</div>
			</nav>
		</div>
		<div class="main">
			<div class="tanggal">
				<p id="tanggal"></p>
			</div>
			<div class="container">
            <h1>Beban Pengeluaran</h1>

            <form action="{{ route('beban.store') }}" method="post">
                @csrf

                <label for="tanggal">Tanggal :</label><br>
                <input type="text" id="tanggal" name="tanggal" required>
                @error('tanggal')
                <span class="error">{{ $message }}</span>
                @enderror
                <br><br>

                <label for="nama">Nama :</label><br>
                <input type="text" id="nama_produk" name="nama_produk" required>
                @error('nama_produk')
                <span class="error">{{ $message }}</span>
            @enderror
                <br><br>

                <label for="kategori">Kategori :</label><br>
                <select name="kategori" required>
                <option value="1">Bahan Baku</option>
                <option value="2">Peralatan</option>
                <option value="3">Pajak</option>
                <option value="4">Gaji Karyawan</option>
                <option value="5">Pengeluaran Lain</option>
                </select>
                @error('kategori')
                <span class="error">{{ $message }}</span>
                @enderror
                <br><br>

                <label for="jumlah">Jumlah :</label><br>
                <input type="number" id="harga" name="harga" required>
                @error('harga')
                <span class="error">{{ $message }}</span>
            @enderror
                <br><br>

                <label for="total_biaya">Total Biaya:</label><br>
                <input type="number" id="stok" name="stok" required>
                @error('stok')
                <span class="error">{{ $message }}</span>
            @enderror
                <br><br>

                <button type="submit">Tambah Produk</button>
            </form>

	<script src="script.js"></script>
</body>
</html>