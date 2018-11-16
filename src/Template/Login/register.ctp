<div class="formContainer">
    <form method="post" action="<?php echo $BASE_URL; ?>/dang-ky">
        <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken'); ?>"/>

        <div id="formLogin">
            <h2>ĐĂNG KÝ</h2>
            <div class="container">
                <label for="name"><b>Tên cửa hàng</b></label>
                <input type="text" placeholder="Tên cửa hàng ..." name="name" required>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Email ..." name="email" required>

                <label for="password"><b>Mật khẩu</b></label>
                <input type="password" placeholder="Mật khẩu ..." name="password" required>
                <label for="re_password"><b>Xác nhận mật khẩu</b></label>
                <input type="password" placeholder="Xác nhận mật khẩu ..." name="re_password" required>
                
                <label>
                    Bằng việc đăng kí, bạn đã đồng ý với ChoTreo.Com về&nbsp;<a href="<?php echo $BASE_URL_FRONT;?>/dieu-khoan-dich-vu" target="_blank">Điều khoản dịch vụ</a>&nbsp;&amp;&nbsp;<a href='<?php echo $BASE_URL_FRONT;?>/chinh-sach-bao-mat' target="_blank">Chính sách bảo mật</a>
                </label>

                <button type="submit" class="btnRegister">Đăng ký</button>
                <button type="button" onclick="window.location.href='<?php echo $BASE_URL;?>/login';">Đăng nhập</button>
            </div>
        </div>
    </form>
</div>
