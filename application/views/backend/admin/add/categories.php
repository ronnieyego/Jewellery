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
				<h1>Add Category</h1>
				<p>Here you can add new category to the website.</p>
			</div>
			
			<div class="grid_12">
				<div class="block-border">
					<div class="block-header">
						<h1>Add new Category</h1><span></span>
					</div>
					<form id="validate-form" class="block-content form" action="<?echo base_url();?>backend/admin/add_category_done" method="post">
						<div class="_100">
							<p><label for="textfield">Category Title</label><input id="title" name="title" class="required" type="text" value="" /></p>
						</div>
						
						<div class="clear"></div>
						<div class="block-actions">
							<ul class="actions-right">
								<li><input type="submit" class="button" value="Add"></li>
							</ul>
						</div>
					</form>
				</div>
			</div>
			
			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->