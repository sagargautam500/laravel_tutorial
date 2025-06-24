<h1>User page</h1>
<h2>Person Name :{{$name}}</h2>

<x-messenger message="User not found" type="error" />

@if($name=='sagar')
  <h3>this is Sagar</h3>
@else
  <h3>Other user</h3>
@endif

@foreach($users as $user)
  <h3>{{$user}}</h3>
@endforeach



<div>
  @for($i=0;$i<count($users);$i++)
  <h5>{{$users[$i]}}</h5>
  @endfor
</div>
  
    