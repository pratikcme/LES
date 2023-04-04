<style type="text/css">
  label.error {
    color: red;
    position: relative;
    top: -17px;
}
</style>
<section class="p-100 bg-cream">
<div class="container">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-title">
          <h1><?=$this->lang->line('forgotten')?><br><?=$this->lang->line('Your password')?></h1>
        </div>
      </div>
      <div class="col-md-12">
        <form id="ForgetForm" class="login-form register-form" method="post" action="<?=base_url().'login/forget_password'?>">
          
          <div class="input-wrapper">
            <span><i class="fas fa-envelope"></i></span>
            <input type="text" name="email" placeholder="<?=$this->lang->line('Enter Email*')?>">
          </div>
          <label for="email" class="error"><?=@form_error('email')?></label>

          <button type="submit" id="btnSubmit" class="btn create-btn"><?=$this->lang->line('Reset Password')?></button>

          <p><?=$this->lang->line('Go Back:')?> <a href="<?=base_url().'login'?>"> <?=$this->lang->line('login')?> </a></p>
        </form>
      </div>

  
    </div>
  </div>
</section>  