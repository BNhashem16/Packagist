<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1> Contact us Any Time </h1>
    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Please Enter your Name">
        <input type="email" name="email" placeholder="Please Enter your Email">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button>Submit</button>
    </form>

</body>
</html>
