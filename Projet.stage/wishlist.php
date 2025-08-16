<?php
session_start();
require 'db_connect.php';

// Get wishlist from session
$wishlist = $_SESSION['wishlist'] ?? [];

// Fetch products from DB if wishlist not empty
$products = [];
if (!empty($wishlist)) {
    $placeholders = implode(',', array_fill(0, count($wishlist), '?'));
    $stmt = $conn->prepare("SELECT * FROM products WHERE id IN ($placeholders)");
    $types = str_repeat('i', count($wishlist));
    $stmt->bind_param($types, ...$wishlist);
    $stmt->execute();
    $result = $stmt->get_result();
    $products = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Wishlist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" class="rounded-3xl" href="./images/browser-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="font-quick">
    <header
        class="top-0  w-full flex items-center  fixed h-17 text-black justify-between py-5 shadow-lg  bg-[#e3e6f3]  z-50">
        <a class=" font-agbalumo text-4xl text-black px-8 no-underline" href="home.html">Uni<span
                class="text-cyan-600">Style</span> </a>

        <div class="w-full flex justify-end space-x-3"><a href="wishlist.php" aria-current="page "
                class=" md:hidden px-4 pt-1.5 no-underline right-1.5 text-black text-xl hover:border-b-cyan-600   hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100"><i
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
                    class="aria-[current=page]:text-cyan-600 aria-[current=page]:border-b-solid aria-[current=page]:border-b-2 aria-[current=page]:pb-[6px] aria-[current=page]:border-b-cyan-600 text-black hover:border-b-cyan-600 hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100"><i
                        class="fa fa-heart" aria-hidden="true"></i>

                </a></li>
            <li class=""><a href="cart.php" aria-current="page"
                    class="text-black hover:border-b-cyan-600 hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100"><i
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

    <div class="p-6 mt-12  bg-[#f8f8f8] h-full pb-20">
        <h1 class="text-3xl font-bold mb-6">My Wishlist</h1>
        <p class="mb-5 font-medium ">These are your wishlist items</p>

        <?php if (empty($products)) : ?>
            <div class="text-center justify-center">
                <p class="text-gray-600 text-center justify-center text-2xl mb-8">Your wishlist is empty.</p>

                <button
                    onclick="location.href='shop.php'" class=" w-40 mt-1 h-[40.5px]    right-1/2  md:h-[42px]  text-white cursor-pointer bg-[#088178] outline-none transition duration-300  border border-solid border-amber-50">Add Products
                </button>
            </div>
        <?php else: ?>
            <div id="wishlist-container" class="flex justify-center flex-wrap">
                <?php foreach ($products as $product): ?>
                    <div class="product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative"
                        id="product-<?= $product['id'] ?>">
                        <img src="<?= htmlspecialchars($product['image']) ?>"
                            class="w-full h-fit object-cover home-product-img rounded" alt="">
                        <div class="mt-2">
                            <span class="text-gray-500 text-sm"><?= htmlspecialchars($product['brand']) ?></span>
                            <h2 class="text-lg font-semibold"><?= htmlspecialchars($product['name']) ?></h2>
                            <p class="text-cyan-600 font-bold mt-1"><?= htmlspecialchars($product['price']) ?>$</p>
                            <button class="remove-btn cursor-pointer wishlist-product-page-icon bottom-0 px-3 py-2 rounded-[35px] mt-2 text-black"
                                onclick="removeFromWishlist(<?= $product['id'] ?>)" action="remove_from_wishlist.php">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </button>
                            <button class="add-to-cart-btn"
                                data-product-id="<?= $product['id'] ?>">
                                <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                            </button>

                        </div>
                    </div>




                <?php endforeach; ?>

            </div>
            <div class="text-center"><button
                    onclick="location.href='shop.php'" class=" w-45 mt-1 h-[40.5px]    right-1/2  md:h-[42px]  text-white cursor-pointer bg-[#088178] outline-none transition duration-300  border border-solid border-amber-50">Add More Products
                </button></div>

        <?php endif; ?>
    </div>
    <section
        class=" font-quick  w-full h-[40vh] md:h-[30vh] lg:h-[30vh] flex text-cyan-50 justify-between flex-wrap  items-center pl-16 bg-[#041e42] bg-[url(./images/banner/b14.png)] bg-position-[20%]  bg-no-repeat bg-cover  mb-8">
        <div class="">
            <h4 class=" text-3xl py-2 px-0">Sign Up For Newsletters
            </h4>
            <p class=" text-[16px] py-0 text-cyan-600 ">Get E-mail updates about our latest shop and<span
                    class="text-yellow-400"> special offers.</span> </p>
        </div>
        <div class="  pr-10 pb-7 md:pb-0 ">
            <form id="subscribe-form" method="POST">
                <input type="email" id="email" name="email" class="text-gray-600  w-full md:w-2xs"
                    placeholder="Enter your email" required>
                <button
                    class="feature-shadow w-26 mt-1 h-[40.5px]   md:-ml-2.5 md:h-[42px] font-none text-white cursor-pointer bg-[#088178] outline-none transition duration-300  border border-solid border-amber-50"
                    type="submit">Subscribe</button>
            </form>

            <div id="message"></div>


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
                <a href="about.html" class="no-underline text-black">
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
                <a href="contact.html" class="no-underline text-black">
                    <h4 class="">Contact Us</h4>
                </a>

            </div>
            <div class="">
                <h4 class="mt-9 font-bold  mb-8">My Account</h4>
                <a href="cart.php" class="no-underline text-black">
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
                <div class="h-30 w-54"><img class="text-6xl" src="./images/logos/paymetns2.png" alt="" class="">
                </div>






            </div>
        </div>
        <div class="">
            <p class="mb-">© 2025 UniStyle. All rights reserved.</p>
        </div>
    </footer>
    <div id="cart-toast" class="fixed bottom-4 right-5  text-center bg-gray-600 text-white px-4 py-3 rounded-md shadow-lg hidden z-50">
        <span id="cart-toast-message"></span>
    </div>

    <script>
        document.getElementById('subscribe-form').addEventListener('submit', function(e) {
            e.preventDefault(); // prevent page reload

            let formData = new FormData(this);

            fetch('subscribe.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('message').innerText = data.message;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });

        function removeFromWishlist(productId) {
            fetch('remove_from_wishlist.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'product_id=' + productId
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById('product-' + productId).remove();
                        if (document.querySelectorAll('.product').length === 0) {
                            document.getElementById('wishlist-container').innerHTML = '<p>Your wishlist is empty.</p>';
                        }
                    } else {
                        alert('Failed to remove product.');
                    }
                })
                .catch(err => console.error(err));
        };

        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.add-to-cart-btn');

            buttons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const productId = this.dataset.productId;

                    fetch('add_to_cart.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
                            body: 'product_id=' + encodeURIComponent(productId)
                        })
                        .then(res => res.json())
                        .then(data => {
                            showToast('cart-toast', 'cart-toast-message', data.message);
                        })
                        .catch(err => console.error(err));;
                });
            });
        });

        function showToast(toastId, messageId, message) {
            let toast = document.getElementById(toastId);
            let msg = document.getElementById(messageId);
            msg.innerHTML = message;
            toast.classList.remove('hidden');
            setTimeout(() => toast.classList.add('hidden'), 5000);
        }
    </script>


    <script src="script.js"></script>
</body>

</html>