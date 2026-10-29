<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - GrandStay</title>

    <style>
        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f1f3f8;
            color: #222b38;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .auth-card {
            width: 100%;
            max-width: 360px;
            background: white;
            padding: 28px;
            border-radius: 3px;
            box-shadow: 0 3px 18px rgba(0, 0, 0, .04)
        }

        .brand {
            text-align: center;
            margin-bottom: 24px;
        }

        .brand h1 {
            font-size: 21px;
            margin: 0 0 5px;
            color: #1f3a5f;
        }

        .brand p {
            margin: 0;
            font-size: 11px;
            color: #777;
        }

        .field {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 12px;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #d9dee7;
            border-radius: 2px;
            font-size: 13px;
        }

        input:focus {
            outline: 1px solid #1f3a5f;
            border-color: #1f3a5f;
        }

        button {
            width: 100%;
            padding: 11px;
            border: 0;
            background: #30363d;
            color: white;
            cursor: pointer;
            font-size: 13px;
            border-radius: 2px;
        }

        button:hover {
            background: #1f3a5f;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 17px;
        }

        a {
            color: #1f5c9b;
        }

        .message {
            font-size: 12px;
            padding: 10px;
            margin-bottom: 16px;
            border-radius: 3px;
        }

        .success {
            background: #e7f5ec;
            color: #23663b;
        }

        .error {
            background: #fdebea;
            color: #a52e2e;
        }

        .message ul {
            padding-left: 18px;
            margin: 0;
        }
    </style>
</head>

<body>
    <main class="auth-card">
        @yield('content')
    </main>
    
    </body>

</html>
