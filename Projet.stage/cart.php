<?php
session_start();
require 'db_connect.php';


$cart = $_SESSION['cart'] ?? [];

$products = [];

if (!empty($cart)) {

    $placeholders = implode(',', array_fill(0, count($cart), '?'));
    $stmt = $conn->prepare("SELECT * FROM products WHERE id IN ($placeholders)");


    $types = str_repeat('i', count($cart)); // 'i' for integer
    $stmt->bind_param($types, ...$cart);

    $stmt->execute();

    $result = $stmt->get_result();
    $products = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniStyle</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" class="rounded-3xl" href="./images/browser-logo.png" type="image/x-icon">
    <title>UniStyle - A unique & elegant clothing style</title>



</head>

<body class="font-quick">

    <header
        class="top-0  w-full flex items-center  fixed h-17 text-black justify-between py-5 shadow-lg bg-[#e3e6f3]  z-50">
        <a class=" font-agbalumo text-4xl text-black px-8 no-underline" href="home.html">Uni<span
                class="text-cyan-600">Style</span> </a>

        <div class="w-full flex justify-end space-x-3"><a href="wishlist.php" aria-current="page "
                class=" md:hidden px-4 no-underline right-1.5 text-black text-xl pt-1.5 hover:border-b-cyan-600   hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100"><i
                    class="fa fa-heart text-[25px] " aria-hidden="true"></i>

            </a><a href="cart.php" aria-current="page "
                class=" md:hidden pt-1.5 no-underline right-1.5 text-black text-xl hover:border-b-cyan-600   hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100"><i
                    class="fa fa-cart-arrow-down  text-2xl" aria-hidden="true"></i>

            </a>
            <button class="md:hidden text-black text-2xl" id="mobile-menu-toggle"><i
                    class="fas fa-outdent"></i></button>
        </div>
        <ul class=" hidden md:flex space-x-14 font-poppins text-red-700 list-none pr-10">
            <li class=""><a href="home.html" aria-current="page"
                    class="     hover:border-b-cyan-600 no-underline text-black hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]   duration-100">Home</a>
            </li>
            <li class="  "><a href="shop.php" aria-current="page"
                    class=" hover:border-b-cyan-600 no-underline text-black hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100">Shop</a>
            </li>
            <li class=""><a href="blog.html" aria-current="page"
                    class=" hover:border-b-cyan-600 no-underline text-black hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100">Blog</a>
            </li>
            <li class=""><a href="about.html" aria-current="page"
                    class=" hover:border-b-cyan-600 no-underline text-black hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100">About</a>
            </li>
            <li class=""><a href="contact.html" aria-current="page"
                    class=" hover:border-b-cyan-600 text-black no-underline hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100">Contact</a>
            </li>
            <li class=""><a href="wishlist.php" aria-current="page"
                    class="text-black hover:border-b-cyan-600 hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100"><i
                        class="fa fa-heart" aria-hidden="true"></i>

                </a></li>
            <li class=""><a href="cart.php" aria-current="page"
                    class="aria-[current=page]:text-cyan-600 aria-[current=page]:border-b-solid aria-[current=page]:border-b-2 aria-[current=page]:pb-[6px] aria-[current=page]:border-b-cyan-600 text-black hover:border-b-cyan-600 hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100"><i
                        class="fa fa-cart-arrow-down" aria-hidden="true"></i>

                </a></li>

        </ul>

    </header>
    <ul id="mobile-menu"
        class="md:hidden w-33 h-80 fixed header-shadow top-15 right-0  duration-1000 bg-[#e3e6f3] list-none text-black hidden flex-col rounded-bl-2xl space-y-8 p-6 pt-10 font-poppins z-80">
        <li><a class="no-underline text-black" href="home.html" id="home-mobile">Home</a></li>
        <li><a class="no-underline text-black" href="shop.php" id="about-mobile">Shop</a></li>
        <li><a class="no-underline text-black" href="blog.html" id="skills-mobile">Blog</a></li>
        <li><a class="no-underline text-black" href="about.html" id="skills-mobile">About</a></li>
        <li><a class="no-underline text-black" href="contact.html" id="contact-mobile">Contact</a></li>
    </ul>
    <section class="w-full h-[35vh]  lg:h-[50vh] 
         bg-[url('./images/banner/banner.png')]  bg-cover 
          text-white flex flex-col text-center pt-16 justify-center font-quick">
        <h1 class="my-0 font-quick text-5xl font-bold ">#Cart</h1>
        <p class=" font-poppins ">Add your coupon & Save up to 70%!</p>

    </section>

    <section class="py-18 bg-[#f8f8f8]  overflow-x-auto px-4 sm:px-22">
        <?php if (!empty($products)) : ?>


            <table class="border-collapse table-fixed whitespace-nowrap table" width="100%">
                <thead class="">
                    <tr class="">
                        <td class="">Remove</td>
                        <td class="">Image</td>
                        <td class="">Product</td>
                        <td class="">Price</td>
                        <td class="">Quantity</td>
                        <td class="">Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product) : ?>
                        <tr data-id="<?= $product['id'] ?>" data-price="<?= $product['price'] ?>">
                            <td>
                                <form action="remove_from_cart.php" method="POST">
                                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                    <button type="submit" class="text-red-600 cursor-pointer text-2xl">
                                        <i class="far fa-times-circle text-red-600"></i>
                                    </button>
                                </form>
                            </td>
                            <td class="flex justify-center">
                                <img src="<?= htmlspecialchars($product['image']) ?>" alt="" class="w-[70px]">
                            </td>
                            <td><?= htmlspecialchars($product['name']) ?></td>
                            <td><?= number_format($product['price'], 2) ?>$</td>
                            <td>
                                <input type="number" value="<?= $product['quantity'] ?? 1 ?>" min="1" class="focus:border-cyan-600 qty-input">
                            </td>
                            <td class="subtotal"><?= number_format($product['price'] * ($product['quantity'] ?? 1), 2) ?>$</td>
                        </tr>
                    <?php endforeach; ?>


                </tbody>

            </table>

            <div class=" absolute mt-18 lg:mt-14  left-[35%] lg:left-[45%]"><button
                    onclick="location.href='shop.php'" class=" w-40 mt-1 h-[40.5px]      md:h-[42px]  text-white cursor-pointer bg-[#088178] outline-none transition duration-300  border border-solid border-amber-50">Add Products
                </button></div>


        <?php else : ?>
            <div class="text-center">
                <p class="text-center text-2xl">Your cart is empty.</p>
                <button
                    onclick="location.href='shop.php'" class=" w-40 mt-1 h-[40.5px]    right-1/2  md:h-[42px]  text-white cursor-pointer bg-[#088178] outline-none transition duration-300  border border-solid border-amber-50">Add Products
                </button>
            </div>

        <?php endif; ?>

    </section>
    <section
        class="lg:py-24 lg:px-22 p-6 flex flex-wrap items-center pt-[120px] md:items-start md:flex md:flex-wrap md:justify-between   bg-[#f8f8f8]  ">
        <div class=" w-full md:w-1/2 mb-7 md:items-start">
            <h3 class="font-bold pb-3.5">Apply Coupon</h3>
            <div class="">
                <input type="text" class="py-2.5 px-5 w-[60%] mr-2.5  focus:border-cyan-600"
                    placeholder="Enter Your Coupon">
                <button
                    class="feature-shadow w-25 mb-2 h-[46px] font-none text-white cursor-pointer hover:bg-[#50a6a0] bg-[#088178] outline-none transition duration-300  border border-solid border-amber-50">Apply</button>

            </div>
        </div>
        <div class="w-full md:w-1/2 mb-8 border border-solid border-[#e2e9e1] p-7">
            <h3 class="font-bold pb-3.5 pl-2.5">Cart Totals</h3>
            <table class="border-collapse w-full mb-5 ">
    <tr class="">
        <td class="w-1/2 border border-solid border-[#e2e9e1] p-2.5 text-[13px]">Cart Subtotal</td>
        <td id="cart-subtotal" class="w-1/2 border border-solid border-[#e2e9e1] p-2.5 text-[13px]">$0.00</td>
    </tr>
    <tr class="">
        <td class="w-1/2 border border-solid border-[#e2e9e1] p-2.5 text-[13px]">Shipping</td>
        <td class="w-1/2 border border-solid border-[#e2e9e1] p-2.5 text-[13px]">Free</td>
    </tr>
    <tr class="">
        <td class="w-1/2 border border-solid border-[#e2e9e1] p-2.5 text-[13px]"><strong>Total</strong></td>
        <td id="cart-total" class="w-1/2 border border-solid border-[#e2e9e1] p-2.5 text-[13px]"><strong>$0.00</strong></td>
    </tr>
