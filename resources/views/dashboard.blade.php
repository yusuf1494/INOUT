@extends('template')

@section('title', 'Dashboard')

@section('head')
	<link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div class="w3-container w3-leftbar w3-display-middle w3-border-black">
		<h1>WELCOME TO INOUT DASHBOARD</h1>	
		<p>INOUT helps you to manage your accountant problems. INOUT realizes that you need report for every year, every month, or event every week. INOUT can help you to make decisions by showing you diagram. Making decisions was never this easy. Let's Start!</p>
	</div>
	
@endsection	