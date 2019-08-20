<html>
<head>
    <title>Сервисная служба АЛГ</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body>
<div id="display">
    <div id="authorization-window">
        <div id="logo"><img src="{{asset("img/logo.png")}}" width="100" height="100"></div>
        <div id="label">Авторизация в системе</div>
        <div id="form">
            <form>
                <div class="group">
                    <input type="text" required>
                    <span class="bar"></span>
                    <label>Логин</label>
                </div>
                <div class="group">
                    <input type="text" required>
                    <span class="bar"></span>
                    <label>Пароль</label>
                    <button class="btn" type="button"><span>ВОЙТИ В СИСТЕМУ</span></button>
                </div>
                <div id="link-under-button"><a href="#" id="inpt">Забыли пароль?</a></div>
            </form>
        </div>

    </div>
</div>
</body>
</html>
