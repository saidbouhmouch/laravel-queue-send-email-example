<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Laravel Queues Tutorial With Example</title>
</head>
<body>
    <div class="container">
        <form id="contact" action="{{url('email')}}" method="POST">
            @csrf
            <h4>Contact us</h4>
                @if(session('message'))
                    <div class="alert alert-success">
                       <p>{{ session('message') }}</p> 
                    </div>
                @endif
            <fieldset>
                <input name="name" placeholder="Your name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <textarea name="msg" placeholder="Type your message here...." tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>
</body>
</html>