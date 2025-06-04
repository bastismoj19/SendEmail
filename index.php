<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <link rel="stylesheet" href="bulma.css">
    <style>
        body {
            width: 25rem;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <div class="box m-4 container ">
        <form action="send.php" method="post">
            Email <input type="email" class="input" name="email" value=""> <br>
            Subject <input type="text" class="input" name="subject" vaue=""> <br>
            Message <textarea type="text" class="input" name="message" value=""> </textarea> <br>
            <button type="submit" class="button"name="sendBtn">Send</button>
        </form>
    </div>
</body>
</html>