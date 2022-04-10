@extends('front.master')
@section('content')
<div class="col-lg-12">


    <!--single form panel-->
    <form action={{ route('checkout.shipping') }} method="POST" class="multisteps-form__form" style="height: 972px;" enctype="multipart/form-data">
        @csrf
        <!--single form panel-->
        <div class="multisteps-form__panel js-active" data-animation="scaleIn">
            <div class="multisteps-form__content">
                <div class="check-out-form">
                    <h3 class="checkout-title">Shipping Address</h3>
                    <div class="form-group">
                        <label for="fullname3">Full Name</label>
                        <input type="text" class="form-control" id="fullname3" name="name" required=""
                            placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="email3">Email </label>
                        <input type="email" class="form-control" id="email3" name="email" required=""
                            placeholder="Email ">
                    </div>
                    <div class="form-group">
                        <label for="phone3">Phone</label>
                        <input type="text" class="form-control" id="phone3" name="phone" required=""
                            placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="country3">Country</label>
                        <input type="text" class="form-control" id="country3" name="country" required=""
                            placeholder="Country">
                    </div>
                    <div class="form-group">
                        <label for="street-address3">Street Address</label>
                        <input type="text" class="form-control" id="street-address3" name="street_address" required=""
                            placeholder="Street Address">
                    </div>
                    <div class="form-group">
                        <label for="city3">City/Town</label>
                        <input type="text" class="form-control" id="city3" name="city" required=""
                            placeholder="City/Town">
                    </div>
                    <div class="form-group">
                        <label for="state3">State/District</label>
                        <input type="text" class="form-control" id="state3" name="state" required=""
                            placeholder="State/District">
                    </div>
                    <div class="form-group">
                        <label for="zipcode3">Zipcode / Postal Code</label>
                        <input type="text" class="form-control" id="zipcode3" name="zip_code" required=""
                            placeholder="Zipcode / Postal Code">
                    </div>
                </div>
                <div class="button-row d-flex justify-content-end">
                    <button class="btn back js-btn-prev" type="button" title="Prev"><i class="fas fa-angle-left"></i>
                        Back </button>
                    <button class="btn next js-btn-next" type="submit" title="Next">Next <i
                            class="fas fa-angle-right"></i></button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection