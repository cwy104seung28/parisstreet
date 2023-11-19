<!DOCTYPE html>
<html>

<head>
    <?php include 'html_head.php'; ?>
</head>
<?php $now = 'cart'; ?>
<body>
    <?php include 'topmenu.php'; ?>
    <div class="cart-step">
        <div class="successWrap">
            <div class="success">
                <div class="check">
                    <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="58.9" height="58.9" viewBox="0 0 58.9 58.9">
                        <g id="c" data-name="圖層 2">
                            <rect x="0" y="0" width="58.8" height="58.8" rx="29.4" ry="29.4" style="fill: #e95529;" />
                            <path d="M15.49 31.46 25.46 43.42 43.32 15.39" style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 6px;" />
                        </g>
                    </svg>
                </div>
                <div class="title">訂單完成！感謝您的訂購！</div>
            </div>
            <div class="link flex-container align-center">
                <a href="">繼續購物</a><a href="./tracking.php">查看物流狀態</a>
            </div>
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
    gsap.set(".check svg path", {
        drawSVG: '0%',
    })

    var _tl = gsap.timeline();
    _tl.to(".check", {
            duration: 0.75,
            scale: 1,
            ease: "elastic.out(1, 0.4)",
        })
        .to(".check svg path", {
            duration: 0.5,
            drawSVG: '100%',
            ease: "none",
        },'<.5')
</script>