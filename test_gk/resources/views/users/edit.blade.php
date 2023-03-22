<div class="container">
                   <h1>Sửa thông tin người dùng</h1>

                   <form method="POST" action="{{ route('users.update', $user->id) }}">
                                      @csrf
                                      @method('PUT')
                                      <div class="form-group">
                                                         <label for="name">Tên đăng nhập:</label>
                                                         <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                      </div>
                                      <div class="form-group">
                                                         <label for="email">Email:</label>
                                                         <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                      </div>
                                      <div class="form-check">
                                                         <label for="role">Loại người dùng</label>
                                                         <select name="role">
                                                                            <option value="user">Users</option>
                                                                            <option value="admin">Admin</option>
                                                         </select>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Lưu</button>
                   </form>
</div>