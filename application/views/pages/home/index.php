<main class="container">
<?php $this->load->view('layouts/_alert') ?>
	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-body">
							Kategori: <strong>Semua Kategori</strong>
							<span class="float-end">
								Urutkan Harga :
								<a href="#" class="badge bg-primary"><i class="fas fa-arrow-circle-down"> Termurah</i></a> |
								<a href="#" class="badge bg-primary"><i class="fas fa-arrow-circle-up"> Termahal</i></a>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="card mb-3">
						<img src="https://placehold.co/100x70" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Product Title</h5>
							<p class="card-text"><strong>Rp100.000,-</strong></p>
							<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
							<a href="#" class="badge bg-primary"><i class="fas fa-tags"> Category</i></a>
						</div>
						<div class="card-footer">
							<form action="">
								<div class="input-group">
									<input type="number" class="form-control">
									<div class="input-group-append">
										<button class="btn btn-primary">Add to Cart</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card mb-3">
						<img src="https://placehold.co/100x70" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Product Title</h5>
							<p class="card-text"><strong>Rp100.000,-</strong></p>
							<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
							<a href="#" class="badge bg-primary"><i class="fas fa-tags"> Category</i></a>
						</div>
						<div class="card-footer">
							<form action="">
								<div class="input-group">
									<input type="number" class="form-control">
									<div class="input-group-append">
										<button class="btn btn-primary">Add to Cart</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center">
					<li class="page-item"><a class="page-link" href="#">Previous</a></li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">Next</a></li>
				</ul>
			</nav>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">Pencarian</div>
						<div class="card-body">
							<form action="">
								<div class="input-group">
									<input type="text" class="form-control" />
									<div class="input-group-append">
										<button class="btn btn-primary">Cari</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">Kategori</div>
						<ul class="list-group">
							<li class="list-group-item">Semua Kategori</li>
							<li class="list-group-item">Kategoti 1</li>
							<li class="list-group-item">Kategoti 2</li>
							<li class="list-group-item">Kategoti 3</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
