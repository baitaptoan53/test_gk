<table class="table table-hover">
                   <a href="{{route('users.create')}}">Them Moi</a>
                   <thead>
                                      <tr>
                                                         <th>ID</th>
                                                         <th>Tên đăng nhập</th>
                                                         <th>Email</th>
                                                         <th>Vai trò</th>
                                                         <th></th>
                                                         <th></th>
                                      </tr>
                   </thead>
                   <tbody>
                                      @foreach ($users as $user)
                                      <tr>
                                                         <td>{{ $user->id }}</td>
                                                         <td>{{ $user->username }}</td>
                                                         <td>{{ $user->email }}</td>
                                                         <td>{{ $user->role }}</td>
                                                         <td><a href="{{ route('users.edit', $user->id) }}"
                                                                                               class="btn btn-primary">Sửa</a>
                                                         </td>
                                                         <td><a href="{{ route('users.show', $user->id) }}"
                                                                                               class="btn btn-primary">Xem</a>
                                                         </td>
                                                         <td>
                                                                            <form method="POST"
                                                                                               action="{{ route('users.destroy', $user->id) }}">
                                                                                               @csrf
                                                                                               @method('DELETE')
                                                                                               <button type="submit"
                                                                                                                  class="btn btn-danger"
                                                                                                                  onclick="return confirm('Bạn có chắc muốn xóa người dùng này?')">Xóa</button>
                                                                            </form>
                                                         </td>
                                      </tr>
                                      @endforeach
                   </tbody>
</table>