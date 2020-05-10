<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student Registration</title>

  <!-- css -->
  <link rel="stylesheet" href="{{secure_asset('css/bootstrap.min.css')}}">
  <link href="{{secure_asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{secure_asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{secure_asset('css/nivo-lightbox.css')}}" rel="stylesheet" />
  <link href="{{secure_asset('css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{secure_asset('css/animations.css')}}" rel="stylesheet" />
  <link href="{{secure_asset('css/style.css')}}" rel="stylesheet">
  <!-- <link href="{{secure_asset('css/stylish-portfolio.min.css')}}" rel="stylesheet"> -->
  <link href="{{secure_asset('color/default.css')}}" rel="stylesheet"> 
</head>
    

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
       
  <script src="{{secure_asset('js/jquery.min.js')}}"></script>
  <script src="{{secure_asset('js/bootstrap.min.js')}}"></script>
  <script src="{{secure_asset('js/jquery.sticky.js')}}"></script>
  <script src="{{secure_asset('js/jquery.easing.min.js')}}"></script>
  <script src="{{secure_asset('js/jquery.scrollTo.js')}}"></script>
  <script src="{{secure_asset('js/jquery.appear.js')}}"></script>
  <script src="{{secure_asset('js/stellar.js')}}"></script>
  <script src="{{secure_asset('js/nivo-lightbox.min.js')}}"></script>

  <script src="{{secure_asset('js/custom.js')}}"></script>
  <script src="{{secure_asset('js/css3-animate-it.js')}}"></script>
  <script src="{{secure_asset('contactform/contactform.js')}}"></script>

       

  <section class="hero" id="intro">
    <div class="container">
     
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center inner">
          <div class="animatedParent">
             <!-- <img class="img" src="{{secure_asset('img/0101.png')}}" alt="">-->
            <h1 class="animated fadeInDown"> البوابه الألكترونية للتسجيل الألكتروني </h1>
            <p class="animated fadeInUp">لطلاب الأقسام الخاصة</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <a href="#about" class="learn-more-btn btn-scroll">كليه الحاسبات والذكاء الاصطناعي - بنها</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Navigation -->
  <div id="navigation">
       
    <nav class="navbar navbar-custom" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="site-logo">
                
              <h2><span>Student </span>Registration</h2>
              
            </div>
          </div>

            <!-- Collect the nav links -->
            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#intro">الصفحة الرئيسية</a></li>
                <li><a href="#about">الوصف</a></li>
                <li><a href="#blog">مراحل التسجيل</a></li>
                <li><a href="#programes">البرامج الخاصة</a></li>
                <li><a href="#works">التسجيل الألكتروني</a></li>
                <li><a href="#contact">تواصل معنا</a></li>
                  
                  
              <!-- هاااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااام  -->    
                  @guest
                  @else 
                  <a style="width: 150px;margin-right: 0px;height: 50px;margin-left: 10px;font-size: 20px;padding: 10px;" class="btn btn-danger " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        تسجيل خروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  @endguest
                   <!--       هنااا عشااان الطالب يعرف نتيجته هيعمل تسجيل دخول وهترجعله صفحه ببياناته اللي هو مسجلهاا عندنااا وانه اتقبل ولا اترفض وموعد تقديم الأوراق  والمصااريف -->  
              </ul>
            </div>
          </div>
        </div>
    </nav>
  </div>
  

  <!--****************************** Section:الوصف ***************************************-->
  <section id="about" class="home-section color-dark bg-white">
    <div class="container marginbot-50">
      <div class="row">
                  <div class="animatedParent">
            <div class="section-heading text-center animated bounceInDown">
              <h2 class="h-bold">نبذة عن البوابة</h2>
              <div class="divider-header"></div>
            </div>
          </div>
        </div>
      </div>

    

    <div class="container">


      <div class="row">


        <div class="col-lg-8 col-lg-offset-2 animatedParent">
          <div class="text-center">
            <p1>
             الوصف
            </p1>
            <p >
             هنا  <span class="span" style="font-size: 30px;color: #155d74;">البوابه الالكترونيه </span> تماشيآ مع اهداف الكليه في اطار التُحول الرقمي بتطبيق تكنولوجيا المعلومات والاتصالات علي الاجراءات الحكوميه في التقديم للكليه بهدف زيادة مستويات الفاعليه والكفاءه في انجاز المهام , بالأضافه الي تحسين وتسريع العمليات والاجراءات وزيادة جودة الخدمات العامه , مما يؤدي الي تطوير عمليات صنع القرار واتاحة الفرص.
