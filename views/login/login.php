<div class="app__container app__container__Tablet">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-o-3-5 l-5 m-o-2 m-8 c-12">
                        <!-- Login form -->
                        <form action="./Controllers/loginController.php" method="POST">
                            <div class="login-form">
                                <div class="login-form__header">
                                    <h3 class="login-form__heading">Đăng Nhập</h3>
                                    <a href="../signup/sigup.php" class="login-form__switch-btn">Đăng Kí</a>
                                </div>

                                <div class="login-form__form">
                                    <div class="login-form__group">
                                        <input type="text" class="login-form__input" name="email" placeholder="Email của bạn">
                                    </div>
                                    <div class="login-form__group">
                                        <input type="password" class="login-form__input" name="password" placeholder="Mật khẩu của bạn" onmousedown="this.type='text'" onmouseup="this.type='password'">
                                    </div>
                                </div>

                                <div class="login-form__aside">
                                    <div class="login-form__help">
                                        <a href="" class="login-form__help-link login-form__help-forgot">Quên mật khẩu</a>
                                        <span class="login-form__help-separate"></span>
                                        <a href="" class="login-form__help-link">Cần trợ giúp?</a>
                                    </div>
                                </div>

                                <div class="login-form__controls">
                                    <button onclick="window.location.href='product.html' " class="btn btn--normal login-form__control-back">TRỞ LẠI</button>
                                    <button class="btn btn--primary">ĐĂNG KÝ</button>
                                </div>
                            </div>
                            <div class="login-form__socials">
                                <a href="#" class="login-form__socials--facebook btn btn--size-s btn--with-icon">
                                    <i class="login-form__socials-icon fab fa-facebook-square"></i>
                                    <span class="login-form__socials-label">Kết nối với Facebook</span>
                                </a>
                                <a href="#" class="login-form__socials--google btn btn--size-s btn--with-icon">
                                    <i class="login-form__socials-icon fab fa-google"></i>
                                    <span class="login-form__socials-label">Kết nối với Google</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
