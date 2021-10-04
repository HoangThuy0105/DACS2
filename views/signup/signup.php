<form action="./Controllers/signupController.php" method="POST">
<div class="app__container app__container__Tablet">
    <div class="grid wide">
        <div class="row">
            <div class="col l-o-3-5 l-5 m-o-2 m-8 c-12">
                <!-- Register form -->
                <div class="register-form">
                    <div class="register-form__header">
                        <h3 class="register-form__heading">Đăng Ký</h3>
                        <a href="login.html" class="register-form__switch-btn">Đăng nhập</a>
                    </div>

                    <div class="register-form__form">
                        <div class="register-form__group">
                            <input type="text" class="register-form__input" name="email" placeholder="Email của bạn">
                        </div>
                        <div class="register-form__group">
                            <input type="password" class="register-form__input" name="password" placeholder="Mật khẩu của bạn"
                                onmousedown="this.type='text'" onmouseup="this.type='password'">
                        </div>
                        <div class="register-form__group">
                            <input type="password" class="register-form__input" name="retypepassword" placeholder="Xác nhận mật khẩu"
                                onmousedown="this.type='text'" onmouseup="this.type='password'">
                        </div>
                    </div>

                    <div class="register-form__aside">
                        <p class="register-form__policy-text">
                            Bằng việc đăng kí, bạn đồng ý với TuanLe về
                            <a href="" class="register-form__text-link">Điều khoản dịch vụ </a>&
                            <a href="" class="register-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>

                    <div class="register-form__controls">
                        <button onclick="window.location.href='product.html' "
                            class="btn btn--normal register-form__control-back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>