التزاما بالقواعد القانونيه الحاكمه والمنظمه لتقديم الطلاب في الكليه , تم اطلاق مشروع البوابه الالكترونيه لتسجيل طلاب الاقسام الخاصه بكليه الحاسبات و الذكاء الاصطناعي بجامعة بنها لكي يتم الاختيار الامثل للطلاب والاطلاع علي النتاىج النهائيه لمن وقع عليهم الاختيار ضمن هذه المنظومه  
            
            </p>
            <a style="background-color: black;width: 150px;
                      font-size: 25px;opacity: .9;" href="#blog" class="btn btn-skin btn-scroll">التالي</a>
          </div>
        </div>


      </div>
    </div>

  </section>
  <!--******************* /Section: مراحل التسجيل *******************************-->
   
    <article class="tabs-content" id="blog">
        <div class="container">
            
                    <div class="col-md-4">
                        <div class="section-heading">
                            <h4>مراحل التسجيل </h4>
                            <div class="line-dec"></div>
                            <p>يجب اتباع كافة الخطوات من اجل اتمام عمليه التسجيل </p>
                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                                <li><a href="#programes" class="active">المزيد عن البرامج </a></li>
                                <li><a href="#works">المزيد من التفاصيل</a></li>
                                
                             <!--   هااااااااااااااااااااااااااااااااااااااام -->         
                                
                                
                                
                                @guest
                                <li><a href="{{route('student.formLogin')}}" style="width: 350px;background-color: #1D809F;color: #eee; margin-right:-70px;; height: 65px;   font-size: 40px;  padding: 5px; " class="btn btn-primary "target="_blank">تسجيل الدخول  </a></li>
                                @endguest
                              <!--       هنااا عشااان الطالب يعرف نتيجته هيعمل تسجيل دخول وهترجعله صفحه ببياناته اللي هو مسجلهاا عندنااا وانه اتقبل ولا اترفض وموعد تقديم الأوراق  والمصااريف -->  
                                
                                
                                
                               
                            </ul>
                        </div>
                    </div>
                   
                        <section id="first-tab-group" class="tabgroup">
                            <div id="tab1">
                                <img src="{{secure_asset('img/v1.jpg')}}" alt="">
                                <div class="text-content">
                                    <h4>المرحلة الاولي </h4>
                    
                                    <p> التعرف علي الأقسام الخاصة المتاحة ...وأختيار القسم المراد التسجيل به</p>
                                </div>
                            </div>
                            <div id="tab2">
                                <img src="{{secure_asset('img/d9.jpg')}}" style="width: 650px; height: 250px; " alt="">
                                <div class="text-content">
                                    <h4>المرحلة الثانية</h4>
                                     <ol>
                       ا- دفع رسوم طلب تسجيل دخول والحصول علي الرقم السري
                    </ol><ol>
                    اا- التسجيل الألكتروني عبر البوابه الرئيسية
                    </ol>
                                </div>
                            </div>
                            <div id="tab3">
                                <img src="{{secure_asset('img/s3.jpg')}}"style="width: 650px; height: 250px;" alt="">
                                <div class="text-content">
                                    <h4>المرحلة الأخيرة</h4>
                                   <p>
                 أعلان النتائج عبر البوابه الألكترونية للتسجيل الألكتروني لطلاب الأقسام الخاصة   
                  </p>
                 
                                </div>
                            </div>
                          
                          
                        </section>
                    </div>
                </article>
            
        
   
     <!--**************************** /Section: البرامج الخاصة ************************************-->
             <div class="prog" id="programes">
            <h1>البرامج الخاصة</h1>
    </div>
    <section id="about01" class="home-section color-dark bg-white">
    <div class="container marginbot-50">
      <div class="row">
                  <div class="animatedParent">
            <div class="section-heading text-center animated bounceInDown">
              <h2 class="h-bold">نبذة عن البرامج</h2>
              <div class="divider-header"></div>
            </div>
          </div>
        </div>
      </div>

    

    <div class="container">


      <div class="row">


        <div class="col-lg-8 col-lg-offset-2 animatedParent">
          <div class="text-center">
            
            <p >
               <span class="span" style="font-size: 40px;color: #155d74;">البرامج الخاصة </span>  هي تخصصات مميزة بنظام الساعات المعتمدة بمصروفات يبدأ فيها التخصص من العام الأول على عكس البرامج العادية للكلية التي يبدأ فيها التخصص من العام الثالث وهي متاحة للطلاب الذين التحقوا بالكلية عن طريق مكتب التنسيق وكذلك يمكن لأي طالب آخر ان يلتحق بالبرنامج عن طريق التحويل الورقي المباشر بشرط ان يكون الطالب حاصلا على الحد الأدنى للقبول بكليات الحاسبات والمعلومات ولا يشترط ان يكون حاصلا على الحد الأدنى للقبول في كلية الحاسبات والذكاء الاصطناعي جامعة بنها
