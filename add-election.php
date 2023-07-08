<?php include 'header.php'; ?>
    
  
		
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Voting</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Election</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
	


				<div class="row">
                    <div class="col-lg-8 mx-auto">
					

							<div class="card">
								<div class="card-body p-4">
									<h5 class="mb-4">Add New Election</h5>
										<div class="row mb-3">
											<label for="input49" class="col-sm-3 col-form-label">Election Title</label>
											<div class="col-sm-9">
												<div class="input-group">
													
													<input type="text" class="form-control" id="input49" placeholder="Enter Election Title Here...">
												  </div>
											</div>
										</div>
										
										
										<div class="row mb-3">
											<label for="input39" class="col-sm-3 col-form-label">Select Position</label>
											<div class="col-sm-9">
												<select class="form-select" id="input39">
													<option selected>Select Position here...</option>
													<option value="1">Temple Administrator</option>
													<option value="2">Chief Priest</option>
													<option value="3">Board of Trustees</option>
												  </select>
											</div>
										</div> 
										<div class="row mb-3">
											<label for="input39" class="col-sm-3 col-form-label">Select User Type</label>
											<div class="col-sm-9">
												<select class="form-select" id="input39">
													<option selected>Select User Type here...</option>
													<option value="1">Members</option>
													<option value="2">Employees</option>
													<option value="3">Volunteers</option>
												  </select>
											</div>
										</div> 

										<div class="row mb-3">
											<label for="multiple-select-custom-field" class="col-sm-3 col-form-label">Select Candidate</label>
											<div class="col-sm-9">
												<select class="form-select" id="multiple-select-custom-field" placeholder="Choose anything" multiple style="width: 430px;">
													
													<option value="1">User1</option>
													<option value="2">User2</option>
													<option value="3">User3</option>
												  </select>
											</div>
										</div> 

										
										
										<div class="row mb-3">
											<label for="input40" class="col-sm-3 col-form-label">Description</label>
											<div class="col-sm-9">
												<textarea class="form-control" id="input40" rows="3" placeholder="Enter Position Description Here..."></textarea>
											</div>
										</div>
										<div class="row mb-3">
											<label for="input49" class="col-sm-3 col-form-label">Start date & time</label>
											<div class="col-sm-9">
												<div class="input-group">
													<span class="input-group-text"><i class='bx bx-calendar'></i></span>
													<input type="text" placeholder="Pick start date & time" class="form-control date-time" />
												  </div>
											</div>
										</div>
										<div class="row mb-3">
											<label for="input49" class="col-sm-3 col-form-label">End date & time</label>
											<div class="col-sm-9">
												<div class="input-group">
													<span class="input-group-text"><i class='bx bx-calendar'></i></span>
													<input type="text" placeholder="Pick end date & time" class="form-control date-time" />
												  </div>
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
	<script>
		
		$(".datepicker").flatpickr();

		$(".time-picker").flatpickr({
				enableTime: true,
				noCalendar: true,
				dateFormat: "Y-m-d H:i",
			});

		$(".date-time").flatpickr({
				enableTime: true,
				dateFormat: "Y-m-d H:i",
		});

		$(".date-format").flatpickr({
			altInput: true,
			altFormat: "F j, Y",
			dateFormat: "Y-m-d",
		});

		$(".date-range").flatpickr({
			mode: "range",
			altInput: true,
			altFormat: "F j, Y",
			dateFormat: "Y-m-d",
		});

		$(".date-inline").flatpickr({
			inline: true,
			altInput: true,
			altFormat: "F j, Y",
			dateFormat: "Y-m-d",
		});

	</script>
	
	
	<!--app JS-->
	<script src="assets/js/app.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
	<script src="assets/plugins/select2/js/select2-custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        //Chosen
        $(".multipleChosen").chosen({
          placeholder_text_multiple: "What's your rating", //placeholder
        });
        //Select2
        $(".multipleSelect2").select2({
          placeholder: "Select candidates", //placeholder
        });
      });
    </script>
	<script >
		fetch('nav.html')
  .then(response => response.text())
  .then(data => {
    document.getElementById('nav').innerHTML = data;
  });

	</script>
</body>

</html>

