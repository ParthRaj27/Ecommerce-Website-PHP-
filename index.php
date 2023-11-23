<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MSME</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>*{
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    }

    .box{
        border-radius: 10px;
    }

    li{
        list-style-type: none;
    }
    .navbar{
        height: 60px;
        background-color: #0f1111;
        color: white;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .nav-logo{
        height: 50px;
        width: 100px;
    }

    .logo{
        background-image: url('images/amazon_logo.png');
        background-size: cover;
        height: 50px;
        width: 100px;
    }

    .border{
        border: 1.5px solid transparent;
    }

    .border:hover{
        border: 1.5px solid white;
    }

    .address-first{
        color: #cccccc;
        font-size: 0.85rem;
        margin-left: 15px;
    }

    .address-second{    
        font-size: 1rem;
        margin-left: 3px;
    }

    .address-icon{
        display: flex;
        align-items: center;
    }

    .nav-search{
        display: flex;
        justify-content: space-evenly;
        width: 620px;
        height: 40px;
        border-radius: 4px;
    }

    .nav-search:hover{
        /* transition: 2ms; */
        border: 2px solid orange;
    }

    .search-select{
        background-color: #f3f3f3;
        width: 50px;
        text-align: center;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        border: none;
    }
    .div{
        padding-bottom: 5px;
        margin-bottom: 5px;
    }

    .search-input{
        width: 100%;
        font-size: 1rem;
        border: none;
    }

    .search-icon{
        width: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.2rem;
        background-color: #febd68;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
        color: #0f1111;
    }

    .nav-first{
        font-size: 0.7 rem;
    }

    .nav-second{
        font-size: 0.85rem;
        font-weight: 700;
    }

    .nav-cart i{
        font-size: 28px;
    }

    .nav-cart{
        font-size: 0.90rem;
        font-weight: 700;
    }

    .panel{
        height: 40px;
        background-color: #222f3d;
        display: flex;
        color: white;
        align-items: center;
        justify-content: space-evenly;
    }

    .panel ops{
        width: 70%;
        font-size: 0.85rem;
    }
    .panel-ops p{
        display: inline;
        margin-left: 18px;
    }

    .panel-deals{
        font-size: 0.9rem;
        font-weight: 700;
    }


    .hero-section{
        background-image: url('img/header.png');
        background-size: cover;
        height: 380px;
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }

    .hero-msg{
        background-color: white;
        color: black;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.85rem;
        width: 80%;
        margin-bottom: 25px;
    }

    .hero-msg a{
        color: #007185;
    }

    .shop-section{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        background-color: #e2e7e6;
    }

    .box{
        height: 300px;
        width: 21%;
        background-color: white;
        padding: 20px 0px 15px;
        margin-top: 40px;
    }

    .box-img{
        height: 200px;
        background-size: cover;
        margin-top: 1rem;
        margin-bottom: 1rem;    
    }

    .box-content{
        margin-left: 1rem;
        margin-right: 1rem;
    }
    .box-content p{
        color: #007185
    }

    footer{
        margin-top: 15px;
    }

    .footer-panel-1{
        background-color: #37475a;
        color: white;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 0.85rem;
    }

    .footer-panel-2{
        background-color: #222f3d;
        color: white;
        height: 300px;
        display: flex;
        justify-content: space-evenly;
    }

    .footer-panel-2 ul li a{
        text-decoration: none;
        color: white;
        font-size: 0.85rem;
        color: #dddddd;
    }

    .footer-panel-2 ul li p{
        margin-top: 30px;
        margin-bottom: 10px;
    }

    .footer-panel-2 ul {
        margin-top: 20px;
    }

    .footer-panel-2 ul li {
        margin: 5px;
    }

    .footer-panel-3{
        background-color: #222f3d;
        color: white;
        border-top: 0.5px solid white;
        height: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logoBottom{
        background-image: url('images/amazon_logo.png');
        background-size: cover;
        height: 50px;
        width: 100px;
    }

    .footer-panel-4{
        background-color: #222f3d;
        height: 80px;
    }

    .pages{
        font-size: 0.7rem;
        text-align: center;
        padding-top: 5px;
    }

    .pages a{
        text-decoration: none;
        color: white;
        font-size: 0.85rem;
        margin-right: 10px;
    }

    .copyright p{
        padding-top: 5px;
        font-size: 0.85rem;
        text-align: center;
        color: white
    }
    .fbox{
        margin-bottom: 10px;
    }
    *{
        box-sizing: border-box;
    }
    :root{
        --hoverTextColor:rgb(244, 51, 151);
        --textColor : rgb(87, 85, 85);
    }


    body{
        margin: 0;
        padding: 0;
        width: 100%;
        font-family: 'Roboto', sans-serif;
        color:var(--textColor);
    }
    img{
        width: 100%;
    }
    .header{
        height: 72px;
        outline: 1px solid #ccc;
        padding: 0px 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-weight: 400;
    }
    .headerLeft,
    .headerRight{
        display: flex;
        align-items: center;
    }
    .logoContainer{
        width: 155px;
    }


    .searchInputContainer{
        width: 700px;
        height: 45px;
        outline:1px solid rgb(126, 126, 126);
        display: flex;
        margin-left: 25px;
        border-radius: 3px;
        align-items: center;
        padding: 10px;
        position: relative;
    }
    .searchIcon{
        width: 20px;
        margin: 6px;
    }
    form{
        width: 100%;
    }
    .inputSearch{
        width: 100%;
        border:none;
        outline: none;
        font-size: 16px;
    }
    #closeSearch{
        display: none;
    }


    .searchRecentModal{
        position: absolute;
        bottom: 0;
        left:0;
        top:45px;
        background-color: white;
        height: 400px;
        width: 100%;
        display: none;
        padding: 15px;
        box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
        z-index: 3;
    }
    .searchInputContainer:focus-within .searchRecentModal{
        display: block;
        background-color: white;
    }
    .recentIcon{
        width: 20px;
        margin-right: 10px;
    }
    .recentItem{
        display: flex;
        align-items: center;
        background-color: white;
    }


    /***right***/
    .mobileIcon{
        width: 15px;
        margin: 5px;
    }
    .downloadContainer{
        display: flex;
        align-items: center;
        height: 100%;
        padding-right: 20px;
        position: relative;
    }
    .downloadContainer:hover{
        color:var(--hoverTextColor);
        cursor: pointer;
    }
    .downloadBtn{
        display: block;
        width: 180px;
        margin-top: 5px;
    }
    .downloadHoverBtnContainer{
        position: absolute;
        bottom: 0;
        top:40px;
        /* box-shadow: 0px 0px 5px rgba(0,0,0,0.3); */
        width: 200px;
        /* background-color: red; */
        display: none;
        height: 200px;
        padding: 10px;
        margin-left: -30px;
        color:var(--textColor);
        background: white;
        z-index: 2;
    }
    .downloadContainer:hover .downloadHoverBtnContainer,
    .downloadContainer:focus .downloadHoverBtnContainer{
        display: block;
    }

    .downloadContainer p{
        margin:0;
        padding: 0;
        font-size: 17px;
    }

    .profileAndCart{
        display: flex;
        align-items: center;
        
    }
    .profileAndCart:hover,
    .profileAndCart:focus{
        color: var(--hoverTextColor);
    }

    .profileIcon,
    .CartIcon{
        width: 20px;
    }
    .profileAndCart p{
        margin:0;
        padding: 0;
    }
    .profileContainer,
    .CartContainer{
        padding: 0px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .becomeSupplierContainer{
        padding: 0px 30px;
        border-left: 1.5px solid #ccc;
        border-Right: 1.5px solid #ccc;
        font-size: 17px;
    }

    /**navigation css ***/
    nav{
        width: 100%;
        border-bottom: 1px solid #ccc;
        height: 54px;
        
    }
    nav ul{
        padding: 0;
        list-style: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 10px;
        height: 100%;
        margin: 0; 
        position: relative;
    }
    nav ul li{
        height: 100%;
        display: flex;
        align-items: center;
        margin: 0;
        /* background-color: red; */
        border-bottom: 2px solid transparent;
        cursor: pointer; 
        
    }
    nav ul li:hover{
        color:var(--hoverTextColor);
        border-bottom: 4px solid var(--hoverTextColor);
    }


    /**module box submenu***/
    .subMenu{
        position: absolute;
        /* height: 400px; */
        top:51px;
        left: 0;
        right: 0;
        background-color: white;
        border: 1px solid #ccc;
        box-sizing: border-box;
        display: none;
        margin: 0px 10px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        padding: 20px;
    }

    nav ul li:hover .subMenu{
        display: block;
    }

    .subMenu p{
        color:var(--textColor)

    }
    .submenuList{
        display: flex;
        flex-direction: column;

    }
    .column{
        margin-right: 40px;
    }



    /**********************lowest price*************************/
    .lowestpriceContainer{
        display: flex;
        margin:50px auto;
        max-width: 1100px;
        /* background-color: red; */
    }
    .lowestpriceContainer h1{
        font-size: 40px;
        margin: 0;
        color:rgb(36, 31, 31);
    }
    .lowestPrice_text{
        width: 50%;
        padding: 25px 0 0 25px;
    }
    .lowestPrice_image{
        width: 50%;
    }
    .lowestPrice_icon{
        width: 30px;
        border-radius: 40px;
        background-color: rgb(238, 133, 187);   
    }
    .lowestPriceWhay{
        display: flex;
        height: 50px;
        margin: 20px 0;
    }
    .lowestPriceItem{
        padding:  0 20px;
        width: 100%;
        display: flex;
        align-items: center;
        border-right: 2px solid #ccc;
    }
    .lowestPriceItem p{
        padding-left: 10px;
    }
    .downloadApp_contianer{
        display: flex;
        align-items: center;
        font-size: 20px;
        height: 50px;
        background-color: var(--hoverTextColor);
        border:none;
        outline: none;
        padding: 0 10px;
        border-radius: 5px;
        color:white;
    }
    .downloadApp_contianer p{
        padding: 0px 20px;
    }



    /*topCategoriesFrom*/
    .topCategoriesFrom{
        width: 1100px;
        margin: auto;
    }
    .topCategoriesHeading{
        display: flex;
        align-items: center;
        
    }
    .horizontalLine{
        padding: 1px;
        background-color: var(--hoverTextColor);
        width:50%;
    }
    .topCategoriesHeading h1{   
        width: max-content;
        width: 1050px;
        color:rgb(8, 8, 8);
        font-size: 38px;
        margin: 0;
    }
    .topCategoreisImage{
        width: 100%;
        height: 500px;
        background-image: url("https://images.meesho.com/images/marketing/1649759774600.jpg");
        background-repeat: no-repeat;
        margin-top: 50px;
        display: flex;
        align-items: flex-end;
    }
    .topCategoreisImage img{
        max-width: 300px;
        margin: 10px;
        bottom: 0;
    }
    .topCategoreisImage img:first-child{
        max-width: 400px;
    }

    /****/
    .essentialContaienr{
        width: 100%;
        height: 500px;
        background-color: 400px;
        margin-top: 50px;
        background-image: url("https://images.meesho.com/images/marketing/1664343269674.jpg");
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .essentialContaienr img{
        max-width: 180px;
    }


    .essential_item{
        max-width: 250px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .essen-btn{
        margin-left: 100px;
        margin-top: 20px    ;
    }

    /********************************becomesellerBanner_Container*******************/
    .becomesellerBanner_Container{
        margin: 50px 0px;
        position: relative;

    }
    .becomesellerBanner_Container img{
        width: 100%;
    }
    .becomeSeller_Content{
        position: absolute;
        top:0;
        right: 0;
        width: 100%;
        padding: 40px 0px;
    }
    .becomeSeller_content_content{
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    .becomerSeller_appDownload{
        position: relative;
        width: 150px;
        height: 50px;
        background-color: black;
        margin: 10px;
        padding: 5px;
        border-radius: 5px;
    }
    .becomerSeller_appDownload img{
        width: 100%;
        height: 100%;
        background-color: black;
    }
    .becomeSeller_content_content h2{
        color:rgb(85, 133, 248) ;
        font-size: 30px;
        margin-bottom: 0;
    }
    .becomeSeller_content_content h1{
        color: var(--hoverTextColor);
        font-size: 50px;
        width: 60%;
        text-align: right;
    }
    .becomerSeller_appDownload_container{
        display: flex;
    }


    /*****************meesho_supper_container***************************/
    .meeesho_benifit_image{
        width: 20px;
        margin-right: 10px;
    }
    .meesho_supper_benifit{
        display: flex;
        align-items: center;
        padding: 0px 40px;
        border-right: 2px solid white;
        height: 25px;
    }
    .meesho_supper_benifit:first-child{
        padding: 0;
        padding-right: 40px;
    }
    .meesho-suppliear_benifit_container{
        display: flex;
        align-items: center;
        margin: 40px 0px;
    }
    .meesho_supper_container{
        position: relative;
    }
    .meesho_supper_container_content{
        position: absolute;
        top: 0;
        padding: 20px 30px;
        color:white;
    }
    .signup_btn_now{
        background-color: white;
        color:var(--hoverTextColor);
        font-size: 20px;
        font-weight: bold;
        padding: 15px 20px;
        box-sizing: border-box;
        text-decoration: none;
        border-radius: 5px;
    }

    .Product_container_You{
        min-height: 500px;
        /* background-color: #ccc; */
        padding: 10px;
    }
    .product_container_you_content{
        display: grid;
        grid-template-columns: 280px 1fr;
        height: 100%;
        gap:30px;
    }
    .product_category_you_aside{
        /* background-color: red; */
        height: 100%;
    }
    .product_category_display{
        /* background-color: green; */
        height: 100%;
        display: grid;
        grid-template-columns: repeat(4,minmax(250px,1fr));
    }
    .search_category_input{
        display: flex;
        padding: 15px;
        font-size: 18px;
        border:2px solid #ccc;
        border-radius: 5px;
    }
    .search_category_input input{
        font-size: 18px;
        width: 100%;
        background-color: transparent;
        border:none;
        outline: none;
        padding: 0px 10px;
    }
    .search_category_input input::placeholder{
        font-size: 15px;
    }
    .display_Category_list{
        padding: 20px 10px;
        display: flex;
        flex-direction: column;
    }
    .display_Category_list label{
        margin: 3px 0px;
        text-transform: capitalize;
    }


    .productCard{
        max-width: 250px;
        padding: 10px;
        box-shadow: -1px -1px 5px rgba(0,0,0,0.1),
        1px 1px 5px rgba(0,0,0,0.3);
        border-radius: 5px;
        cursor: pointer;
    }
    .product_image{
        display: flex;
        
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .product_image img{
        /* width: 200px; */
        width: fit-content;
        height: 170px;
    }
    .product_price{
        font-weight: 550;
        font-size: 22px;
        color:black;
    }
    .product_name{
        text-transform: capitalize;
    }

</style>
    <!-- styles.css -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <!-- <link rel="stylesheet" href="messo.css"> -->

</head>

<body>
    <div>
        <img src="./img/header.png" alt="">
    </div>
        <br>
    <header class="header">
        <div class="headerLeft">
            <!-- <div class="logoContainer">
                <img src="./img/meesho.png" />
            </div> -->

            <!--seach box-->
            <!-- <div class="searchInputContainer">
                <div class="searchIcon">
                    <img src="./img/search.png" />
                </div>
                <form action="" id="inputForm">
                    <input type="text" placeholder="Plastic ,Industrial Waste or Search by Product Code" class="inputSearch" />
                </form>
                <div class="inputCloseSearch">
                    <i class="fa-solid fa-xmark" id="closeSearch"></i>
                </div>

                <div class="searchRecentModal">
                    <h3>Recent Searches</h3>
                    <div class="listofRecent">

                    </div>
                </div>
            </div> -->
        </div>

        <div class="headerRight">
            <!-- <div class="downloadContainer">
                <div class="mobileIcon">
                    <img src="./img/mobile.png" />
                </div>
                <p>Download App</p>

                <div class="downloadHoverBtnContainer">
                    <h3>Download From</h3>

                    <a href="" class="downloadBtn">
                        <img src="https://images.meesho.com/images/pow/playstore-icon-big.webp" />
                    </a>
                    <a href="" class="downloadBtn">
                        <img src="https://images.meesho.com/images/pow/appstore-icon-big.webp" />
                    </a>
                </div>
            </div> -->

            <div class="becomeSupplierContainer">
                <a href="index.php" style="text-decoration: none; color: black;">
                <p>Home</p>
                </a>
            </div>

            <div class="becomeSupplierContainer">
                <a href="about-us.php" style="text-decoration: none; color: black;">
                <p>About Us</p>
                </a>
            </div>

            <div class="becomeSupplierContainer">
                <a href="BecomeSupplier.php" style="text-decoration: none; color: black;">
                <p>Become a Supplier</p>
                </a>
            </div>

            <div class="profileAndCart">
                <!-- <div class="profileContainer">
                    <div class="profileIcon">
                        <img src="./img/user.png" />
                    </div>
                    <a href="/" style="text-decoration: none; color: black;">
                        <p>Profile</p>
                        </a>
                    
                </div> -->

                <!-- <div class="CartContainer">
                    <div class="CartIcon">
                        <img src="./img/cart.png" />
                    </div>
                    <a href="/" style="text-decoration: none; color: black;">
                        <p>My Orders</p>
                        </a>
                    
                </div> -->
            </div>
        </div>
    </header>

    <!--navigation-->
    <!-- <nav>
        <ul>
            <li>Plastic
                <div class="subMenu">
                    <div id="womenEthic" class="submenuList">
                        <ul>    
                            <li>PVC Plastic</li>
                            <li>LDPE Plastic</li>
                            <li>PP Plastic</li>
                            <li>Micron Based Classification</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>Metals
                <div class="subMenu">
                    <div id="womenWestern" class="submenuList">
                        <ul>    
                            <li>Iron</li>
                            <li>Steel</li>
                            <li>Brass</li>
                            <li>Copper</li>
                        </ul>
                    </div>

                </div>
            </li>
            <li>Paper
                <div class="subMenu">
                    <div id="men" class="submenuList">
                        <ul>    
                            <li>Newspaper</li>
                            <li>Magazine / Book</li>
                            <li>Recycled Paper</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>Wood
                <div class="subMenu">
                    <div id="kids" class="submenuList">
                        <ul>    
                            <li>Wooden Chips</li>
                            <li>Wooden Logs</li>
                            <li>Wooden Dust</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>Fabric
                <div class="subMenu">
                    <div id="HomeAndKitchen" class="submenuList">
                        <ul>    
                            <li>Hard Fiber</li>
                            <li>Soft Fiber</li>
                            <li>Packaging Material</li>
                            <li>Spools</li>
                            <li>Cordage</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>Ceramic
                <div class="subMenu">
                    <div id="beautyAndHealth" class="submenuList">
                        <ul>    
                            <li>Broken Ceramics</li>
                            <li>Dry Ceramic material</li>
                            <li>Waste Glaze</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>Glass
                <div class="subMenu">
                    <div id="JewelleryAndAccessories" class="submenuList">
                        <ul>    
                            <li>Size</li>
                            <li>Thickness</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>Electronics
                <div class="subMenu">
                    <div id="BagsFootWarId" class="submenuList">
                        <ul>    
                            <li>Battery</li>
                            <li>Computer</li>
                            <li>Leptop</li>
                            <li>Smart Phone</li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>

    </nav> -->

    <main>
        <!-- <div class="hero-section">
            <div class="hero-msg">
                <p>You are on amazon.com. You can also shop on Amanzon India for millions of product with fast local
                    delivery. <a href="https://www.amazon.in/" target="_blank">Click here to go to amazon.in</a></p>
            </div>
        </div> -->

        <div class="shop-section">
            <div class="box">
                <div class=" box-content">
                    <a href="electronics.php" style="text-decoration: none; color:rgb(87, 85, 85);">
                    <h2> Electronics</h2>
                    <div class="box-img" style="background-image: url('images/electonics.jpg');"></div>
                    
                    </a>
                </div>
            </div>

            <div class="box">
                <div class=" box-content">
                    <a href="plastic.php" style="text-decoration: none; color:rgb(87, 85, 85);">
                        <h2> Plastic</h2>
                        <div class="box-img" style="background-image: url('images/plastic.jpg');"></div>
                        
                        </a>
                </div>
            </div>

            <div class="box">
                <div class=" box-content">
                    <a href="ceramic.php" style="text-decoration: none; color:rgb(87, 85, 85);">
                        <h2> Ceramic</h2>
                        <div class="box-img" style="background-image: url('images/cera.jpg');"></div>
                        
                        </a>
                </div>
            </div>


            <div class="box">
                <div class=" box-content">

                    <a href="wood.php" style="text-decoration: none; color:rgb(87, 85, 85);">
                        <h2> Wood</h2>
                        <div class="box-img" style="background-image: url('images/wood.jpg');"></div>
                        
                        </a>
                </div>
            </div>

            <div class="box fbox">
                <div class=" box-content">
                    <a href="fabric.php" style="text-decoration: none; color:rgb(87, 85, 85);">
                        <h2> Fabric</h2>
                        <div class="box-img" style="background-image: url('images/fabric.webp');"></div>
                        
                        </a>
                </div>
            </div>

            <div class="box fbox">
                <div class=" box-content">
                    <a href="glass.php" style="text-decoration: none; color:rgb(87, 85, 85);">
                        <h2> Glass</h2>
                        <div class="box-img" style="background-image: url('images/glass.jpg');"></div>
                        
                        </a>
                </div>
            </div>

            <div class="box fbox">
                <div class=" box-content">

                    <a href="paper.php" style="text-decoration: none; color:rgb(87, 85, 85);">
                        <h2> Paper</h2>
                        <div class="box-img" style="background-image: url('images/paper.jpg');"></div>
                        
                        </a>
                </div>
            </div>


            <div class="box fbox">
                <div class=" box-content">

                    <a href="metals.php" style="text-decoration: none; color:rgb(87, 85, 85);">
                        <h2> Metals</h2>
                        <div class="box-img" style="background-image: url('images/metals.jpg');"></div>
                        
                        </a>
                </div>
            </div>
            <div class="box fbox">
                <div class=" box-content">

                    <a href="Products.php" style="text-decoration: none; color:rgb(87, 85, 85);">
                        <h2>Extra Products</h2>
                        <div class="box-img" style="background-image: url('images/metals.jpg');"></div>
                        
                        </a>
                </div>
            </div>

        </div>

    </main>

    <!-- <footer style="
    margin-top: 0%;">
        <div class="footer-panel-1">
            Back To Top
        </div>

        <div class="footer-panel-2">
            <ul>
                <li><p>Get to Know Us</p></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About Amazon</a></li>
                <li><a href="#">Investor Relationship</a></li>
                <li><a href="#">Amazon Devices</a></li>
                <li><a href="#">Amazon Services</a></li>
            </ul>

            <ul>
                <li><p>Connect with Us</p></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                
            </ul>
            
            <ul>
                <li><p>Make Money with Us</p></li>
                <li><a href="#">Sell on Amazon</a></li>
                <li><a href="#">Sell under Amazon Accelerator</a></li>
                <li><a href="#">Protect and Build Your Brand</a></li>
                <li><a href="#">Amazon Global Selling</a></li>
                <li><a href="#">Become an Affiliate</a></li>
                <li><a href="#">Fulfilment by Amazon</a></li>
                <li><a href="#">Advertise Your Products</a></li>
                <li><a href="#">Amazon Pay on Merchants</a></li>
            </ul>
            
            <ul>
                <li><p>Let Us Help You</p></li>
                <li><a href="#">Your Account</a></li>
                <li><a href="#">Returns Centre</a></li>
                <li><a href="#">100% Purchase Protection</a></li>
                <li><a href="#">Amazon App Download</a></li>
                <li><a href="#">Help</a></li>

            </ul>
        </div>

        <div class="footer-panel-3">
            <div class="logoBottom"></div>
        </div> -->

        <!-- <div class="footer-panel-4">

            <div class="pages">
                <a href="#">Conditions of Use & Sale</a>
                <a href="#">Privacy Notice</a>
                <a href="#">Interest-Based Ads</a>
            </div>

            <div class="copyright">
                <p> 2023, Amazon.com, Inc. or its affiliates</p>
            </div>
        </div>

    </footer> -->
    <footer>
    <div class="footer-panel-1" id="backToTopBtn">
    <button class="footer-panel-1" id="backToTopBtn">
    ▲ Back To Top
</button>

</div>

<div class="footer-panel-2">
            <ul>
                <li><p>Get to Know Us</p></li>
                <li><a href="#">About </a></li>
                <li><a href="#">Seller Relationship</a></li>
                <li><a href="#">Devices</a></li>
                <li><a href="#">Services</a></li>
            </ul>
     
            <ul>
                <li><p>Connect with Us</p></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                
            </ul>
            
            <ul>
                <li><p>Make Money with Us</p></li>
                <li><a href="#">Sell</a></li>
                <!-- <li><a href="#">Sell under Amazon Accelerator</a></li> -->
                <li><a href="#">Protect and Build Your Brand</a></li>
                <li><a href="#">Global Selling</a></li>

                <!-- <li><a href="#">Fulfilment by Amazon</a></li> -->
                <li><a href="#">Advertise Your Products</a></li>
                <!-- <li><a href="#">Amazon Pay on Merchants</a></li> -->
            </ul>
            
            <ul>
                <li><p>Let Us Help You</p></li>
                <li><a href="#">Your Account</a></li>
                <!-- <li><a href="#">Amazon App Download</a></li> -->
                <li><a href="#">Help</a></li>
     
            </ul>
        </div>
     
    
     
        <div class="footer-panel-4">
     
            <div class="pages">
                <a href="#">Conditions of Use &amp; Sale</a>
                <a href="#">Privacy Notice</a>
                <a href="#">Interest-Based Ads</a>
            </div>
     
            <!-- <div class="copyright">
                <p> 1996-2023, Amazon.com, Inc. or its affiliates</p>
            </div> -->
        </div>
     
     </footer>

</body>
<script>
    // Get the button element
    var backToTopButton = document.getElementById("backToTopBtn");

    // Add a click event listener to the button
    backToTopButton.addEventListener("click", function() {
        // Scroll the page to the top smoothly
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>
</html>