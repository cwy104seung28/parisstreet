<!DOCTYPE html>
<html>

<head>
    <?php include 'html_head.php'; ?>
</head>
<?php $now = ''; ?>

<body>
    <?php include 'topmenu.php'; ?>
    <div class="brand-container">
        <!-- <div class="top-area is-white">
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
        </div> -->
        <div class="brand-area">
            <div class="title">
                經典系列
            </div>
            <ul class="brand">
                <li>
                    <a href="./species.php">
                        <img src="./img/bag.jpg" alt="">
                        <div class="text">SPEEDY</div>
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        <img src="./img/shoes.jpg" alt="">
                        <div class="text">老花</div>
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        <img src="./img/accessories.jpg" alt="">
                        <div class="text">MONOGRAM</div>
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        <img src="./img/makeup.jpg" alt="">
                        <div class="text">ARCHLIGHT</div>
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        <img src="./img/perfume.jpg" alt="">
                        <div class="text">草間彌生</div>
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        <img src="./img/bag.jpg" alt="">
                        <div class="text">NAUTICAL</div>
                    </a>
                </li>
                <!-- <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li>
                <li><img src="./img/none.png"></li> -->
            </ul>

        </div>
        <div class="cat-area">
            <div class="title">
                類別分類
            </div>
            <ul class="catWrap">
                <li>
                    <a href="./species.php">
                        皮包
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        鞋款
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        飾品配件
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        彩妝
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        香水
                    </a>
                </li>
                <li>
                    <a href="./species.php">
                        其他
                    </a>
                </li>
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

        if (_scrollTop >= 90) {
            $(".topmenu").addClass("is-show")
        } else {
            $(".topmenu").removeClass("is-show")
        }
    }).trigger("scroll");
    if (window.device == 'desktop') {
        var $carousel = $('.brand').flickity({
            "prevNextButtons": true,
            "pageDots": false,
            "autoPlay": false,
            "cellAlign": "left",
            "imagesLoaded": true,
            "arrowShape": "",
        })
        $('.flickity-button.flickity-prev-next-button.next').html(`<svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="21.71" height="57.85" viewBox="0 0 21.71 57.85">
  <g id="c" data-name="文字">
    <polyline points="1.7 1.06 19.35 29.38 2.26 56.79" style="fill: none; stroke: #e95529; stroke-miterlimit: 10; stroke-width: 4px;"/>
  </g>
</svg>`);
        $('.flickity-button.flickity-prev-next-button.previous').html(`<svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="21.71" height="57.85" viewBox="0 0 21.71 57.85">
  <g id="c" data-name="文字">
    <polyline points="20.01 1.06 2.36 29.38 19.45 56.79" style="fill: none; stroke: #e95529; stroke-miterlimit: 10; stroke-width: 4px;"/>
  </g>
</svg>`);
    }
</script>