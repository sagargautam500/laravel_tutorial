<div style="font-family: Arial, sans-serif; max-width: 400px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 2px 2px 12px rgba(0,0,0,0.1);">

    @if(session('message'))
        <div style="text-align: center; margin-bottom: 20px;">
            <p style="color: green;">{{ session('message') }}</p>
        </div>
    @endif

    @if(session('error'))
        <div style="text-align: center; margin-bottom: 20px;">
            <p style="color: red;">{{ session('error') }}</p>
        </div>
    @endif

   <h1>Flash Form</h1>
   <form method="POST" action="/submit-flash-form" style="display: flex; flex-direction: column; gap: 15px;"> {{-- Replace with your actual route --}}
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; margin-bottom: 5px; font-weight: bold;">Name:</label>
            <input type="text" id="name" name="name" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">Email:</label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="phone" style="display: block; margin-bottom: 5px; font-weight: bold;">Phone:</label>
            <input type="text" id="phone" name="phone" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"> {{-- Phone is often not required --}}
        </div>
        <div style="margin-bottom: 15px;">
            <label for="password" style="display: block; margin-bottom: 5px; font-weight: bold;">Password:</label>
            <input type="password" id="password" name="password" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>
        <button type="submit" style="width: 100%; padding: 10px; background-color: #5cb85c; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Submit</button>
   </form>
</div>
