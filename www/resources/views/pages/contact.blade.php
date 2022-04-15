<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
<div class="contact">
    <form action="{{ route('contactsend') }}" method="POST">
        {{ csrf_field() }}   {{--evite erreur 409--}}
        <div>
            <label for="firstname">First name:</label>
            <input type="text" id="firstname" name="firstname">
        </div>
        <div>
            <label for="lastname">Last name:</label>
            <input type="text" id="lastname" name="lastname">
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <button>Send</button>
    </form>

</div>
</body>
</html>


