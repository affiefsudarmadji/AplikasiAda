@include('layouts.header')
    <!-- Page container -->
    <div class="page-container">
        <!-- Page content -->
		<div class="page-content">
            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                @include('layouts.sidebar')
            </div>
            <!-- Main sidebar -->

            <!-- Main content -->
			<div class="content-wrapper">

                <!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="wizards_steps.html">Wizards</a></li>
							<li class="active">Steps</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->

                <!-- Content area -->
                <div class="content">
                    @yield('content')
                </div>
                <!-- /Content area -->

            </div>
            <!-- /Main content -->
        </div>
        <!-- /Page content -->
	</div>
    <!-- /page container -->
@include('layouts.footer')
