<div class="messenger-container {{ $type }}">
  <h1>{{ $message }}</h1>
</div>
<style>
  .messenger-container {
    border: 2px solid;
    border-radius: 12px;
    padding: 30px;
    max-width: 400px;
    margin: 60px auto;
    box-shadow: 0 2px 12px rgba(0, 128, 0, 0.08);
    text-align: center;
  }
  .messenger-container h1 {
    font-size: 2rem;
    margin-top: 0;
    letter-spacing: 2px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-shadow: 1px 1px 4px #b2f5b2;
  }
  .success {
    border-color: #38a169;
    background-color:rgb(89, 170, 111);
  }
  .error {
    border-color: #e53e3e;
    background-color: rgb(255, 99, 99);
  }
  .warning {
    border-color: #dd6b20;
    background-color: rgb(255, 204, 128);
  }
</style>