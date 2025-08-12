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

<body class="">

    <header
        class="  w-full flex items-center  fixed h-17 text-black justify-between py-5 header-shadow  bg-[#e3e6f3]  z-50">
        <a class=" font-agbalumo text-4xl text-black px-8 no-underline" href="home.html">Uni<span
                class="text-cyan-600">Style</span> </a>

        <div class="w-full flex justify-end space-x-3"><a href="wishlist.php" aria-current="page "
                class=" md:hidden px-4 no-underline right-1.5 text-black text-xl hover:border-b-cyan-600   hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100"><i
                    class="fa fa-heart text-[25px] " aria-hidden="true"></i>

            </a><a href="cart.php" aria-current="page "
                class=" md:hidden  no-underline right-1.5 text-black text-xl hover:border-b-cyan-600   hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100"><i
                    class="fa fa-cart-arrow-down  text-2xl" aria-hidden="true"></i>

            </a>
            <button class="md:hidden text-black text-2xl" id="mobile-menu-toggle"><i
                    class="fas fa-outdent"></i></button>
        </div>
        <ul class=" hidden lg:flex  space-x-14 font-poppins text-red-700 list-none pr-10">
            <li class=""><a href="home.html" aria-current="page"
                    class="   text-black no-underline  hover:text-cyan-600 hover:border-b-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100">Home</a>
            </li>
            <li class="  "><a href="shop.php" aria-current="page"
                    class="aria-[current=page]:text-cyan-600 aria-[current=page]:border-b-solid aria-[current=page]:border-b-2 aria-[current=page]:pb-[6px] aria-[current=page]:border-b-cyan-600 hover:border-b-cyan-600 no-underline text-black hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100">Shop</a>
            </li>
            <li class=""><a href="blog.html" aria-current="page"
                    class="  hover:border-b-cyan-600 no-underline text-black hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100">Blog</a>
            </li>
            <li class=""><a href="about.html" aria-current="page"
                    class="    hover:border-b-cyan-600 no-underline text-black hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]   duration-100">About</a>
            </li>
            <li class=""><a href="contact.html" aria-current="page"
                    class="  hover:border-b-cyan-600 text-black no-underline hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100">Contact</a>
            </li>
            <li class=""><a href="wishlist.php" aria-current="page"
                    class="text-black hover:border-b-cyan-600 hover:text-cyan-600 hover:border-b-solid hover:border-b-2 hover:pb-[6px]  duration-100"><i
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
        <li><a class="no-underline text-black" href="about.html" id="">About</a></li>
        <li><a class="no-underline text-black" href="contact.html" id="contact-mobile">Contact</a></li>
    </ul>
    <section class="w-full h-[40vh] 
         bg-[url('./images/banner/b1.jpg')]  bg-cover
          text-white flex flex-col text-center pt-16 justify-center">
        <h1 class="my-0 font-quick text-5xl font-bold ">#Best-Deals</h1>
        <p class=" font-poppins ">Get More for Less - Up to 70% Discounts</p>

    </section>
    <section class="w-full lg:px-0 px-20 py-10 text-center flex-wrap">

        <div
            class=" lg:justify-center   justify-center flex flex-wrap pt-5  md:flex md:flex-wrap  md:justify-between md:pt-5">
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="1">
                <div class="product">
                    <img class="home-product-img" src="./images/products/f8.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">long-sleeved summer shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">62$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class=" cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>
                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="2">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/f7.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">light cotton pants</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">70.50$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class=" cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>
                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="3">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/f6.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">long-sleeved summer shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">65$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="4">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/f5.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">short-sleeved summer shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">83$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="5">
                <div class="product">
                    <img class="home-product-img" src="./images/products/f4.jpg" alt="">
                    <div class="text-start px-0 py-2.5">
                        <span class="text-[#606063] text-xs font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 font-poppins">Light Summer Shirt</h5>
                        <div class="text-xs -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">65.50$</h4>
                    </div>
                    <button type="submit" name="add_to_cart" class="">
                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>
                    <form method="POST" action="wishlist.php" class="absolute top-2 right-2">
                        <input type="hidden" name="product_id" value="5">
                        <button type="submit" name="add_to_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px]">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </form>



            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="6">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/f3.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">light summer shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">61$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="7">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/f2.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">light summer shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">78$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="8">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/f1.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">light summer shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">78$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="9">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/n8.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">short-sleeved summer shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">62$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="10">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/n7.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">long-sleeved shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">70$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="11">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/n6.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">cotton summer short</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">65$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="12">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/n5.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">long-sleeved shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">83$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="13">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/n4.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">short-sleeved summer shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">68$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="14">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/n3.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">linen summer shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">61.50$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="15">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/n2.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">long-sleeved shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">78$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>
            <form method="POST" action="add_to_cart.php" class="wishlist-form product lg:home-product-style-lg  md:home-product-style  home-product-style-mobile relative">
                <input type="hidden" name="product_id" value="16">
                <div class="product ">
                    <img class="home-product-img" src="./images/products/n1.jpg" alt="">
                    <div class=" text-start px-0 py-2.5 ">
                        <span class="text-[#606063] text-xs pt-5 font-quick">Zara</span>
                        <h5 class="pt-2 text-[#1a1a1a] text-sm mb-0.5 -mt-1 font-poppins">long-sleeved shirt</h5>
                        <div class="text-xs -space-x-0.5 -mt-0.5">
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                            <i class="fas fa-star home-product-style-i"></i>
                        </div>
                        <h4 class="mt-0">80.50$</h4>
                    </div>
                    <button type="submit" name="action" value="add_cart">

                        <i class="fa fa-shopping-cart home-product-shop-icon" aria-hidden="true"></i>
                    </button>

                    <button type="submit" formaction="add_to_wishlist.php" name="action" value="add_wishlist" class="cursor-pointer home-product-wishlist-icon px-3 py-2 rounded-[35px] mt-2">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>

                </div>
            </form>

        </div>
    </section>
    <section class="text-center">
        <a href="#" class="pagination-element">1</a>
        <a href="#" class="pagination-element">2</a>
        <a href="#" class="pagination-element"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </a>
    </section>


    <section
        class=" font-quick  w-full h-[40vh] md:h-[30vh] flex text-cyan-50 justify-between flex-wrap  items-center pl-16 bg-[#041e42] bg-[url(./images/banner/b14.png)] bg-position-[20%]  bg-no-repeat bg-cover  my-8">
        <div class="">
            <h4 class=" text-3xl py-2 px-0">Sign Up For Newsletters
            </h4>
            <p class=" text-[16px] py-0 text-cyan-600 ">Get E-mail updates about our latest shop and<span
                    class="text-yellow-400"> special offers.</span> </p>
        </div>
        <div class="  pr-10 pb-7 md:pb-0 ">
            <input type="email" class="text-gray-600  w-full md:w-2xs" placeholder="Your email address">
            <button
                class="feature-shadow w-26 mt-1 h-[40.5px]   md:-ml-2.5 md:h-[42px] font-none text-white cursor-pointer bg-[#088178] outline-none transition duration-300  border border-solid border-amber-50">Sign
                Up</button>
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
                <a href="wishlist.php" class="no-underline text-black">
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




    
    <div id="wishlist-toast" class="fixed bottom-5 right-5 bg-cyan-600 text-white px-4 py-3 rounded-md shadow-lg hidden z-50">
        <span id="wishlist-toast-message">
            <h6>Added to wishlist</h6>
            <p>Your product has been added to your wishlist.</p>
        </span>
    </div>

    <div id="wishlist-toast" class="fixed bottom-5 right-5 bg-cyan-600 text-white px-4 py-3 rounded-md shadow-lg hidden z-50">
        <span id="wishlist-toast-message"></span>
    </div>

    <script>
        function addToWishlist(productId) {
            fetch('add_to_wishlist.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'product_id=' + productId
                })
                .then(response => response.json())
                .then(data => {
                    showToast(data.message, !data.success);
                })
                .catch(() => showToast("An error occurred", true));
        }

        

        document.querySelectorAll('.add-to-wishlist').forEach(button => {
            button.addEventListener('click', function() {
                let productId = this.getAttribute('data-id');
                addToWishlist(productId);
            });
        });
    </script>


    <script src="script.js"></script>



</body>

</html>