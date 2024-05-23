<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">

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

	<!-- Main JS -->
	<script src="<?php echo base_url(); ?>dist/assets/js/main.js"></script>

	<!-- Style Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>dist/assets/css/style.css">

	<!-- Simplebar Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>dist/assets/libs/simplebar/simplebar.min.css">
	<!-- <link rel="stylesheet" href="<?php //echo base_url(); ?>dist/assets/iconfonts/RemixIcons/fonts/remixicon.css">
	<link rel="stylesheet" href="<?php //echo base_url(); ?>dist/assets/iconfonts/tabler-icons/webfont/tabler-icons.css"> -->

	<!-- Color Picker Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>dist/assets/libs/@simonwep/pickr/themes/nano.min.css">

</head>

<body class="">
	<header>
		<?php if ($this->session->userdata('logged_in')): ?>
			<p>Welcome, <?php echo $this->session->userdata('username'); ?>!</p>
			<a href="<?php echo site_url('logout'); ?>">Logout</a>
		<?php else:
			redirect('admin');
		endif; ?>
	</header>

	<!-- ========== Switcher  ========== -->
	<div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">
		<div class="ti-offcanvas-header z-10 relative">
			<h3 class="ti-offcanvas-title">
				Switcher
			</h3>
			<button type="button"
				class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-white/70 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
				data-hs-overlay="#hs-overlay-switcher">
				<span class="sr-only">Close modal</span>
				<i class="ri-close-circle-line leading-none text-lg"></i>
			</button>
		</div>
		<div class="ti-offcanvas-body pt-0 border-b dark:border-white/10 z-10 relative">
			<div class="flex space-x-2 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
				<button type="button"
					class="hs-tab-active:bg-secondary/10 w-full hs-tab-active:border-b-transparent hs-tab-active:text-secondary dark:hs-tab-active:bg-black/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-secondary -mb-px py-2 px-3 bg-white text-xs font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-bgdark dark:border-white/10 dark:text-white/70 active"
					id="switcher-item-1" data-hs-tab="#switcher-1" aria-controls="switcher-1" role="tab">
					Theme Style
				</button>
				<button type="button"
					class="hs-tab-active:bg-secondary/10 w-full hs-tab-active:border-b-transparent hs-tab-active:text-secondary dark:hs-tab-active:bg-black/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-secondary -mb-px py-2 px-3 bg-white text-xs font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300"
					id="switcher-item-2" data-hs-tab="#switcher-2" aria-controls="switcher-2" role="tab">
					Theme Colors
				</button>
			</div>
		</div>
		<div class="ti-offcanvas-body" id="switcher-body">
			<div id="switcher-1" role="tabpanel" aria-labelledby="switcher-item-1" class="space-y-6">
				<div class="space-y-6">
					<p class="switcher-style-head">Theme Color Mode:</p>
					<div class="grid grid-cols-3 gap-6 switcher-style">
						<div class="flex">
							<input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme"
								checked>
							<label for="switcher-light-theme"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Light</label>
						</div>
						<div class="flex">
							<input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
							<label for="switcher-dark-theme"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Dark</label>
						</div>
					</div>
				</div>
				<div class="space-y-6">
					<p class="switcher-style-head">Directions:</p>
					<div class="grid grid-cols-3 gap-6 switcher-style">
						<div class="flex">
							<input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
							<label for="switcher-ltr"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">LTR</label>
						</div>
						<div class="flex">
							<input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
							<label for="switcher-rtl"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">RTL</label>
						</div>
					</div>
				</div>
				<div class="space-y-6">
					<p class="switcher-style-head">Navigation Styles:</p>
					<div class="grid grid-cols-3 gap-6 switcher-style">
						<div class="flex">
							<input type="radio" name="navigation-style" class="ti-form-radio" id="switcher-vertical"
								checked>
							<label for="switcher-vertical"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Vertical</label>
						</div>
						<div class="flex">
							<input type="radio" name="navigation-style" class="ti-form-radio" id="switcher-horizontal">
							<label for="switcher-horizontal"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Horizontal</label>
						</div>
					</div>
				</div>
				<div class="space-y-6">
					<p class="switcher-style-head">Navigation Menu Style:</p>
					<div class="grid grid-cols-2 gap-6 switcher-style">
						<div class="flex">
							<input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
								id="switcher-menu-click" checked>
							<label for="switcher-menu-click"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Menu Click</label>
						</div>
						<div class="flex">
							<input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
								id="switcher-menu-hover">
							<label for="switcher-menu-hover"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Menu Hover</label>
						</div>
						<div class="flex">
							<input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
								id="switcher-icon-click">
							<label for="switcher-icon-click"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Icon
								Click</label>
						</div>
						<div class="flex">
							<input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
								id="switcher-icon-hover">
							<label for="switcher-icon-hover"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Icon
								Hover</label>
						</div>
					</div>
					<div class="px-4 text-secondary text-xs"><b class="lt:mr-2 rtl:ml-2">Note:</b>Works same for both
						Vertical and
						Horizontal
					</div>
				</div>
				<div class="space-y-6">
					<p class="switcher-style-head">Page Styles:</p>
					<div class="grid grid-cols-3 gap-6 switcher-style">
						<div class="flex">
							<input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-regular"
								checked>
							<label for="switcher-regular"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Regular</label>
						</div>
						<div class="flex">
							<input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-classic">
							<label for="switcher-classic"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Classic</label>
						</div>
					</div>
				</div>
				<div class="space-y-6">
					<p class="switcher-style-head">Layout Width Styles:</p>
					<div class="grid grid-cols-3 gap-6 switcher-style">
						<div class="flex">
							<input type="radio" name="layout-width" class="ti-form-radio" id="switcher-full-width"
								checked>
							<label for="switcher-full-width"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">FullWidth</label>
						</div>
						<div class="flex">
							<input type="radio" name="layout-width" class="ti-form-radio" id="switcher-boxed">
							<label for="switcher-boxed"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Boxed</label>
						</div>
					</div>
				</div>
				<div class="space-y-6">
					<p class="switcher-style-head">Menu Positions:</p>
					<div class="grid grid-cols-3 gap-6 switcher-style">
						<div class="flex">
							<input type="radio" name="data-menu-positions" class="ti-form-radio"
								id="switcher-menu-fixed" checked>
							<label for="switcher-menu-fixed"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
						</div>
						<div class="flex">
							<input type="radio" name="data-menu-positions" class="ti-form-radio"
								id="switcher-menu-scroll">
							<label for="switcher-menu-scroll"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Scrollable </label>
						</div>
					</div>
				</div>
				<div class="space-y-6">
					<p class="switcher-style-head">Header Positions:</p>
					<div class="grid grid-cols-3 gap-6 switcher-style">
						<div class="flex">
							<input type="radio" name="data-header-positions" class="ti-form-radio"
								id="switcher-header-fixed" checked>
							<label for="switcher-header-fixed"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">
								Fixed</label>
						</div>
						<div class="flex">
							<input type="radio" name="data-header-positions" class="ti-form-radio"
								id="switcher-header-scroll">
							<label for="switcher-header-scroll"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Scrollable
							</label>
						</div>
					</div>
				</div>
				<div class="space-y-6 sidemenu-layout-styles">
					<p class="switcher-style-head">Sidemenu Layout Syles:</p>
					<div class="grid grid-cols-2 gap-6 switcher-style">
						<div class="flex">
							<input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
								id="switcher-default-menu" checked>
							<label for="switcher-default-menu"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Default
								Menu</label>
						</div>
						<div class="flex">
							<input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
								id="switcher-closed-menu">
							<label for="switcher-closed-menu"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">
								Closed
								Menu</label>
						</div>
						<div class="flex">
							<input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
								id="switcher-icontext-menu">
							<label for="switcher-icontext-menu"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Icon
								Text</label>
						</div>
						<div class="flex">
							<input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
								id="switcher-icon-overlay">
							<label for="switcher-icon-overlay"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Icon
								Overlay</label>
						</div>
						<div class="flex">
							<input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
								id="switcher-detached">
							<label for="switcher-detached"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Detached</label>
						</div>
						<div class="flex">
							<input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
								id="switcher-double-menu">
							<label for="switcher-double-menu"
								class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Double
								Menu</label>
						</div>
					</div>
					<div class="px-4 text-secondary text-xs"><b class="ltr:mr-2 rtl:ml-2">Note:</b>Navigation menu
						styles won't work
						here.</div>
				</div>
			</div>
			<div id="switcher-2" class="hidden space-y-6" role="tabpanel" aria-labelledby="switcher-item-2">
				<div class="theme-colors">
					<p class="switcher-style-head">Menu Colors:</p>
					<div class="flex switcher-style space-x-3 rtl:space-x-reverse">
						<div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
							<input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio"
								name="menu-colors" id="switcher-menu-light" checked>
							<span
								class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
								role="tooltip">
								Light Menu
							</span>
						</div>
						<div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
							<input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio"
								name="menu-colors" id="switcher-menu-dark" checked>
							<span
								class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
								role="tooltip">
								Dark Menu
							</span>
						</div>
						<div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
							<input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio"
								name="menu-colors" id="switcher-menu-primary">
							<span
								class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
								role="tooltip">
								Color Menu
							</span>
						</div>
						<div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
							<input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio"
								name="menu-colors" id="switcher-menu-gradient">
							<span
								class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
								role="tooltip">
								Gradient Menu
							</span>
						</div>
						<div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
							<input class="hs-tooltip-toggle ti-form-radio color-input color-transparent" type="radio"
								name="menu-colors" id="switcher-menu-transparent">
							<span
								class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
								role="tooltip">
								Transparent Menu
							</span>
						</div>
					</div>
					<div class="px-4 text-secondary text-xs"><b class="ltr:mr-2 rtl:ml-2">Note:</b>If you want to change
						color Menu
						dynamically
						change from below Theme Primary color picker.</div>
				</div>
				<div class="theme-colors">
					<p class="switcher-style-head">Header Colors:</p>
					<div class="flex switcher-style space-x-3 rtl:space-x-reverse">
						<div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
							<input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio"
								name="header-colors" id="switcher-header-light" checked>
							<span
								class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
								role="tooltip">
								Light Header
							</span>
						</div>
						<div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
							<input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio"
								name="header-colors" id="switcher-header-dark">
							<span
								class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
								role="tooltip">
								Dark Header
							</span>
						</div>
						<div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
							<input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio"
								name="header-colors" id="switcher-header-primary">
							<span
								class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
								role="tooltip">
								Color Header
							</span>
						</div>
						<div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
							<input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio"
								name="header-colors" id="switcher-header-gradient">
							<span
								class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
								role="tooltip">
								Gradient Header
							</span>
						</div>
						<div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
							<input class="hs-tooltip-toggle ti-form-radio color-input color-transparent" type="radio"
								name="header-colors" id="switcher-header-transparent">
							<span
								class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
								role="tooltip">
								Transparent Header
							</span>
						</div>
					</div>
					<div class="px-4 text-secondary text-xs"><b class="ltr:mr-2 rtl:ml-2">Note:</b>If you want to change
						color
						Header dynamically
						change from below Theme Primary color picker.</div>
				</div>
				<div class="theme-colors">
					<p class="switcher-style-head">Theme Primary:</p>
					<div class="flex switcher-style space-x-3 rtl:space-x-reverse">
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio color-input color-primary-1" type="radio" name="theme-primary"
								id="switcher-primary" checked>
						</div>
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio color-input color-primary-2" type="radio" name="theme-primary"
								id="switcher-primary1">
						</div>
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio color-input color-primary-3" type="radio" name="theme-primary"
								id="switcher-primary2">
						</div>
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio color-input color-primary-4" type="radio" name="theme-primary"
								id="switcher-primary3">
						</div>
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio color-input color-primary-5" type="radio" name="theme-primary"
								id="switcher-primary4">
						</div>
						<div class="ti-form-radio switch-select ltr:pl-0 rtl:pr-0 mt-1 color-primary-light">
							<div class="theme-container-primary"></div>
							<div class="pickr-container-primary"></div>
						</div>
					</div>
				</div>
				<div class="theme-colors">
					<p class="switcher-style-head">Theme Background:</p>
					<div class="flex switcher-style space-x-3 rtl:space-x-reverse">
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio color-input color-bg-1" type="radio" name="theme-background"
								id="switcher-background" checked>
						</div>
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio color-input color-bg-2" type="radio" name="theme-background"
								id="switcher-background1">
						</div>
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio color-input color-bg-3" type="radio" name="theme-background"
								id="switcher-background2">
						</div>
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio color-input color-bg-4" type="radio" name="theme-background"
								id="switcher-background3">
						</div>
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio color-input color-bg-5" type="radio" name="theme-background"
								id="switcher-background4">
						</div>
						<div class="ti-form-radio switch-select ltr:pl-0 rtl:pr-0 mt-1 color-bg-transparent">
							<div class="theme-container-background"></div>
							<div class="pickr-container-background"></div>
						</div>
					</div>
				</div>
				<div class="menu-image theme-colors">
					<p class="switcher-style-head">Menu With Background Image:</p>
					<div class="flex switcher-style space-x-3 rtl:space-x-reverse">
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio bgimage-input bg-img1" type="radio" name="theme-images"
								id="switcher-bg-img">
						</div>
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio bgimage-input bg-img2" type="radio" name="theme-images"
								id="switcher-bg-img1">
						</div>
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio bgimage-input bg-img3" type="radio" name="theme-images"
								id="switcher-bg-img2">
						</div>
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio bgimage-input bg-img4" type="radio" name="theme-images"
								id="switcher-bg-img3">
						</div>
						<div class="ti-form-radio switch-select">
							<input class="ti-form-radio bgimage-input bg-img5" type="radio" name="theme-images"
								id="switcher-bg-img4">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ti-offcanvas-footer !justify-center">
			<a id="reset-all" class="ti-btn ti-btn-danger" href="javascript:void(0);">Reset</a>
		</div>
	</div>
	<!-- ========== END Switcher  ========== -->

	<div class="page">

		<!-- Start::app-sidebar -->
		<aside class="app-sidebar" id="sidebar">

			<!-- Start::main-sidebar-header -->
			<div class="main-sidebar-header">
				<a href="index.html" class="header-logo">
					<img src="<?php echo base_url(); ?>dist/assets/img/brand-logos/desktop-logo.png" alt="logo"
						class="main-logo desktop-logo">
					<img src="<?php echo base_url(); ?>dist/assets/img/brand-logos/toggle-logo.png" alt="logo"
						class="main-logo toggle-logo">
					<img src="<?php echo base_url(); ?>dist/assets/img/brand-logos/desktop-dark.png" alt="logo"
						class="main-logo desktop-dark">
					<img src="<?php echo base_url(); ?>dist/assets/img/brand-logos/toggle-dark.png" alt="logo"
						class="main-logo toggle-dark">
				</a>
			</div>
			<!-- End::main-sidebar-header -->

			<!-- Start::main-sidebar -->
			<div class="main-sidebar " id="sidebar-scroll">

				<!-- Start::nav -->
				<nav class="main-menu-container nav nav-pills flex-column sub-open">
					<div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
							width="24" height="24" viewBox="0 0 24 24">
							<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
						</svg></div>
					<ul class="main-menu">
						<!-- Start::slide__category -->
						<li class="slide__category"><span class="category-name">Main</span></li>
						<!-- End::slide__category -->

						<!-- Start::slide -->
						<li class="slide  has-sub">
							<a href="javascript:void(0);" class="side-menu__item">
								<i class="ri-home-8-line side-menu__icon"></i>
								<span class="side-menu__label">Dashboards</span>

							</a>
							<ul class="slide-menu child1">
								<li class="slide side-menu__label1"><a href="javascript:void(0)">Dashboards</a></li>

							</ul>
						</li>
						<!-- End::slide -->

						<!-- Start::slide -->
						<!-- <li class="slide">
							<a href="widgets.html" class="side-menu__item">
								<i class="ri-apps-2-line side-menu__icon"></i>
								<span class="side-menu__label">Widgets</span>
							</a>
						</li> -->
						<!-- End::slide -->


						<!-- Start::slide -->
						<!-- <li class="slide has-sub">
							<a href="javascript:void(0);" class="side-menu__item">
								<i class="ri-node-tree side-menu__icon"></i>
								<span class="side-menu__label">NestedMenu</span>
								<i class="ri ri-arrow-right-s-line side-menu__angle"></i>
							</a>
							<ul class="slide-menu child1">
								<li class="slide side-menu__label1"><a href="javascript:void(0)">Nested Menu</a></li>
								<li class="slide"><a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
								</li>
								<li class="slide has-sub"><a href="javascript:void(0);"
										class="side-menu__item">Nested-2<i
											class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
									<ul class="slide-menu child2">
										<li class="slide"><a href="javascript:void(0);"
												class="side-menu__item">Nested-2-1</a>
										</li>
										<li class="slide has-sub"><a href="javascript:void(0);"
												class="side-menu__item">Nested-2-2<i
													class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
											<ul class="slide-menu child3">
												<li class="slide"><a href="javascript:void(0);"
														class="side-menu__item">Nested-2-2-1</a></li>
												<li class="slide"><a href="javascript:void(0);"
														class="side-menu__item">Nested-2-2-2</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li> -->
						<!-- End::slide -->



					</ul>
					<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
							width="24" height="24" viewBox="0 0 24 24">
							<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
						</svg></div>
				</nav>
				<!-- End::nav -->

			</div>
			<!-- End::main-sidebar -->

		</aside>
		<!-- End::app-sidebar -->

		<!-- Start::Header -->
		<header class="header custom-sticky !top-0 !w-full">
			<nav class="main-header" aria-label="Global">
				<div class="header-content">
					<div class="header-left">
						<!-- Navigation Toggle -->
						<div class="">
							<button type="button" class="sidebar-toggle !w-100 !h-100">
								<span class="sr-only">Toggle Navigation</span>
								<i class="ri-arrow-right-circle-line header-icon"></i>
							</button>
						</div>
						<!-- End Navigation Toggle -->
					</div>

					<div class="responsive-logo">
						<a class="responsive-logo-dark" href="index.html" aria-label="Brand"><img
								src="<?php echo base_url(); ?>dist/assets/img/brand-logos/desktop-logo.png" alt="logo"
								class="mx-auto"></a>
						<a class="responsive-logo-light" href="index.html" aria-label="Brand"><img
								src="<?php echo base_url(); ?>dist/assets/img/brand-logos/desktop-dark.png" alt="logo"
								class="mx-auto"></a>
					</div>

					<div class="header-right">
						<div class="responsive-headernav">
							<div class="header-nav-right">

								<div class="header-search">
									<button aria-label="button" type="button" data-hs-overlay="#search-modal"
										class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
										<i class="ri-search-2-line header-icon"></i>
									</button>
								</div>
								<div class="header-theme-mode hidden sm:block">
									<a aria-label="anchor"
										class="hs-dark-mode-active:hidden flex hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
										href="javascript:;" data-hs-theme-click-value="dark">
										<i class="ri-moon-line header-icon"></i>
									</a>
									<a aria-label="anchor"
										class="hs-dark-mode-active:flex hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
										href="javascript:;" data-hs-theme-click-value="light">
										<i class="ri-sun-line header-icon"></i>
									</a>
								</div>
								<div class="header-fullscreen hidden lg:block">
									<a aria-label="anchor" href="javascript:void(0);" onclick="openFullscreen();"
										class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
										<i class="ri-fullscreen-line header-icon full-screen-open"></i>
										<i
											class="ri-fullscreen-line header-icon fullscreen-exit-line full-screen-close hidden"></i>
									</a>
								</div>

								
							
								<div class="header-profile hs-dropdown ti-dropdown"
									data-hs-dropdown-placement="bottom-right">
									<button id="dropdown-profile" type="button"
										class="hs-dropdown-toggle ti-dropdown-toggle gap-2 p-0 flex-shrink-0 h-8 w-8 rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
										<img class="inline-block rounded-full ring-2 ring-white dark:ring-white/10"
											src="<?php echo base_url(); ?>dist/assets/img/users/1.jpg"
											alt="Image Description">
									</button>

									<div class="hs-dropdown-menu ti-dropdown-menu border-0 w-[20rem]"
										aria-labelledby="dropdown-profile">
										<div class="ti-dropdown-header !bg-primary flex">
											<div class="ltr:mr-3 rtl:ml-3">
												<img class="avatar shadow-none rounded-full !ring-transparent"
													src="<?php echo base_url(); ?>dist/assets/img/users/1.jpg"
													alt="profile-img">
											</div>
											<div>
												<p class="ti-dropdown-header-title !text-white">Json Taylor</p>
												<p class="ti-dropdown-header-content !text-white/50">Web Designer</p>
											</div>
										</div>
										<div class="mt-2 ti-dropdown-divider">
											<a href="profile.html" class="ti-dropdown-item">
												<i class="ti ti-user-circle text-lg"></i>
												Profile
											</a>

											<a href="signin.html" class="ti-dropdown-item">
												<i class="ti ti-logout  text-lg"></i>
												Log Out
											</a>
										</div>
									</div>
								</div>
								<div class="switcher-icon">
									<button aria-label="button" type="button"
										class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus-visible:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
										data-hs-overlay="#hs-overlay-switcher">
										<i class="ri-settings-5-line header-icon animate-spin"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<!-- End::Header -->
