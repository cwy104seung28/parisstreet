<!DOCTYPE html>
<html>

<head>
    <?php include 'html_head.php'; ?>
</head>
<?php $now = ''; ?>

<body>
    <?php include 'topmenu.php'; ?>
    <div class="trackingWrap">
        <div class="top-title">訂單查詢</div>
        <ul class="trackingList">
            <li>
                <div class="cart-information flex-container">
                    <div class="number">訂單編號：<span class="num">23195688</span></div>
                    <div class="date">訂單日期：<span class="num">2023/06/29</span></div>
                    <div class="open">
                        <div class="plus">+</div>
                        <div class="minus">-</div>
                    </div>
                </div>
                <div class="tracking-detail">
                    <div class="detailWrap flex-container">
                        <div class="stepWrap">
                            <ul class="stepList">
                                <li class="flex-container align-middle current">
                                    <div class="number">1</div>
                                    <div class="title">倉庫揀貨</div>
                                </li>
                                <li class="flex-container align-middle">
                                    <div class="number">2</div>
                                    <div class="title">出貨</div>
                                </li>
                                <li class="flex-container align-middle">
                                    <div class="number">3</div>
                                    <div class="title">物流運送中</div>
                                </li>
                                <li class="flex-container align-middle">
                                    <div class="number">4</div>
                                    <div class="title">已送達</div>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-detail">
                            <ul class="cartList">
                                <li>
                                    <div class="title">CHANEL 小型後背包</div>
                                    <div class="size">ONE SIZE / 1</div>
                                    <div class="price">NT$ 15,725</div>
                                </li>
                                <li>
                                    <div class="title">CHANEL 22包</div>
                                    <div class="size">ONE SIZE / 1</div>
                                    <div class="price">NT$ 21,355</div>
                                </li>
                            </ul>
                            <div class="total-price">
                                總共 NT$ <span class="total">17,343</span>
                                <div class="note">(內含營業稅）</div>
                            </div>
                        </div>
                    </div>
                    <div class="other-detail">
                        <div class="arriving-date">
                            預計到貨日：2023/07/29
                        </div>
                        <div class="other">
                            (1)購買前請詳閱商品頁中的商品資訊、內容及店家的購物說明，以避免退換貨問題。<br>
                            (2)若您有任何商品、出貨、退貨問題，可透過[私訊]與店家聯繫，店家也會提供聯絡方
                            式在店家網頁右上方的「店面介紹」。<br>
                            (3)若與店家有消費爭議或聯繫不上店家，可前往商店街<br>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="cart-information flex-container">
                    <div class="number">訂單編號：<span class="num">23195688</span></div>
                    <div class="date">訂單日期：<span class="num">2023/06/29</span></div>
                    <div class="open">
                        <div class="plus">+</div>
                        <div class="minus">-</div>
                    </div>
                </div>
                <div class="tracking-detail">
                    <div class="detailWrap flex-container">
                        <div class="stepWrap">
                            <ul class="stepList">
                                <li class="flex-container align-middle current">
                                    <div class="number">1</div>
                                    <div class="title">倉庫揀貨</div>
                                </li>
                                <li class="flex-container align-middle">
                                    <div class="number">2</div>
                                    <div class="title">出貨</div>
                                </li>
                                <li class="flex-container align-middle">
                                    <div class="number">3</div>
                                    <div class="title">物流運送中</div>
                                </li>
                                <li class="flex-container align-middle">
                                    <div class="number">4</div>
                                    <div class="title">已送達</div>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-detail">
                            <ul class="cartList">
                                <li>
                                    <div class="title">CHANEL 小型後背包</div>
                                    <div class="size">ONE SIZE / 1</div>
                                    <div class="price">NT$ 15,725</div>
                                </li>
                                <li>
                                    <div class="title">CHANEL 22包</div>
                                    <div class="size">ONE SIZE / 1</div>
                                    <div class="price">NT$ 21,355</div>
                                </li>
                            </ul>
                            <div class="total-price">
                                總共 NT$ <span class="total">17,343</span>
                                <div class="note">(內含營業稅）</div>
                            </div>
                        </div>
                    </div>
                    <div class="other-detail">
                        <div class="arriving-date">
                            預計到貨日：2023/07/29
                        </div>
                        <div class="other">
                            (1)購買前請詳閱商品頁中的商品資訊、內容及店家的購物說明，以避免退換貨問題。<br>
                            (2)若您有任何商品、出貨、退貨問題，可透過[私訊]與店家聯繫，店家也會提供聯絡方
                            式在店家網頁右上方的「店面介紹」。<br>
                            (3)若與店家有消費爭議或聯繫不上店家，可前往商店街<br>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div>

    <?php include 'fix_mobile.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>
<script>
    $(window).on("scroll", function() {
        var _scrollTop = $(this).scrollTop();

        if (_scrollTop >= 100) {
            $(".topmenu").addClass("is-show")
        } else {
            $(".topmenu").removeClass("is-show")
        }
    }).trigger("scroll");

    $(".cart-information").each(function(i, el) {
        $(el).click(function() {
            $(el).next(".tracking-detail").slideToggle();
            $(el).children(".open").toggleClass('is-open')
        })
    })
    // $(".cart-information").click(function() {
    //     $(".tracking-detail").slideToggle();
    //     $('.cart-information .open').toggleClass('is-open')
    // });
</script>