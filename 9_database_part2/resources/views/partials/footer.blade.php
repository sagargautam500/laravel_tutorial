<style>
    .custom-footer {
        background-color: #222;
        color: #fff;
        padding: 32px 0 16px 0;
        text-align: center;
        margin-top: 40px;
    }
    .footer-links {
        margin-bottom: 16px;
    }
    .footer-links a {
        color: #5bc0de;
        margin: 0 10px;
        text-decoration: none;
        font-size: 18px;
        transition: color 0.2s;
    }
    .footer-links a:hover {
        color: #fff;
        text-decoration: underline;
    }
    .footer-social {
        margin-bottom: 16px;
    }
    .footer-social a {
        display: inline-block;
        margin: 0 8px;
        color: #fff;
        font-size: 22px;
        transition: color 0.2s;
    }
    .footer-social a:hover {
        color: #5bc0de;
    }
    .footer-features {
        margin-bottom: 16px;
        color: #bbb;
        font-size: 15px;
    }
    .footer-copyright {
        font-size: 14px;
        color: #888;
    }
</style>
<footer class="custom-footer">
    <div class="footer-links">
        <a href="/">Home</a>
        <a href="/addStudent">Add Student</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </div>
    <div class="footer-social">
        <a href="https://facebook.com" target="_blank" title="Facebook">&#x1F426;</a>
        <a href="https://twitter.com" target="_blank" title="Twitter">&#x1F426;</a>
        <a href="https://instagram.com" target="_blank" title="Instagram">&#x1F33A;</a>
        <a href="mailto:info@example.com" title="Email">&#x2709;&#xFE0F;</a>
    </div>
    <div class="footer-features">
        Features: Student Management, Secure Login, Responsive Design, Easy Navigation
    </div>
    <div class="footer-copyright">
        &copy; {{ date('Y') }} My Laravel App. All rights reserved.
    </div>
</footer>

