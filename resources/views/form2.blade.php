<form action="/update" method ="post">
@csrf
<input type="hidden" name="id" value="{{$data->id}}">
Name:
    <input type="text" name="name" placeholder="Enter Your name" value="{{$data->name}}">
    <br><br>
    E-mail:
    <input type="text" name="email" placeholder="Enter your email" value="{{$data->email}}">
    <br><br>
    Password:
    <input type="password" name="password" value="{{$data->password}}">
    <br><br>
    Submit:
    <input type="submit">
</form>
