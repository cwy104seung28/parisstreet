<!DOCTYPE html>
<html>

<head>
    <?php include 'html_head.php'; ?>
</head>

<body>
    <?php include 'topmenu.php'; ?>
    <div class="question-container">
        <div class="top-title-area">
            常見問題
        </div>
        <div class="qaWrap">
            <ul class="qaList">
                <li>
                    <div class="question flex-container align-middle">
                        <div class="title">該如何詢價？</div>
                        <div class="add">
                            <img src="./img/add-mobile.svg" class="not-opened">
                            <img src="./img/opened.svg" class="opened">
                        </div>
                    </div>
                    <div class="answer">
                        加喜歡的商品加入詢價車後，按下「去詢價」將會連至巴黎街官方LINE@，將會有專人與您聯繫及引導。
                    </div>
                </li>
                <li>
                    <div class="question flex-container align-middle">
                        <div class="title">運送費用及時間？</div>
                        <div class="add">
                            <img src="./img/add-mobile.svg" class="not-opened">
                            <img src="./img/opened.svg" class="opened">
                        </div>
                    </div>
                    <div class="answer">
                        加喜歡的商品加入詢價車後，按下「去詢價」將會連至巴黎街官方LINE@，將會有專人與您聯繫及引導。
                    </div>
                </li>
                <li>
                    <div class="question flex-container align-middle">
                        <div class="title">產品保養資訊？</div>
                        <div class="add">
                            <img src="./img/add-mobile.svg" class="not-opened">
                            <img src="./img/opened.svg" class="opened">
                        </div>
                    </div>
                    <div class="answer">
                        加喜歡的商品加入詢價車後，按下「去詢價」將會連至巴黎街官方LINE@，將會有專人與您聯繫及引導。
                    </div>
                </li>
                <li>
                    <div class="question flex-container align-middle">
                        <div class="title">品牌證明及包裝</div>
                        <div class="add">
                            <img src="./img/add-mobile.svg" class="not-opened">
                            <img src="./img/opened.svg" class="opened">
                        </div>
                    </div>
                    <div class="answer">
                        加喜歡的商品加入詢價車後，按下「去詢價」將會連至巴黎街官方LINE@，將會有專人與您聯繫及引導。
                    </div>
                </li>
                <li>
                    <div class="question flex-container align-middle">
                        <div class="title">保固問題</div>
                        <div class="add">
                            <img src="./img/add-mobile.svg" class="not-opened">
                            <img src="./img/opened.svg" class="opened">
                        </div>
                    </div>
                    <div class="answer">
                        加喜歡的商品加入詢價車後，按下「去詢價」將會連至巴黎街官方LINE@，將會有專人與您聯繫及引導。
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <?php include 'fix_mobile.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>
<script>
    $(".qaList li").on("click", function() {
        $(this).toggleClass("is-open");
        $(".answer", this).slideToggle(300);
        // console.log($(".answer-btn + .answer"));
    })
</script>