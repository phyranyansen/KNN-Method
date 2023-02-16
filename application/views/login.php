
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="/DXR.axd?r=1_68,1_69,1_209,0_4841-7vV7n&p=3a56c075" /><title>
	KNN-METHOD LOGIN
</title>
<link rel="icon" type="image/x-icon" href="<?= base_url().'assets/img/image-front.png'; ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css" />
<link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css';?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?= base_url().'assets/content/style.css';?>" />
</head>
<body>
    <form action="#" id="loginForm">
        <div class="sufee-login d-flex align-content-center flex-wrap">
            <div class="container">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="<?= base_url().'assets/img/image-front.png'; ?>" style="width: 300px; height: 200px;"/>
                        </a>
                        <p style='font-family: Bradley Hand, cursive; font-weight:bold'>KNN-METHOD</p>
                    </div>
                    <div class="login-form">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="<?= base_url('sign-up') ?>">Sign Up</a></p>
                        </div>

                        <p style="text-align: center; padding-top: 10px;">
                            <span class="dxeBase_Office365" id="ASPxLabel1" style="color:OrangeRed;"></span>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </form>

    
<script>
    $(document).ready(function() {
        $('#loginForm').submit(function(e) {
                //header form
                var username     = $('#username').val();
                var password     = $('#password').val();
                $.ajax({
                    url: "<?= base_url('sign-in');?>",
                    type: "POST",
                    data:new FormData(this), 
                    processData:false,
                    contentType:false,
                    cache: false,
                    success: function(data){
                        var msg = JSON.parse(data);
                           if(msg.statusCode==200)
                           {
                               Swal.fire('Success!', msg.pesan, 'success');
                               timer_reload();
                            }else{
                              Swal.fire('Oops,', msg.pesan, 'error');

                          }
                        },
                    error : function(data) {
                        Swal.fire('Oops,', 'Sign-in gagal!', 'error');
                            }
                        });   
        
                e.preventDefault(); 
                });
            }); 

        function timer_reload()
        {
        setTimeout(function(){
            window.location.href = "<?php echo site_url('home'); ?>";
            }, 1400);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?= base_url().'assets/boostrap/plugins/sweetalert2/sweetalert2.min.js';?>"></script>
    <script src="<?= base_url().'assets/content/main.js';?>"></script>
    
    

</body>
</html>