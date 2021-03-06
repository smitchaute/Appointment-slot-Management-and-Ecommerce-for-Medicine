<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/layout_3/LTR/material/form_layout_vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 May 2016 07:53:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>/client_assets/images/title.png">
	
	<title>Admin - HugsAndDrugs</title>

	<!-- Global stylesheets -->
	<?php $this->load->view("admin/templates/admin-header-links");?>
	<!-- /theme JS files -->
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/Hospital-Add-Validation.js"></script>

</head>

<body>

	<!-- Main navbar -->
	<?php $this->load->view("admin/templates/admin-main-nav");?>
	<!-- /main navbar -->


	<!-- Page header -->
	<?php $this->load->view("admin/templates/admin-header");?>	
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php $this->load->view("admin/templates/admin-side-bar");?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">
<!-- Hospital Information-->
<div class="panel panel-flat">
<div class="row Hospital">
  <div class="col-md-12">

		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
		<div class="datatable-header">
		<center><h3><b>Hospital Information</b></h3></center>
		<div id="DataTables_Table_0_filter" class="dataTables_filter">
		<label>
		<span>Search:</span> 
		<input type="search" class="" id="search_hospital" placeholder="Type to filter..." aria-controls="DataTables_Table_0">
		</label>
		</div>
	<div class="dataTables_length" id="DataTables_Table_0_length">

		<label><span>Show:</span>
		<select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="">
	 	<option value="10">10</option>
	 	<option value="25">25</option>
	 	<option value="50">50</option>
	 	<option value="-1">All</option>
	 	</select>
	</label>
	</div>
	</div>
	<div class="datatable-scroll">
	<table class="table datatable-show-all dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
	<thead>
	<tr role="row">

		<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">SNo.
		</th>

		<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">Hospital Name
		</th>

		<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Address
		</th>

		<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Contact Number
		</th>

		<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">City
		</th>

		

		<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Action
		</th>
		<!--<th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">-->
		
		


		<!--</th>-->
	</tr>
	</thead>
	<tbody id="hospital_record">						
	</tbody>
	</table>
<div class="datatable-footer">
	<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
		<span id="pagination">
		</span>
	</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- /Hospital Information-->

				
			<!-- /main content -->

		</div> 
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
	<?php $this->load->view("admin/templates/admin-footer");?>
	<!-- /footer -->

</body>

<!-- Mirrored from demo.interface.club/limitless/layout_3/LTR/material/form_layout_vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 May 2016 07:53:19 GMT -->
</html>
