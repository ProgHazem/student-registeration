<!DOCTYPE html>
<html>
  <head>
    <title>تسجيل دخول</title>
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select{ 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 20px;
      color: #ddd;
      }
        p{
            
           padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 30px;
      color: #eee;  
            
        } 
      body {
      background: url({{secure_asset('img/888.jpg')}}) no-repeat center;
      background-size: cover;
      }
      h1 {
      text-transform: uppercase;
      font-weight: 400;
          font-size: 80px;
          background-color: #fefefe;
          color: black;
      }
      h2 {
      margin: 0 0 0 8px;
         font-size: 40px; 
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 35px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #eee;
          color: #000;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1> تسجيل الدخول لشؤون الطلاب</h1>
        <p>كلية الحاسبات والذكاء الاصطناعي - بنها </p>
        
      </div>
      <form action="{{route('login')}}" method="post">
      @csrf
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>تسجيل دخول</h2>
        </div>
        <div class="info">
          <input required type="email" name="email" placeholder="البريد الألكتروني">
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          <input required type="password" name="password" placeholder="الرقم السري">
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="checkbox">
          <input required type="checkbox" name="checkbox"><span> أوافق  علي الشروط والأحكام  <a >  الخاصه بكلية الحاسبات والذكاء الأصطناعي - بنها </a></span>
        </div>
        <button type="submit">دخول</button>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
      </form>
    </div>
  </body>
</html>