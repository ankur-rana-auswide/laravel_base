<?php $menu_collapse=\Auth::user()->menu_collapse; 
	$class=$class2="";  $rotate='rotate-360';
	$left = 'left: 20%;';
	$width = "15.438rem";
	$margin_left = 'margin-left: 0px;';	
	$margin_left_svg = "margin-left: 0px;";
	$log_width ="width:246px !important;";
	
	$logo_img = asset('assets/portal_img/Logo.png');
	$logo_height = "height:100% !important;";
	$col_top = "top:71px;";



	if($menu_collapse!='Yes'){
	$class="collapsed-width";$class2="collapsed-hidden";
	$rotate='rotate-180';
	$left = 'left: 46px;';
	$width = "13.438rem";

	$margin_left = "margin-left: 15px;";
	$margin_left_svg = "margin-left: 23px;";
	$log_width = "width:100% !important;";
	$logo_img = asset('assets/portal_img/mob_users.png');
	$logo_height = "height:40px !important;";
	$col_top = "top:88px;";


	}?>


	<style>


	.collapsed-width .menu-text{display: none;}

	.ul_cust {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2) !important;
		transition: 0.3s !important;
	}


	.rotate-180 {
			transform: rotate(180deg);
		}
		.rotate-0 {
			transform: rotate(0deg);
		}
		.active-button {
			 background-color: #000;
		}

		button {
			outline: none !important;
		}

		#Path_29:hover ,#Path_28:hover {
			fill:white !important;
		}
		
		.collapsed-width .log_hover {
			width:80px !important;
		}
		
		.log_hover > a {
			background: #000 !important;
			color: #D4A848 !important;
		}
		.log_hover > a:hover {
			color:#FFF !important;
			//background: #D4A848 !important;
		}

		.cus_mob_li {
			font-size : 13px !important;
		}
		
		@media only screen and (max-width: 767px) {
           .log_hover {
            width: 256px !important;
           }
        }

		li > a.menu-item:hover {
			background : #cccccc24;
		}
		li > ul.ul_cust li:hover {
			//background : #cccccc24;
		}
        .hover_li.active{
            background : #cccccc24;border-radius: 10px;
        }
        
        .space-y-1 > :not([hidden]) ~ :not([hidden]) {
            margin-bottom:15px !important;
        }
		
	</style>
	<aside class="cus_cs z-20 hidden w-[{{$width}}] overflow-y-auto bg-black dark:bg-gray-800 md:block flex-shrink-0 lg:collapsed-sidebar  <?php echo $class;?>" style="background: #000 0% 0% no-repeat padding-box;box-shadow: 5px 5px 5px #00000029;">
				<div class="lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:flex-col fixed">
					<button id="collapseButton" class="text-white justify-end group flex flex-row items-center gap-x-3 rounded-md p-0 text-sm leading-6 focus:outline-none">
					<!-- <svg style="height: 1rem;color: black;position: relative;top: 71px;background: #FFFFFF 0% 0% no-repeat padding-box;box-shadow: 0px 3px 6px #00000029;" id="collapseIcon" class=" <?php echo $rotate;?>" fill="none" stroke="currentColor" viewBox="0 0 1 25" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.293 4.707 14.586 12l-7.293 7.293 1.414 1.414L17.414 12 8.707 3.293 7.293 4.707z"/></svg> -->

							<svg  stroke-width="2" id="collapseIcon" style="color: black;position: relative;{{ $col_top }} background: #FFFFFF 0% 0% no-repeat padding-box;box-shadow: 0px 3px 6px #00000029;width: 25px;height: 25px;{{$left}}border-radius: 50%;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={2} stroke="currentColor" className="size-6" class=" <?php echo $rotate;?> menu-collapse-left menu-collapse-right" >
	<path strokeLinecap="round" strokeLinejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
	</svg>

						
					</button>

					<!-- Sidebar component, swap this element with another sidebar if you like -->
					<div class="flex grow flex-col gap-y-5 overflow-y-auto bg-menu-bg-color px-6 pb-4 sidebar-main" style="width: 13.4rem;padding-right:0px !important;scrollbar-width: none;">
						<div class="flex items-center m-auto pt-3 pb-3 main-logo">
							<img class="h-27 w-179 logo_img" src="{{$logo_img}}" alt="suprem-Logo" style="{{$logo_height}}">
						</div>
						<nav class="flex flex-1 flex-col" style="margin-right: 10%;">
							<ul role="list" class="flex flex-1 flex-col gap-y-7 menu-list">
								<li>
									<ul role="list" class="-mx-2 space-y-1">
										<li class="mb-3 hover_li {{ request()->routeIs('dashboard*')  ? 'active' : '' }}">
											<a href="<?php echo request()->routeIs('dashboard') ? 'javascript:void(0)' : route('dashboard') ?>"
												class="menu-item items-center <?php echo request()->routeIs('dashboard') ? 'text-white' : 'text-[#fff]'; ?> hover:text-white  group flex gap-x-3 rounded-md p-2 text-sm leading-6">
												
												        
														<svg id="Group_226" data-name="Group 226" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
														<path fill="white" id="Rectangle_9_-_Outline" data-name="Rectangle 9 - Outline" d="M1.4-1H7A2.4,2.4,0,0,1,9.4,1.4V7A2.4,2.4,0,0,1,7,9.4H1.4A2.4,2.4,0,0,1-1,7V1.4A2.4,2.4,0,0,1,1.4-1ZM7,7.8A.8.8,0,0,0,7.8,7V1.4A.8.8,0,0,0,7,.6H1.4a.8.8,0,0,0-.8.8V7a.8.8,0,0,0,.8.8Z" transform="translate(14.6 14.6)"/>
														<path fill="white" id="Rectangle_10_-_Outline" data-name="Rectangle 10 - Outline" d="M1.4-1H7A2.4,2.4,0,0,1,9.4,1.4V7A2.4,2.4,0,0,1,7,9.4H1.4A2.4,2.4,0,0,1-1,7V1.4A2.4,2.4,0,0,1,1.4-1ZM7,7.8A.8.8,0,0,0,7.8,7V1.4A.8.8,0,0,0,7,.6H1.4a.8.8,0,0,0-.8.8V7a.8.8,0,0,0,.8.8Z" transform="translate(14.6 1)"/>
														<path fill="white" id="Rectangle_11_-_Outline" data-name="Rectangle 11 - Outline" d="M1.4-1H7A2.4,2.4,0,0,1,9.4,1.4V7A2.4,2.4,0,0,1,7,9.4H1.4A2.4,2.4,0,0,1-1,7V1.4A2.4,2.4,0,0,1,1.4-1ZM7,7.8A.8.8,0,0,0,7.8,7V1.4A.8.8,0,0,0,7,.6H1.4a.8.8,0,0,0-.8.8V7a.8.8,0,0,0,.8.8Z" transform="translate(1 1)"/>
														<path fill="white" id="Rectangle_12_-_Outline" data-name="Rectangle 12 - Outline" d="M1.4-1H7A2.4,2.4,0,0,1,9.4,1.4V7A2.4,2.4,0,0,1,7,9.4H1.4A2.4,2.4,0,0,1-1,7V1.4A2.4,2.4,0,0,1,1.4-1ZM7,7.8A.8.8,0,0,0,7.8,7V1.4A.8.8,0,0,0,7,.6H1.4a.8.8,0,0,0-.8.8V7a.8.8,0,0,0,.8.8Z" transform="translate(1 14.6)"/>
														</svg>

												<span class="menu-text cus_font <?php echo $class2;?>">Dashboard</span>
											</a>
										</li>


										<li class="mb-3 hover_li {{ request()->routeIs('job*')  ? 'active' : '' }}">
											<a href="<?php echo request()->routeIs('job.index') ? 'javascript:void(0)' : route('job.index') ?>"
												class="menu-item items-center <?php echo request()->routeIs('job.*') ? 'text-white' : 'text-[#fff]'; ?>  hover:text-white group flex gap-x-3 rounded-md p-2 text-sm leading-6">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
													<defs>
														<clipPath id="clip-path">
															<rect id="Rectangle_18" data-name="Rectangle 18" width="24" height="24" transform="translate(-1052 405)"/>
														</clipPath>
													</defs>
													<g id="Mask_Group_3" data-name="Mask Group 3" transform="translate(1052 -405)" clip-path="url(#clip-path)">
														<g id="Icon_ion-briefcase" data-name="Icon ion-briefcase" transform="translate(-1052 406.6)">
															<path id="Path_36" data-name="Path 36" d="M30.585,5.625H13.008A1.758,1.758,0,0,0,11.25,7.383V9.14H32.343V7.383A1.758,1.758,0,0,0,30.585,5.625Z" transform="translate(-9.796 -2.11)" />
															<path id="Path_37" data-name="Path 37" d="M25.125,9.775a3.2,3.2,0,0,0-3.2-3.2h-2.4v-.8a2.4,2.4,0,0,0-2.4-2.4h-8a2.4,2.4,0,0,0-2.4,2.4v.8h-2.4a3.2,3.2,0,0,0-3.2,3.2v2.4h24Zm-7.2-3.2h-9.6v-.8a.8.8,0,0,1,.8-.8h8a.8.8,0,0,1,.8.8Zm-.8,7.6a1.2,1.2,0,0,1-1.2,1.2h-5.6a1.2,1.2,0,0,1-1.2-1.2v-.2a.2.2,0,0,0-.2-.2h-7.8v7.2a3.2,3.2,0,0,0,3.2,3.2h17.6a3.2,3.2,0,0,0,3.2-3.2v-7.2h-7.8a.2.2,0,0,0-.2.2Z" transform="translate(-1.125 -3.375)" />
														</g>
													</g>
												</svg>
												<span class="menu-text cus_font <?php echo $class2;?>">Orders</span>
											</a>
										</li>
 										<!--  -->
										<li class="mb-3 hover_li {{ request()->routeIs('user*') || request()->routeIs('role*') ? 'active' : '' }}">
											<a  href="<?php echo request()->routeIs('user.list') ? 'javascript:void(0)' : route('user.list') ?>" class="menu-item flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group drop_col <?php echo request()->routeIs('user*') || request()->routeIs('role*') ? 'text-white' : 'text-[#fff]'; ?> " aria-controls="user_col" data-collapse-toggle="user_col">
											  <svg fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 7C9.65685 7 11 5.65685 11 4C11 2.34315 9.65685 1 8 1C6.34315 1 5 2.34315 5 4C5 5.65685 6.34315 7 8 7Z" /><path d="M14 12C14 10.3431 12.6569 9 11 9H5C3.34315 9 2 10.3431 2 12V15H14V12Z" /></svg>
                                                <span class="flex-1 ml-3 text-left menu-text  whitespace-nowrap <?php echo $class2;?>" sidebar-toggle-item>Users</span>
												<svg sidebar-toggle-item class="menu-text <?php  $class2; ?>w-6 h-6 <?php echo request()->routeIs('user*') || request()->routeIs('role*') ? 'rotate-180' : '0'; ?>" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        	</a>
                                        	<ul id="user_col" class="<?php echo $class2;?> {{ request()->routeIs('user*') || request()->routeIs('role*') ? '' : 'hidden' }} py-2 space-y-2 ul_cust">
												<li>
												    <a href="{{route('user.list')}}" class="menu-text <?php echo $class2;?>  flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group pl-9 pt-0 pb-0" style="font-size:13px;"><span class="cus_mob_li" style="<?php if(request()->routeIs('user.list') ) { echo "color:#d4a848;"; } ?>">List Users</span> </a>
												</li>
 												 
 											</ul>
										</li>
  
									 
 										 
										
										<form method="POST" action="{{ route('logout') }}">
										<li  onclick="event.preventDefault(); this.closest('form').submit();" class="log_hover" style="position: fixed;bottom: 0px;left: 0%;border: none;cursor: pointer;padding: 0px;text-align: justify;width: 247px;">
								
										
											<a  class="menu-item items-center group flex gap-x-3 p-2 text-sm leading-6" style="padding-left:22px;">
											
					                            @csrf
												<svg xmlns="http://www.w3.org/2000/svg" width="23.205" height="23.2" viewBox="0 0 23.205 23.2" fill="currentColor">
												<g id="Icon_core-account-logout" data-name="Icon core-account-logout" transform="translate(-1.118 -1.125)">
												<path id="Path_28" data-name="Path 28" d="M4.079,16.277H17.351V14.73H4.079L7.706,11.1h0L6.612,10.009,1.118,15.5h0L6.612,21,7.706,19.9h0L4.079,16.277Z" transform="translate(0 -2.777)"/>
												<path id="Path_29" data-name="Path 29" d="M11.25,1.125V2.672H25.943V22.778H11.25v1.547H27.49V1.125Z" transform="translate(-3.167)"/>
												</g>
												</svg>
												<span class="menu-text cus_font <?php echo $class2;?>">Logout</span>
												
											</a>
										</li>

										</form>

									
			
							</ul>
						</nav>
					</div>
				</div>
			</aside>
			<!-- Mobile sidebar -->
			<!-- Backdrop -->
			<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
				x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
				x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
				x-transition:leave-end="opacity-0"
				class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>

				
			<aside style="background: #000 0% 0% no-repeat padding-box;box-shadow: 5px 5px 5px #00000029;" class="cus_cs fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-[4.5rem] overflow-y-auto bg-black dark:bg-gray-800 md:hidden"
				x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
				x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
				x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
				x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
				@keydown.escape="closeSideMenu">
				<div class="flex grow flex-col gap-y-5 overflow-y-auto bg-menu-bg-color px-6 pb-4" style="
				">
					<div class="flex items-center m-auto pt-8 pb-3">
						<img class="h-27 w-179" src="{{asset('assets/portal_img/Logo.png')}}" alt="suprem-Logo">
					</div>
					<nav class="flex flex-1 flex-col">
						<ul role="list" class="flex flex-1 flex-col gap-y-7">
							<li>
									<ul role="list" class="-mx-2 space-y-1">
										<li class="mb-3 hover_li">
											<a href="<?php echo request()->routeIs('dashboard') ? 'javascript:void(0)' : route('dashboard') ?>"
												class="menu-item items-center <?php echo request()->routeIs('dashboard') ? 'text-white' : 'text-[#fff]'; ?> hover:text-white group flex gap-x-3 rounded-md p-2 text-sm leading-6">
												
												
														<svg id="Group_226" data-name="Group 226" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
														<path fill="<?php echo request()->routeIs('dashboard') ? 'white' : 'black'; ?>" id="Rectangle_9_-_Outline" data-name="Rectangle 9 - Outline" d="M1.4-1H7A2.4,2.4,0,0,1,9.4,1.4V7A2.4,2.4,0,0,1,7,9.4H1.4A2.4,2.4,0,0,1-1,7V1.4A2.4,2.4,0,0,1,1.4-1ZM7,7.8A.8.8,0,0,0,7.8,7V1.4A.8.8,0,0,0,7,.6H1.4a.8.8,0,0,0-.8.8V7a.8.8,0,0,0,.8.8Z" transform="translate(14.6 14.6)"/>
														<path fill="<?php echo request()->routeIs('dashboard') ? 'white' : 'black'; ?>" id="Rectangle_10_-_Outline" data-name="Rectangle 10 - Outline" d="M1.4-1H7A2.4,2.4,0,0,1,9.4,1.4V7A2.4,2.4,0,0,1,7,9.4H1.4A2.4,2.4,0,0,1-1,7V1.4A2.4,2.4,0,0,1,1.4-1ZM7,7.8A.8.8,0,0,0,7.8,7V1.4A.8.8,0,0,0,7,.6H1.4a.8.8,0,0,0-.8.8V7a.8.8,0,0,0,.8.8Z" transform="translate(14.6 1)"/>
														<path fill="<?php echo request()->routeIs('dashboard') ? 'white' : 'black'; ?>" id="Rectangle_11_-_Outline" data-name="Rectangle 11 - Outline" d="M1.4-1H7A2.4,2.4,0,0,1,9.4,1.4V7A2.4,2.4,0,0,1,7,9.4H1.4A2.4,2.4,0,0,1-1,7V1.4A2.4,2.4,0,0,1,1.4-1ZM7,7.8A.8.8,0,0,0,7.8,7V1.4A.8.8,0,0,0,7,.6H1.4a.8.8,0,0,0-.8.8V7a.8.8,0,0,0,.8.8Z" transform="translate(1 1)"/>
														<path fill="<?php echo request()->routeIs('dashboard') ? 'white' : 'black'; ?>" id="Rectangle_12_-_Outline" data-name="Rectangle 12 - Outline" d="M1.4-1H7A2.4,2.4,0,0,1,9.4,1.4V7A2.4,2.4,0,0,1,7,9.4H1.4A2.4,2.4,0,0,1-1,7V1.4A2.4,2.4,0,0,1,1.4-1ZM7,7.8A.8.8,0,0,0,7.8,7V1.4A.8.8,0,0,0,7,.6H1.4a.8.8,0,0,0-.8.8V7a.8.8,0,0,0,.8.8Z" transform="translate(1 14.6)"/>
														</svg>

												<span class="menu-text cus_font <?php echo $class2;?>">Dashboard</span>
											</a>
										</li>


										<li class="mb-3 hover_li">
											<a href="<?php echo request()->routeIs('job.index') ? 'javascript:void(0)' : route('job.index') ?>"
												class="menu-item items-center <?php echo request()->routeIs('job.*') ? 'text-white' : 'text-[#fff]'; ?>  hover:text-white group flex gap-x-3 rounded-md p-2 text-sm leading-6">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
													<defs>
														<clipPath id="clip-path">
															<rect id="Rectangle_18" data-name="Rectangle 18" width="24" height="24" transform="translate(-1052 405)"/>
														</clipPath>
													</defs>
													<g id="Mask_Group_3" data-name="Mask Group 3" transform="translate(1052 -405)" clip-path="url(#clip-path)">
														<g id="Icon_ion-briefcase" data-name="Icon ion-briefcase" transform="translate(-1052 406.6)">
															<path id="Path_36" data-name="Path 36" d="M30.585,5.625H13.008A1.758,1.758,0,0,0,11.25,7.383V9.14H32.343V7.383A1.758,1.758,0,0,0,30.585,5.625Z" transform="translate(-9.796 -2.11)" />
															<path id="Path_37" data-name="Path 37" d="M25.125,9.775a3.2,3.2,0,0,0-3.2-3.2h-2.4v-.8a2.4,2.4,0,0,0-2.4-2.4h-8a2.4,2.4,0,0,0-2.4,2.4v.8h-2.4a3.2,3.2,0,0,0-3.2,3.2v2.4h24Zm-7.2-3.2h-9.6v-.8a.8.8,0,0,1,.8-.8h8a.8.8,0,0,1,.8.8Zm-.8,7.6a1.2,1.2,0,0,1-1.2,1.2h-5.6a1.2,1.2,0,0,1-1.2-1.2v-.2a.2.2,0,0,0-.2-.2h-7.8v7.2a3.2,3.2,0,0,0,3.2,3.2h17.6a3.2,3.2,0,0,0,3.2-3.2v-7.2h-7.8a.2.2,0,0,0-.2.2Z" transform="translate(-1.125 -3.375)" />
														</g>
													</g>
												</svg>
												<span class="menu-text cus_font <?php echo $class2;?>">Jobs</span>
											</a>
										</li>



										<!--  -->
										<li class="mb-3 hover_li">
											<a  href="<?php echo request()->routeIs('user.list') ? 'javascript:void(0)' : route('user.list') ?>" class="flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group drop_col <?php echo request()->routeIs('user*') || request()->routeIs('role*') ? 'text-white' : 'text-[#fff]'; ?> " aria-controls="user_col" data-collapse-toggle="user_col">
											

												<svg fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 7C9.65685 7 11 5.65685 11 4C11 2.34315 9.65685 1 8 1C6.34315 1 5 2.34315 5 4C5 5.65685 6.34315 7 8 7Z" /><path d="M14 12C14 10.3431 12.6569 9 11 9H5C3.34315 9 2 10.3431 2 12V15H14V12Z" /></svg>


												<span class="flex-1 ml-3 text-left menu-text  whitespace-nowrap <?php echo $class2;?>" sidebar-toggle-item>Users</span>
												<svg sidebar-toggle-item class="menu-text <?php  $class2; ?>w-6 h-6 <?php echo request()->routeIs('user*') || request()->routeIs('role*') ? 'rotate-180' : '0'; ?>" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
	</a>
											<ul id="user_col" class="<?php echo $class2;?> {{ request()->routeIs('user*') || request()->routeIs('role*') ? '' : 'hidden' }} py-2 space-y-2 ul_cust">
												<li>

													
													<a href="{{route('user.list')}}"
														class="menu-text <?php echo $class2;?>  flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group pl-9 pt-0 pb-0" style="font-size:13px;"><span class="cus_mob_li" style="<?php if(request()->routeIs('user.list') ) { echo "color:#d4a848;"; } ?>">List Users</span> </a>
												</li>
												<li>
													<a href="{{route('role.index')}}"
														class="menu-text <?php echo $class2;?> flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group pl-9 pt-0 pb-0" style="font-size:13px;"><span class="cus_mob_li" style="<?php if(request()->routeIs('role.index') ) { echo "color:#d4a848;"; } ?>">User Roles</span> </a>
												</li>
												 
											</ul>
										</li>



										<li class="mb-3 hover_li">
											<a href="<?php echo request()->routeIs('inventory.product_scanner') ? 'javascript:void(0)' : route('inventory.product_scanner') ?>"  class="flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group drop_col <?php echo request()->routeIs('inventory.*') ? 'text-white' : 'text-[#fff]'; ?> " aria-controls="inventery_col" data-collapse-toggle="inventery_col">
												
											<svg id="_8678754_install_fill_icon" data-name="8678754_install_fill_icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path id="Path_44" data-name="Path 44" d="M0,0H24V24H0Z" fill="none" />
    <path id="_8541773_boxes_packages_icon" data-name="8541773_boxes_packages_icon" d="M23.333,12H20v4l-1.333-.887L17.333,16V12H14a.669.669,0,0,0-.667.667v8a.669.669,0,0,0,.667.667h9.333A.669.669,0,0,0,24,20.667v-8A.669.669,0,0,0,23.333,12Zm-16-2.667h9.333a.669.669,0,0,0,.667-.667v-8A.669.669,0,0,0,16.667,0H13.333V4L12,3.112,10.667,4V0H7.333a.669.669,0,0,0-.667.667v8A.669.669,0,0,0,7.333,9.333ZM10,12H6.667v4l-1.333-.887L4,16V12H.667A.669.669,0,0,0,0,12.667v8a.669.669,0,0,0,.667.667H10a.669.669,0,0,0,.667-.667v-8A.669.669,0,0,0,10,12Z" transform="translate(0 1.333)" fill="currentColor"/>
