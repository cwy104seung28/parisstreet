<link rel="stylesheet" href="css/nice-select.css">
<div class="fix-mobile hide-for-large">
    <ul class="list-area">
        <li>
            <a href="./index.php">
                <img src="./img/home.svg" alt="">
                <div class="text">首頁</div>
            </a>
        </li>
        <li>
            <a href="./collection.php">
                <img src="./img/heart.svg" alt="">
                <div class="text">加入珍藏</div>
            </a>
        </li>
        <li class="search">
            <a href="search.php">
                <img src="./img/search-mobile.svg" alt="">
                <div class="text">搜尋</div>
            </a>
        </li>
        <li>
            <a href="inquiry.php">
                <img src="./img/cart-mobile.svg" alt="">
                <div class="text">加入詢價</div>
            </a>
        </li>
    </ul>
</div>

<!-- <div class="searchWrap">
    <div class="search-area">
        <div class="title">搜尋商品</div>
        <div class="search">
            <input type="text">
            <a href="serach_result.php"><img src="./img/search-mobile.svg"></a>
        </div>
        <div class="close"><img src="./img/close-mobile.svg"></div>
    </div>
    <div class="filter-area">
        <div class="icon"></div>
        <ul class="list">
            <li class="option selected focus" data-value="">任何時段皆可</li>
            <li class="option " data-value="">下午 12:00-17:00</li>
            <li class="option " data-value="">晚上 17:00-20:00</li>
        </ul>
        <select name="" id="" class="cart-select">
            <option value="">品牌</option>
            <option value="">LV</option>
            <option value="">CHANEL</option>
            <option value="">GUCCI</option>
            <option value="">YSL</option>
            <option value="">Hermes</option>
            <option value="">Dior</option>
        </select>
    </div>
</div> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script>
    $('.cart-select').niceSelect();

    // $(".list-area .search").click(function() {
    //     $(".searchWrap").addClass("is-show");
    // });

    // $(".searchWrap .close").click(function() {
    //     $(".searchWrap").removeClass("is-show");
    // });
</script>