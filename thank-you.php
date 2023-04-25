<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>


  <div class="wrapper">
  <div class="header__wrapper">
          <div class="container">
         
         
            <header class="header">
              <div class="header__top">
                <div class="header__btn-block">
                  <button class="header__btn js_menu-btn">
                    <span></span>
                  </button>
                </div>
    
                  <nav class="nav js_menu">
                    <a href="./index.html" class="header__logo logo js_website-name"></a>
                    <div class="header__social-links-box">
                      <a href="" class="social-link social-link-email js_website-email"></a>
                      <a href="" class="social-link social-link-phone js_website-phone"></a>
                    </div>
                    <ul class="nav__list">
                      <li class="nav__item">
                        <a href="./contacts.html" class="nav__item">Contact Us</a>
                      </li>
                      <li class="nav__item">
                        <a href="./return.html" class="nav__item">Return Policy</a>
                      </li>
                      <li class="nav__item">
                        <a href="./purchase.html" class="nav__item">Terms of Purchase</a>
                      </li>
                      <li class="nav__item">
                        <a href="./privacy.html" class="nav__item">Privacy Notice</a>
                      </li>
                      <li class="nav__item">
                        <a href="./shipping.html" class="nav__item">Shipping Policy</a>
                      </li>
                      <li class="nav__item">
                        <a href="./use.html" class="nav__item">Terms of Use</a>
                      </li>
                    
                    </ul>
                  </nav>
                  <a href="./shop.html" class="cart__span-box">
                    cart <span class="cart__span js_cart__span"></span>
                  </a>
              </div>
            </header>
         
          </div>
        </div>

    <main class="main bg-main">
      <div class="thank-you__wrapper" >
        <section class="thank-you">
          <div class="container">
              <div class="block">
                <h1 class="title">Thank you</h1>
                <p class="text">Your order was completed successfully!</p>
                <?php if($_GET["order_id"]){ ?> 
      <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
    <?php } ?>
              </div>
          </div>
        </section>
    </div>
    </main>

    
    <footer class="footer">
      <div class="footer__wrapper">
        <div class="container">
          <div class="footer__block">
            <p class="footer__title">Pages</p>
            <ul class="sub-list">
              <li class="item">
                <a href="./contacts.html" class="text footer__link">Contact Us</a>
              </li>
              <li class="item">
                <a href="./use.html" class="text footer__link">Terms of Use</a>
              </li>
              <li class="item">
                <a href="./purchase.html" class="text footer__link">Terms of Purchase</a>
              </li>
           
            </ul>
          </div>
        </div>
      </div>
      <div class="footer__wrapper footer__wrapper-color">
        <div class="container">
          <div class="footer__block">
            <ul class="sub-list">
              <li class="item">
                <a href="./index.html" class="footer__logo logo js_website-name"></a>
              </li>
              <li class="item">
                <p class="text js_website-corp"></p>
              </li>
              <li class="item">
                <span class="footer__span">© All rights reserved</span>
              </li>
            </ul>
          </div>
        
        </div>
      </div>
      <div class="footer__wrapper">
        <div class="container">
          <div class="footer__block">
            <p class="footer__title">Policies</p>
            <ul class="sub-list">
              <li class="item">
                <a href="./privacy.html" class="text footer__link">Privacy Notice</a>
              </li>
              <li class="item">
                <a href="./shipping.html" class="text footer__link">Shipping Policy</a>
              </li>
              <li class="item">
                <a href="./return.html" class="text footer__link">Return Policy</a>
              </li>
              <li class="item">
                <a href="./affiliate-program.html" class="text footer__link">Affiliate Program</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </footer>
  </div>

  <script type='text/javascript' src='https://thebestproductmanager.com/products/prices-nxg-object'></script>
  <script type="module" src="./js/on-load.js"></script>
  <script type="module" src="./js/website-data.js"></script> 
  <script>
    const menuBtn = document.querySelector('.js_menu-btn');
    const menu = document.querySelector('.js_menu');
    menuBtn.addEventListener('click', () => {
      menuBtn.classList.toggle('active');
      menu.classList.toggle('open-menu');
      document.body.classList.toggle('open-menu');
    })
  </script>
</body>

</html>