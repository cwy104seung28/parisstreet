<!DOCTYPE html>
<html>

<head>
    <?php include 'html_head.php'; ?>
</head>
<?php $now = ''; ?>

<body>
    <?php include 'topmenu.php'; ?>
    <div class="news-container">
        <div class="top-title">最新消息</div>
        <ul class="newsList">
            <li>
                <a href="javascript:;">
                    <div class="pic"><img src="./img/news-pic.jpg"></div>
                    <div class="date">2023/10/11</div>
                    <div class="title">LOUIS VUITTON  X  草間彌生</div>
                    <div class="content">路易威登邀請草間彌生從她的獨特藝術角度出發，創意改造品牌的經典設計，成就精彩的合作系列。系列將會帶來多款全新設計，並以取材自藝術家知名作品的南瓜和具象花朵等原創圖案點綴。</div>
                    <div class="more">
                        Read more
                        <img src="./img/news-arrow.svg">
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="pic"><img src="./img/news-pic.jpg"></div>
                    <div class="date">2023/10/11</div>
                    <div class="title">LOUIS VUITTON  X  草間彌生</div>
                    <div class="content">路易威登邀請草間彌生從她的獨特藝術角度出發，創意改造品牌的經典設計，成就精彩的合作系列。系列將會帶來多款全新設計，並以取材自藝術家知名作品的南瓜和具象花朵等原創圖案點綴。</div>
                    <div class="more">
                        Read more
                        <img src="./img/news-arrow.svg">
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="pic"><img src="./img/news-pic.jpg"></div>
                    <div class="date">2023/10/11</div>
                    <div class="title">LOUIS VUITTON  X  草間彌生</div>
                    <div class="content">路易威登邀請草間彌生從她的獨特藝術角度出發，創意改造品牌的經典設計，成就精彩的合作系列。系列將會帶來多款全新設計，並以取材自藝術家知名作品的南瓜和具象花朵等原創圖案點綴。</div>
                    <div class="more">
                        Read more
                        <img src="./img/news-arrow.svg">
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="pic"><img src="./img/news-pic.jpg"></div>
                    <div class="date">2023/10/11</div>
                    <div class="title">LOUIS VUITTON  X  草間彌生</div>
                    <div class="content">路易威登邀請草間彌生從她的獨特藝術角度出發，創意改造品牌的經典設計，成就精彩的合作系列。系列將會帶來多款全新設計，並以取材自藝術家知名作品的南瓜和具象花朵等原創圖案點綴。</div>
                    <div class="more">
                        Read more
                        <img src="./img/news-arrow.svg">
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="pic"><img src="./img/news-pic.jpg"></div>
                    <div class="date">2023/10/11</div>
                    <div class="title">LOUIS VUITTON  X  草間彌生</div>
                    <div class="content">路易威登邀請草間彌生從她的獨特藝術角度出發，創意改造品牌的經典設計，成就精彩的合作系列。系列將會帶來多款全新設計，並以取材自藝術家知名作品的南瓜和具象花朵等原創圖案點綴。</div>
                    <div class="more">
                        Read more
                        <img src="./img/news-arrow.svg">
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="pic"><img src="./img/news-pic.jpg"></div>
                    <div class="date">2023/10/11</div>
                    <div class="title">LOUIS VUITTON  X  草間彌生</div>
                    <div class="content">路易威登邀請草間彌生從她的獨特藝術角度出發，創意改造品牌的經典設計，成就精彩的合作系列。系列將會帶來多款全新設計，並以取材自藝術家知名作品的南瓜和具象花朵等原創圖案點綴。</div>
                    <div class="more">
                        Read more
                        <img src="./img/news-arrow.svg">
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="pic"><img src="./img/news-pic.jpg"></div>
                    <div class="date">2023/10/11</div>
                    <div class="title">LOUIS VUITTON  X  草間彌生</div>
                    <div class="content">路易威登邀請草間彌生從她的獨特藝術角度出發，創意改造品牌的經典設計，成就精彩的合作系列。系列將會帶來多款全新設計，並以取材自藝術家知名作品的南瓜和具象花朵等原創圖案點綴。</div>
                    <div class="more">
                        Read more
                        <img src="./img/news-arrow.svg">
                    </div>
                </a>
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

    if (window.device == 'desktop') {
        var $carousel = $('.newsList').flickity({
            "prevNextButtons": true,
            "pageDots": true,
            "autoPlay": false,
            "cellAlign": "left",
            "imagesLoaded": true,
            "arrowShape": "",
        })
        $('.flickity-button.flickity-prev-next-button.next').html(`<svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="21.71" height="57.85" viewBox="0 0 21.71 57.85">
            <g id="c" data-name="文字">
                <polyline points="1.7 1.06 19.35 29.38 2.26 56.79" style="fill: none; stroke: #9e3147; stroke-miterlimit: 10; stroke-width: 4px;"/>
            </g>
        </svg>`);
        $('.flickity-button.flickity-prev-next-button.previous').html(`<svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="21.71" height="57.85" viewBox="0 0 21.71 57.85">
            <g id="c" data-name="文字">
                <polyline points="20.01 1.06 2.36 29.38 19.45 56.79" style="fill: none; stroke: #9e3147; stroke-miterlimit: 10; stroke-width: 4px;"/>
            </g>
        </svg>`);
    } else {
        var $carousel = $('.newsList').flickity({
            "prevNextButtons": false,
            "pageDots": true,
            "autoPlay": false,
            "cellAlign": "left",
            "imagesLoaded": true,
            "arrowShape": "",
        })
    }
</script>