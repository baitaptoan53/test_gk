<form action="{{route('register')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Tên đăng nhập:</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <label for="password">Mật khẩu:</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Nhập lại mật khẩu:</label>
        <input type="password" class="form-control" name="password_confirmation">
    </div>
    <button type="submit" class="btn btn-primary">Đăng ký</button>
</form>
