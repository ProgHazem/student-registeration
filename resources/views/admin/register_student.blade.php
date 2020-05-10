<!DOCTYBE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <title>شئون الطلبة </title>
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" href="{{secure_asset('imgs/Locked.png')}}">
        <link rel="stylesheet" href="{{secure_asset('css/admin_style.css')}}">
        <style>
            .btn {
                border: none;
                background: #d9534f;
                color: white;
                margin-left: -60px;
                font-size: 40px;
                border-radius: 15px;
                text-docoration: none !important;
            }
            a:-webkit-any-link {
                text-decoration: none !important;
            }
        </style>
    </head>
    <body>
        <header class="background">
                <div class="head">
                     <img src="{{secure_asset('imgs/Attachment.png')}}">    
                     <h1>الصفحة الرسمية لشئون الطلبة </h1>
                </div>
                <form action="{{route('admin.registerStudent')}}" name="registerStudent" method="post">
                    @csrf
                    <div>
                     <input class="name" required type="text" name="name" placeholder="الأسم كاملا">
                     @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <div class="form-group">
                <label class="" for="GenderID">النوع</label>
               
                    <select class="form-label" name="gender" required ><option placeholder="--اختر--" value="">--اختر--</option>
                        <option value="Male">ذكر</option>
                        <option value="Female">انثى</option>
                    </select>
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        </div>
                        </div>
                    
                    <input class="input2" required name="email" type="email" placeholder="البريد الاليكترونى ">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input class="input2" required name="national_number" type="number" pattern="(2|3)[0-9][1-9][0-1][1-9][0-3][1-9](01|02|03|04|11|12|13|14|15|16|17|18|19|21|22|23|24|25|26|27|28|29|31|32|33|34|35|88)\d\d\d\d\d" placeholder="الرقم القومي ">
                    @error('national_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror<br>
                    <input class="input2" required name="phone_number" type="number" pattern="(01)[0|1|2|5][0-9]{8}" placeholder="الهاتف المحمول">
                    @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror<br>
                    
                    <input class="input8" required name="grade" type="number"  min="370" max="410" placeholder="المجموع الكلي ">
                    @error('grade')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror<br>
                    
                     
                    
                    <input class="input" readonly required name="password" id="password" type="text" placeholder="الرقم السري الخاص للتسجيل ">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input class="pass" type="button" onclick="randomString();" value="انشاء الرقم السري">
                    
                    <br>
                    
                    <div class="space">
                        <a href="{{route('admin.home')}}" class="btn">رجوع للصفحه الرئيسيه</a>
                        <input class="sign" type="submit" value="تسجيل ">                        
                    </div>
                </form>
        </header>
        <script language="javascript" type="text/javascript">
            function randomString() {
                var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
                var string_length = 10;
                var randomstring = '';
                for (var i=0; i<string_length; i++) {
                    var rnum = Math.floor(Math.random() * chars.length);
                    randomstring += chars.substring(rnum,rnum+1);
                }
                document.registerStudent.password.value = randomstring;
            }
        </script>
    </body>
</html>    