<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Homepage</title>

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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.3.0/css/fixedColumns.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
  <link type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/css/dataTables.checkboxes.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css">
</head>
    

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
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
          <a href="#" class="learn-more-btn btn-scroll">كليه الحاسبات والذكاء الاصطناعي - بنها</a>
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
                <li class="active"><a href="{{route('admin.home')}}">الصفحة الرئيسية</a></li>
              <!-- هاااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااام  -->   
                @auth
                <a href="{{route('admin.formRegisterStudent')}}" style="width: 150px;margin-right: 0px;height: 50px;margin-left: 10px;font-size: 20px;padding: 10px;" class="btn btn-primary ">تسجيل طالب</a>
                <a style="width: 150px;margin-right: 0px;height: 50px;margin-left: 10px;font-size: 20px;padding: 10px;" class="btn btn-danger " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        تسجيل خروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                @endauth
                   <!--       هنااا عشااان الطالب يعرف نتيجته هيعمل تسجيل دخول وهترجعله صفحه ببياناته اللي هو مسجلهاا عندنااا وانه اتقبل ولا اترفض وموعد تقديم الأوراق  والمصااريف -->  
              </ul>
            </div>
          </div>
        </div>
    </nav>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="h1 text-center">
            All Registeration students
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
          <form id="frm-example" action="{{route('send.acceptation')}}" method="POST">
            @csrf
            <table  id="table_id" class="table mb-5">
              <thead class="thead-dark">
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Certification</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Grade</th>
                  <th scope="col">password</th>
                  <th scope="col">Department</th>
                  <th scope="col">Opthons</th>
                </tr>
              </thead>
              <tbody>
                @if(count($students) > 0)
                  @foreach($students as $student)
                    <tr>
                      <td scope="row"></td>
                      <td>{{$student->name}}</td>
                      <td>{{$student->email}}</td>
                      <td>{{$student->phone}}</td>
                      <td><img width="100" height="100" src="{{secure_asset('images/'.$student->certification)}}" /></td>
                      <td>{{$student->gender}}</td>
                      <td>{{$student->grade}}</td>
                      <td>{{$student->admin_password}}</td>
                      <td>{{$student->department->name}}</td>
                      <td>
                        <div class="dropdown text-center">
                          <a class="dropdown-button" id="dropdown-menu-{{ $student->id }}" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdown-menu-{{ $student->id }}">

                            <a class="dropdown-item text-primary" href="{{route('student.edit', ['id' => $student->id])}}">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>                              
                            <form id="delete-{{ $student->id }}" action="{{route('student.delete', ['id' => $student->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                            </form>
                            <a class="dropdown-item text-danger" href="#" onclick="if(confirm('Are you Sure?')) document.getElementById('delete-{{ $student->id }}').submit()">
                              <i class="fa fa-trash-alt"></i>
                                Delete
                            </a>
                          </div>
                      </td>
                    </tr>
                  @endforeach
                @else
                <tr>
                  <th scope="row" colspan="11">No Student Register</th>
                </tr>
                @endif
              </tbody>
              <tfoot>
                <tr>
                  <button type="submit" class="btn btn-success">ارسال النتائج</button>
                </tr>
              </tfoot>
            </table>
          </form>
        </div>
    </div>
  </div>  
   <footer style="width: auto !important;">
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
  <script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/fixedcolumns/3.3.0/js/dataTables.fixedColumns.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
  <script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/js/dataTables.checkboxes.min.js"></script>

  <script>
  $(document).ready( function () {
    var myTable = $('#table_id').DataTable( {
      columnDefs: [
         {
            targets: 0,
            checkboxes: {
               selectRow: true
            }
         }
      ],
      select: {
         style: 'multi'
      },
      order: [[1, 'asc']]
    } );
     // Handle form submission event 
   $('#frm-example').on('submit', function(e){
      var form = this;
      var students = @json($students);
      
      var rows_selected =     myTable.column(0).checkboxes.selected();

      // Iterate over all selected checkboxes
      $.each(rows_selected, function(index, rowId){
        e.preventDefault();
         // Create a hidden element 
         $(form).append(
             $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(students[index]['id'])
         );
      });

      // The code below is not needed in production
      var data = $(form).serialize();
      // Prevent actual form submission

      $.ajax({
        url : "{{route('send.acceptation')}}",
        type : 'POST',
        data : data,
        dataType:'json',
        success : function(data) {              
            alert('Data: '+data.success);
            $(form).get(0).reset();
        },
        error : function(request,error)
        {
            console.log("Request: "+JSON.stringify(request));
        }
      });
   }); 
  });
  </script>
</body>
</html>