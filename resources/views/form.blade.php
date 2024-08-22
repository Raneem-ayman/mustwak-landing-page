<!DOCTYPE html>
<html  lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mustwak</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Scheherazade:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style2.css')}}" rel="stylesheet">

</head>


<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <a href="{{ url('mustawak/index') }}"><img src="{{asset('assets/img/logo2.png')}}" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a> -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ url('mustawak/index') }}#hero">الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="{{ url('mustawak/index') }}#about">المزيد عنا</a></li>
          <li><a class="nav-link scrollto" href="{{ url('mustawak/index') }}#features">المميزات</a></li>
          {{-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="{{ url('mustawak/index') }}#contact">تواصل معنا</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>نموذج التسجيل</h2>
          {{-- <ol>
            <li><a href="index.html">الرئيسية</a></li>
            <li>نموذج التسجيل</li>
          </ol> --}}
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="form">
          @if (session('message'))
              <div class="alert {{ session('status') == 'error' ? 'alert-danger' : 'alert-success' }}">
                  {{ session('message') }}
              </div>
          @endif
          <form action="{{ route('store_form') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
            @csrf
            <!-- Parent Information Section -->
            <div class="row mt-3">
              <div class="form-group col-lg-6">
                <label for="parent_name">اسم ولي الامر</label>
                <input type="text" class="form-control" name="parent_name" id="parent_name" required>
              </div>
              <div class="form-group col-lg-6">
                <label for="parent_email">البريد الالكتروني للوالد</label>
                <input type="email" class="form-control" name="parent_email" id="parent_email" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="form-group col-lg-6">
                <label for="parent_phone">رقم هاتف ولي الامر</label>
                <input type="text" class="form-control" name="parent_phone" id="parent_phone" required>
              </div>
              <div class="form-group col-lg-6">
                <label for="parent_location">بلد ولي الامر</label>
                <input type="text" class="form-control" name="parent_location" id="parent_location" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="form-group col-lg-6">
                <label for="parent_image">رابط صورة ولي الامر</label>
                <input type="file" class="form-control" name="parent_image" id="parent_image" >
              </div>
              <div class="form-group col-lg-6">
                <label for="parent_dob">تاريخ ميلاد ولي الامر</label>
                <input type="date" class="form-control" name="parent_dob" id="parent_dob" >
              </div>
            </div>
            <div class="row mt-3">
              <div class="form-group col-lg-6">
                <label for="parent_whatsapp">رابط واتساب ولي الامر</label>
                <input type="url" class="form-control" name="parent_whatsapp" id="parent_whatsapp">
              </div>
              <div class="form-group col-lg-6">
                <label for="parent_facebook">رابط فيسبوك ولي الامر</label>
                <input type="url" class="form-control" name="parent_facebook" id="parent_facebook" >
              </div>
            </div>
            <div class="row mt-3">
              <div class="form-group col-lg-6">
                <label for="parent_snapchat">رابط سناب شات ولي الامر</label>
                <input type="url" class="form-control" name="parent_snapchat" id="parent_snapchat" >
              </div>
              <div class="form-group col-lg-6">
                <label for="parent_youtube">رابط يوتيوب ولي الامر</label>
                <input type="url" class="form-control" name="parent_youtube" id="parent_youtube" >
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="parent_gender">جنس ولي الامر</label>
              <select class="form-control" name="parent_gender" id="parent_gender" required>
                <option value="MALE">ذكر</option>
                <option value="FEMALE">أنثى</option>
              </select>
            </div>
            <div class="row mt-3">
              <div class="form-group col-lg-6">
                <label for="parent_nationalId">رقم هوية ولي الامر  </label>
                <input type="text" class="form-control" name="parent_nationalId" id="parent_nationalId" required>
              </div>
              <div class="form-group col-lg-6">
                <label for="parent_password">كلمة مرور ولي الامر</label>
                <input type="text" class="form-control" name="parent_password" id="parent_password" placeholder="ex:Default@123"
                title="Password must contain at least one capital letter, one small letter, one special character, one number, and be at least 8 characters long"
                required>
              </div>
            </div>

            <!-- Student Information Section Container -->
            <div id="student-container">
              <div class="student-section">
                <h4 style="margin-top: 20px;color: #088395b3;">طالب 1</h4>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label for="name">اسم الطالب</label>
                    <input type="text" name="name[]" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <label for="email">البريد الالكتروني للطالب</label>
                    <input type="email" class="form-control" name="email[]" id="email" data-rule="email" data-msg="Please enter a valid email" required >
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6 mt-3">
                    <label for="phone">رقم هاتف الطالب</label>
                    <input type="text" class="form-control" name="phone[]" id="phone" required>
                  </div>
                  <div class="form-group col-lg-6 mt-3">
                    <label for="location">البلد</label>
                    <input type="text" class="form-control" name="location[]" id="location" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6 mt-3">
                    <label for="image"> صورة الطالب</label>
                    <input type="file" class="form-control" name="image[]" id="image">
                  </div>
                  <div class="form-group col-lg-6 mt-3">
                    <label for="dob">تاريخ ميلاد الطالب</label>
                    <input type="date" class="form-control" name="dob[]" id="dob" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6 mt-3">
                    <label for="whatsapp">رابط واتساب الطالب</label>
                    <input type="url" class="form-control" name="whatsapp[]" id="whatsapp">
                  </div>
                  <div class="form-group col-lg-6 mt-3">
                    <label for="facebook">رابط فيسبوك الطالب</label>
                    <input type="url" class="form-control" name="facebook[]" id="facebook">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6 mt-3">
                    <label for="snapchat">رابط سناب شات الطالب</label>
                    <input type="url" class="form-control" name="snapchat[]" id="snapchat">
                  </div>
                  <div class="form-group col-lg-6 mt-3">
                    <label for="youtube">رابط يوتيوب الطالب</label>
                    <input type="url" class="form-control" name="youtube[]" id="youtube">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label for="gender">جنس الطالب</label>
                  <select class="form-control" name="gender[]" id="gender" required>
                    <option value="MALE">ذكر</option>
                    <option value="FEMALE">أنثى</option>
                  </select>
                </div>
                <div class="row mt-3">
                  <div class="form-group col-lg-6">
                    <label for="student_password">كلمة مرور الطالب</label>
                    <input type="text" class="form-control" name="student_password[]" id="student_password" placeholder="ex:Default@123"
                    title="Password must contain at least one capital letter, one small letter, one special character, one number, and be at least 8 characters long"
                    required>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="student_level">مستوى الطالب</label>
                        <select class="form-control" name="student_level[]" id="student_level" required>
                            <option value="" disabled selected>اختر مستوى الطالب</option>
                            <option value="1">المستوى 1</option>
                            <option value="2">المستوى 2</option>
                            <option value="3">المستوى 3</option>
                            <option value="4">المستوى 4</option>
                            <option value="5">المستوى 5</option>
                            <option value="6">المستوى 6</option>

                            <!-- Add more options as needed -->
                        </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="text-center mt-3">
              <button type="button" class="btn btn-primary" style="
    background-color: #088395b3;" onclick="addStudent()">إضافة طالب آخر</button>
            </div>

            <div class="text-center mt-3"><button class="button-send" type="submit" title="Send Message">ارسال</button></div>
          </form>
      </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-start text-center">
            <div class="copyright">
              &copy; Copyright <strong>ريادة الفكر</strong>. All Rights Reserved
            </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            {{-- <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a> --}}
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  {{-- <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script>
    let studentCount = 1;
    function addStudent() {
      studentCount++;
      const studentContainer = document.getElementById('student-container');
      const newStudentSection = document.createElement('div');
      newStudentSection.classList.add('student-section');
      newStudentSection.innerHTML = `
        <h4 style= "margin-top: 20px;color: #088395b3;">طالب ${studentCount}</h4>
        <div class="row">
          <div class="form-group col-lg-6">
            <label for="name">اسم الطالب</label>
            <input type="text" name="name[]" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
          </div>
          <div class="form-group col-lg-6 mt-3 mt-lg-0">
            <label for="email">البريد الالكتروني للطالب</label>
            <input type="email" class="form-control" name="email[]" id="email" data-rule="email" data-msg="Please enter a valid email" required>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-6 mt-3">
            <label for="phone">رقم هاتف الطالب</label>
            <input type="text" class="form-control" name="phone[]" id="phone" required>
          </div>
          <div class="form-group col-lg-6 mt-3">
            <label for="location">البلد</label>
            <input type="text" class="form-control" name="location[]" id="location" required>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-6 mt-3">
            <label for="image"> صورة الطالب</label>
            <input type="file" class="form-control" name="image[]" id="image">
          </div>
          <div class="form-group col-lg-6 mt-3">
            <label for="dob">تاريخ ميلاد الطالب</label>
            <input type="date" class="form-control" name="dob[]" id="dob" required>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-6 mt-3">
            <label for="whatsapp">رابط واتساب الطالب</label>
            <input type="url" class="form-control" name="whatsapp[]" id="whatsapp">
          </div>
          <div class="form-group col-lg-6 mt-3">
            <label for="facebook">رابط فيسبوك الطالب</label>
            <input type="url" class="form-control" name="facebook[]" id="facebook">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-6 mt-3">
            <label for="snapchat">رابط سناب شات الطالب</label>
            <input type="url" class="form-control" name="snapchat[]" id="snapchat">
          </div>
          <div class="form-group col-lg-6 mt-3">
            <label for="youtube">رابط يوتيوب الطالب</label>
            <input type="url" class="form-control" name="youtube[]" id="youtube">
          </div>
        </div>
        <div class="form-group mt-3">
          <label for="gender">جنس الطالب</label>
          <select class="form-control" name="gender[]" id="gender" required>
            <option value="MALE">ذكر</option>
            <option value="FEMALE">أنثى</option>
          </select>
        </div>
        <div class="row mt-3">
          <div class="form-group col-lg-6">
            <label for="student_password">كلمة مرور الطالب</label>
            <input type="text" class="form-control" name="student_password[]" id="student_password" placeholder="ex:Default@123"
                title="Password must contain at least one capital letter, one small letter, one special character, one number, and be at least 8 characters long"
             required>
          </div>
          <div class="form-group col-lg-6">
                <label for="student_level">مستوى الطالب</label>
                <select class="form-control" name="student_level[]" id="student_level" required>
                    <option value="" disabled selected>اختر مستوى الطالب</option>
                    <option value="1">المستوى 1</option>
                    <option value="2">المستوى 2</option>
                    <option value="3">المستوى 3</option>
                    <option value="4">المستوى 4</option>
                    <option value="5">المستوى 5</option>
                    <option value="6">المستوى 6</option>

                    <!-- Add more options as needed -->
                </select>
          </div>
        </div>
      `;
      studentContainer.appendChild(newStudentSection);
    }
  </script>
</body>

</html>
