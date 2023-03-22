<h1>Thong tin nguoi dung</h1>
<div class="container">
    <div class="form-group">
        <label for="name">Ten dang nhap:</label>
        <input type="text" class="form-control" name="name" value="{{ $user->name }}" disabled>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" value="{{ $user->email }}" disabled>
    </div>
    <div class="form-check">
        <label for="role">Role:</label>
        <input type="text" class="form-control" name="role" value="{{ $user->role }}" disabled>
    </div>