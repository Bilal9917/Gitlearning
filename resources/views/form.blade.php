<form action="/update" method="post">
@csrf
<input type="hidden" name="id" value="{{$data->id}}">
Name:
<input type="text" name="name" paceholder="Entre Name" value="{{$data->name}}">
<br><br>
E-mail:
<input type="text   " name="email" placeholdre="Enter Emila" value="{{$data->email}}">
<br><br>
City:
<input type="text" name="city" value="{{$data->city}}">
<br><br>
<input type="Submit">
</form>
