<html>
	<head>
		<title>@yield('title')</title>		
		<link href="{{ asset('/css/template.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/w3.css') }}" rel="stylesheet">
		@yield('head')
	</head>
	<body>
		<!-- Sidebar Menu -->
			<div class="w3-sidebar l3 w3-black">
				<div class="w3-bar-block w3-black">
					<a href="#" class="w3-bar-item w3-button">

					</a>
					<a href="#" class="w3-bar-item w3-button" title="Our beautiful dashboard :)">
						<p>Dashboard</p>
					</a>
					<button class="w3-bar-item w3-button" onclick="expand('accUserManagement')" title="This is where you can manage who's in charge">
						<p>User Management</p>
					</button>
					<div id="accUserManagement" class="w3-bar-block w3-hide">
						<a href="/create_user" class="w3-bar-item w3-button">Create User</a>
						<a href="#" class="w3-bar-item w3-button">View User</a>
						<a href="#" class="w3-bar-item w3-button">Edit User</a>
					</div>
					<button class="w3-bar-item w3-button" onclick="expand('accTrxManagement')" title="I hope you know what you're doing with all those outcome transactions">
						<p>Transaction</p>
					</button>
					<div id="accTrxManagement" class="w3-bar-block w3-hide">
						<a href="#" class="w3-bar-item w3-button">Income</a>
						<a href="#" class="w3-bar-item w3-button">Outcome</a>						
					</div>
					<button class="w3-bar-item w3-button" onclick="expand('accReportManagement')" title="Awesome report is awesome. Take a look, you might found something interesting">
						<p>Your Report Here</p>
					</button>
					<div id="accReportManagement" class="w3-bar-block w3-hide">
						<a href="#" class="w3-bar-item w3-button">Diagram Report</a>
						<a href="#" class="w3-bar-item w3-button">Table Report</a>						
					</div>
					<a href="#" class="w3-bar-item w3-button" title="Contact our beloved developers, let them know what you think to make INOUT more awesome!">
						<p>Contact</p>
					</a>					
				</div>
			</div>
			<div class="content-panel is-fullheight">
				@yield('content')
			</div>
			<div class="w3-container w3-display-bottommiddle footer">
				<p>INOUT©2017</p>
			</div>
		<script type="text/javascript" src="{{ URL::to('js/template.js')}}"></script>
	</body>
</html>