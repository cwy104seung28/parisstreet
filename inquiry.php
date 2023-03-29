<!DOCTYPE html>
<html>

<head>
    <?php include 'html_head.php'; ?>
</head>

<body>
    <?php include 'topmenu.php'; ?>
    <div class="brand-container">
        <div class="top-area is-white">
            <div class="category">
                <a href="./index.php">熱門品牌</a>
                <div class="next hide-for-large">
                    <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="3.4" height="4.23" viewBox="0 0 3.4 4.23">
                        <g id="c" data-name="文字">
                            <polygon points="0 0 3.4 2.12 0 4.23 0 0" />
                        </g>
                    </svg>
                </div>
                <img class="show-for-large" src="./img/next.svg">
                <a class="en now" href="./brand.php">CHANEL</a>
            </div>
        </div>
        <div class="brand-area">
            <ul class="brand">
                <li>
                    <a href="./species.php">
                        <img src="./img/bag.png" alt="">
                        <div class="cover"></div>
                        <div class="text">皮包</div>
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        <img src="./img/shoes.png" alt="">
                        <div class="cover"></div>
                        <div class="text">鞋款</div>
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        <img src="./img/accessories.png" alt="">
                        <div class="cover"></div>
                        <div class="text">飾品配件</div>
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        <img src="./img/makeup.png" alt="">
                        <div class="cover"></div>
                        <div class="text">彩妝</div>
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        <img src="./img/perfume.png" alt="">
                        <div class="cover"></div>
                        <div class="text">香水</div>
                    </a>
                </li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
            </ul>
        </div>
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
</script>