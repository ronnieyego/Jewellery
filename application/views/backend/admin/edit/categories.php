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
				<h1>Edit Category</h1>
				<p>Here you can Edit the website categories.</p>
			</div>
			
			<div class="grid_12">
				<div class="block-border">
					<div class="block-header">
						<h1>Edit Category</h1><span></span>
					</div>
					<form id="validate-form" class="block-content form" action="<?echo base_url();?>backend/admin/edit_category_done/{id}" method="post">
						<div class="_100">
							<p><label for="textfield">Category Title</label><input id="title" name="title" class="required" type="text" value="{title}" /></p>
						</div>
						
						
						<div class="clear"></div>
						<div class="block-actions">
							<ul class="actions-right">
								<li><input type="submit" class="button" value="Save"></li>
							</ul>
						</div>
					</form>
				</div>
			</div>
			
			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->
</div>