<style>
    .custom-navbar {
        background-color: #333;
        padding: 10px 0;
    }
    .custom-navbar-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        gap: 20px;
    }
    .custom-navbar-link {
        color: #fff;
        text-decoration: none;
        padding: 8px 16px;
        transition: background 0.2s;
    }
    .custom-navbar-link:hover {
        background: #444;
        border-radius: 4px;
    }
</style>
<nav class="custom-navbar">
    <div class="custom-navbar-container">
        <a href="/" class="custom-navbar-link">Home</a>
        <a href="/student" class="custom-navbar-link">Add Student</a>
        <a href="/show-student" class="custom-navbar-link">Show Students</a>
        <a href="#" class="custom-navbar-link">About</a>
        <a href="#" class="custom-navbar-link">Contact</a>
    </div>
</nav>

