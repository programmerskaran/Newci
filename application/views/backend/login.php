<!DOCTYPE html>
<html lang="en" dir="ltr" class="h-full">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Synto - Tailwind Admin Template </title>
	<meta name="description"
		content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
	<meta name="keywords"
		content="analytics dashboard,jobs dashboard,crm dashboard examples,personal dashboard,sales dashboard sample,best crm dashboard,crypto dashboard template,sales analytics dashboard,stocks dashboard,hrm dashboard,ecommerce admin panel template,sales admin dashboard,admin panel for ecommerce website,website template ecommerce,template dashboard,course dashboard,template ecommerce website">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>dist/assets/img/brand-logos/favicon.ico">

	<!-- Style Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>dist/assets/css/style.css">

	<!-- Simplebar Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>dist/assets/libs/simplebar/simplebar.min.css">

	<!-- Color Picker Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>dist/assets/libs/@simonwep/pickr/themes/nano.min.css">

</head>

<body class="authentication-page">

	<!-- ========== MAIN CONTENT ========== -->
	<main id="content" class="w-full max-w-md mx-auto p-6">
		<a href="index.html" class="header-logo">
			<!-- <img src="<?php //echo base_url(); ?>dist/assets/img/brand-logos/desktop-logo.png" alt="logo"
				class="mx-auto block dark:hidden"> -->
			<img src="<?php echo base_url(); ?>dist/assets/img/brand-logos/desktop-dark.png" alt="logo"
				class="mx-auto hidden dark:block">
		</a>
		<div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
			<div class="p-4 sm:p-7">
				<div class="text-center">
					<h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>

				</div>

				<div class="mt-5">
			
					
					<?php if ($this->session->flashdata('error')): ?>
						<div class="alert alert-danger" role="alert">
						<p><?php echo $this->session->flashdata('error'); ?></p>
						</div>

					<?php endif; ?>
					
					<form action="<?php echo base_url('admin/login_action'); ?>" method="post">
						<!-- Form -->
						<div>
							<div class="grid gap-y-4">
								<!-- Form Group -->
								<div>
									<label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
									<div class="relative">
										<input type="email" id="email" name="email"
											class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
											required>
									</div>
								</div>
								<!-- End Form Group -->

								<!-- Form Group -->
								<div>
									<div class="flex justify-between items-center">
										<label for="password"
											class="block text-sm mb-2 dark:text-white">Password</label>
										<a class="text-sm text-primary decoration-2 hover:underline font-medium"
											href="forgot.html">Forgot password?</a>
									</div>
									<div class="relative">
										<input type="password" id="password" name="password"
											class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
											required>
									</div>
								</div>
								<!-- End Form Group -->

								<!-- Checkbox -->
								<div class="flex items-center">
									<div class="flex">
										<input id="remember-me" name="remember-me" type="checkbox"
											class="shrink-0 mt-0.5 border-gray-200 rounded text-primary pointer-events-none focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-white/10">
									</div>
									<div class="ltr:ml-3 rtl:mr-3">
										<label for="remember-me" class="text-sm dark:text-white">Remember me</label>
									</div>
								</div>
								<!-- End Checkbox -->

								<input
									class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10"
									value="Sign in" type="submit">
							</div>
						</div>
					</form>
					<!-- End Form -->
				</div>
			</div>
		</div>
	</main>
	<!-- ========== END MAIN CONTENT ========== -->

	<!-- popperjs -->
	<script src="<?php echo base_url(); ?>dist/assets/libs/@popperjs/core/umd/popper.min.js"></script>

	<!-- Custom-Switcher JS -->
	<script src="<?php echo base_url(); ?>dist/assets/js/custom-switcher.js"></script>

	<!-- Preline JS -->
	<script src="<?php echo base_url(); ?>dist/assets/libs/preline/preline.js"></script>


</body>

</html>