</table>

            <button
                class="feature-shadow w-full mb-2  h-[46px] font-none text-white cursor-pointer hover:bg-[#50a6a0] bg-[#088178] outline-none transition duration-300  border border-solid border-amber-50" onclick="location.href='checkout.html'">Proceed
                To Chekout</button>
            <button
                class="feature-shadow w-full mb-2  h-[46px] font-none text-black cursor-pointer hover:bg-gray-200  bg-white outline-none transition duration-300  border border-solid border-gray-300" onclick="location.href='shop.php'">Continue Shopping</button>

        </div>

    </section>

    <footer
        class=" lg:h-[50vh] font-quick flex-col  w-full h-[70vh] px-10 md:px-0 flex text-black    items-center pl-16  my-5">
        <a class=" lg:pl-13 md:pl-12  w-full font-agbalumo text-3xl text-start text-black  no-underline pb-11"
            href="home.html">Uni<span class="text-cyan-600">Style</span> </a>
        <div class="flex w-full justify-between md:justify-around   flex-wrap   items-baseline  ">

            <div class=" ">

                <h4 class=" font-bold mb-8  ">Contact</h4>
                <p class=""><span class="font-bold">Address: </span>123 Business Street
                    Suite 100
                    City, State 12345</p>
                <p class=""><span class="font-bold">Phone: </span>+1 (555) 123-4567</p>
                <p class=""><span class="font-bold">Hours: </span>10:00-19:00, Mon-Sat</p>
                <h4 class="font-bold pt-7">Follow Us</h4>
                <div class=" text-black space-x-2 mt-4">
                    <a href="#" class="no-underline text-black hover:text-cyan-600"> <i class="fab fa-twitter "
                            aria-hidden="true"></i>
                    </a>
                    <a href="#" class="no-underline text-black hover:text-red-600"><i class="fab fa-youtube"
                            aria-hidden="true"></i></a>
                    <a href="#" class="no-underline text-black hover:text-blue-500"> <i class="fab fa-facebook-f"
                            aria-hidden="true"></i>
                    </a>
                    <a href="#" class="no-underline text-black hover:text-red-700"><i class="fab fa-pinterest-p"
                            aria-hidden="true"></i></a>
                    <a href="#" class="no-underline text-black hover:text-pink-600"><i class="fab fa-instagram"
                            aria-hidden="true"></i></a>

                </div>
            </div>
            <div class="">
                <h4 class="mt-9 font-bold  mb-8">About</h4>
                <a href="#" class="no-underline text-black">
                    <h4 class="">About Us</h4>
                </a>
                <a href="#" class="no-underline text-black">
                    <h4 class="">Delivery Information</h4>
                </a>
                <a href="#" class="no-underline text-black">
                    <h4 class="">Privacy Policy</h4>
                </a>
                <a href="#" class="no-underline text-black">
                    <h4 class="">Terms & Conditions</h4>
                </a>
                <a href="#" class="no-underline text-black">
                    <h4 class="">Contact Us</h4>
                </a>

            </div>
            <div class="">
                <h4 class="mt-9 font-bold  mb-8">My Account</h4>
                <a href="" class="no-underline text-black">
                    <h4 class="">View Cart</h4>
                </a>
                <a href="" class="no-underline text-black">
                    <h4 class="">Sign In</h4>
                </a>
                <a href="" class="no-underline text-black">
                    <h4 class="">My Wishlist</h4>
                </a>
                <a href="" class="no-underline text-black">
                    <h4 class="">Track My Order</h4>
                </a>
                <a href="" class="no-underline text-black">
                    <h4 class="">Help</h4>
                </a>

            </div>
            <div class="">
                <h4 class="mt-9 font-bold  mb-8">Install App</h4>
                <p class="">From App Store or Google Play</p>
                <div class="">
                    <button
                        class="  feature-shadow w-34 h-[41.5px] font-none text-white cursor-pointer bg-white outline-none transition duration-300  border border-solid border-cyan-600"><img
                            src="" alt="" class=""><img class="text-7xl"
                            src="./images/logos/Google_Play_2022_logo.svg.png" alt=""></button>
                    <button
                        class="feature-shadow w-34 h-[41.5px] font-none text-white cursor-pointer bg-white outline-none transition duration-300  border border-solid border-cyan-600"><img
                            src="" alt="" class=""><img src="./images/logos/available-on-the-app-store.svg"
                            alt=""></button>
                </div>
                <p class="">Secured Payment Gateways</p>
                <div class="h-30 w-54"><img class="text-6xl" src="./images/logos/paymetns2.png" alt="" class=""></div>






            </div>
        </div>
        <div class="">
            <p class="mb-">© 2025 UniStyle. All rights reserved.</p>
        </div>
    </footer>



    <script src="script.js"></script>
    <script>
