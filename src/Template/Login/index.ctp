<div class="login-container col-md-4 col-md-offset-4" id="login-form">
    <div class="login-frame clearfix">
        <h3 class="heading col-md-10 col-md-offset-1 padd-0"><i class="fa fa-lock"></i><?php echo __('LABEL_LOGIN');?></h3>
        <ul class="validation-summary-errors col-md-10 col-md-offset-1">
            <?php echo $this->Flash->render() ?>
        </ul>
        <div class="col-md-10 col-md-offset-1">
            <form class="form-horizontal login-form frm-sm" method="post" action="<?php echo $BASE_URL;?>/login">
                <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken');?>"/>
                <div class="form-group input-icon">
                    <label for="inputEmail3" class="sr-only control-label"><?php echo __('LABEL_EMAIL');?></label>
                    <input type="text" name="email"
                           value="<?php echo !empty($data['email']) ? $data['email'] : ''; ?>"
                           class="form-control" id="inputEmail3" placeholder="<?php echo __('LABEL_EMAIL');?>">
                    <i class="fa fa-user icon-right"></i>
                </div>
                <div class="form-group input-icon">
                    <label for="inputPassword3" class="sr-only control-label"><?php echo __('LABEL_PASSWORD');?></label>
                    <input type="password" name="password"
                           value="<?php echo !empty($data['password']) ? $data['password'] : ''; ?>"
                           class="form-control" id="inputPassword3" placeholder="<?php echo __('LABEL_PASSWORD');?>">
                    <i class="fa fa-lock icon-right"></i>
<!--                    <span>user: admin - pass: 12345678</span>-->
                </div>

                <div class="form-group">

                    <input type="submit" name="login" value="<?php echo __('LABEL_LOGIN');?>" class="btn btn-primary btn-sm"/>
                </div>
            </form>
        </div>
    </div>

    <div class="link-action text-center">
        <div class="col-sm-6 col-xs-12">
            <a href="<?php echo $BASE_URL;?>/forgetpassword" style="display:inline-block; margin-top: 5px;" class="fg-passw"><?php echo __('LABEL_FORGET_PASSWORD');?></a>
        </div>
        <div class="col-sm-6 col-xs-12">
            <a href="<?php echo $BASE_URL;?>/register" style="display:inline-block; margin-top: 5px;" class="register"><?php echo __('LABEL_REGISTER');?></a>
        </div>

    </div>
</div>