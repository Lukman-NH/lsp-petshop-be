<?php
    include 'header.php';
?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2>Shopping Cart</h2>
              <div class="breadcrumb__option">
                <a href="./index.html">Home</a>
                <span>Shopping Cart</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="shoping__cart__table">
              <table>
                <thead>
                  <tr>
                    <th class="shoping__product">Products</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="shoping__cart__item">
                      <img src="img/cart/cart-1.jpg" alt="" />
                      <h5>Royal Canin Adult</h5>
                    </td>
                    <td class="shoping__cart__price">$15.00</td>
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <input type="text" value="1" />
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">$15.00</td>
                    <td class="shoping__cart__item__close">
                      <span class="icon_close"></span>
                    </td>
                  </tr>
                  <tr>
                    <td class="shoping__cart__item">
                      <img src="img/cart/cart-1.jpg" alt="" />
                      <h5>Royal Canin Adult</h5>
                    </td>
                    <td class="shoping__cart__price">$15.00</td>
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <input type="text" value="1" />
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">$15.00</td>
                    <td class="shoping__cart__item__close">
                      <span class="icon_close"></span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="shoping__cart__btns"></div>
          </div>
          <div class="col-lg-6">
            <div class="shoping__continue">
              <div class="shoping__cart__btns"></div>
              <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="shoping__checkout">
              <h5>Cart Total</h5>
              <ul>
                <li>Subtotal <span>$30.00</span></li>
                <li>Total <span>$30.00</span></li>
              </ul>
              <a href="checkout.php" class="primary-btn"
                >PROCEED TO CHECKOUT</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Shoping Cart Section End -->

<?php
    include 'footer.php';
?>