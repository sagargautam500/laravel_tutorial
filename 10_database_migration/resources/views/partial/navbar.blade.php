<style>
    .navbar-container {
        background-color: #333;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .navbar-logo img {
        width: 50px;
        height: 50px;
        border-radius: 50%; /* Optional: make logo round */
    }
    .navbar-links ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        gap: 20px; /* Space between links */
    }
    .navbar-links a {
        color: white;
        text-decoration: none;
        padding: 8px 15px;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }
    .navbar-links a:hover {
        background-color: #555;
    }
</style>

<div class="navbar-container">
    <div class="navbar-logo">
        <a href="/">
            <img src="" alt="Logo"> {{-- Add your logo path here --}}
        </a>
    </div>
    <nav class="navbar-links">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/students">Students</a></li>
            <li><a href="#">Contact</a></li>
            {{-- Add more links as needed --}}
        </ul>
    </nav>
</div>
