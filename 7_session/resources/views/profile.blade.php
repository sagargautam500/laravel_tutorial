<div>
    <h1>Profile Page</h1>
    <p style="color: green;">{{ session('message') }}</p>
    <p style="color: red;">{{ session('error') }}</p>
    <p>This is your profile information:</p>
    @if(session('data.name'))
        <p>Name: {{ session('data.name') }}</p>
    @else
        <p>Name: Not set</p>
    @endif
    @if(session('data.email'))
        <p>Your email is: {{ session('data.email') }}</p>
    @else
        <p>Your email is: Not set</p>
    @endif

    <p>
        <a href="{{ url('logout') }}" style="color: blue; text-decoration: underline;">Logout</a>
    </p>

    <p>
        <a href="{{ url('login') }}" style="color: blue; text-decoration: underline;">Login</a>
    </p>

</div>
