<table>
    <thead style = background:gray>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody style = background:lightgray>
    @foreach($data as $datas)
       <tr>
           <td style = background:darkgray>{{$datas->id}}</td>
           <td>{{$datas->name}}</td>
           <td>{{$datas->email}}</td>
           <td>{{$datas->city}}</td>
           <td>
            <a href="{{route('data.delete',$datas->id)}}">Delete</a>
            <a href="{{route('data.edit',$datas->id)}}">Edit</a>
           </td>
        </tr>
        @endforeach
    </tbody>
</table>
