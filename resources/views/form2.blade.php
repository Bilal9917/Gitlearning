<form action="/register" method ="post">
@csrf
Name:
    <input type="text" name="name" placeholder="Enter Your name">
    <br><br>
    E-mail:
    <input type="text" name="email" placeholder="Enter your email">
    <br><br>
    Password:
    <input type="password" name="password">
    <br><br>
    Submit:
    <input type="submit">
</form>
