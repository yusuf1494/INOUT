@extends('template')

@section('title', 'Create User')

@section('head')
<link href="{{ asset('/css/create_user.css') }}" rel="stylesheet">
@endsection

@section('content')	
<form method="POST" action="" class="w3-container w3-display-topmiddle main-panel w3-leftbar w3-border-black">
	<p class="w3-light-grey">Here you can create user for people to help you manage your data and supervise your financial growth, be careful of whom you trust. Fields with (<font style="color: red;">*</font>) must be filled</p>
	<label>Name<font style="color: red;">*</font></label>
	<input type="text" name="name" class="w3-input w3-border" title="Write his name, wait.. her name. Well whatever">
	<label>Email<font style="color: red;">*</font></label>
	<input type="text" name="email" class="w3-input w3-border" title="Make sure your friend has email, it's gonna be useful later">
	<label>Password<font style="color: red;">*</font></label>
	<input type="password" name="password" class="w3-input w3-border" title="Let them choose their password">
	<label>Role<font style="color: red;">*</font></label>
	<select class="w3-input w3-border" title="Give them power, but don't too much">
		<option value="admin">Admin</option>
		<option value="supervise">Supervise</option>
		<option value="worker">Worker</option>
	</select>
	<button class="w3-btn w3-black btn-create">Create</button>
</form>
@endsection