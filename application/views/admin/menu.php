<style type="text/css">
.clock {width:800px; margin:0 auto; padding:30px; border:1px solid #333; color:#fff; }

#Date { font-size:12px; text-align:center;color:white; }

ul .date{  margin:0 auto; padding:0px; list-style:none;color:white;list-style-type: none; font-size:16px;}
ul li .date1{ display:inline; font-size:16px;color:white;display: inline; margin: auto}

#point { position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite; padding-left:10px; padding-right:10px; }

@-webkit-keyframes mymove
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }
}


@-moz-keyframes mymove
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }
}

</style>
<script type="text/javascript">
$(document).ready(function() {
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]


var newDate = new Date();
newDate.setDate(newDate.getDate());
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
setInterval( function() {
  var seconds = new Date().getSeconds();
  $("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
  },1000);

setInterval( function() {
  var minutes = new Date().getMinutes();
  $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);

setInterval( function() {
  var hours = new Date().getHours();
  $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);

});
</script>

<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
<!--          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>-->
          <!-- search form -->
<!--          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>-->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" style="cursor: pointer;">
            <li class="header">
                <div id="Date">
                </div>
                <ul class="date" style="text-align:center">
                  <li id="hours" class="date1" style="display:inline;"> </li>
                  <li id="point" class="date1" style="display:inline">:</li>
                  <li id="min" class="date1" style="display:inline"> </li>
                  <li id="point"class="date1" style="display:inline">:</li>
                  <li id="sec"class="date1" style="display:inline"> </li>
                </ul>
            </li>
<!--            <li class="header">MAIN NAVIGATION</li>-->
            <li class="active treeview" id="treeview1" onclick="buka_halaman('beranda','1')"><a><i class="fa fa-dashboard"></i><span>Home</span></a></li>
            <li class="treeview" id="treeview2">
              <a>
                <i class="fa fa-database"></i> <span>Home Page</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_menu_homepage','2')"><a><i class="fa fa-circle-o"></i>Menu Bar</a></li>                
                <li onclick="buka_halaman('mst_banner_homepage','2')"><a><i class="fa fa-circle-o"></i>Banner</a></li>
                <li onclick="buka_halaman('mst_label_homepage','2')"><a><i class="fa fa-circle-o"></i>Label</a></li>
                <li onclick="buka_halaman('mst_contact_homepage','2')"><a><i class="fa fa-circle-o"></i>Contact</a></li>
                <li onclick="buka_halaman('mst_seo_homepage','2')"><a><i class="fa fa-circle-o"></i>SEO</a></li>
                <li onclick="buka_halaman('mst_services_homepage','2')"><a><i class="fa fa-circle-o"></i>Services</a></li>
                <li onclick="buka_halaman('mst_vission_homepage','2')"><a><i class="fa fa-circle-o"></i>Vission</a></li>
                <li onclick="buka_halaman('mst_whychoose_homepage','2')"><a><i class="fa fa-circle-o"></i>Why Choose</a></li>
              </ul>
            </li>
            <li class="treeview" id="treeview3" onclick="buka_halaman('mst_banner','3')"><a><i class="fa fa-database"></i><span>Banner</span></a></li>
            <li class="treeview" id="treeview4">
              <a>
                <i class="fa fa-database"></i> <span>About Us</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_label_aboutus','4')"><a><i class="fa fa-circle-o"></i>Label</a></li>
                <li onclick="buka_halaman('mst_ourgoal_aboutus','4')"><a><i class="fa fa-circle-o"></i>Our Goal</a></li>
                <li onclick="buka_halaman('mst_ourskill_aboutus','4')"><a><i class="fa fa-circle-o"></i>Our Skill</a></li>
                <li onclick="buka_halaman('mst_skillvalue_aboutus','4')"><a><i class="fa fa-circle-o"></i>Skill Value</a></li>
                <li onclick="buka_halaman('mst_whychoose_aboutus','4')"><a><i class="fa fa-circle-o"></i>Why Choose</a></li>
              </ul>
            </li>
            <li class="treeview" id="treeview5">
              <a>
                <i class="fa fa-database"></i> <span>Services</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_label_services','5')"><a><i class="fa fa-circle-o"></i>Label</a></li>                
                <li onclick="buka_halaman('mst_services_services','5')"><a><i class="fa fa-circle-o"></i>Services</a></li>
              </ul>
            </li>            
            <li class="treeview" id="treeview6">
              <a>
                <i class="fa fa-database"></i> <span>Portfolio</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_label_portfolio','6')"><a><i class="fa fa-circle-o"></i>Label portfolio</a></li>                
                <li onclick="buka_halaman('mst_portfolio','6')"><a><i class="fa fa-circle-o"></i>Portfolio</a></li>
                <li onclick="buka_halaman('mst_category_portfolio','6')"><a><i class="fa fa-circle-o"></i> Category portfolio</a></li>
              </ul>
            </li>
            <li class="treeview" id="treeview7">
              <a>
                <i class="fa fa-database"></i> <span>Contact Us</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_label_contactus','7')"><a><i class="fa fa-circle-o"></i>Label</a></li>                
                <li onclick="buka_halaman('mst_company_contactus','7')"><a><i class="fa fa-circle-o"></i>Company</a></li>
              </ul>
            </li>
            <li class="treeview" id="treeview8">
              <a>
                <i class="fa fa-database"></i> <span>Blog</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_label_blog','8')"><a><i class="fa fa-circle-o"></i>Label</a></li>
                <li onclick="buka_halaman('mst_blog_blog','8')"><a><i class="fa fa-circle-o"></i>Blog</a></li>
                <li onclick="buka_halaman('mst_category_blog','8')"><a><i class="fa fa-circle-o"></i>Category</a></li>
                <li onclick="buka_halaman('mst_tag_blog','8')"><a><i class="fa fa-circle-o"></i>Tag</a></li>
              </ul>
            </li>                        
            <li class="treeview" id="treeview9">
              <a>
                <i class="fa fa-pie-chart"></i><span>Career</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_label_career','9')"><a><i class="fa fa-circle-o"></i>Label Career</a></li>                
                <li onclick="buka_halaman('mst_important_career','9')"><a><i class="fa fa-circle-o"></i>Important Career</a></li>
                <li onclick="buka_halaman('mst_job_career','9')"><a><i class="fa fa-circle-o"></i>Job Career</a></li>
                <li onclick="buka_halaman('mst_requirement_career','9')"><a><i class="fa fa-circle-o"></i>Requirement Career</a></li>
              </ul>
            </li>
            <li class="treeview" id="treeview10">
              <a>
                <i class="fa fa-pie-chart"></i><span>Intern</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_label_intern','10')"><a><i class="fa fa-circle-o"></i>Label Intern</a></li>
                <li onclick="buka_halaman('mst_list_intern','10')"><a><i class="fa fa-circle-o"></i>List Intern</a></li>
                <li onclick="buka_halaman('mst_page_intern','10')"><a><i class="fa fa-circle-o"></i>Page Intern</a></li>
              </ul>
            </li>            
            <li class="treeview" id="treeview11">
              <a>
                <i class="fa fa-database"></i> <span>EKSTRA </span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_user','11')"><a><i class="fa fa-circle-o"></i>User</a></li>
                <li onclick="buka_halaman('mst_message','11')"><a><i class="fa fa-circle-o"></i>Message</a></li>
                <!--<li onclick="buka_halaman('mst_otherpage','11')"><a><i class="fa fa-circle-o"></i>Other Page</a></li>-->
              </ul>
            </li>
           <!--<li class="treeview" id="treeview5">
              <a>
                <i class="fa fa-edit"></i> <span>KONFIGURASI</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('konf_logo','5')"><a><i class="fa fa-circle-o"></i> Ubah Logo</a></li>
                <li onclick="buka_halaman('konf_alamat','5')"><a><i class="fa fa-circle-o"></i> Ubah Alamat</a></li>
                <li onclick="buka_halaman('konf_pass','5')"><a><i class="fa fa-circle-o"></i> Ubah Password</a></li>
                <li class="admin-only" onclick="buka_halaman('konf_tmuser','5')"><a><i class="fa fa-circle-o"></i> Tambah User</a></li>
              </ul>
            </li> -->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

<script>
    var myLevel = "<?php echo $this->session->userdata("level") ?>";
    if (myLevel!="1"){
        $(".admin-only").hide();
    }
</script>    