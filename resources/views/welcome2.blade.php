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
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
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
          <li><a class="nav-link scrollto active" href="#hero">الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="#about">المزيد عنا</a></li>
          <li><a class="nav-link scrollto" href="#features">المميزات</a></li>
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
          <li><a class="nav-link scrollto" href="#contact">تواصل معنا</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="hero-text" data-aos="zoom-out">
      <h2>مرحبا بك في مستواك التعليمي</h2>
      <p>اكتشف مع طفلك رحلة التعلم والتحصيل الممتعة</p>
      <a href="#" class="btn-get-started scrollto"><i class="fa-brands fa-google-play"></i> Google Play</a>
      <a href="#" class="btn-get-started scrollto"><i class="fa-brands fa-apple"></i> App Store</a>
      {{-- <a href="#about" class="btn-get-started scrollto">Get Started</a> --}}
    </div>

    <div class="product-screens">

      <div class="product-screen-1" data-aos="fade-up" data-aos-delay="400">
        <img src="{{asset('assets/img/screen2.jpg')}}" alt="">
      </div>

      <div class="product-screen-2" data-aos="fade-up" data-aos-delay="200">
        <img src="{{asset('assets/img/screen3.jpg')}}" alt="">
      </div>

      <div class="product-screen-3" data-aos="fade-up">
        <img src="{{asset('assets/img/screen4.jpg')}}" alt="">
      </div>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">المزيد عنا</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            شركة ريادة الفكر هي شركة متخصصة في تقديم الخدمات والاستشارات التعليمية والتربوية وتطوير المناهج السعودية، وتعمل داخل المملكة لتقديم حلول تعليمية متميزة للطلاب وأولياء الأمور، خصوصاً في مرحلة التعليم الأساسي التي تعتبر أساس رحلة التعلم.

          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img" data-aos="fade-right" dat-aos-delay="100" style="text-align: center; width: 35%;">
            <img src="{{asset('assets/img/image2.png')}}" alt="">
          </div>

          <div class="col-lg-6 content" data-aos="fade-left" dat-aos-delay="100">
            {{-- <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elite storium paralate</h2> --}}
            {{-- <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3> --}}
            <p>
              تركز ريادة الفكر على تطوير المناهج التعليمية وصياغتها بشكل مبسط على شكل فيديوهات وشرح شامل ومفصل، يتم تقديمها للطلاب عبر تطبيقات مطورة بواسطة فريق من التقنيين المتخصصين في تطوير البرمجيات. تهتم الشركة بتلبية احتياجات ولي الأمر، والطالب، والمعلم، ورواد التعليم، والمهتمين بالشأن التعليمي والتربوي داخل المملكة، من خلال تقديم محتوى متميز في سياق ممتع يعزز من متعة التعلم ويشعر الطالب وكأنه يلعب، ولكن بشكل محترف ينقله من مستوى تعلم إلى المستوى التالي دون أن يشعر.
            </p>

            {{-- <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul> --}}

            <p>
              تسعى ريادة الفكر إلى تحسين مهارات الطالب وقدراته على التفكير، والاستيعاب، والملاحظة، والفهم، يوماً بعد يوم، مما يساعده على الاعتماد على نفسه تماماً في رحلة التعلم من خلال تطبيقاتنا، وبالتالي يخفف عن ولي الأمر عبء المتابعة الدقيقة لضمان تحقيق الفائدة والتعلم.
            </p>
            <p>
              بالإضافة إلى ذلك، يتضمن فريق ريادة الفكر مجموعة من التربويين الذين يقدمون خدمات إشرافية على رحلة التعلم، وهم مستعدون دائماً لتقديم الدعم للطلاب في أي مرحلة من مراحل التعلم. يمكن للمعلمين والطلاب الاستفادة من هذه الخدمات المتطورة، مما يسهل عملية التعلم بنجاح ويحقق نتائج مبهرة.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Featuress Section ======= -->
    <section id="features">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="offset-lg-4">
            <div class="section-header">
              <h3 class="section-title">مميزات التطبيق</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="{{asset('assets/img/product-features.png')}}" alt="" data-aos="fade-right">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <div class="col-lg-6 col-md-6 box" data-aos="fade-up">
                <div class="icon"><i class="bi bi-briefcase"></i></div>
                <h4 class="title"><a href="">نظام تقييم متقدم وشامل</a></h4>
                <p class="description">يتضمن تقييمًا مستمرًا لأداء الطلاب في الاختبارات بعد كل درس، بالإضافة إلى تقييم مهاراتهم ومستوياتهم الفردية في كل مادة.
                </p>
              </div>
              <div class="col-lg-6 col-md-6 box" data-aos="fade-up">
                <div class="icon"><i class="bi bi-card-checklist"></i></div>
                <h4 class="title"><a href="">لوحة تحكم لولي الأمر</a></h4>
                <p class="description">تمكن ولي الأمر من متابعة تقدم وأداء طفله بشكل فعال، مع إمكانية عرض التقارير والإحصائيات حول تقدمه التعليمي والتقييمات الشخصية.
                </p>
              </div>
              <div class="col-lg-6 col-md-6 box" data-aos="fade-up" dat-aos-delay="100">
                <div class="icon"><i class="bi bi-binoculars"></i></div>
                <h4 class="title"><a href="">تعلم في أي وقت</a></h4>
                <p class="description">هذه الخاصية تسمح للطلاب بالوصول إلى دروس مسجلة تم تقديمها من معلمين ذوي كفاءة عالية في أي وقت يرونه مناسبًا. </p>
              </div>
              <div class="col-lg-6 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                <h4 class="title"><a href="">تحليل بيانات للمعلم</a></h4>
                <p class="description">يتيح للمدرس تحليل بيانات أداء الطلاب بشكل شامل، بما في ذلك اكتشاف الاتجاهات في الأسئلة التي يخطئ فيها الطلاب بشكل متكرر، مما يساعد على تحسين عملية التعليم والتقييم.
                </p>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Featuress Section -->

    <!-- ======= Advanced Featuress Section ======= -->
    {{-- <section id="advanced-features">

      <div class="features-row section-bg" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right wow fadeInRight" src="assets/img/advanced-feature-1.jpg" alt="">
              <div>
                <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-left" src="assets/img/advanced-feature-2.jpg" alt="">
              <div>
                <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                <i class="bi bi-calendar4-week"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <i class="bi bi-bar-chart"></i>
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                <i class="bi bi-brightness-high"></i>
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row section-bg" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right wow fadeInRight" src="assets/img/advanced-feature-3.jpg" alt="">
              <div>
                <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <i class="bi bi-binoculars"></i>
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Advanced Featuress Section --> --}}

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 ">
            <h3 class="cta-title">انضم إلينا الآن!</h3>
            <p class="cta-text">املأ نموذج التسجيل لانضمام طفلك إلى تطبيق مستواك التعليمي ليستمتع بتجربة تعليمية فريدة ومتنوعة. لا تفوت فرصة طفلك في تحسين مهاراته ومعرفته مع أفضل المحتويات التعليمية!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{ url('mustawak/regestration_form') }}">سجل الآن !</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= More Features Section ======= -->
    {{-- <section id="more-features" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3 class="section-title">More Features</h3>
          <span class="section-divider"></span>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End More Features Section --> --}}

    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-md-2">
            <img src="assets/img/clients/client-1.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="assets/img/clients/client-2.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="assets/img/clients/client-3.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="assets/img/clients/client-4.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="assets/img/clients/client-5.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="assets/img/clients/client-6.png" alt="">
          </div>

        </div>
      </div>
    </section><!-- End Clients Section --> --}}

    <!-- ======= Pricing Section ======= -->
    {{-- <section id="pricing" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3 class="section-title">Pricing</h3>
          <span class="section-divider"></span>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> month</span></h4>
              <ul>
                <li><i class="bi bi-check-circle"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check-circle"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check-circle"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check-circle"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check-circle"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>29<span> month</span></h4>
              <ul>
                <li><i class="bi bi-check-circle"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check-circle"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check-circle"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check-circle"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check-circle"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>49<span> month</span></h4>
              <ul>
                <li><i class="bi bi-check-circle"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check-circle"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check-circle"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check-circle"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check-circle"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Pricing Section --> --}}

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">الاسئلة الشائعة</h3>
          <span class="section-divider"></span>
          <p class="section-description">الأسئلة الشائعة هي قسم يحتوي على إجابات لأكثر الأسئلة تكرارًا التي يطرحها المستخدمون حول كيفية استخدام التطبيق والاستفادة من ميزاته.</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">ما هو تطبيق مستواك التعليمي؟ <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                تطبيق تعلم عن طريق الفيديوهات المسجلة هو منصة تعليمية تتيح للمستخدمين الوصول إلى محتوى تعليمي متنوع من خلال فيديوهات مسجلة باللغة العربية، تغطي مجموعة واسعة من المواضيع والمهارات.              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">كيف يمكنني التسجيل في التطبيق؟<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                يمكنك التسجيل في التطبيق عبر تحميله من متجر التطبيقات (App Store أو Google Play) وإنشاء حساب جديد باستخدام بريدك الإلكتروني أو حسابك على وسائل التواصل الاجتماعي.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">هل يتطلب التطبيق اتصالاً بالإنترنت لمشاهدة الفيديوهات؟<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                نعم، يتطلب التطبيق اتصالاً بالإنترنت لمشاهدة الفيديوهات.             </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">ما هي أنواع المحتوى المتاحة في التطبيق؟ <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                التطبيق يقدم محتوى متنوع يتضمن دروسًا في اللغة العربية، اللغة الانجليزية، الرياضيات، العلوم.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">كيف يمكنني التواصل مع فريق الدعم الفني؟<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                يمكنك التواصل مع فريق الدعم الفني عبر قسم "الدعم" في التطبيق أو عبر البريد الإلكتروني المخصص للدعم الفني.
            </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">هل التطبيق متاح على جميع الأجهزة؟<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                نعم، التطبيق متاح على أجهزة iOS وAndroid، ويمكنك أيضًا الوصول إلى المحتوى عبر موقع الويب الخاص بالتطبيق.
            </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Our Team</h3>
          <span class="section-divider"></span>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-1.jpg" alt=""></div>
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-2.jpg" alt=""></div>
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-3.jpg" alt=""></div>
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-4.jpg" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section --> --}}

    {{-- <!-- ======= Gallery Section ======= -->
    <section id="gallery">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Gallery</h3>
          <span class="section-divider"></span>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" data-gall="portfolioGallery" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" data-gall="portfolioGallery" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" data-gall="portfolioGallery" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" data-gall="portfolioGallery" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" data-gall="portfolioGallery" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" data-gall="portfolioGallery" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section --> --}}

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
                <a href="index.html"><img src="{{asset('assets/img/logo2.png')}}" alt=""></a>
                <p>اكتشف التعليم الفعال مع معلمين ذوي الخبرة والكفائة توفر لأبنائك تجربة تعليمية سلسة ومتميزة.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                {{-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> --}}
                <a href="https://www.linkedin.com/company/riyadahalfeker/" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>مكة المكرمة</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>info@ryada.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+966560996239</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="البريد الالكتروني" data-rule="email" data-msg="Please enter a valid email">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="الرساله" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">تم ايصال رسالتك</div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">ارسال</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  {{-- <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
