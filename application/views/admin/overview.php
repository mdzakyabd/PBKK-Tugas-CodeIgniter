<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="sb-nav-fixed">
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="layoutSidenav">
		<?php $this->load->view("admin/_partials/sidebar.php") ?>
		<div id="layoutSidenav_content">
			<main>
				<?php $this->load->view("admin/_partials/content.php") ?>
			</main>
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	
</body>

</html>
