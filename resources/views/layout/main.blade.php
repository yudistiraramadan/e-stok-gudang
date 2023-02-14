
<!DOCTYPE html>
<html lang="en">
{{-- Header --}}
@include('layout.header')
<body>
	<div class="wrapper">
		<!--
			Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" data-background-color="dark">
			<!-- Logo Header -->
			<div class="logo-header">
				
				<a href="index.html" class="logo">
                    {{-- <h3 style="color:white;">E-STOK GUDANG</h3> --}}
					<img src="../assets/img/logoazzara.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			@include('layout.navbar')
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		@include('layout.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<h4 class="page-title">Dashboard</h4>
				</div>
			</div>
			
		</div>
	</div>
</div>
{{-- Script --}}
@include('layout.script')
{{-- End of Script --}}
</body>
</html>