</p>
             <p1> مميزات البرامج الدراسية الجديدة بمصروفات</p1>



    <ol>   البرامج الدراسية الجديدة هي تخصصات مميزة غير متاحة في البرامج الدراسية العادية للكلية  - I   </ol>
<ol>  التخصص في البرامج الخاصة يبدأ من أول سنة بينما التخصص في البرامج العادية يبدأ في الفرقة الثالثة - II  </ol>
<ol>    نظم متطورة فى التعليم بما يحسن من خريج الجامعات خاصة فى سوق العمل سواء المحلية أو الدولية - III</ol>
        <ol>
البرامج الجديدة بنظام الساعات المعتمدة المتبع في العديد من دول العالم في الجامعات الأوربية والأمريكية - IV
  </ol>

          <ol>  عدد الطلاب في البرامج الدراسية الجديدة اقل بكثير من عدد الطلاب في البرامج الدراسية العادية مما يتيح فرصة الفهم العميق والتدريب العملي بشكل افضل والتواصل مع اساتذة المقررات بسهولة</ol>    
         
                
    
           
          </div>
        </div>


      </div>
    </div>

  </section>
    <!--*********************************************************************-->
    
        <div class="prog">
       
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content second-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="{{secure_asset('img/daniel-gregoire-O5t7tWnbT4E-unsplash.jpg')}}">
                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4>أمن المعلومات واكتشاف الأدلة الجنائية الرقمية</h4>
                               <p>يعد هذا التخصص فريد من نوعه وتنفرد به الكلية على باقي كليات الحاسبات والمعلومات  وبدأت الدراسة في البرنامج من العام الأكاديمي 2018-2019 ويشارك في التدريس نخبة من الخبراء والمتخصصين في مجالات البحث الجنائي والتزييف والتزوير وأمن المعلومات ومجالاتها المختلفة</p>
                              <div class="primary-button">
                                 <a href="{{route('programs', ['slug'=>'information_security'])}}" class="text-uppercase btn0 tm-btn-white tm-btn-white-highlight"target="_blank">للمزيد عن البرنامج</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>تكنولوجيا الشبكات والمحمول </h4>
                              <p>  هو أحدث البرامج الدراسية التي انضمت إلى الكلية والتي ستبدأ الدراسة بها في العام الأكاديمي 2019-2020 حيث صُمم البرنامج الدراسي بما يتوافق مع احتياجات سوق العمل لتأهيل الخريجين في تصميم وبناء وإدارة شبكات الحاسب السلكية واللاسلكية والمحمولة وأمن وبرمجة الشبكات والخوادم</p>
                              <div class="primary-button">
                                 <a href="{{route('programs', ['slug'=>'information_technology_mobile'])}}" class="text-uppercase btn0 tm-btn-white tm-btn-white-highlight"target="_blank">للمزيد عن البرنامج</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5 right-image">
                            <img src="{{secure_asset('img/kvistholt-photography-oZPwn40zCK4-unsplash.jpg')}}">
                          </div>
                        </div>
                           <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="{{secure_asset('img/everson-mayer-T5_rSquoI-M-unsplash.jpg')}}">
                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4> المعلوماتية الطبية</h4>
                              <p>  الجدير بالذكر أن كلية الحاسبات والذكاء الاصطناعي تعتبر هي الرائدة في مجال "المعلوماتية الطبية" ويهدف البرنامج إلى توفير متخصصين في تقنية المعلومات في المجال الصحي سواء في إنتاج البرمجيات المتخصصة أو إدارة المعلومات بالمنشآت الصحية وشركات الأدوية </p>
                              <div class="primary-button">
                                                        <a href="{{route('programs', ['slug'=>'medical'])}}"target="_blank" class="text-uppercase btn0 tm-btn-white tm-btn-white-primary">للمزيد عن البرنامج</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
    

  

  
  

  <!--************************** Section: التسجيل في الأقسام الخاصه  *******************************-->
    
  <section id="works" class="home-section color-dark text-center bg-white">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div>
            <div class="animatedParent">
              <div class="section-heading text-center">
                <h2 class="h-bold animated bounceInDown">التسجيل في الأقسام الخاصه</h2>
                <div class="divider-header"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
         <section class="row" id="signup">
          <div class="col-lg-4">
            <div class="tm-black signup-box">
              <div class="number-container"> 0. 3 </div>              
              
              <p class="signup-description">
               إعطاء فرصة أسبوع واحد بعد اعلان نتيجة القبول بالبرنامج لاستكمال الإجراءات والأوراق
              </p>
                 <p>في حالة تخلف الطالب المقبول عن استكمال الإجراءات سيتم إعطاء الفرصة لباقي الطلاب بالترتيب بناء على المجموع</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="tm-black signup-box">
              <div class="number-container">0.2</div>              
              
              <p class="signup-description">
               التوجه للشئون الخاصه بكلية الحاسبات والذكاء الأصطناعي ببنها ودفع رسوم طلب تسجيل دخول للحصول علي الرقم السري الخاص بك 
              </p>
              
            </div>
          </div>

          <div class="col-lg-4">
            <div class="tm-black signup-box">
              <div class="number-container">0.1</div>              
              
              <p class="signup-description">
              يتم عمل تنسيق داخلي لقبول الأعداد المطلوبة بناء على المجموع
              </p>
              
              
            </div>
          </div>
              <a href="{{route('student.formLogin')}}" class="btn btn-primary "target="_blank">أضغط للتسجيل  </a>
    <!--بعد مايضغط للتسجيل دي صفحه تسجيل عاديه هيشووف هو مسجل دخول ولاا لا لو مسجل هينقله لصفحه
       التسجيل الكامل sign up -->
       
     
  </section>
  

  <!--***************************** Section: التواصل *****************************-->
  <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center" style="margin-top: -30px" >
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="animatedParent">
            <div class="section-heading text-center">
              <h2 class="h-bold animated bounceInDown" style="background-color:#FAAF3D;letter-spacing: 6px;font-size: 40px; height: 70px; margin-top: 30px ">تواصل معنا</h2>
              <div class="divider-header"></div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container" style="background-color: #373a3c">

      <div class="row marginbot-80">
        <div class="col-md-8 col-md-offset-2">
          
          <form id="contact-form" action="{{route('contact')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="row marginbot-20">
              <div class="col-md-6 xs-marginbot-20">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" required placeholder="Your Name" data-rule="minlen:4" style="margin-top: 30px" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" required id="email" placeholder="Your Email" data-rule="email" style="margin-top:30px" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" required id="subject" placeholder="Subject" style="margin-top:20px" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" style="margin-top:20px" name="message" required rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <button type="submit"style="margin-top:50px; background-color: #f7c552 ;font-size: 18px; color: black;font-weight: 400;" class="btn btn-skin btn-lg btn-block" id="btnContactUs">
    									Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>


    </div>
  </section>
  <!--********************************* /Section: الخريطه *****************************-->
<section id="contact" class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width: 1350px ; margin-left: -100px;" src="{{secure_asset('img/map.png')}}"></iframe>
    <br />
   
  </section>


   <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="logo">
                        <a class="logo-ft scroll-top" href="#"><em>Student</em>Regestration</a>
                        <p>Copyright &copy; BENHA University 
                       <br>Design: B F C A I TEAM </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="location">
                        <h4>Location</h4>
                        <ul>
                            <li> بنها الجديدة – بنها – محافظة القليوبية<br>13518</li>
                            013-3229361
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="contact-info">
                        <h4>More Info</h4>
                        <ul>
                            <li><em>Phone</em>: 013-3229371 </li>
                            <li><em>Email</em>: info@fci.bu.edu.eg</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="connect-us">
                        <h4>Get Social with us</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


  <!-- Core JavaScript Files -->
  
      </div>
    </section>
</body>
</html>