</svg>

												<span class="flex-1 ml-3 text-left  menu-text whitespace-nowrap <?php echo $class2;?>" sidebar-toggle-item>Inventory</span>
												<svg sidebar-toggle-item class="menu-text <?php  $class2; ?>w-6 h-6 <?php echo request()->routeIs('inventory*')  ? 'rotate-180' : '0'; ?>" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
	</a>
											<ul id="inventery_col" class="<?php echo $class2;?>  {{ request()->routeIs('inventory*')  ? '' : 'hidden' }} py-2 space-y-2 ul_cust ">
												<li>
													<a href="{{route('inventory.product_scanner')}}"
														class="menu-text <?php echo $class2;?> flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group pl-9 pt-0 pb-0" style="font-size:13px;"><span class="cus_mob_li" style="<?php if(request()->routeIs('inventory.product_scanner') ) { echo "color:#d4a848;"; } ?>">Product Scanner</span>  </a>
												</li>
												<li>
													<a href="{{route('inventory.list_product')}}"
														class="menu-text <?php echo $class2;?> flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group pl-9 pt-0 pb-0" style="font-size:13px;"><span class="cus_mob_li" style="<?php if(request()->routeIs('inventory.list_product') ) { echo "color:#d4a848;"; } ?>">List Products </span> </a>
												</li>
												<li>
													<a href="{{route('inventory.add_product')}}"
														class="menu-text <?php echo $class2;?> flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group pl-9 pt-0 pb-0" style="font-size:13px;"><span class="cus_mob_li" style="<?php if(request()->routeIs('inventory.add_product') ) { echo "color:#d4a848;"; } ?>">Add Product </span> </a>
												</li>

												<li>
													<a href="{{route('inventory.list_supplier')}}"
														class="menu-text <?php echo $class2;?> flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group pl-9 pt-0 pb-0" style="font-size:13px;"><span class="cus_mob_li" style="<?php if(request()->routeIs('inventory.list_supplier') ) { echo "color:#d4a848;"; } ?>">Supplier </span> </a>
												</li>
											</ul>
										</li>


										<li class="mb-3 hover_li">
											<a href="<?php echo request()->routeIs('batch.list_batch') ? 'javascript:void(0)' : route('batch.list_batch') ?>" class="flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group drop_col <?php echo request()->routeIs('batch.*') ? 'text-white' : 'text-[#fff]'; ?> " aria-controls="batching_col" data-collapse-toggle="batching_col">
												
												<svg  fill="currentColor" id="Group_226" data-name="Group 226" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
												<path id="Rectangle_9_-_Outline" data-name="Rectangle 9 - Outline" d="M1.4-1H7A2.4,2.4,0,0,1,9.4,1.4V7A2.4,2.4,0,0,1,7,9.4H1.4A2.4,2.4,0,0,1-1,7V1.4A2.4,2.4,0,0,1,1.4-1ZM7,7.8A.8.8,0,0,0,7.8,7V1.4A.8.8,0,0,0,7,.6H1.4a.8.8,0,0,0-.8.8V7a.8.8,0,0,0,.8.8Z" transform="translate(14.6 14.6)"/>
												<path id="Rectangle_10_-_Outline" data-name="Rectangle 10 - Outline" d="M1.4-1H7A2.4,2.4,0,0,1,9.4,1.4V7A2.4,2.4,0,0,1,7,9.4H1.4A2.4,2.4,0,0,1-1,7V1.4A2.4,2.4,0,0,1,1.4-1ZM7,7.8A.8.8,0,0,0,7.8,7V1.4A.8.8,0,0,0,7,.6H1.4a.8.8,0,0,0-.8.8V7a.8.8,0,0,0,.8.8Z" transform="translate(14.6 1)"/>
												<path id="Rectangle_11_-_Outline" data-name="Rectangle 11 - Outline" d="M1.4-1H7A2.4,2.4,0,0,1,9.4,1.4V7A2.4,2.4,0,0,1,7,9.4H1.4A2.4,2.4,0,0,1-1,7V1.4A2.4,2.4,0,0,1,1.4-1ZM7,7.8A.8.8,0,0,0,7.8,7V1.4A.8.8,0,0,0,7,.6H1.4a.8.8,0,0,0-.8.8V7a.8.8,0,0,0,.8.8Z" transform="translate(1 1)"/>
												<path id="Rectangle_12_-_Outline" data-name="Rectangle 12 - Outline" d="M1.4-1H7A2.4,2.4,0,0,1,9.4,1.4V7A2.4,2.4,0,0,1,7,9.4H1.4A2.4,2.4,0,0,1-1,7V1.4A2.4,2.4,0,0,1,1.4-1ZM7,7.8A.8.8,0,0,0,7.8,7V1.4A.8.8,0,0,0,7,.6H1.4a.8.8,0,0,0-.8.8V7a.8.8,0,0,0,.8.8Z" transform="translate(1 14.6)"/>
												</svg>

												<span class="flex-1 ml-3 text-left  menu-text whitespace-nowrap <?php echo $class2;?>" sidebar-toggle-item>Batching</span>
												<svg sidebar-toggle-item class="menu-text <?php  $class2; ?>w-6 h-6 <?php echo request()->routeIs('batch*')  ? 'rotate-180' : '0'; ?>" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
	</a>
											<ul id="batching_col" class="<?php echo $class2;?> {{ request()->routeIs('batch*')  ? '' : 'hidden' }} py-2 space-y-2 ul_cust">
												<li>
													<a href="{{route('batch.list_batch')}}"
														class="menu-text <?php echo $class2;?> flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group pl-9 pt-0 pb-0" style="font-size:13px;"><span class="cus_mob_li" style="<?php if(request()->routeIs('batch.list_batch') ) { echo "color:#d4a848;"; } ?>">Batching</span></a>
												</li>
												<li>
													<a href="{{route('batch.job_without_batch_date')}}"
														class="menu-text <?php echo $class2;?> flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group pl-9 pt-0 pb-0" style="font-size:13px;"><span class="cus_mob_li" style="<?php if(request()->routeIs('batch.job_without_batch_date') ) { echo "color:#d4a848;"; } ?>">Jobs without batch date</span></a>
												</li>
											</ul>
										</li>


										<li class="mb-3 hover_li">
										 
											<ul id="reports_col" class="<?php echo $class2;?> {{ request()->routeIs('log*')  ? '' : 'hidden' }} py-2 space-y-2 ul_cust">
											 
												<li>
													<a href="{{route('log.index')}}"
														class="menu-text <?php echo $class2;?> flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group pl-9 pt-0 pb-0" style="font-size:13px;"><span class="cus_mob_li"  style="<?php if(request()->routeIs('log.index') ) { echo "color:#d4a848;"; } ?>">Action Log</span> </a>
												</li>
											</ul>
										</li>

										<!--  -->


										<li class="mb-3 hover_li" style="margin-bottom: 200px !important;">
											<a  href="<?php echo request()->routeIs('brand.index') ? 'javascript:void(0)' : route('brand.index') ?>" class="flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group drop_col <?php echo request()->routeIs('brand.*') ? ' text-white' : 'text-[#fff]'; ?> " aria-controls="setting_col" data-collapse-toggle="setting_col">
												
											<svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
											<path id="Icon_ion-gear-a" data-name="Icon ion-gear-a" d="M26.194,16.5A4.1,4.1,0,0,1,28.5,13.013a12.716,12.716,0,0,0-.987-2.388,3.864,3.864,0,0,1-3.875-1.262,3.742,3.742,0,0,1-.975-3.875A12.545,12.545,0,0,0,20.275,4.5,4.516,4.516,0,0,1,16.5,6.806,4.524,4.524,0,0,1,12.725,4.5a12.545,12.545,0,0,0-2.387.988,3.746,3.746,0,0,1-.975,3.875,3.866,3.866,0,0,1-3.869,1.262A12.173,12.173,0,0,0,4.5,13.013,4.091,4.091,0,0,1,6.813,16.5,4.531,4.531,0,0,1,4.5,20.275a12.545,12.545,0,0,0,.988,2.387,3.732,3.732,0,0,1,3.869.975,3.73,3.73,0,0,1,.975,3.875,12.716,12.716,0,0,0,2.387.987,4.524,4.524,0,0,1,3.775-2.306A4.524,4.524,0,0,1,20.269,28.5a12.545,12.545,0,0,0,2.388-.987,3.746,3.746,0,0,1,.975-3.875,3.872,3.872,0,0,1,3.875-1.263,12.89,12.89,0,0,0,.988-2.388A4.09,4.09,0,0,1,26.194,16.5ZM16.5,22.644A6.144,6.144,0,1,1,22.644,16.5,6.147,6.147,0,0,1,16.5,22.644Z" transform="translate(-4.5 -4.5)"/>
											</svg>


												<span class="flex-1 ml-3 text-left  menu-text whitespace-nowrap <?php echo $class2;?>" sidebar-toggle-item>Settings</span>
												<svg sidebar-toggle-item class="menu-text <?php  $class2; ?>w-6 h-6 <?php echo request()->routeIs('brand*')  ? 'rotate-180' : '0'; ?>" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
	</a>
											<ul id="setting_col" class="<?php echo $class2;?> {{ request()->routeIs('brand*')  ? '' : 'hidden' }} py-2 space-y-2 ul_cust">
												<li>
													<a href="{{route('brand.index')}}"
														class="menu-text <?php echo $class2;?> flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group pl-9 pt-0 pb-0" style="font-size:13px;"><span class="cus_mob_li" style="<?php if(request()->routeIs('brand.index') ) { echo "color:#d4a848;"; } ?>">Branding</span></a>
												</li>
											</ul>
										</li>
										
										<form method="POST" action="{{ route('logout') }}">
										<li  onclick="event.preventDefault(); this.closest('form').submit();" class="log_hover" style=" bottom: 0px;left: 0%;border: none;cursor: pointer;padding: 0px;text-align: justify;width: 247px;">
								
										
											<a  class="menu-item items-center group flex gap-x-3 p-2 text-sm leading-6">
											
					                            @csrf
												<svg xmlns="http://www.w3.org/2000/svg" width="23.205" height="23.2" viewBox="0 0 23.205 23.2" fill="currentColor">
												<g id="Icon_core-account-logout" data-name="Icon core-account-logout" transform="translate(-1.118 -1.125)">
												<path id="Path_28" data-name="Path 28" d="M4.079,16.277H17.351V14.73H4.079L7.706,11.1h0L6.612,10.009,1.118,15.5h0L6.612,21,7.706,19.9h0L4.079,16.277Z" transform="translate(0 -2.777)"/>
												<path id="Path_29" data-name="Path 29" d="M11.25,1.125V2.672H25.943V22.778H11.25v1.547H27.49V1.125Z" transform="translate(-3.167)"/>
												</g>
												</svg>
												<span class="menu-text cus_font <?php echo $class2;?>">Logout</span>
												
											</a>
										</li>

										</form>


									
									
						</ul>
					</nav>
				</div>
			</aside>