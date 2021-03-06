
@extends('front.master')
@section('content')

<div class="checkout-page pb-60">
            <div class="container">
                <div class="multisteps-form">
                    
                    <div class="row">
                      <div class="col-lg-12">
                        <form action="#" class="multisteps-form__form" style="height: 547px;">
                            <!--single form panel-->
                            <div class="multisteps-form__panel" data-animation="scaleIn">
                                <div class="check-out-form">
                                    <div class="form-check returnign-buyer">
                                        <input type="checkbox" class="form-check-input" id="returnign">
                                        <span class="checkmark"></span>
                                        <label class="form-check-label" for="returnign">Returnign Buyer</label>
                                    </div>
                                    <p>If you have shopped with us before, please enter your details below. If you are a new customer, please <a class="sign-up-btn" href="sign-up.html">Sign Up Now</a></p>
                                    <div class="sing-in-form">
                                        <div class="form-group">
                                            <label for="emailuser">Email or Username *</label>
                                            <input type="email" class="form-control" id="emailuser" name="emailuser" required="" placeholder="Email or Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="userpassword">Password *</label>
                                            <input type="password" class="form-control" id="userpassword" required="" placeholder="Password">
                                        </div>
                                        <div class="form-bottom-input d-flex justify-content-between">
                                            <div class="form-check ">
                                            <input type="checkbox" class="form-check-input" id="remember">
                                            <span class="checkmark"></span>
                                            <label class="form-check-label" for="remember">Remember me</label>
                                            </div>
                                            <a class="forgot-password" href="reset-password.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-row d-flex justify-content-end">
                                    <button class="btn next  js-btn-next" type="button" title="Next">Next <i class="fas fa-angle-right"></i></button>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel" data-animation="scaleIn">
                                <div class="multisteps-form__content">
                                    <div class="check-out-form">
                                        <h3 class="checkout-title">Billing Details</h3>
                                        <div class="form-group">
                                            <label for="fullname">Full Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" required="" placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email </label>
                                            <input type="email" class="form-control" id="email" name="email" required="" placeholder="Email ">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" required="" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control" id="country" name="country" required="" placeholder="Country">
                                        </div>
                                        <div class="form-group">
                                            <label for="street-address">Street Address</label>
                                            <input type="text" class="form-control" id="street-address" name="street-address" required="" placeholder="Street Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City/Town</label>
                                            <input type="text" class="form-control" id="city" name="city" required="" placeholder="City/Town">
                                        </div>
                                        <div class="form-group">
                                            <label for="state">State/District</label>
                                            <input type="text" class="form-control" id="state" name="state" required="" placeholder="State/District">
                                        </div>
                                        <div class="form-group">
                                            <label for="zipcode">Zipcode / Postal Code</label>
                                            <input type="text" class="form-control" id="zipcode" name="zipcode" required="" placeholder="Zipcode / Postal Code">
                                        </div>
                                    </div>
                                    <div class="button-row d-flex justify-content-end">
                                        <button class="btn back js-btn-prev" type="button" title="Prev"><i class="fas fa-angle-left"></i> Back </button>
                                        <button class="btn next  js-btn-next" type="button" title="Next">Next <i class="fas fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel" data-animation="scaleIn">
                                <div class="multisteps-form__content">
                                    <div class="check-out-form">
                                        <h3 class="checkout-title">Shipping Address</h3>
                                        <div class="form-group">
                                            <label for="fullname3">Full Name</label>
                                            <input type="text" class="form-control" id="fullname3" name="fullname3" required="" placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email3">Email </label>
                                            <input type="email" class="form-control" id="email3" name="email3" required="" placeholder="Email ">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone3">Phone</label>
                                            <input type="text" class="form-control" id="phone3" name="phone3" required="" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="country3">Country</label>
                                            <input type="text" class="form-control" id="country3" name="country3" required="" placeholder="Country">
                                        </div>
                                        <div class="form-group">
                                            <label for="street-address3">Street Address</label>
                                            <input type="text" class="form-control" id="street-address3" name="street-address3" required="" placeholder="Street Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="city3">City/Town</label>
                                            <input type="text" class="form-control" id="city3" name="city3" required="" placeholder="City/Town">
                                        </div>
                                        <div class="form-group">
                                            <label for="state3">State/District</label>
                                            <input type="text" class="form-control" id="state3" name="state3" required="" placeholder="State/District">
                                        </div>
                                        <div class="form-group">
                                            <label for="zipcode3">Zipcode / Postal Code</label>
                                            <input type="text" class="form-control" id="zipcode3" name="zipcode3" required="" placeholder="Zipcode / Postal Code">
                                        </div>
                                    </div>
                                    <div class="button-row d-flex justify-content-end">
                                        <button class="btn back js-btn-prev" type="button" title="Prev"><i class="fas fa-angle-left"></i> Back </button>
                                        <button class="btn next js-btn-next" type="button" title="Next">Next <i class="fas fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel js-active" data-animation="scaleIn">
                                <div class="multisteps-form__content">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="check-out-form text-center">
                                                <h3 class="checkout-title"> </h3>
                                                <h3 class="checkout-title"> </h3>
                                                <a class="payment-method-btn" href="#">paypal</a>
                                                <a class="payment-method-btn" href="#">stripe</a>
                                                <a class="payment-method-btn" href="#">cash on delivery</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="check-out-form">
                                                <div class="credit-card">
                                                    <input class="form-check-input" type="radio" name="paymentmethod" id="exampleRadios1" value="option1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        <span class="card-name">Credit Card</span>
                                                        <img src="images/credit-card.png" alt="credit-card">
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cardhumber">Card Number</label>
                                                    <input type="text" class="form-control" id="cardhumber" name="cardhumber" required="" placeholder="4152  5632  2563  5896">
                                                    <img class="form-img" src="images/p-mastercard.png" alt="p-mastercard"> 
                                                </div>
                                                <div class="form-group">
                                                    <label for="authorname">Name</label>
                                                    <input type="text" class="form-control" id="authorname" name="authorname" required="" placeholder="Abdul Kuddus">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <label>Expiration Date</label>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <select class="niceselect " style="display: none;">
                                                                        <option data-display="Month">Month</option>
                                                                        <option value="1">01</option>
                                                                        <option value="2">02</option>
                                                                        <option value="3">03</option>
                                                                        <option value="4">04</option>
                                                                        <option value="5">05</option>
                                                                        <option value="6">06</option>
                                                                        <option value="7">07</option>
                                                                        <option value="8">08</option>
                                                                        <option value="9">09</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                    </select><div class="nice-select niceselect" tabindex="0"><span class="current">Month</span><ul class="list"><li data-value="Month" data-display="Month" class="option selected">Month</li><li data-value="1" class="option">01</li><li data-value="2" class="option">02</li><li data-value="3" class="option">03</li><li data-value="4" class="option">04</li><li data-value="5" class="option">05</li><li data-value="6" class="option">06</li><li data-value="7" class="option">07</li><li data-value="8" class="option">08</li><li data-value="9" class="option">09</li><li data-value="10" class="option">10</li><li data-value="11" class="option">11</li><li data-value="12" class="option">12</li></ul></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <select class="niceselect " style="display: none;">
                                                                        <option data-display="Year">2020</option>
                                                                        <option value="1">2019</option>
                                                                        <option value="2">2018</option>
                                                                        <option value="3">2017</option>
                                                                        <option value="4">2016</option>
                                                                        <option value="4">2015</option>
                                                                        <option value="4">2014</option>
                                                                        <option value="4">2013</option>
                                                                        <option value="4">2012</option>
                                                                        <option value="4">2011</option>
                                                                        <option value="4">2010</option>
                                                                        <option value="4">2009</option>
                                                                        <option value="4">2008</option>
                                                                        <option value="4">2007</option>
                                                                        <option value="4">2006</option>
                                                                        <option value="4">2005</option>
                                                                    </select><div class="nice-select niceselect" tabindex="0"><span class="current">Year</span><ul class="list"><li data-value="2020" data-display="Year" class="option selected">2020</li><li data-value="1" class="option">2019</li><li data-value="2" class="option">2018</li><li data-value="3" class="option">2017</li><li data-value="4" class="option">2016</li><li data-value="4" class="option">2015</li><li data-value="4" class="option">2014</li><li data-value="4" class="option">2013</li><li data-value="4" class="option">2012</li><li data-value="4" class="option">2011</li><li data-value="4" class="option">2010</li><li data-value="4" class="option">2009</li><li data-value="4" class="option">2008</li><li data-value="4" class="option">2007</li><li data-value="4" class="option">2006</li><li data-value="4" class="option">2005</li></ul></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <label>Security Code</label>
                                                        <div class="row">
                                                            <div class="col-lg-9 col-10 col-md-11 col-sm-11">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="ccv" name="ccv" placeholder="Three digit" maxlength="3" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-1 col-sm-1 col-2">
                                                                <a class="question" href="#"><i class="fas fa-question-circle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="credit-card">
                                                    <input class="form-check-input" type="radio" name="paymentmethod" id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        <span class="card-name">Paypal</span>
                                                        <img src="images/p-paypal.png" alt="credit-card">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex justify-content-end">
                                                <button class="btn back js-btn-prev" type="button" title="Prev"><i class="fas fa-angle-left"></i> back</button>
                                                <button class="btn next js-btn-next" type="button" title="Next">Place Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel" data-animation="scaleIn">
                                <div class="check-out-form text-center">
                                    <h3 class="checkout-title">Confirmation</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus at vestibulum, sed nunc, porttitor justo blandit quis diam. Metus odio sit diam, vel cras mauris malesuada lobortis ullamcorper.</p>
                                </div>
                                <div class="button-row d-flex justify-content-center">
                                    <button class="btn back js-btn-prev" type="button" title="Prev"><i class="fas fa-angle-left"></i> Back to Edit</button>
                                    <button class="btn " type="submit" title="Confirm">Confirm</button>
                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>

@endsection












