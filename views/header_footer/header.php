<header class="header">
    <div class="grid wide">
        <!-- Nav pc -->
        <nav class="navbar hide-on-mobile-tablet">
            <ul class="navbar__list">
                <li class="navbar__item navbar__item--separate navbar__item--has-qr">
                    Vào cửa hàng trên ứng dụng

                    <!-- Navbar QR Code -->
                    <div class="navbar__qr">
                        <img src="../img/QRCode.png" alt="QRCode" class="navbar__qr--img">
                        <div class="navbar__apps">
                            <a href="" class="navbar__qr--link"><img src="../img/AppStore.png" alt="App Store"
                                    class="navbar__app--img"></a>
                            <a href="" class="navbar__qr--link"><img src="../img/GooglePlay.png" alt="Google Play"
                                    class="navbar__app--img"></a>
                        </div>
                    </div>
                </li>
                <li class="navbar__item">
                    <a href="/index.php" class="navbar__title--no-pointer">Landing Page</a>
                </li>
            </ul>
            <ul class="navbar__list">
                <li class="navbar__item navbar__item--has-notify">
                    <a href="" class="navbar__item--link">
                        <i class="navbar__icon far fa-bell"></i>
                        Thông báo
                    </a>
                    <div class="navbar__notify">
                        <header class="navbar__notify-header">
                            <h3>Thông Báo Mới Nhận</h3>
                        </header>
                        <ul class="navbar__notify-list">
                            <li class="navbar__notify-item navbar__notify-item--view">
                                <a href="" class="navbar__notify-link">
                                    <img src="https://64.media.tumblr.com/2fac5353703617bbfd493efa51f3d802/54c5c0bbcc3611c7-03/s640x960/2bac1bc59ca3e2f3ae588205990f775f384f3aac.jpg"
                                        alt="" class="navbar__notify-img">
                                    <div class="navbar__notify-info">
                                        <span class="navbar__notify-name">Mỹ phẩm Ohi chính hãng</span>
                                        <span class="navbar__notify-description">Mô tả Mỹ phẩm Ohi chính hãng</span>
                                    </div>
                                </a>
                            </li>
                            <li class="navbar__notify-item">
                                <a href="" class="navbar__notify-link">
                                    <img src="https://64.media.tumblr.com/2fac5353703617bbfd493efa51f3d802/54c5c0bbcc3611c7-03/s640x960/2bac1bc59ca3e2f3ae588205990f775f384f3aac.jpg"
                                        alt="" class="navbar__notify-img">
                                    <div class="navbar__notify-info">
                                        <span class="navbar__notify-name">Mỹ phẩm Ohi chính hãng nguồn gốc các sản phẩm
                                            Ohi</span>
                                        <span class="navbar__notify-description">Mô tả Mỹ phẩm Ohi chính hãng</span>
                                    </div>
                                </a>
                            </li>
                            <li class="navbar__notify-item">
                                <a href="" class="navbar__notify-link">
                                    <img src="https://64.media.tumblr.com/2fac5353703617bbfd493efa51f3d802/54c5c0bbcc3611c7-03/s640x960/2bac1bc59ca3e2f3ae588205990f775f384f3aac.jpg"
                                        alt="" class="navbar__notify-img">
                                    <div class="navbar__notify-info">
                                        <span class="navbar__notify-name">Mỹ phẩm Ohi chính hãng</span>
                                        <span class="navbar__notify-description">Mô tả Mỹ phẩm Ohi chính hãng</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <footer class="navbar__notify-footer">
                            <a href="" class="navbar__notify-footer-btn">Xem tất cả</a>
                        </footer>
                    </div>
                </li>
                <li class="navbar__item">
                    <a href="" class="navbar__item--link">
                        <i class="navbar__icon far fa-question-circle"></i>
                        Trợ giúp
                    </a>
                </li>
                <li class="navbar__item navbar__item--bold navbar__item--separate">
                    <a class="navbar__user js-user-register" href="register.html">Đăng kí</a>
                </li>
                <li class="navbar__item navbar__item--bold">
                    <a class="navbar__user js-user-login" href="login.html">Đăng nhập</a>
                </li>

                <!-- <li class="navbar__item navbar__user">
                    <img src="https://64.media.tumblr.com/2fac5353703617bbfd493efa51f3d802/54c5c0bbcc3611c7-03/s640x960/2bac1bc59ca3e2f3ae588205990f775f384f3aac.jpg" alt="" class="navbar__user-img">
                    <span class="navbar__user-name">TuanLe</span>

                    <ul class="navbar__user-menu">
                        <li class="navbar__user-item">
                            <a href="">Tài khoản của tôi</a>
                        </li>
                        <li class="navbar__user-item">
                            <a href="">Địa chỉ của tôi</a>
                        </li>
                        <li class="navbar__user-item">
                            <a href="">Đơn mua</a>
                        </li>
                        <li class="navbar__user-item navbar__user-item--separate">
                            <a href="">Đăng xuất</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </nav>

        <!-- Header with search-->
        <div class="header-with-search">

            <!-- Nav mobile - tablet -->
            <label for="nav-mobile-input" class="nav__bars-btn">
                <i class="nav__bars-btn-icon fas fa-bars"></i>
            </label>

            <input type="checkbox" hidden class="nav__input" id="nav-mobile-input">

            <label for="nav-mobile-input" class="nav__overlay"></label>

            <nav class="nav__mobile">
                <label for="nav-mobile-input" class="nav__mobile-close">
                    <i class="fas fa-times"></i>
                </label>
                <ul class="nav__mobile-list">
                    <li>
                        <a href="product.html" class="nav__mobile-link">
                            <span><i class="nav__mobile-icon fas fa-home"></i></span>
                            Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="" class="nav__mobile-link">
                            <span><i class="nav__mobile-icon fas fa-bell"></i></span>
                            Thông báo
                        </a>
                    </li>
                    <li>
                        <a href="login.html" class="nav__mobile-link">
                            <span><i class="nav__mobile-icon fas fa-lock"></i></span>
                            Đăng nhập
                        </a>
                    </li>
                    <li>
                        <a href="register.html" class="nav__mobile-link">
                            <span><i class="nav__mobile-icon fas fa-user-plus"></i></span>
                            Đăng kí
                        </a>
                    </li>
                    <li>
                        <a href="user.html" class="nav__mobile-link">
                            <span><i class="nav__mobile-icon fas fa-user-plus"></i></span>
                            Tài khoản
                        </a>
                    </li>
                    <li>
                        <a href="" class="nav__mobile-link">
                            <span><i class="nav__mobile-icon fas fa-sign-out-alt"></i></span>
                            Đăng xuất
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="header__logo">
                <a href="product.html" class="header__logo-link">
                    <img src="views/img/logo2.png" alt="Logo" class="header__logo-img">
                </a>
            </div>

            <input type="checkbox" hidden id="mobile-search-checkbox" class="header__search-checkbox">

            <div class="header__search">
                <div class="header__search-input-wrap">
                    <input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm">

                    <!-- Search history -->
                    <!-- <div class="header__search-history">
                        <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                        <ul class="header__search-history-list">
                            <li class="header__search-history-item">
                                <a href="">IU</a>
                            </li>
                            <li class="header__search-history-item">
                                <a href="">Rau muống</a>
                            </li>
                            <li class="header__search-history-item">
                                <a href="">Cà rốt</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
                <button class="header__search-btn">
                    <i class="header__search-btn-icon fas fa-search"></i>
                </button>
            </div>

            <label for="mobile-search-checkbox" class="header__mobile-search">
                <i class="header__mobile-search-icon fas fa-search"></i>
            </label>

            <!-- Cart -->
            <div class="header__cart">
                <div class="header__cart-wrap">
                    <i class="header__cart-icon fas fa-shopping-cart"></i>
                    <span class="header__cart-notice">3</span>

                    <!-- No cart: thêm class: header__cart-list--no-cart -->
                    <div class="header__cart-list">
                        <img src="/assets/img/no-cart.png" alt="" class="header__cart-no-cart-img">
                        <span class="header__cart-list-no-cart-msg">Chưa có sản phẩm</span>

                        <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                        <ul class="header__cart-list-item">
                            <!-- Cart Item-->
                            <li class="header__cart-item">
                                <img src="https://i.pinimg.com/564x/9c/57/c8/9c57c89f68786e869223d78016620387.jpg"
                                    alt="cart-product" class="header__cart-img">
                                <div class="header__cart-item-info">
                                    <div class="header__cart-item-head">
                                        <h5 class="header__cart-item-name">Bộ kem chống nắng</h5>
                                        <div class="header__cart-price-wrap">
                                            <span class="header__cart-item-price">2.000.000đ</span>
                                            <span class="header__cart-item-multiply">x</span>
                                            <span class="header__cart-item-quantity">2</span>
                                        </div>
                                    </div>
                                    <div class="header__cart-item-body">
                                        <span class="header__cart-item-description">Phân loại hàng: Bạc</span>
                                        <span class="header__cart-item-remove">Xóa</span>
                                    </div>
                                </div>
                            </li>
                            <li class="header__cart-item">
                                <img src="https://i.pinimg.com/564x/98/12/3e/98123eeae4c3d37e28795c6d1e2e9871.jpg"
                                    alt="cart-product" class="header__cart-img">
                                <div class="header__cart-item-info">
                                    <div class="header__cart-item-head">
                                        <h5 class="header__cart-item-name">Bộ kem chống nắng</h5>
                                        <div class="header__cart-price-wrap">
                                            <span class="header__cart-item-price">2.000.000đ</span>
                                            <span class="header__cart-item-multiply">x</span>
                                            <span class="header__cart-item-quantity">2</span>
                                        </div>
                                    </div>
                                    <div class="header__cart-item-body">
                                        <span class="header__cart-item-description">Phân loại hàng: Bạc</span>
                                        <span class="header__cart-item-remove">Xóa</span>
                                    </div>
                                </div>
                            </li>
                            <li class="header__cart-item">
                                <img src="https://i.pinimg.com/564x/a0/50/39/a0503942f4e559d39186ea5557f4b22c.jpg"
                                    alt="cart-product" class="header__cart-img">
                                <div class="header__cart-item-info">
                                    <div class="header__cart-item-head">
                                        <h5 class="header__cart-item-name">Bộ kem chống nắng</h5>
                                        <div class="header__cart-price-wrap">
                                            <span class="header__cart-item-price">2.000.000đ</span>
                                            <span class="header__cart-item-multiply">x</span>
                                            <span class="header__cart-item-quantity">2</span>
                                        </div>
                                    </div>
                                    <div class="header__cart-item-body">
                                        <span class="header__cart-item-description">Phân loại hàng: Bạc</span>
                                        <span class="header__cart-item-remove">Xóa</span>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <a href="#" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                    </div>
                </div>

            </div>

            <div class="header__cart-mobile">
                <a href="cart.html" class="header__cart-mobile-link">
                    <i class="header__cart-icon-mobile fas fa-shopping-cart"></i>
                </a>
            </div>
        </div>
    </div>
    <ul class="header__sort-bar header__sort-bar--disabled">
        <li class="header__sort-item">
            <a href="" class="header__sort-link">Liên quan</a>
        </li>
        <li class="header__sort-item header__sort-item--active">
            <a href="" class="header__sort-link">Mới nhất</a>
        </li>
        <li class="header__sort-item">
            <a href="" class="header__sort-link">Bán chạy</a>
        </li>
        <li class="header__sort-item">
            <a href="" class="header__sort-link">Giá</a>
        </li>
    </ul>
</header>