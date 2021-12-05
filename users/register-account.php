<?php
include "includes/header.php";
include "includes/navbar.php";
?>
        <section id="content">
            <div id="breadcrumb-container">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Register Account</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <header class="content-title">
                            <h1 class="title">Register Account</h1>
                            <p class="title-desc">If you already have an account, please login at <a href="#">login
                                    page</a>.</p>
                        </header>
                        <div class="xs-margin"></div>
                        <form action="#" id="register-form">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <fieldset>
                                        <h2 class="sub-title">YOUR PERSONAL DETAILS</h2>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-user"></span><span
                                                    class="input-text">First Name&#42;</span></span> <input type="text"
                                                required class="form-control input-lg" placeholder="Your First Name">
                                        </div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-user"></span><span
                                                    class="input-text">Last Name&#42;</span></span> <input type="text"
                                                required class="form-control input-lg" placeholder="Your Last Name">
                                        </div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-email"></span><span
                                                    class="input-text">Email&#42;</span></span> <input type="text"
                                                required class="form-control input-lg" placeholder="Your Email"></div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-phone"></span><span
                                                    class="input-text">Telephone&#42;</span></span> <input type="text"
                                                required class="form-control input-lg" placeholder="Your Telephone">
                                        </div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-fax"></span><span
                                                    class="input-text">Fax</span></span> <input type="text"
                                                class="form-control input-lg" placeholder="Your Fax"></div>
                                    </fieldset>
                                    <fieldset>
                                        <h2 class="sub-title">YOUR PASSWORD</h2>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-password"></span><span
                                                    class="input-text">Password&#42;</span></span> <input
                                                type="password" required class="form-control input-lg"
                                                placeholder="Your Password"></div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-password"></span><span
                                                    class="input-text">Password&#42;</span></span> <input
                                                type="password" required class="form-control input-lg"
                                                placeholder="Your Password"></div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <fieldset>
                                        <h2 class="sub-title">YOUR ADDRESS</h2>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-company"></span><span
                                                    class="input-text">Company&#42;</span></span> <input type="text"
                                                required class="form-control input-lg" placeholder="Your Company"></div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-address"></span><span
                                                    class="input-text">Address 1&#42;</span></span> <input type="text"
                                                class="form-control input-lg" placeholder="Your Address"></div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-address"></span><span
                                                    class="input-text">Address 2&#42;</span></span> <input type="text"
                                                required class="form-control input-lg" placeholder="Your Address"></div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-city"></span><span
                                                    class="input-text">City&#42;</span></span> <input type="text"
                                                required class="form-control input-lg" placeholder="Your City"></div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-postcode"></span><span
                                                    class="input-text">Post Code&#42;</span></span> <input type="text"
                                                required class="form-control input-lg" placeholder="Your Post Code">
                                        </div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-country"></span><span
                                                    class="input-text">Country*</span></span>
                                            <div class="large-selectbox clearfix"><select id="country" name="country"
                                                    class="selectbox">
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="France">France</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Spain">Spain</option>
                                                </select></div>
                                        </div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon input-icon-region"></span><span
                                                    class="input-text">Region / State&#42;</span></span>
                                            <div class="large-selectbox clearfix"><select id="state" name="state"
                                                    class="selectbox">
                                                    <option value="California">California</option>
                                                    <option value="Texas">Texas</option>
                                                    <option value="NewYork">NewYork</option>
                                                    <option value="Narnia">Narnia</option>
                                                    <option value="Jumanji">Jumanji</option>
                                                </select></div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <fieldset class="half-margin">
                                        <h2 class="sub-title">NEWSLETTER</h2>
                                        <div class="input-desc-box"><span class="separator icon-box">&plus;</span>I wish
                                            to subscribe to the Venedor newsletter.</div>
                                        <div class="input-group custom-checkbox"><input type="checkbox"> <span
                                                class="checbox-container"><i class="fa fa-check"></i></span> I have reed
                                            and agree to the <a href="#">Privacy Policy</a>.</div>
                                    </fieldset><input type="submit" value="CREATE MY ACCCOUNT"
                                        class="btn btn-custom-2 md-margin">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php
include "includes/footer.php";
?>  