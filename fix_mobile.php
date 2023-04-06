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
                <img src="./img/collection.svg" alt="">
                <div class="text">加入珍藏</div>
            </a>
        </li>
        <li class="search">
            <img src="./img/search-mobile.svg" alt="">
            <div class="text">搜尋</div>
        </li>
        <li>
            <a href="inquiry.php">
                <img src="./img/cart-mobile.svg" alt="">
                <div class="text">加入詢價</div>
            </a>
        </li>
    </ul>
</div>

<div class="searchWrap">
    <div class="search-area">
        <div class="title">搜尋商品</div>
        <div class="search">
            <input type="text">
            <a href="serach_result.php"><img src="./img/search-mobile.svg"></a>
        </div>
        <div class="close"><img src="./img/close-mobile.svg"></div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<script>
    $(".list-area .search").click(function() {
        $(".searchWrap").addClass("is-show");
    });

    $(".searchWrap .close").click(function() {
        $(".searchWrap").removeClass("is-show");
    });
</script>