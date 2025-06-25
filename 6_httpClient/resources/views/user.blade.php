<div style='
    font-family: Arial, sans-serif;
    background-color: black;
    color: white;
    margin: 0;
    padding: 20px;'>
  <h1>User form</h1>

  <form method="POST" action='user' class="user-form">
    @csrf
    {{-- @method('PUT') --}}
    <div style='margin-bottom: 10px;'>
      <label for="id">ID:</label>
      <input type="text" id="id" name="id" required style='width: 100%; padding: 8px;'>
    </div>
    <div style='margin-bottom: 10px;'>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required style='width: 100%; padding: 8px;'>
    </div>
    
    <div style='margin-bottom: 10px;'>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required style='width: 100%; padding: 8px;'>
    </div>
    
    <button type="submit" class="submit-btn">Submit</button>
  </form>
  <style>
    .user-form label {
      display: block;
      margin-bottom: 4px;
      font-weight: bold;
    }
    .user-form input[type="text"],
    .user-form input[type="email"] {
      border: 1px solid #555;
      border-radius: 4px;
      background: #222;
      color: #fff;
      margin-bottom: 8px;
    }
    .user-form input:focus {
      outline: none;
      border-color: #4CAF50;
    }
    .submit-btn {
      padding: 10px 15px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    .submit-btn:hover {
      background-color: #388e3c;
    }
  </style>
</div>
