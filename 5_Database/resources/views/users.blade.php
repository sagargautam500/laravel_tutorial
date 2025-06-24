<div>
    <p>Users are here</p>
    <p>Total Users: {{ count($users) }}</p>
    
    <p>Here are the users:</p>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
            <li>Phone: {{ $user->phone }}</li>
            <hr>
        @endforeach
    </ul>
</div>
