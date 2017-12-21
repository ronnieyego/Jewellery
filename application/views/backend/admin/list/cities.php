<!-- Begin of #main -->
    <div id="main" role="main">
    	
    	<!-- Begin of titlebar/breadcrumbs -->
		<div id="title-bar">
			<ul id="breadcrumbs">
				{breadcrumb}
			</ul>
		</div> <!--! end of #title-bar -->
		
		<div class="shadow-bottom shadow-titlebar"></div>
		
		<!-- Begin of #main-content -->
		<div id="main-content">
			<div class="container_12">
			
			<div class="grid_12">
				<h1>Cities</h1>
				<p>Here you can browse/add/edit/delete website cities.</p>
				<div class="alert warning no-margin"><span class="hide">x</span><strong>Warning:</strong> If you deleted a city which has deals that will delete its deals also.</div>
				<div class="alert warning no-margin"><span class="hide">x</span><strong>Warning:</strong> You can't delete a city with purchased coupons.</div>
			</div>
			
			<div class="grid_12">
				<div class="block-border">
					<div class="block-header">
						<h1>Website Cities <a href="<?echo base_url();?>backend/admin/add_city">[Add]<img src="<?echo base_url();?>backend_includes/img/icons/packs/fugue/16x16/blog--plus.png"/></a></h1><span></span>
					</div>
					<div class="block-content">
						<table id="table-example" class="table">
							<thead>
								<tr>
									<th>id</th>
									<th>City Name</th>
									<th>Edit / Delete</th>
								</tr>
							</thead>
							<tbody>
								{list_cities}
								<tr class="gradeX">
									<td>{id}</td>
									<td>{name}</td>
									<td>
										<a href="<?echo base_url();?>backend/admin/edit_city/{id}" rel="tooltip-top" original-title="Edit"><img src="<?echo base_url();?>backend_includes/img/icons/packs/fugue/16x16/blog--pencil.png"/></a>
										<a href="<?echo base_url();?>backend/admin/delete_city/{id}" rel="tooltip-top" original-title="Delete"><img src="<?echo base_url();?>backend_includes/img/icons/packs/fugue/16x16/blog--minus.png"/></a>
									</td>
								</tr>
								{/list_cities}
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->