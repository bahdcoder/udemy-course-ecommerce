@extends('layouts.front')

@section('page')
      <div class="container-fluid">
            <div class="row bg-border-color medium-padding120">
                  <div class="container">
                        <div class="row">

                        <div class="col-lg-12">

                              <div class="cart">

                                    <h1 class="cart-title">In Your Shopping Cart: <span class="c-primary"> {{ Cart::content()->count() }} items</span></h1>

                              </div>

                              <form action="#" method="post" class="cart-main">

                                    <table class="shop_table cart">
                                    <thead class="cart-product-wrap-title-main">
                                    <tr>
                                          <th class="product-remove">&nbsp;</th>
                                          <th class="product-thumbnail">Product</th>
                                          <th class="product-price">Price</th>
                                          <th class="product-quantity">Quantity</th>
                                          <th class="product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach(Cart::content() as $pdt)
                                          <tr class="cart_item">

                                                <td class="product-remove">
                                                      <a href="{{ route('cart.delete', ['id' => $pdt->rowId ]) }}" class="product-del remove" title="Remove this item">
                                                      <i class="seoicon-delete-bold"></i>
                                                      </a>
                                                </td>

                                                <td class="product-thumbnail">

                                                      <div class="cart-product__item">
                                                      <a href="#">
                                                            <img src="{{ asset($pdt->model->image) }}" alt="product" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                                      </a>
                                                      <div class="cart-product-content">
                                                            <h5 class="cart-product-title">{{ $pdt->name }}</h5>
                                                      </div>
                                                      </div>
                                                </td>

                                                <td class="product-price">
                                                      <h5 class="price amount">${{ $pdt->price }}</h5>
                                                </td>

                                                <td class="product-quantity">

                                                      <div class="quantity">
                                                      <a href="{{ route('cart.decr', ['id' => $pdt->rowId, 'qty' => $pdt->qty ]) }}" class="quantity-minus">-</a>
                                                            <input title="Qty" class="email input-text text" type="text" value="{{ $pdt->qty }}" placeholder="1" readonly>
                                                      <a href="{{ route('cart.incr', ['id' => $pdt->rowId, 'qty' => $pdt->qty ]) }}" class="quantity-plus">+</a>
                                                      </div>

                                                </td>

                                                <td class="product-subtotal">
                                                      <h5 class="total amount">${{ $pdt->total() }}</h5>
                                                </td>

                                          </tr>
                                    @endforeach

                                    

                                    <tr>
                                          <td colspan="5" class="actions">

                                                <div class="coupon">
                                                <input name="coupon_code" class="email input-standard-grey" value="" placeholder="Coupon code" type="text">
                                                <div class="btn btn-medium btn--breez btn-hover-shadow">
                                                      <span class="text">Apply Coupon</span>
                                                      <span class="semicircle--right"></span>
                                                </div>
                                                </div>

                                                <div class="btn btn-medium btn--dark btn-hover-shadow">
                                                <span class="text">Apply Coupon</span>
                                                <span class="semicircle"></span>
                                                </div>

                                          </td>
                                    </tr>

                                    </tbody>
                                    </table>


                              </form>

                              <div class="cart-total">
                                    <h3 class="cart-total-title">Cart Totals</h3>
                                    <h5 class="cart-total-total">Total: <span class="price">${{ Cart::total() }}</span></h5>
                                    <a href="{{ route('cart.checkout') }}" class="btn btn-medium btn--light-green btn-hover-shadow">
                                    <span class="text">Checkout</span>
                                    <span class="semicircle"></span>
                                    </a>
                              </div>

                        </div>

                        </div>
                  </div>
            </div>
      </div>
@endsection