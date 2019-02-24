<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{TITLE}}</title>
    <style>
        ul {
            display: flex;
            list-style: none;
        }

        ul > li {
            margin-right: 20px;
            font-size: 2em;
        }

        ul > li > a {
            text-decoration: none;
            color: #bf00bf;
        }

        img {
            max-width: 300px;
            margin: 10px;
        }

        img:hover {
            box-shadow: #1d4b8f 10px 10px;
        }
    </style>
</head>

<body>
<header>
    <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="/gallery.php">Галерея</a></li>
    </ul>
</header>
<h1>{{H1}}</h1>
<div>{{CONTENT}}</div>

</body>
</html>