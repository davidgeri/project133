@extends('layout.main')

@section('title', 'Home')

@section('container')
<style type="text/css">
	body {
		background-image: linear-gradient(to right, #F0E68C, #6db8ea);
	}
</style>
<div class="jumbotron jumbotron-fluid" style="background-image: linear-gradient(to right, #F0E68C, #6db8ea);">
</div>

<div class="container" style="margin-top: 80px">
	<div class="card shadow mb-5">
		<div class="card-body">
			<div class="row align-items-center mb-3">
				<div class="col-2">
					<img src="/img/foto.jpeg" class="img-fluid rounded-circle">
				</div>
				<div class="col-8">
					<h4>
						Let me tell you about my self!
					</h4>
					<p>
						David Geri,
						Seseorang yang memiliki ketertarikan yang sangat tinggi dengan makanan.<br>
					</p>
				</div>

			</div>
		</div>
		<hr>
		<h4 class="text-center mb-4">Introduction</h4>
		<div class="row align-items-center">
			<div class="col-8">
				<table class="table table-bordered table-sm">
					<tbody>
						<tr>
							<td>Nama Lengkap</td>
							<td class="text-center">David Geri Pradipta Riadi</td>
						</tr>
						<tr>
							<td>Tempat/Tanggal Lahir</td>
							<td class="text-center">Mataram, 27 April 2001</td>
						</tr>
						<tr>
							<td>Usia</td>
							<td class="text-center">19 Tahun</td>
						</tr>
						<tr>
							<td>Status</td>
							<td class="text-center">Mahasiswa</td>
						</tr>
						<tr>
							<td>Universitas</td>
							<td class="text-center">Universitas Bumigora</td>
						</tr>
						<tr>
							<td>NIM</td>
							<td class="text-center">1810530133</td>
						</tr>
						<tr>
							<td>Hobi</td>
							<td class="text-center">Makan, Tidur, Gaming</td>
						</tr>

					</tbody>
				</table>
			</div>
			<div class="col-4">
				<p class="lead text-center font-italic">
					"If you wanna chase your dream,<br>
					the first thing you gotta do is wake up"
				</p>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-6">
				<h4 class="text-left mb-4 mt-5 pt-2">Pendidikan</h4>
				<table class="table table-striped table-sm">
					<tbody>
						<tr>
							<td class="text-center">2012-2015</td>
							<td>SMP Kristen Aletheia Ampenan</td>
						</tr>
						<tr>
							<td class="text-center">2015-2018</td>
							<td>SMA Negeri 8 Mataram</td>
						</tr>
						<tr>
							<td class="text-center">2018-Sekarang</td>
							<td>Universitas Bumigora Mataram</td>
						</tr>

					</tbody>
				</table>
			</div>
			<div class="col-6">
				<h4 class="text-left mb-4 pt-2">Achievement</h4>
				<table class="table table-bordered table-sm">
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td>Runner Up DBL(Developmental Basketball Junior) Mataram 2014</td>
						</tr>
						<tr>
							<td class="text-center">2</td>
							<td>Patricipated in Unram English Debate Competition (2017)</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection