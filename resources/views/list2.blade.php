<table>
    <thead style = background:gray>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action1</th>
            <th>Action2</th>
        </tr>
    </thead>
    <tbody style = background:lightgray>
        @foreach($data as $get)
        <tr>
            <td style = background:darkgray>{{$get->id}}</td>
            <td>{{$get->name}}</td>
            <td>{{$get->email}}</td>
            <td>{{$get->password}}</td>
            <td>
                <a href="{{route('data.edit',$get->id)}}">Update</a>
            </td>
            <td>
                <a href="{{route('data.delete',$get->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
