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
<!--            <li class="header">MAIN NAVIGATION</li>-->
            <li class="active treeview" id="treeview1" onclick="buka_halaman('beranda','1')"><a><i class="fa fa-dashboard"></i><span>BERANDA</span></a></li>
            <li class="treeview" id="treeview2">
              <a>
                <i class="fa fa-database"></i> <span>Home Page</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_banner_homepage','2')"><a><i class="fa fa-circle-o"></i>Banner</a></li>
                <li onclick="buka_halaman('mst_label_homepage','2')"><a><i class="fa fa-circle-o"></i>Label</a></li>
                <li onclick="buka_halaman('mst_contact_homepage','2')"><a><i class="fa fa-circle-o"></i>Contact</a></li>
                <li onclick="buka_halaman('mst_seo_homepage','2')"><a><i class="fa fa-circle-o"></i>SEO</a></li>
                <li onclick="buka_halaman('mst_services_homepage','2')"><a><i class="fa fa-circle-o"></i>Services</a></li>
                <li onclick="buka_halaman('mst_vissio_homepage','2')"><a><i class="fa fa-circle-o"></i>Vission</a></li>
                <li onclick="buka_halaman('mst_whychoose_homepage','2')"><a><i class="fa fa-circle-o"></i>Why Choose</a></li>
              </ul>
            </li>
            <li class="treeview" id="treeview3">
              <a>
                <i class="fa fa-database"></i> <span>About US</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_banner_aboutus','3')"><a><i class="fa fa-circle-o"></i>Banner</a></li>
                <li onclick="buka_halaman('mst_lable_aboutus','3')"><a><i class="fa fa-circle-o"></i>Label</a></li>
                <li onclick="buka_halaman('mst_ourgoal_aboutus','3')"><a><i class="fa fa-circle-o"></i>Our Goal</a></li>
                <li onclick="buka_halaman('mst_ourskill_aboutus','3')"><a><i class="fa fa-circle-o"></i>Our Skill</a></li>
                <li onclick="buka_halaman('mst_skillvalue_aboutus','3')"><a><i class="fa fa-circle-o"></i>Skill Value</a></li>
                <li onclick="buka_halaman('mst_whychoose_aboutus','3')"><a><i class="fa fa-circle-o"></i>Why Choose</a></li>
              </ul>
            </li>
            <li class="treeview" id="treeview4">
              <a>
                <i class="fa fa-database"></i> <span>Portfolio</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_portfolio','4')"><a><i class="fa fa-circle-o"></i>portfolio</a></li>
                <li onclick="buka_halaman('mst_category_portfolio','4')"><a><i class="fa fa-circle-o"></i> Kategory portfolio</a></li>
                <li onclick="buka_halaman('mst_label_portfolio','4')"><a><i class="fa fa-circle-o"></i>Label portfolio</a></li>
              </ul>
            </li>
            <li class="treeview" id="treeview5">
              <a>
                <i class="fa fa-pie-chart"></i><span>Career</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_important_career','5')"><a><i class="fa fa-circle-o"></i> Important Career</a></li>
                <li onclick="buka_halaman('mst_job_career','5')"><a><i class="fa fa-circle-o"></i> Job Career </a></li>
                <li onclick="buka_halaman('mst_label_career','5')"><a><i class="fa fa-circle-o"></i> Label Career</a></li>
                <li onclick="buka_halaman('mst_requirement_career','5')"><a><i class="fa fa-circle-o"></i> Requirement Career</a></li>
              </ul>
            </li>
            <li class="treeview" id="treeview6">
              <a>
                <i class="fa fa-database"></i> <span>Blog</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_blog','6')"><a><i class="fa fa-circle-o"></i>Blog</a></li>
                <li onclick="buka_halaman('mst_category_blog','6')"><a><i class="fa fa-circle-o"></i>Category</a></li>
                <li onclick="buka_halaman('mst_tag_blog','6')"><a><i class="fa fa-circle-o"></i>Tag</a></li>
              </ul>
            </li>
            <li class="treeview" id="treeview7">
              <a>
                <i class="fa fa-database"></i> <span>Services</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_services','7')"><a><i class="fa fa-circle-o"></i>Services</a></li>
                <li onclick="buka_halaman('mst_banner_services','7')"><a><i class="fa fa-circle-o"></i>Banner</a></li>
                <li onclick="buka_halaman('mst_label_services','7')"><a><i class="fa fa-circle-o"></i>Label</a></li>
              </ul>
            </li>

            <li class="treeview" id="treeview7">
              <a>
                <i class="fa fa-database"></i> <span>Contact US</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_company_contactus','7')"><a><i class="fa fa-circle-o"></i>Company</a></li>
                <li onclick="buka_halaman('mst_label_contactus','7')"><a><i class="fa fa-circle-o"></i>Label</a></li>
              </ul>
            </li>

            <li class="treeview" id="treeview7">
              <a>
                <i class="fa fa-database"></i> <span>EKSTRA </span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li onclick="buka_halaman('mst_message','7')"><a><i class="fa fa-circle-o"></i>Message</a></li>
                <li onclick="buka_halaman('mst_otherpage','7')"><a><i class="fa fa-circle-o"></i>Other Page</a></li>
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