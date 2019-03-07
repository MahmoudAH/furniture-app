<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8" >
  <title>project1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="bootstrap-3.0.0/assets/js/html5shiv.js"></script>
    <script src="bootstrap-3.0.0/assets/js/respond.min.js"></script>
  <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- styles -->
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
     rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" rel="stylesheet"></link>
  <link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.7.1.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


  <style>
    #nav2{
        margin-top:0px;
        margin-left:50px;
    }
          #drop2{
              width:20%;
              margin-top:20px;
              border-radius:4px;
              box-shadow:none;
          }
       .thumb-dropdown .dropdown-menu > li {
  position: relative;
}
.thumb-dropdown .dropdown-menu > li > a .thumbnail {
  position: absolute;
  left: 100%;
  top: -10px;
  display: none;
  width: 350px;
  height: auto;
  margin-left: 5px;
}
.thumb-dropdown .dropdown-menu > li > a:hover .thumbnail  {
  display: block;
}
</style>
  </head>
  <body>
  <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse pull-right">
        <ul class="nav navbar-nav navbar-right">
            <li class="divider-vertical"></li>
            <li><a href="#">بحث<span class="glyphicon glyphicon-search pull-right"></span></a></li>
            <li class="divider-vertical"></li>
          <li ><a href="#">عرض مرفقات<span class="glyphicon glyphicon-download pull-right"></span></a></li>
          <li class="divider-vertical"></li>
          <li class="dropdown thumb-dropdown">
        <a href="#" class="dropdown-toggle pull-right" data-toggle="dropdown">عرض تقارير <span class="caret"></span><span class="glyphicon glyphicon-comment pull-right"></span></a>
        <ul class="dropdown-menu pull-right" role="menu">
              <li>
                  <a href="#">تقرير الكتب
                  <div class="thumbnail">
                      <img class="img-responsive" src="http://pmtips.net/wp-content/uploads/2010/03/status-report1.jpg">
                  </div>
                  </a>
              </li>
                    <li>
                  <a href="#">الكميات المصروفة والمتبقية
                  <div class="thumbnail">
                      <img class="img-responsive" src="http://www.traceadebt.com/communities/2/004/011/758/742//images/4612552427.gif">
                  </div>
                  </a>
              </li>
                 <li>
                  <a href="#">المبالغ المتبقية
                  <div class="thumbnail">
                      <img class="img-responsive" src="http://classic.aawsat.com/2012/11/10/images/economy1.703632.jpg">
                  </div>
                  </a>
              </li>
            </ul>
          </li>

          <li class="divider-vertical"></li>
          <li ><a href="#">اضافة مستخدمين جدد<span class="glyphicon glyphicon-plus pull-right"></span></span></a></li>
           <li class="divider-vertical"></li>
          <li ><a href="#">حذف<span class="glyphicon glyphicon-remove pull-right"></span></a></li>
        <li class="divider-vertical"></li>
          <li ><a href="#">سعر الكتاب<span class="glyphicon glyphicon-book pull-right"></span></a></li>
      <li class="divider-vertical"></li>

             <li class="dropdown thumb-dropdown">
        <a href="#" class="dropdown-toggle pull-right" data-toggle="dropdown">تعديل<span class="caret"></span><span class="glyphicon glyphicon-edit pull-right"></span></a>
        <ul class="dropdown-menu pull-right" role="menu">
                <li>
               <a href="#">بيانات المؤلف
                  <div class="thumbnail">
                      <img class="img-responsive" src="http://blogs.adobe.com/captivate/files/2013/01/Picture1.jpg">
                  </div>
                  </a>
                </li>
                      <li>
               <a href="#">بيانات الكتاب
                  <div class="thumbnail">
                      <img class="img-responsive" src="http://img.talkandroid.com/uploads/2013/11/stack_of_books.jpg">
                  </div>
                  </a>
                </li>
                 <li>
               <a href="publisher_edit3.php">بيانات الناشرين
                  <div class="thumbnail">
                      <img class="img-responsive" src="http://1.bp.blogspot.com/-a8GmNkPmB_s/UUbqYkCb5rI/AAAAAAAAACE/TCQikdw4Wzs/s1600/affiliate-publisher.png">
                  </div>
                  </a>
                </li>
                 <li>
               <a href="#">بيانات جهات الصرف
                  <div class="thumbnail">
                      <img class="img-responsive" src="http://www.arabianbusiness.com/incoming/article272382.ece/BINARY/Qatari-riyal_thumb.jpg">
                  </div>
                  </a>
                </li>
            </ul>
          </li>
       <li class="divider-vertical"></li>
          <li class="active" ><a href="#ُ"><i class="glyphicon glyphicon-home"></i>ادراج</a></li>

          <li>
          <a class="navbar-brand" href="#">شعار</a>
          </li>
        </ul>

      </div><!--/.nav-collapse -->
        <ul class="nav navbar-nav" id="nav2">
                 <li class="dropdown" id="nav3" >
  <a class="dropdown-toggle pull-right" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-user pull-right">
      </span>اسم المستخدم</a>
               <ul class="dropdown-menu pull-right" id="drop2">

       <li><a href="#"><i class="glyphicon glyphicon-user"></i>الحساب الشخصي</a></li>

       <li><a href="#"><i class="glyphicon glyphicon-stats"></i>الحالة</a></li>

       <li><a href="#"><i class="glyphicon glyphicon-log-out"></i>خروج</a></li>

                     </ul>
                 </li>
             </ul>
    </div><!--nav bar-->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    </script>
    </body>
    </html>
