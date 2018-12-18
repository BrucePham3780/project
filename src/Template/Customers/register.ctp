<!DOCTYPE html>
<html lang="en">
<head>
   <title>Login V4</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--===============================================================================================-->   
   <link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="/vendor2/bootstrap/css/bootstrap.min.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="/vendor2/animate/animate.css">
   <!--===============================================================================================-->   
   <link rel="stylesheet" type="text/css" href="/vendor2/css-hamburgers/hamburgers.min.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="/vendor2/animsition/css/animsition.min.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="/vendor2/select2/select2.min.css">
   <!--===============================================================================================-->   
   <link rel="stylesheet" type="text/css" href="/vendor2/daterangepicker/daterangepicker.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="/css/util1.css">
   <link rel="stylesheet" type="text/css" href="/css/main1.css">
   <!--===============================================================================================-->
</head>

<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
        <?= $this->Form->create($user2,[
          'class'=>'login100-form validate-form',
          'url' => ['controller' => 'customers', 'action' => 'register']
        ]) ?>
          <span class="login100-form-title p-b-49">
            Register
          </span>

          <div class=" validate-input m-b-23 row" >
            <div class="wrap-input100 col-lg-5 col-md-6 col-sm-12 col-xs-12">
              <span class="label-input100">User Name</span>
              <?=$this->Form->control('Register.name',[
                'class' => 'input100',
                'type' => 'text',
                'placeholder' => 'Type your email',
                'id' => false,
                'label' => false
              ])?> 
              <span class="focus-input100"></span>
            </div>
            
            <div class=" col-lg-2 col-md-2 col-sm-12" >
              
            </div>

            <div class="wrap-input100 col-lg-5 col-md-6 col-sm-12 col-xs-12">
              <span class="label-input100">Email</span>
              <?=$this->Form->control('Register.email',[
                'class' => 'input100',
                'type' => 'text',
                'placeholder' => 'Type your email',
                'id' => false,
                'label' => false
              ])?> 
              <span class="focus-input100"></span>
            </div>
            <div class=" col-lg-1 col-md-2 col-sm-12 col-xs-12 " >
              
            </div>
            
          </div>

          <div class=" validate-input m-b-23 row">
            <div class="wrap-input100 col-lg-5 col-md-6 col-sm-12 col-xs-12" >
              <span class="label-input100">Password</span>
              <?=$this->Form->control('Register.password',[
                'class' => 'input100',
                'type' => 'text',
                'placeholder' => 'Type your password',
                'label' => false
              ])?>             
              <span class="focus-input100"></span>
            </div>
            
          <div class=" col-lg-2 col-md-2 col-sm-12 col-xs-12 " >
            
          </div>

            <div class="wrap-input100 col-lg-5 col-md-6 col-sm-12 col-xs-12">
              <span class="label-input100">Address</span>
              <?=$this->Form->control('Register.address',[
                'class' => 'input100',
                'type' => 'text',
                'placeholder' => 'Type your address',
                'label' => false
              ])?> 
            <span class="focus-input100"></span>
            </div>
            
          </div>

          <div class="validate-input m-b-23 row" >
            <div class="wrap-input100 col-lg-5 col-md-6 col-sm-12 col-xs-12" >
              <span class="label-input100">Phone Numbers</span>
              <?=$this->Form->control('Register.phoneNum',[
                'class' => 'input100',
                'type' => 'text',
                'placeholder' => 'Type your phone numbers',
                'label' => false
              ])?> 
              <span class="focus-input100"></span>
            </div>
            <div class=" col-lg-2 col-md-2 col-sm-12 col-xs-12 " >
            </div>
            <div class=" col-lg-5 col-md-6 col-sm-12 col-xs-12">
              <?php
                echo $this->Html->image('avatar_user.jpg', array(
                    'id'=>'preview_img',
                    'width'=>'80px',
                    'height'=>'80px'
                ));
                ?> 
          </div>

          </div>
      
        <div class=" validate-input m-b-23 row">
            <div class=" col-lg-5 col-md-6 col-sm-12 col-xs-12" >
             
            </div>
            
          <div class=" col-lg-2 col-md-2 col-sm-12 col-xs-12 " >
            
          </div>

          <div class=" col-lg-5 col-md-6 col-sm-12 col-xs-12">
               <?php                
                echo $this->Form->control('Register.images' ,array(
                    'id'=>'imgInp',
                    'type' => 'file',
                    'placeholder'=>'Enter name of images...',
                    'label'=> false,
                    'onchange'=>'imageURL(this)'

                ));
                ?>
          </div>
            
        </div>
            
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
             
              <?= $this->Form->button('Register',['type'=>'submit','class'=>'login100-form-btn']) ?>
            </div>
          </div>

          <div class="txt1 text-center p-t-54 p-b-20">
          </div>

          <div class="flex-c-m">
            <a href="#" class="login100-social-item bg1">
              <i class="fa fa-facebook"></i>
            </a>

            <a href="#" class="login100-social-item bg2">
              <i class="fa fa-twitter"></i>
            </a>

            <a href="#" class="login100-social-item bg3">
              <i class="fa fa-google"></i>
            </a>
          </div>

        <?= $this->Form->end() ?>

      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="/vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor2/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor2/bootstrap/js/popper.js"></script>
<script src="/vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor2/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor2/daterangepicker/moment.min.js"></script>
<script src="/vendor2/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/vendor2/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/js/main2.js"></script>

<script src="http://code.jquery.com/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script type="text/javascript">
    function imageURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#preview_img').attr('src', e.target.result)
                .width('auto')
                .height('auto');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>