<!DOCTYPE html>
<html>
  <head>
    <title>التسجيل في الاقسام الخاصة</title>
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
          width: 1300px;
          margin-left: 35px;
          
      }
        
        
      body, div, form, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 25px;
      color: #eee;
      line-height: 35px;
          
          
          
      }
        
        select{
             padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 25px;
      color: #000;
      line-height: 35px;
            
            
        }
        p{
            font-size: 30px;
            padding: 5px;
            height: 50px;
            background-color: #155d74;
            
        }
        input{
            
         padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 25px;
      color: #000;
      line-height: 35px;   
            
            
        }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 90px;
          padding: 10px;
      color: #155d74;
          margin-top: 30px;
          background-color:  #fefefe;
          width: 750px;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      justify-content: center;
      align-items: center;
      height: inherit;
      }
      form {
      width: 100%;
          
      padding: 20px;
      border-radius: 6px;
     background-image: url("{{secure_asset('imgs/155.jpg')}}"); 
     background-size: cover;
      box-shadow: 5px 5px 28px #155d74; 
      }
        
      .banner {
      position: relative;
      height: 450px;
      background-image: url("{{secure_asset('imgs/995.jpg')}}");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
        
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.3); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      color: #000;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #000;
          
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #000;
      color: #000;
          font-size: 35px;
      }
        .item select{
            
            width: 550px;
            
        }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 40px;
      color:  #000;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
       input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #000;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #000;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 350px;
          height: 60px;
      padding: 2px;
      border: none;
      border-radius: 5px; 
      background:  #155d74;
      font-size: 50px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #ddd;
          color: #000;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="{{route('student.complete')}}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="banner">
          <h1>التسجيل الألكتروني</h1>
        </div>
        <br/>
        <p>برجاء الحرص علي ملئ جميع البيانات بالطريقه الصحيحة</p>
        <br/>
        <div class="colums">
          <div class="item">
            <label for="name">الأسم بالكامل<span>*</span></label>
            <input id="name" type="text" name="name" value="{{auth()->user()->name}}" readonly required/>
            @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="item">
            <label for="email">البريد الألكتروني<span>*</span></label>
            <input id="email" type="email" name="email" value="{{auth()->user()->email}}" readonly required/>
            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="item">
            <label for="phone">الهاتف المحمول<span>*</span></label>
            <input id="phone" type="number" pattern="(01)[0|1|2|5][0-9]{8}" name="phone" value="{{auth()->user()->phone}}" readonly required/>
            @error('phone')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="item">
            <label for="address">العنوان بالتفصيل<span>*</span></label>
            <input id="address" type="text" value="{{auth()->user()->address}}"  name="address" required/>
            @error('address')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
            
          <div class="item">
            <label for="national_number">الرقم القومي<span>*</span></label>
            <input id="number" type="number" pattern="(2|3)[0-9][1-9][0-1][1-9][0-3][1-9](01|02|03|04|11|12|13|14|15|16|17|18|19|21|22|23|24|25|26|27|28|29|31|32|33|34|35|88)\d\d\d\d\d" name="national_number" value="{{auth()->user()->national_number}}" readonly required/>
            @error('national_number')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
           <div class="item">
            <label for="grade">المجموع الكلي <span>*</span></label>
            <input id="grade" required readonly name="grade" type="number" value="{{auth()->user()->grade}}"  min="370" max="410"/>
            @error('grade')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
           <div class="item1" >
            <label for="birthdate">تاريخ الميلاد <span>*</span></label>
            <input id="birthdate" type="date" value="{{auth()->user()->birthdate}}" name="birthdate" required/>
            @error('birthdate')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
         
        <div class="question">
          <label>النوع</label>
          <div class="question-answer">
            <div>
              <input type="radio" value="Male" <?php if(auth()->user()->gender == 'Male') { echo 'checked'; } ?> id="radio_1" name="gender"/>
              <label for="radio_1" class="radio"><span>ذكر</span></label>
            </div>
            <div>
              <input  type="radio" value="Female" <?php if(auth()->user()->gender == 'Female') { echo 'checked'; } ?> id="radio_2" name="gender"/>
              <label for="radio_2" class="radio" ><span>أنثي</span></label>
            </div>
            @error('gender')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
           
        
  <div class="input-group-prepend"  >
    <span class="input-group-text" style=" background-color:#155d74;padding: 10px;  font-size: 35px; width: 450px; color: #eee; margin-top: 50px;"  id="inputGroupFileAddon01">شهادة اتمام الدراسة الثانوية العامة</span>
  
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" name='certification' aria-describedby="inputGroupFileAddon01" style="width: 350px; margin-top: 20px; " >
    <label class="custom-file-label" for="inputGroupFile01"></label>
    @error('certification')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
      </div>
      </div>
      <div>
          <p  >القسم الخاص </p>
          <select required name="department_id" style="width: 500px; height: 50px; font-size: 30px;" >
            @foreach($departments as $department)
                <option <?php if(auth()->user()->department_id == $department->id) { echo 'selected'; } ?> value="{{$department->id}}">{{$department->name}}</option>
            @endforeach
          </select>
          @error('department_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        
       
             <div class="item">
            <label for="password_confirmation"><span>*</span> تأكيد الرقم السري </label>
            <input id="password_confirmation" type="password"   name="password_confirmation" required/>
          </div>
          <div class="item">
            <label for="password">الرقم السري الخاص بكلية الحاسبات<span>*</span></label>
            <input id="password" type="password"   name="password" required/>
            @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        
        <div class="item">
          <label for="notes">اقتراحات خاصة</label>
          <textarea id="notes" name="notes" required rows="3">{{auth()->user()->notes}}</textarea>
          @error('notes')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="checkbox">
          <input type="checkbox" checked required name="checkbox"><span> أوافق  علي الشروط والأحكام الخاصه بكلية الحاسبات والذكاء الأصطناعي - بنها</span>
        </div>
        <div class="btn-block">
          <button type="submit">تسجيل</button>
        </div>
      </form>
    </div>
  </body>
</html>