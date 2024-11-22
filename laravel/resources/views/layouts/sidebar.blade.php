<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="{{ route('dashboard') }}" class="brand-link">
		<img src="{{ asset('/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3">
		<span class="brand-text font-weight-light">{{ config('app.name') }}</span>
	</a>
	<div class="sidebar">
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item has-treeview {{ ((request()->segment(1) =='dashboard')) ? 'menu-open' : '' }}">
					<a href="{{ route('dashboard') }}" class="nav-link">
						<i class="nav-icon fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>				
            @if(auth()->user()->usertype_id == 3)
            <li class="nav-item">
               <a href="{{ route('stafftimetable') }}" class="nav-link">
                  <i class="nav-icon fa fa-calendar"></i>
                  <p>Staff Time Table</p>
               </a>
            </li>
            @endif
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                     Online Exam
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                           Model Exam
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{url('/store/products')}}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Exam</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                           Questions
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{url('/store/newbill')}}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Questions</p>
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </li>
			<li class="nav-item has-treeview {{ ((request()->segment(1) =='store/products') || request()->is('store/minimum') || request()->is('store/pending') || request()->is('store/approve') || request()->is('store/newbill') || request()->is('store/billdetails') || request()->is('products')) ? 'menu-open' : '' }}">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                     Store
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
			<li class="nav-item has-treeview {{ ((request()->segment(1) =='store/products') || request()->is('store/minimum') || request()->is('store/pending') || request()->is('store/approve')) ? 'menu-open' : '' }}">
					 <a href="" class="nav-link {{ (request()->is('products')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                           Products
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{url('/store/products')}}" class="nav-link {{ (request()->is('store/products')) ? 'active' : '' }}">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Products</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{url('/store/minimum')}}" class="nav-link {{ (request()->is('store/minimum')) ? 'active' : '' }}">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Purchase</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{url('/store/pending')}}" class="nav-link {{ (request()->is('store/pending')) ? 'active' : '' }}">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>pending</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{url('/store/approve')}}" class="nav-link {{ (request()->is('store/approve')) ? 'active' : '' }}">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Stock</p>
                           </a>
                        </li>
                     </ul>
                  </li>
			<li class="nav-item has-treeview {{ ((request()->segment(1) =='store/newbill') || request()->is('store/billdetails')) ? 'menu-open' : '' }}">
                     <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                           Salse
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{url('/store/newbill')}}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Billing</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{url('/store/billdetails')}}/{{ date('Y-m-d') }}/{{date('Y-m-d')}}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Bill Details</p>
                           </a>
                        </li>
                     </ul>
                  </li>
            
			
				@if(Auth::user()->usertype_id == 2)
				<li class="nav-item has-treeview {{ ((request()->segment(1) =='message')) ? 'menu-open' : '' }}">
					<a href="{{ route('message') }}" class="nav-link">
						<i class="nav-icon fas fa-bell"></i>
						<p>Send Message</p>
					</a>
				</li>
				@endif
				@if(Auth::user()->usertype_id == 2 || Auth::user()->man_admission == 1)
				<li class="nav-item has-treeview {{ ((request()->segment(1) =='year')) ? 'menu-open' : '' }}">
					<a href="{{ route('year') }}" class="nav-link">
						<i class="nav-icon fas fa-calendar-alt"></i>
						<p>Academic Year</p>
					</a>
				</li>
				@endif
				@if(Auth::user()->usertype_id == 2 || Auth::user()->man_admission == 1)
				<li class="nav-item has-treeview {{ ((request()->segment(1) =='admission')) ? 'menu-open' : '' }}">
					<a href="{{ route('admission') }}" class="nav-link">
						<i class="nav-icon fa fa-university"></i>
						<p>Admission</p>
					</a>
				</li>
				@endif
				@if(Auth::user()->usertype_id == 2 || Auth::user()->man_admission == 1)
				<li class="nav-item has-treeview {{ ((request()->segment(1) =='student')) ? 'menu-open' : '' }}">
					<a href="{{ route('student') }}" class="nav-link">
						<i class="nav-icon fa fa-graduation-cap"></i>
						<p>Students</p>
					</a>
				</li>
				@endif
				@if(Auth::user()->usertype_id == 2)
				<li class="nav-item has-treeview {{ ((request()->segment(1) =='attendance')) ? 'menu-open' : '' }}">
					<a href="{{ route('attendance') }}" class="nav-link">
						<i class="nav-icon fas fa-clock"></i>
						<p>Attendance</p>
					</a>
				</li>
				@endif
				@if(Auth::user()->usertype_id == 3 && Auth::user()->man_attendance == 1)
				<li class="nav-item has-treeview {{ ((request()->segment(1) =='attendance')) ? 'menu-open' : '' }}">
					<a href="{{ route('studentattendance') }}" class="nav-link">
						<i class="nav-icon fas fa-clock"></i>
						<p>Attendance</p>
					</a>
				</li>
				@endif

				@if(Auth::user()->usertype_id == 2 || Auth::user()->man_marks == 1)
				<li class="nav-item has-treeview {{ ((request()->segment(1) =='exammarks')) ? 'menu-open' : '' }}">
					<a href="{{ route('exammarks') }}" class="nav-link">
						<i class="nav-icon fas fa-book-open"></i>
						<p>Exam Marks</p>
					</a>
				</li>
				@endif
				@if(Auth::user()->usertype_id == 2 || Auth::user()->man_timetable == 1)
				<li class="nav-item has-treeview {{ ((request()->segment(1) =='timetable')) ? 'menu-open' : '' }}">
					<a href="{{ route('timetable') }}" class="nav-link">
						<i class="nav-icon fa fa-calendar"></i>
						<p>Manage Time Table</p>
					</a>
				</li>
				@endif
				@if(Auth::user()->man_timetable == 1)
				<li class="nav-item has-treeview {{ ((request()->segment(1) =='viewtimetable')) ? 'menu-open' : '' }}">
					<a href="{{ route('viewtimetable') }}" class="nav-link">
						<i class="nav-icon fa fa-calendar"></i>
						<p>Class Time Table</p>
					</a>
				</li>
				@endif
				@if(auth()->user()->usertype_id == 3)
				<li class="nav-item has-treeview {{ ((request()->segment(1) =='stafftimetable')) ? 'menu-open' : '' }}">
					<a href="{{ route('stafftimetable') }}" class="nav-link">
						<i class="nav-icon fa fa-calendar"></i>
						<p>My Time Table</p>
					</a>
				</li>
				@endif
				@if(Auth::user()->man_staff == 1)
				<li class="nav-item has-treeview {{ (request()->segment(1) =='staff') ? 'menu-open' : '' }}">
					<a href="{{ route('staff') }}" class="nav-link">
						<i class="nav-icon fa fa-user"></i>
						<p>Staff</p>
					</a>
				</li>
				@endif
				@if(Auth::user()->usertype_id == 2)
				<li class="nav-item has-treeview {{ ((request()->segment(1) =='year') || request()->is('class') || request()->is('subject') || request()->is('divison') || request()->is('period') || request()->is('backup')) ? 'menu-open' : '' }}">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-cog"></i>
						<p>
							Settings
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						@if(Auth::user()->usertype_id == 2)
						<li class="nav-item">
							<a href="{{ route('class') }}" class="nav-link {{ (request()->is('class')) ? 'active' : '' }}">
								<i class="far fa-circle nav-icon"></i>
								<p>Class</p>
							</a>
						</li>
						@endif
						@if(Auth::user()->usertype_id == 2)
						<li class="nav-item">
							<a href="{{ route('divison') }}" class="nav-link {{ (request()->is('divison')) ? 'active' : '' }}">
								<i class="far fa-circle nav-icon"></i>
								<p>Divison</p>
							</a>
						</li>
						@endif
						@if(Auth::user()->usertype_id == 2)
						<li class="nav-item">
							<a href="{{ route('period') }}" class="nav-link {{ (request()->is('period')) ? 'active' : '' }}">
								<i class="far fa-circle nav-icon"></i>
								<p>Period</p>
							</a>
						</li>
						@endif
						@if(Auth::user()->man_subject == 1)
						<li class="nav-item">
							<a href="{{ route('subject') }}" class="nav-link {{ (request()->is('subject')) ? 'active' : '' }}">
								<i class="far fa-circle nav-icon"></i>
								<p>Subject</p>
							</a>
						</li>
						@endif
						@if(Auth::user()->man_exam == 1)
						<li class="nav-item">
							<a href="{{ route('exam') }}" class="nav-link {{ (request()->is('exam')) ? 'active' : '' }}">
								<i class="far fa-circle nav-icon"></i>
								<p>Exam</p>
							</a>
						</li>
						@endif
                        
						@if(Auth::user()->usertype_id == 2)
						<li class="nav-item">
							<a href="{{ route('usertype') }}" class="nav-link {{ (request()->is('usertype')) ? 'active' : '' }}">
								<i class="far fa-circle nav-icon"></i>
								<p>User Type</p>
							</a>
						</li>
						@endif

						@if(Auth::user()->usertype_id == 2)
						<li class="nav-item">
							<a href="{{ route('backup') }}" class="nav-link {{ (request()->is('backup')) ? 'active' : '' }}">
								<i class="far fa-circle nav-icon"></i>
								<p>Backup</p>
							</a>
						</li>
						@endif
					</ul>
				</li>
				@endif
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-circle"></i>
						<p>
							Online Exam
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('onlineexam') }}" class="nav-link {{ (request()->is('onlineexam')) ? 'active' : '' }}">
								<i class="far fa-circle nav-icon"></i>
								<p>Exam</p>
							</a>
						</li>
					</ul>
				</li>
				@if (Auth::user()->inventory == 1 || Auth::user()->billing == 1)
				<li
				class="nav-item has-treeview {{ request()->segment(1) == 'Store' || request()->is('products') || request()->is('minimum') || request()->is('approve') || request()->is('newbill') || request()->is('billdetails') ? 'menu-open' : '' }}">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-store"></i>
					<p>
						Store
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="{{ url('/store/products') }}"
						class="nav-link {{ request()->is('products') ? 'active' : '' }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Products</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ url('/store/minimum') }}"
					class="nav-link {{ request()->is('minimum') ? 'active' : '' }}">
					<i class="far fa-circle nav-icon"></i>
					<p>Purchase</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{ url('/store/approve') }}"
				class="nav-link {{ request()->is('approve') ? 'active' : '' }}">
				<i class="far fa-circle nav-icon"></i>
				<p>Stock</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ url('/store/newbill') }}"
			class="nav-link {{ request()->is('newbill') ? 'active' : '' }}">
			<i class="far fa-circle nav-icon"></i>
			<p>Bill</p>
		</a>
	</li>
	<li class="nav-item">
		<a href="{{ url('/billdetails') }}/{{ date('Y-m-d') }}/{{ date('Y-m-d') }}"
		class="nav-link {{ request()->is('billdetails') ? 'active' : '' }}">
		<i class="far fa-circle nav-icon"></i>
		<p>Bill Details</p>
	</a>
</li>
</ul>
</li>
@endif

</ul>
</nav>
</div>
</aside>