function updateCartTotal() {
    let total = 0;
    document.querySelectorAll('tbody tr').forEach(row => {
        let price = parseFloat(row.dataset.price);
        let qty = parseInt(row.querySelector('.qty-input').value);
        let subtotal = price * qty;

        row.querySelector('.subtotal').textContent = subtotal.toFixed(2) + '$';
        total += subtotal;
    });

    document.getElementById('cart-subtotal').textContent = total.toFixed(2) + '$';
    document.getElementById('cart-total').textContent = total.toFixed(2) + '$';
}

function saveQuantityToSession(productId, qty) {
    fetch('update_cart_quantity.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'product_id=' + encodeURIComponent(productId) + '&quantity=' + encodeURIComponent(qty)
    })
    .then(res => res.json())
    .then(data => {
        if (!data.success) {
            alert('Error updating quantity: ' + data.message);
        }
    })
    .catch(() => alert('AJAX error'));
}

// Met à jour quand on change la quantité
document.querySelectorAll('.qty-input').forEach(input => {
    input.addEventListener('input', function() {
        let row = this.closest('tr');
        let productId = row.dataset.id;
        let qty = parseInt(this.value);

        updateCartTotal();
        saveQuantityToSession(productId, qty);
    });
});

// Mise à jour initiale au chargement
updateCartTotal();
</script>


</body>

</html>