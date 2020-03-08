<div id="layoutSidenav_nav">
	<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
		<div class="sb-sidenav-menu">
			<div class="nav">
				<div class="sb-sidenav-menu-heading">Home</div>
				<a class="nav-link" href="<?php echo site_url('admin') ?>">
					<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
					Dashboard
				</a>
				<div class="sb-sidenav-menu-heading">Our Products</div>
				<a class="nav-link collapsed <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
					<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
					Products
					<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
				</a>
				<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
					<nav class="sb-sidenav-menu-nested nav">
						<a class="nav-link" href="<?php echo site_url('admin/products/add') ?>">New Products</a>
						<a class="nav-link" href="<?php echo site_url('admin/products') ?>">List Products</a></nav>
				</div>
				<div class="sb-sidenav-menu-heading">Others</div>
				<a class="nav-link" href="charts.html">
					<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
					Users
				</a><a class="nav-link" href="tables.html">
					<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
					Setting
				</a>
			</div>
		</div>
		<div class="sb-sidenav-footer">
			<div class="small">Logged in as:</div>
			Start Bootstrap
		</div>
	</nav>
</div>
