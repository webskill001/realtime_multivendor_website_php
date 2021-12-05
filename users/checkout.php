<?php
include "includes/header.php";
include "includes/navbar.php";
?>
        <section id="content">
            <div id="breadcrumb-container">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <header class="content-title">
                            <h1 class="title">Checkout</h1>
                            <p class="title-desc">Quisque elementum nibh at dolor pellentesque, a eleifend libero
                                pharetra.</p>
                        </header>
                        <div class="xs-margin"></div>
                        <form action="#" id="checkout-form">
                            <div class="panel-group custom-accordion" id="checkout">
                                <div class="panel">
                                    <div class="accordion-header">
                                        <div class="accordion-title">1 Step: <span>Checkout Option</span></div><a
                                            class="accordion-btn opened" data-toggle="collapse"
                                            data-target="#checkout-option"></a>
                                    </div>
                                    <div id="checkout-option" class="collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <h2 class="checkout-title">New Customer</h2>
                                                    <p>Register with us for future convenience:</p>
                                                    <div class="xs-margin"></div>
                                                    <div class="input-group custom-checkbox sm-margin"><input
                                                            type="checkbox"> <span class="checbox-container"><i
                                                                class="fa fa-check"></i></span> Checkout as Guest</div>
                                                    <div class="input-group custom-checkbox sm-margin"><input
                                                            type="checkbox"> <span class="checbox-container"><i
                                                                class="fa fa-check"></i></span> Register</div>
                                                    <p>By creating an account with our store, you will be able to move
                                                        through the checkout process faster, store multiple shipping
                                                        addresses, view and track your orders in your account and more.
                                                    </p>
                                                    <div class="md-margin"></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <h2 class="checkout-title">Registered Customers</h2>
                                                    <p>If you have an account with us, please log in.</p>
                                                    <div class="xs-margin"></div>
                                                    <div class="input-group"><span class="input-group-addon"><span
                                                                class="input-icon input-icon-email"></span><span
                                                                class="input-text">Email&#42;</span></span> <input
                                                            type="text" required class="form-control input-lg"
                                                            placeholder="Your Email"></div>
                                                    <div class="input-group xs-margin"><span
                                                            class="input-group-addon"><span
                                                                class="input-icon input-icon-password"></span><span
                                                                class="input-text">Password&#42;</span></span> <input
                                                            type="text" required class="form-control input-lg"
                                                            placeholder="Your Password"></div><span
                                                        class="help-block text-right"><a href="#">Forgot your
                                                            password?</a></span>
                                                    <div class="input-group custom-checkbox sm-margin top-10px"><input
                                                            type="checkbox"> <span class="checbox-container"><i
                                                                class="fa fa-check"></i></span> Remember my password
                                                    </div>
                                                </div>
                                            </div><a href="#" class="btn btn-custom-2">CONTINUE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="accordion-header">
                                        <div class="accordion-title">2 Step: <span>Billing Information</span></div><a
                                            class="accordion-btn" data-toggle="collapse" data-target="#billing"></a>
                                    </div>
                                    <div id="billing" class="collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <h2 class="checkout-title">Your personal details</h2>
                                                    <div class="input-group"><span class="input-group-addon"><span
                                                                class="input-icon input-icon-user"></span><span
                                                                class="input-text">First Name&#42;</span></span> <input
                                                            type="text" required class="form-control input-lg"
                                                            placeholder="Your First Name"></div>
                                                    <div class="input-group"><span class="input-group-addon"><span
                                                                class="input-icon input-icon-user"></span><span
                                                                class="input-text">Last Name&#42;</span></span> <input
                                                            type="text" required class="form-control input-lg"
                                                            placeholder="Your Last Lame"></div>
                                                    <div class="input-group"><span class="input-group-addon"><span
                                                                class="input-icon input-icon-email"></span><span
                                                                class="input-text">Email&#42;</span></span> <input
                                                            type="text" required class="form-control input-lg"
                                                            placeholder="Your Email"></div>
                                                    <div class="input-group"><span class="input-group-addon"><span
                                                                class="input-icon input-icon-phone"></span><span
                                                                class="input-text">Telephone&#42;</span></span> <input
                                                            type="text" required class="form-control input-lg"
                                                            placeholder="Your Telephone"></div>
                                                    <div class="input-group"><span class="input-group-addon"><span
                                                                class="input-icon input-icon-fax"></span><span
                                                                class="input-text">Fax</span></span> <input type="text"
                                                            class="form-control input-lg" placeholder="Your Fax"></div>
                                                    <div class="input-group xlg-margin"><span
                                                            class="input-group-addon"><span
                                                                class="input-icon input-icon-company"></span><span
                                                                class="input-text">Company&#42;</span></span> <input
                                                            type="text" required class="form-control input-lg"
                                                            placeholder="Your Company"></div>
                                                    <div class="input-group"><span class="input-group-addon"><span
                                                                class="input-icon input-icon-password"></span><span
                                                                class="input-text">Password&#42;</span></span> <input
                                                            type="password" required class="form-control input-lg"
                                                            placeholder="Your Password"></div>
                                                    <div class="input-group xlg-margin"><span
                                                            class="input-group-addon"><span
                                                                class="input-icon input-icon-password"></span><span
                                                                class="input-text">Password&#42;</span></span> <input
                                                            type="password" required class="form-control input-lg"
                                                            placeholder="Your Password"></div>
                                                    <div class="input-group custom-checkbox sm-margin"><input
                                                            type="checkbox"> <span class="checbox-container"><i
                                                                class="fa fa-check"></i></span> I wish to subscribe to
                                                        the Venedor newsletter.</div>
                                                    <div class="input-group custom-checkbox sm-margin"><input
                                                            type="checkbox"> <span class="checbox-container"><i
                                                                class="fa fa-check"></i></span> My delivery and billing
                                                        addresses are the same.</div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <h2 class="checkout-title">Your Address</h2>
                                                    <div class="input-group"><span class="input-group-addon"><span
                                                                class="input-icon input-icon-address"></span><span
                                                                class="input-text">Address 1&#42;</span></span> <input
                                                            type="text" class="form-control input-lg"
                                                            placeholder="Your Address"></div>
                                                    <div class="input-group"><span class="input-group-addon"><span
                                                                class="input-icon input-icon-address"></span><span
                                                                class="input-text">Address 2&#42;</span></span> <input
                                                            type="text" required class="form-control input-lg"
                                                            placeholder="Your Address"></div>
                                                    <div class="input-group"><span class="input-group-addon"><span
                                                                class="input-icon input-icon-city"></span><span
                                                                class="input-text">City&#42;</span></span> <input
                                                            type="text" required class="form-control input-lg"
                                                            placeholder="Your City"></div>
                                                    <div class="input-group"><span class="input-group-addon"><span
                                                                class="input-icon input-icon-postcode"></span><span
                                                                class="input-text">Post Code&#42;</span></span> <input
                                                            type="text" required class="form-control input-lg"
                                                            placeholder="Your Post Code"></div>
                                                    <div class="input-group"><span class="input-group-addon"><span
                                                                class="input-icon input-icon-country"></span><span
                                                                class="input-text">Country*</span></span>
                                                        <div class="large-selectbox clearfix"><select id="country"
                                                                name="country" class="selectbox">
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
                                                        <div class="large-selectbox clearfix"><select id="state"
                                                                name="state" class="selectbox">
                                                                <option value="California">California</option>
                                                                <option value="Texas">Texas</option>
                                                                <option value="NewYork">NewYork</option>
                                                                <option value="Narnia">Narnia</option>
                                                                <option value="Jumanji">Jumanji</option>
                                                            </select></div>
                                                    </div>
                                                    <div class="input-group custom-checkbox md-margin"><input
                                                            type="checkbox"> <span class="checbox-container"><i
                                                                class="fa fa-check"></i></span> I have reed and agree to
                                                        the <a href="#">Privacy Policy</a>.</div><a href="#"
                                                        class="btn btn-custom-2">CONTINUE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="accordion-header">
                                        <div class="accordion-title">3 Step: <span>Delivery Details</span></div><a
                                            class="accordion-btn" data-toggle="collapse"
                                            data-target="#delivery-details"></a>
                                    </div>
                                    <div id="delivery-details" class="collapse">
                                        <div class="panel-body">
                                            <p>Details about delivery</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="accordion-header">
                                        <div class="accordion-title">4 Step: <span>Delivery Method</span></div><a
                                            class="accordion-btn" data-toggle="collapse"
                                            data-target="#delivery-method"></a>
                                    </div>
                                    <div id="delivery-method" class="collapse">
                                        <div class="panel-body">
                                            <p>Choose your delivery method.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="accordion-header">
                                        <div class="accordion-title">5 Step: <span>Payment Method</span></div><a
                                            class="accordion-btn" data-toggle="collapse"
                                            data-target="#payment-method"></a>
                                    </div>
                                    <div id="payment-method" class="collapse">
                                        <div class="panel-body">
                                            <p>Choose your payment method.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="accordion-header">
                                        <div class="accordion-title">6 Step: <span>Confirm Order</span></div><a
                                            class="accordion-btn opened" data-toggle="collapse"
                                            data-target="#confirm"></a>
                                    </div>
                                    <div id="confirm" class="collapse in">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table checkout-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="table-title">Product Name</th>
                                                            <th class="table-title">Product Code</th>
                                                            <th class="table-title">Unit Price</th>
                                                            <th class="table-title">Quantity</th>
                                                            <th class="table-title">SubTotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="item-name-col">
                                                                <figure><a href="#"><img
                                                                            src="images/products/compare1.jpg"
                                                                            alt="Lowlands Lace Blouse"></a></figure>
                                                                <header class="item-name"><a href="#">Lowlands Lace
                                                                        Blouse</a></header>
                                                                <ul>
                                                                    <li>Color: White</li>
                                                                    <li>Size: SM</li>
                                                                </ul>
                                                            </td>
                                                            <td class="item-code">MP125984154</td>
                                                            <td class="item-price-col"><span
                                                                    class="item-price-special">$1175</span></td>
                                                            <td>
                                                                <div class="custom-quantity-input"><input type="text"
                                                                        name="quantity" value="1"> <a href="#"
                                                                        onclick="return!1"
                                                                        class="quantity-btn quantity-input-up"><i
                                                                            class="fa fa-angle-up"></i></a> <a href="#"
                                                                        onclick="return!1"
                                                                        class="quantity-btn quantity-input-down"><i
                                                                            class="fa fa-angle-down"></i></a></div>
                                                            </td>
                                                            <td class="item-total-col"><span
                                                                    class="item-price-special">$1175</span> <a href="#"
                                                                    class="close-button"></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="item-name-col">
                                                                <figure><a href="#"><img
                                                                            src="images/products/compare2.jpg"
                                                                            alt="Samsung Galaxy Ace"></a></figure>
                                                                <header class="item-name"><a href="#">Samsung Galaxy
                                                                        Ace</a></header>
                                                                <ul>
                                                                    <li>Color: Black</li>
                                                                    <li>Size: XL</li>
                                                                </ul>
                                                            </td>
                                                            <td class="item-code">MP125984154</td>
                                                            <td class="item-price-col"><span
                                                                    class="item-price-special">$1475</span></td>
                                                            <td>
                                                                <div class="custom-quantity-input"><input type="text"
                                                                        name="quantity" value="1"> <a href="#"
                                                                        onclick="return!1"
                                                                        class="quantity-btn quantity-input-up"><i
                                                                            class="fa fa-angle-up"></i></a> <a href="#"
                                                                        onclick="return!1"
                                                                        class="quantity-btn quantity-input-down"><i
                                                                            class="fa fa-angle-down"></i></a></div>
                                                            </td>
                                                            <td class="item-total-col"><span
                                                                    class="item-price-special">$1475</span> <a href="#"
                                                                    class="close-button"></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="checkout-table-title" colspan="4">Subtotal:</td>
                                                            <td class="checkout-table-price">$399.44</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="checkout-table-title" colspan="4">Shipping:</td>
                                                            <td class="checkout-table-price">$6.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="checkout-table-title" colspan="4">Tax(0%):</td>
                                                            <td class="checkout-table-price">$0.00</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="checkout-total-title" colspan="4">
                                                                <strong>TOTAL:</strong></td>
                                                            <td class="checkout-total-price cart-total">
                                                                <strong>$434.50</strong></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="lg-margin"></div>
                                            <div class="text-right"><input type="submit" class="btn btn-custom-2"
                                                    value="CONFIRM ORDER"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="xlg-margin"></div>
                    </div>
                </div>
            </div>
        </section>
        <?php
include "includes/footer.php";
?>  