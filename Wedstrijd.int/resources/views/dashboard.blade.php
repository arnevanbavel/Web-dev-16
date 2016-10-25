@extends('layouts.app')

@section('content')
 
		<div class="container">
        <div class="dashboard">
            <div class="row">
            	<div class="col-md-12">
            		<div class="table-responsive">          
					  <table class="table">
					    <thead>
					      <tr>
					        <th>Naam</th>
					        <th>Email</th>
					        <th>Stad</th>
					        <th>Ip adres</th>
					        <th>Status</th>
					        <th>Code aantal</th>
					      </tr>
					    </thead>
					    <tbody>
					    @foreach($users as $user)

					    @if($user->deleted_at != NULL)
					      <tr class="danger">
					    @else
					      <tr>
					    @endif
					        	<td>{{$user->name}}</td>
					        	<td>{{$user->email}}</td>
					        	<td>{{$user->city}}</td>
					        	<td>{{$user->ipAddress}}</td>
					        	@if($user->deleted_at != NULL)
							      <td><a href="{{ url('/dashboard/restore/' .$user->id) }}">Kwalificeren</a></td>
							    @else
							      <td><a href="{{ url('/dashboard/delete/' .$user->id) }}">Diskwalificeren</a></td>
							    @endif
					        	<td>aantal codes</td>
					      </tr>
					    @endforeach
					    </tbody>
					  </table>
					  </div>
            	</div>
            </div>
        </div>
       </div>
@endsection