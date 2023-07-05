<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
	<!--begin::Menu wrapper-->
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
		<!--begin::Menu-->
		<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
			<!--begin:Menu item-->
			<div  class="menu-item menu-accordion">
				<!--begin:Menu link-->
				<a class="menu-link" href="/dashboard">
				
					<span class="menu-icon">{!! getIcon('switch', 'fs-2') !!}</span>
					<span class="menu-title">Dashboards</span>				
			
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->

	<!--begin:Menu item-->
	<div class="menu-item pt-5">
		<!--begin:Menu content-->
		<div class="menu-content">
			<span class="menu-heading fw-bold text-uppercase fs-7">MANAGE</span>
		</div>
		<!--end:Menu content-->
	</div>
	<!--end:Menu item-->
	<!--begin:Menu item-->
	<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
		<!--begin:Menu link-->
		<span class="menu-link">
			<span class="menu-icon">{!! getIcon('address-book', 'fs-2') !!}</span>
			<span class="menu-title">Test Data</span>
			<span class="menu-arrow"></span>
		</span>
		<!--end:Menu link-->
		<!--begin:Menu sub-->
		<div class="menu-sub menu-sub-accordion">
			<!--begin:Menu item-->
			<div class="menu-item">
				<!--begin:Menu link-->
				<a class="menu-link" href="/test_data">
					<span class="menu-bullet">
						<span class="bullet bullet-dot"></span>
					</span>
					<span class="menu-title">Test Data List</span>
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
						
		</div>
		<!--end:Menu sub-->
	</div>
	<!--end:Menu item-->
	<!--begin:Menu item-->
	<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
		<!--begin:Menu link-->
		<span class="menu-link">
			<span class="menu-icon">{!! getIcon('address-book', 'fs-2') !!}</span>
			<span class="menu-title">Patients</span>
			<span class="menu-arrow"></span>
		</span>
		<!--end:Menu link-->
		<!--begin:Menu sub-->
		<div class="menu-sub menu-sub-accordion">
			<!--begin:Menu item-->
			<div class="menu-item">
				<!--begin:Menu link-->
				<a class="menu-link" href="/">
					<span class="menu-bullet">
						<span class="bullet bullet-dot"></span>
					</span>
					<span class="menu-title">Patients List</span>
				</a>
				<!--end:Menu link-->
				<!--begin:Menu link-->
				<a class="menu-link" href="/new_user">
					<span class="menu-bullet">
						<span class="bullet bullet-dot"></span>
					</span>
					<span class="menu-title">Add New Patient</span>
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->						
		</div>
		<!--end:Menu sub-->
	</div>
	<!--end:Menu item-->

			<!--begin:Menu item-->
			<div class="menu-item pt-5">
				<!--begin:Menu content-->
				<div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7">ADMIN</span>
				</div>
				<!--end:Menu content-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('address-book', 'fs-2') !!}</span>
					<span class="menu-title">Users</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="/user_list">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Users List</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="/new_user">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Add New User</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->				
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('abstract-39', 'fs-2') !!}</span>
					<span class="menu-title">Activity Log</span>					
				</span>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->

	<!--begin:Menu item-->
	<div class="menu-item pt-5">
		<!--begin:Menu content-->
		<div class="menu-content">
			<span class="menu-heading fw-bold text-uppercase fs-7">SETTINGS</span>
		</div>
		<!--end:Menu content-->
	</div>
	<!--end:Menu item-->
		<!--begin:Menu item-->
		<div  class="menu-item menu-accordion">
			<!--begin:Menu link-->
			<a class="menu-link" href="/profile">
				<span class="menu-icon">{!! getIcon('user', 'fs-2') !!}</span>
				<span class="menu-title">Profile</span>				
			</a>
			<!--end:Menu link-->
		</div>
		<!--end:Menu item-->

		</div>
		<!--end::Menu-->
	</div>
	<!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
