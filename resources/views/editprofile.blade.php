<link href="{{ asset('css/stylee.css') }}" rel="stylesheet"> <!-- Menghubungkan CSS -->
<div class="container">
    <div class="title">Edit Profil</div>
    
    @if (session('error'))
        <div class="alert">{{ session('error') }}</div>
    @endif

    <form action="{{ url('edit-profile') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>

        <div class="buttons">
            <button type="submit" class="save">Save Changes</button>
            <a href="{{ url('profile') }}" class="cancel-button">Cancel</a>
        </div>
    </form>
</div>