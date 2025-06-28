<style>
    .custom-footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 20px 0;
        margin-top: 40px; /* Add some space above the footer */
        width: 100%;
    }
    .custom-footer p {
        margin: 5px 0;
        font-size: 14px;
    }
</style>

<div class="custom-footer">
    <footer>
        <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        <p>Powered by Laravel</p>
    </footer>
</div>
