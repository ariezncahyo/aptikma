<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APTIKMA | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
          <span><b>APTIKMA</b> Login</span>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in</p>
        <form id="id_form_login" method="post">
          <div class="form-group has-feedback">
            <input type="text" id="id_login_username" required class="form-control" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" id="id_login_password" required class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-6">
                <img id="load-login" class="center-block" src="<?php echo base_url().'assets/admin/img/ajax-loader.gif' ?>" style="display: none;" />
                <p id="notif-login" class="pull-right" style="display: none; color: #000;font-size: 11px;" > Login Berhasilllllllllll</p>
            </div><!-- /.col -->
            <div class="col-xs-6">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
            <div class="row">
                <div class="col-xs-8">
<!--                <a href="#">I forgot my password</a><br>-->
                </div>
            </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
    <script>
        $("#id_form_login").submit(function (e){
            e.preventDefault();
            $("#load-login").show();
            $.ajax({
                url: "<?php echo base_url().'admin/login/proses_login/'; ?>",
                data: {"username":$("#id_login_username").val(),
                       "password":$("#id_login_password").val()},
                type: 'POST',
                dataType: 'json',
                success: function (data, textStatus, jqXHR) {
                    console.log('OK');
                    $("#notif-login").text(data.status);
                    $("#load-login").fadeOut(1000,function (){
                        $("#notif-login").show();
                        $("#notif-login").fadeOut(3000,function (){
                                window.location.href="<?php echo base_url().'admin/mainpage'; ?>";
                            });
                        });
                    },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('NO');
                    
                }
            });
        });
    </script>
  </body>
</html>