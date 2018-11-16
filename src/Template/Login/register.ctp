<div id="formRegister">
    <form method="post" action="<?php echo $BASE_URL; ?>/dang-ky">
        <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken'); ?>"/>
        <div class="inputGroup inputGroup1">
            <label for="registerName" id="registerNameLabel">Tên</label>
            <input type="text" id="registerName" name="register_name" maxlength="254" required="required"/>
        </div>
        <div class="inputGroup inputGroup1">
            <label for="registerEmail" id="registerPasswordLabel">Email</label>
            <input type="email" id="registerEmail" name="register_email" maxlength="254" required="required"/>
        </div>
        <div class="inputGroup inputGroup2">
            <label for="registerPassword" id="registerPasswordLabel">Mật khẩu</label>
            <input type="password" id="registerPassword" name="register_password" required="required"/>
        </div>
        <div class="inputGroup inputGroup3">
            <input type="submit" name="register" value="Đăng ký"/>
        </div>
    </form>
</div>