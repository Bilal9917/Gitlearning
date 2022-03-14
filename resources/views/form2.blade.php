<form action="/update" method="post">
@csrf
<input type="hidden" name="id"  value="{{$data->id}}">
Name:
<input type="name" name="name" paceholder="Entre Name" value="{{$data->name}}">
<br><br>
E-mail:
<input type="text   " name="email" placeholdre="Enter Emila" value="{{$data->email}}">
<br><br>
Password:
<input type="password" name="password" value="{{$data->password}}">
<br><br>
<input type="Submit">
</form>
