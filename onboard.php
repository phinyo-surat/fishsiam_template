<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
    <head>
        <!-- Basic Page Needs -->
        <meta charset="UTF-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>ลงขายสินค้าใหม่ | ตลาดอิเล็กทรอนิกส์ปลาแห่งสยาม</title>

        <meta name="author" content="Fishsiam">
        <meta name="keywords" content="แพลตฟอร์ม,ตลาดอิเล็กทรอนิกส์,ปลาแห่งสยาม,สยาม,ปลาสวยงาม , ปลากัด, ปลาไทย">
        <meta name="description" content="แพลตฟอร์ม,ตลาดอิเล็กทรอนิกส์,ปลาแห่งสยาม,สยาม,ปลาสวยงาม , ปลากัด, ปลาไทย">
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Boostrap style -->
        <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

        <!-- Reponsive -->
        <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

        <link rel="shortcut icon" href="favicon/favicon.png">



    </head>
    <style>
.button-chat {
  background-color: #0080fe;
 
  color: #fff;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
  border-radius: 5px;
}

.button-chat:hover {
  background-color: orange;
  color: #fff;
}


.button-call {
  background-color: orange;

  color: #fff;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
  border-radius: 5px;
}

.button-call:hover {
  background-color: orange;
  color: #fff;
}

.button-bid {
  background-color: orange;

  color: #fff;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
  border-radius: 5px;
}

.button-bid:hover {
  background-color: orange;
  color: #fff;
}

</style>

    <body class="header_sticky">
        <div class="boxed">
 
            <div class="overlay"></div>

            <!-- Preloader -->
            <div class="preloader">
                <div class="clear-loading loading-effect-2">
                    <span></span>
                </div>
            </div><!-- /.preloader -->

            
          <?php include 'inc/header-top.php'; ?>



           

<section class="flat-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumbs">
                            <li class="trail-item">
                                <a href="#" title="">หน้าหลัก</a>
                                <span><img src="images/icons/arrow-right.png" alt=""></span>
                            </li>
                           
                            <li class="trail-end">
                                <a href="#" title="">ลงขายสินค้าใหม่</a>
                            </li>
                        </ul><!-- /.breacrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.flat-breadcrumb -->

        <br>


                <div class="container">
                <div class="row">
                  <div class="col-sm-7 col-lg-7">
                    <img src="images/bg/img-onboard.jpg">
                     </div>
                           <div class="col-sm-6 col-lg-4">

                            <h1>ลงขายสินค้าใหม่</h1>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-layers float-right text-muted"><i class="fa fa-cubes text-primary" aria-hidden="true"></i></i>
                                            <h6 class="text-drak text-uppercase mt-0">เพิ่มสินค้าใหม่</h6>
                                            <h2 class="m-b-20"><span>มาร์เก็ตเพลส</span></h2>
            <button type="button" class="btn badge-primary mb-1" onclick="window.location.href='generalist'">คลิกเพิ่มสินค้า</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                        </div>
                                         
                         <br> <br>
                                             
                                    

                                 
                                            
                           

        


     

    

  <?php include 'inc/footer.php'; ?>

        </div><!-- /.boxed -->

        <!-- Javascript -->
        <script type="text/javascript" src="javascript/jquery.min.js"></script>
        <script type="text/javascript" src="javascript/tether.min.js"></script>
        <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
        <script type="text/javascript" src="javascript/waypoints.min.js"></script>
        <script type="text/javascript" src="javascript/jquery.circlechart.js"></script>
        <script type="text/javascript" src="javascript/easing.js"></script>
<script type="text/javascript" src="javascript/jquery.zoom.min.js"></script>
        <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="javascript/owl.carousel.js"></script>
        
        <script type="text/javascript" src="javascript/jquery-ui.js"></script>
        <script type="text/javascript" src="javascript/jquery.mCustomScrollbar.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&region=GB"></script>
        <script type="text/javascript" src="javascript/gmap3.min.js"></script>
        <script type="text/javascript" src="javascript/waves.min.js"></script>
        <script type="text/javascript" src="javascript/jquery.countdown.js"></script>

        <script type="text/javascript" src="javascript/main.js"></script>

    

        <script>
          $(function () {

    // INITIALIZE DATEPICKER PLUGIN
    $('.datepicker').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy"
    });


    // FOR DEMO PURPOSE
    $('#reservationDate').on('change', function () {
        var pickedDate = $('input').val();
        $('#pickedDate').html(pickedDate);
        
    });
});
        </script>


    </body> 
</html>

<!-- <script language=JavaScript>

var message="ตลาดอิเล็กทรอนิกส์ปลาแห่งสยาม";

function clickIE() {if (document.all) {alert(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")

</script> -->

 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
  
     <img src="images/banner_boxes/banner-4.jpg" alt="">
     <div class="row">
     <div class="col-md-1">
        </div>
        <div class="col-md-10">
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">ชื่อผู้ใช้งาน :</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
         <div class="form-group">
            <label for="recipient-name" class="col-form-label">รหัสผ่าน :</label>
            <input type="password" class="form-control" id="recipient-name">
          </div>
          <center>หรือ <br>
   
            <div class="col-md-12">
                                                <center>
                                                    <button type="button" class="btn btn-facebook"><i class="fa fa-facebook mr-2"></i>เข้าสู่ระบบด้วย Facebook</button>
                                                </center>
                                                <br>

                                               
                                                
                                            </div>
          
            

      </center>


        </form>
      </div>
      </div>
     

       <div class="col-md-1">
        </div>

        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-warning">เข้าสู่ระบบ</button>
      </div>
    </div>
  </div>
</div>