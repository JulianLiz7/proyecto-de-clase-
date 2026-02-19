<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background:#f4f6f9;
        }

        .navbar{
            background:#111827;
            color:white;
            padding:15px 40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .navbar a{
            color:white;
            text-decoration:none;
            margin-left:20px;
            font-weight:bold;
        }

        .navbar a:hover{
            color:#38bdf8;
        }

        .container{
            padding:40px;
            min-height:80vh;
        }

        .footer{
            background:#111827;
            color:white;
            text-align:center;
            padding:20px;
        }

        .grid{
            display:grid;
            grid-template-columns:repeat(auto-fill,minmax(250px,1fr));
            gap:20px;
        }

        .card{
            background:white;
            border-radius:12px;
            box-shadow:0 4px 12px rgba(0,0,0,0.1);
            padding:15px;
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card img{
            width:100%;
            height:200px;
            object-fit:cover;
            border-radius:8px;
        }

        .btn{
            display:inline-block;
            padding:8px 15px;
            background:#38bdf8;
            color:white;
            text-decoration:none;
            border-radius:6px;
            margin-top:10px;
            border:none;
            cursor:pointer;
        }

        .btn:hover{
            background:#0284c7;
        }

        input, textarea, select{
            width:100%;
            padding:10px;
            margin-bottom:15px;
            border-radius:6px;
            border:1px solid #ccc;
        }

        label{
            font-weight:bold;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div><strong>MiniMarket</strong></div>
        <div>
            <a href="{{ url('/product') }}">Inicio</a>
            <a href="{{ url('/product/create') }}">Vender</a>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        © 2026 MiniMarket - Plataforma de ventas
    </div>

</body>
</html>
