<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>\


<div id="layoutSidenav_content">
	<main>
		<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
			<div class="container-xl px-4">
				<div class="page-header-content pt-4">
					<div class="row align-items-center justify-content-between">
						<div class="col-auto mt-4">
							<h1 class="page-header-title">
								<div class="page-header-icon"><i data-feather="file"></i></div>
								KEBELET SEK
							</h1>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Main page content-->
		<div class="container-xl px-4 mt-n10">
			<div class="card">
				<div class="card-header"><?= $title ?></div>
				<div class="card-body">
					<table class="table table-bordered">
						<tr>
							<th>USER ID</th>
							<th>IP ADDRESS</th>
							<th>EMAIL</th>
							<th>DATE</th>
						</tr>
						<?php
						foreach ($users as $row) {
						?>
							<tr>
								<td><?= $row->user_id; ?></td>
								<td><?= $row->ip_address; ?></td>
								<td><?= $row->email; ?></td>
								<td><?= $row->date; ?></td>
							</tr>
						<?php
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</main>
	<?= $this->endSection(); ?>