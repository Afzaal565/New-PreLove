<head>
	<Style>
		@media (min-width: 992px){
.aside {
    width: 190px !important;
}
}
		</style>
</head>
<div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo py-8" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{route('vendor.home')}}" class="d-flex align-items-center">
            <img alt="Logo" src="{{asset('admin-assets/media/logos/logo-demo6.svg')}}" class="h-45px logo" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">

                <div class="menu-item py-2">
                    <a class="menu-link  menu-center" href="{{route('vendor.home')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
											<i class="bi bi-house fs-2"></i>
										</span>
                        <span class="menu-title">Home</span>
                    </a>
                </div>

                
                <div class="menu-item py-2">
                    <a class="menu-link  menu-center" href="{{url('vendor/order_list')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
                                        <i class="fas fa-hand-holding-usd"></i>
										</span>
                                        <span class="menu-title">Orders</span>
                                    </a>
                               </div>

                


                <div class="menu-item py-2">
                    <a class="menu-link  menu-center" href="{{url('vendor/product_list')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
                                        <i class="bi bi-cart"></i>
										</span>
                                        <span class="menu-title">Products</span>
                                    </a>
                               </div>



                <div class="menu-item py-2">
                    <a class="menu-link  menu-center" href="{{url('vendor/affilateproduct_list')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
                                        <i class="bi bi-cart-plus"></i>

										</span>
                        <span class="menu-title">Affiliate Products</span>
                    </a>
                </div>

               

                <div class="menu-item py-2">
                    <a class="menu-link  menu-center" href="{{url('vendor/withdraw_list')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
                                        <i class="bi bi-wallet"></i>
										</span>
                        <span class="menu-title">Withdraw</span>
                    </a>
                </div>

				
                <div class="menu-item py-2">
                    <a class="menu-link  menu-center" href="{{url('vendor/subscriptionplan_list')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
                                        <i class="fas fa-users-cog mr-2"></i>
										</span>
                        <span class="menu-title">Subscription Plan</span>
                    </a>
                </div>


   

                <!-- <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
					<span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
						<span class="menu-icon me-0">
							<i class="fas fa-cogs"></i>
							</span>
						<span class="menu-title">Setting</span>
					</span>
					<div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
						<div class="menu-item">
							<div class="menu-content">
								<span class="menu-section fs-5 fw-bolder ps-1 py-1">Setting</span>
							</div>
						</div>
						<div class="menu-item">
							<a class="menu-link" href="{{url('vendor/setting_service_list')}}">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title"> Service</span>
							</a>
						</div>
						<div class="menu-item">
							<a class="menu-link" href="{{url('vendor/setting_banner_list')}}">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Banner</span>
							</a>
						</div>

						<div class="menu-item">
							<a class="menu-link" href="{{url('vendor/setting_shipping_list')}}">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Shipping</span>
							</a>
						</div>

						<div class="menu-item">
							<a class="menu-link" href="{{url('vendor/setting_packgings_list')}}">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Packagings</span>
							</a>
						</div>

						<div class="menu-item">
							<a class="menu-link" href="{{url('vendor/setting_socialmedia_list')}}">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Social Media</span>
							</a>
						</div>
						
					</div>
				</div> -->

                        

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto" id="kt_aside_footer">
        <!--begin::Menu-->
{{--        <div class="d-flex justify-content-center">--}}
{{--            <button type="button" class="btn btm-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Quick actions">--}}
{{--                <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->--}}
{{--                <span class="svg-icon svg-icon-1">--}}
{{--									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--										<path d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="black" />--}}
{{--										<path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="black" />--}}
{{--										<path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="black" />--}}
{{--										<path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="black" />--}}
{{--									</svg>--}}
{{--								</span>--}}
{{--                <!--end::Svg Icon-->--}}
{{--            </button>--}}
{{--            <!--begin::Menu 2-->--}}
{{--            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">--}}
{{--                <!--begin::Menu item-->--}}
{{--                <div class="menu-item px-3">--}}
{{--                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>--}}
{{--                </div>--}}
{{--                <!--end::Menu item-->--}}
{{--                <!--begin::Menu separator-->--}}
{{--                <div class="separator mb-3 opacity-75"></div>--}}
{{--                <!--end::Menu separator-->--}}
{{--                <!--begin::Menu item-->--}}
{{--                <div class="menu-item px-3">--}}
{{--                    <a href="#" class="menu-link px-3">New Ticket</a>--}}
{{--                </div>--}}
{{--                <!--end::Menu item-->--}}
{{--                <!--begin::Menu item-->--}}
{{--                <div class="menu-item px-3">--}}
{{--                    <a href="#" class="menu-link px-3">New Customer</a>--}}
{{--                </div>--}}
{{--                <!--end::Menu item-->--}}
{{--                <!--begin::Menu item-->--}}
{{--                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">--}}
{{--                    <!--begin::Menu item-->--}}
{{--                    <a href="#" class="menu-link px-3">--}}
{{--                        <span class="menu-title">New Group</span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <!--end::Menu item-->--}}
{{--                    <!--begin::Menu sub-->--}}
{{--                    <div class="menu-sub menu-sub-dropdown w-175px py-4">--}}
{{--                        <!--begin::Menu item-->--}}
{{--                        <div class="menu-item px-3">--}}
{{--                            <a href="#" class="menu-link px-3">Admin Group</a>--}}
{{--                        </div>--}}
{{--                        <!--end::Menu item-->--}}
{{--                        <!--begin::Menu item-->--}}
{{--                        <div class="menu-item px-3">--}}
{{--                            <a href="#" class="menu-link px-3">Staff Group</a>--}}
{{--                        </div>--}}
{{--                        <!--end::Menu item-->--}}
{{--                        <!--begin::Menu item-->--}}
{{--                        <div class="menu-item px-3">--}}
{{--                            <a href="#" class="menu-link px-3">Member Group</a>--}}
{{--                        </div>--}}
{{--                        <!--end::Menu item-->--}}
{{--                    </div>--}}
{{--                    <!--end::Menu sub-->--}}
{{--                </div>--}}
{{--                <!--end::Menu item-->--}}
{{--                <!--begin::Menu item-->--}}
{{--                <div class="menu-item px-3">--}}
{{--                    <a href="#" class="menu-link px-3">New Contact</a>--}}
{{--                </div>--}}
{{--                <!--end::Menu item-->--}}
{{--                <!--begin::Menu separator-->--}}
{{--                <div class="separator mt-3 opacity-75"></div>--}}
{{--                <!--end::Menu separator-->--}}
{{--                <!--begin::Menu item-->--}}
{{--                <div class="menu-item px-3">--}}
{{--                    <div class="menu-content px-3 py-3">--}}
{{--                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--end::Menu item-->--}}
{{--            </div>--}}
{{--            <!--end::Menu 2-->--}}
{{--        </div>--}}
        <!--end::Menu-->
    </div>
    <!--end::Footer-->
</div>
