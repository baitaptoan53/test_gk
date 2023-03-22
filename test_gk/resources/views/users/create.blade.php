
<div class="container">
                   <h1>Thêm người dùng mới</h1>

                   <form method="POST" action="{{ route('users.store') }}">
                                      @csrf
                                      <div class="form-group">
                                                         <label for="name">Tên đăng nhập:</label>
                                                         <input type="text" class="form-control" name="name"
                                                                            required>
                                      </div>
                                      <div class="form-group">
                                                         <label for="email">Email:</label>
                                                         <input type="email" class="form-control" name="email" required>
                                      </div>
                                      <div class="form-group">
                                                         <label for="password">Mật khẩu:</label>
                                                         <input type="password" class="form-control" name="password"
                                                                            required>
                                      </div>
                                      <div class="form-check">
                                                         <label for="role">Loại người dùng</label>
                                                         <select name="role" >
                                                                            <option value="user">Users</option>
                                                                            <option value="admin">Admin</option>
                                                         </select>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Lưu</button>
                   </form>
</div>
