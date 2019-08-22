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
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="bar"></span>
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <span class="bar"></span>
                    <label for="password">{{ __('Password') }}</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror


                    <button class="btn" type="submit"><span> {{ __('Login') }}</span></button>
                </div>
                <div id="link-under-button"><a href="#" id="inpt">Забыли пароль?</a></div>
            </form>
        </div>

    </div>
</div>
</body>
</html>
