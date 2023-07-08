<?php include 'header.php'; ?>
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Position</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Position</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
	


				<div class="row">
                    <div class="col-lg-8 mx-auto">
					

							<div class="card">
								<div class="card-body p-4">
									<h5 class="mb-4">Add New Position</h5>
										<div class="row mb-3">
											<label for="input49" class="col-sm-3 col-form-label">Position Name</label>
											<div class="col-sm-9">
												<div class="input-group">
													<span class="input-group-text"><i class='bx bx-user'></i></span>
													<input type="text" class="form-control" id="input49" placeholder="Enter Position Name Here...">
												  </div>
											</div>
										</div>
										<div class="row mb-3">
											<label for="input49" class="col-sm-3 col-form-label">Priority</label>
											<div class="col-sm-9">
												<div class="input-group">
													
													<input type="number" class="form-control" id="input49" placeholder="Enter Position Priority Here...">
												  </div>
											</div>
										</div>
										
										<div class="row mb-3">
											<label for="input40" class="col-sm-3 col-form-label">Description</label>
											<div class="col-sm-9">
												<textarea class="form-control" id="input40" rows="3" placeholder="Enter Position Description Here..."></textarea>
											</div>
										</div>
										
										
										<div class="row mb-3">
											<label class="col-sm-3 col-form-label"></label>
											<div class="col-sm-9">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="input54">
													<label class="form-check-label" for="input54">Check me out</label>
												</div>
											</div>
										</div>
										<div class="row">
											<label class="col-sm-3 col-form-label"></label>
											<div class="col-sm-9">
												<div class="d-md-flex d-grid align-items-center gap-3">
													<button type="button" class="btn btn-primary px-4">Submit</button>
													<button type="button" class="btn btn-light px-4">Reset</button>
												</div>
											</div>
										</div>
									</div>
								</div>  
					</div>
				</div><!--end row-->


				



			</div>
		</div>
		<?php include 'footer.php'; ?>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>