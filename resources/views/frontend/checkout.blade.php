@extends('frontend.layouts.main')
@section('title', 'checkout')
@section('main-container')
    <!-- rts breadcrumba area start -->
    <div class="rts-breadcrumb-area ptb_sm--100 bg-breadcrumb bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            <span class="shape"></span>
                            <span class="shape"></span>
                            <span class="shape"></span>
                        </div>
                        <h2 class="heading-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Checkout
                        </h2>
                        <h1 class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Online Order
                        </h1>

                        <p class=" main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                        </p>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->

    <!-- rts team area start -->
    <div class="rts-checkout-area rts-section-gap">
        <div class="container">
            <div class="checkout-area-inner">
                <div class="ms-default-page container entry-content">
                    <div class="woocommerce">
                        <div class="coupon-toggle">
                            <div id="accordion" class="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="card-title">
                                            <span><i class="fa fa-window-maximize"></i> Have a coupon?</span>
                                            <button class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">Click here to enter your code</button>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordion" style="">
                                        <div class="card-body">
                                            <p>If you have a coupon code, please apply it below.</p>
                                            <div class="coupon-code-input">
                                                <input type="text" name="coupon_code" placeholder="Coupon code"
                                                    required="">
                                            </div>
                                            <button class="add-btn rts-btn btn-primary" type="submit">Apply Coupon</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                        <form name="checkout" method="post" class="checkout woocommerce-checkout ms-woocommerce-checkout"
                            action="#" enctype="multipart/form-data" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="full-grid">
                                        <div class="billing-fields">
                                            <div class="checkout-title">
                                                <h3 class="animated fadeIn">Billing details</h3>
                                            </div>
                                            <div class="form-content-box">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>First Name *</label>
                                                            <input id="fname" name="fname" class="form-control-mod"
                                                                type="text" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Last Name *</label>
                                                            <input id="lname" name="lname" class="form-control-mod"
                                                                type="text" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Company name (optional)</label>
                                                            <input id="cname" name="cname" class="form-control-mod"
                                                                type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>District*</label>
                                                            <select class="d-block" required="">
                                                                <option value="">Select a countryâ€¦</option>
                                                                <option value="PK">Pakistan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Street address *</label>
                                                            <input id="hnumber" name="hnumber"
                                                                class="form-control-mod margin-bottom" type="text"
                                                                placeholder="House number and street name" required="">
                                                            <input id="hnumber-2" name="hnumber" class="form-control-mod"
                                                                type="text"
                                                                placeholder="Apartment, suite, unit etc. (optional)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Town / City *</label>
                                                            <input id="city" name="city" class="form-control-mod"
                                                                type="text" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>District *</label>
                                                            <select class="d-block" required="">
                                                                <option value="">Select an option</option>
                                                                <option value="Punjab">Punjab</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Postcode / ZIP (optional)</label>
                                                            <input id="pcode" name="pcode" class="form-control-mod"
                                                                type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Phone *</label>
                                                            <input id="number" name="number" class="form-control-mod"
                                                                type="text" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Email address *</label>
                                                            <input id="email" name="email" class="form-control-mod"
                                                                type="email" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .billing-fields -->
                                        <div class="additional-fields">
                                            <div class="form-content-box">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Order notes (optional)</label>
                                                            <textarea placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-lg-5 col-lg-4">
                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                        <div class="ms-cart-collaterals cart-collaterals">
                                            <div class="ms-cart-totals cart_totals ">
                                                <table class="shop_table shop_table_responsive">
                                                    <tbody>
                                                        <tr class="heading">
                                                            <th class="product-name">Product</th>
                                                            <th class="product-total">Subtotal</th>
                                                        </tr>
                                                        <tr class="cart-subtotal product">
                                                            <th>Bruno's Scribble × 1</th>
                                                            <td data-title="Subtotal">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi><span
                                                                            class="woocommerce-Price-currencySymbol">$</span>519.00</bdi>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart-subtotal product">
                                                            <th>Prickly Pear Tonic × 1</th>
                                                            <td data-title="Subtotal">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi><span
                                                                            class="woocommerce-Price-currencySymbol">$</span>519.00</bdi>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td data-title="Subtotal">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi><span
                                                                            class="woocommerce-Price-currencySymbol">$</span>519.00</bdi>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart-subtotal">
                                                            <th>Shipping</th>
                                                            <td data-title="Subtotal">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <label for="shipping_method_0_free_shipping1">Free
                                                                        shipping</label>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td data-title="Total">
                                                                <strong><span class="woocommerce-Price-amount amount">
                                                                        <bdi><span
                                                                                class="woocommerce-Price-currencySymbol">$</span>519.00</bdi></span>
                                                                </strong>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="ms-proceed-to-checkout wc-proceed-to-checkout">
                                                    <a href="#" class="rts-btn btn-primary"> Proceed to checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="payment" class="woocommerce-checkout-payment">
                                            <div class="form-row place-order">
                                                <noscript>
                                                    Since your browser does not support JavaScript, or it is disabled,
                                                    please ensure you click the <em>Update Totals</em> button before
                                                    placing your order. You may be charged more than the amount stated
                                                    above if you fail to do so. <br />
                                                    <button type="submit" class="button alt"
                                                        name="woocommerce_checkout_update_totals"
                                                        value="Update totals">Update totals</button>
                                                </noscript>
                                                <div class="woocommerce-terms-and-conditions-wrapper">
                                                    <div class="woocommerce-privacy-policy-text">
                                                        <p>Your personal data will be used to process your order,
                                                            support your experience throughout this website, and for
                                                            other purposes described in our
                                                            <a href="#" class="woocommerce-privacy-policy-link"
                                                                target="_blank">privacy policy</a>.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="ms-proceed-to-checkout wc-proceed-to-checkout">
                                                    <a href="#" class="rts-btn btn-primary button"> Place Order</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts team area end -->
@endsection
