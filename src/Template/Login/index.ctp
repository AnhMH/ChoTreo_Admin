<div class="formContainer">
    <form method="post" action="<?php echo $BASE_URL; ?>/login">
        <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken'); ?>"/>

        <div id="formLogin">
            <h2>ĐĂNG NHẬP</h2>
            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Email ..." name="email" required>

                <label for="password"><b>Mật khẩu</b></label>
                <input type="password" placeholder="Mật khẩu ..." name="password" required>
                
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>

                <button type="submit">Đăng nhập</button>
            </div>

            <div class="container footer">
                <div class="forgetpass"><a href="#">Quên mật khẩu?</a></div>
                <div class="register"><a href="<?php echo $BASE_URL;?>/dang-ky">Đăng ký</a>
            </div>
        </div>
    </form>
</div>
