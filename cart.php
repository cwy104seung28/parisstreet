<!DOCTYPE html>
<html>

<head>
    <?php include 'html_head.php'; ?>
</head>
<?php $now = ''; ?>

<body>
    <?php include 'topmenu.php'; ?>
    <div class="cart-container">
        <div class="top-area is-white">
            <div class="category">
                <a class="now" href="javacript:;">購物車</a>
            </div>
        </div>
        <div class="cart-area">
            <form action="">
                <div class="cart-list">
                    <div class="cart">
                        <label for="check1">
                            <div class="check-area">
                                <input type="checkbox" id="check1">
                                <span class="checkmark"></span>
                            </div>
                            <div class="pic-area"><img src="./img/bag-1.jpg"></div>
                            <div class="article-area">
                                <div class="title">CHANEL</div>
                                <div class="content">小型後背包</div>
                                <div class="price">NT$ 15,725</div>
                            </div>
                        </label>
                        <div class="add">
                            <img src="./img/heart.svg">加入珍藏
                        </div>
                        <div class="other-area flex-container align-middle">
                            <div class="flex-container">
                                <select name="" id="" class="cart-select">
                                    <option value="">尺寸</option>
                                    <option value="">ONE SIZE</option>
                                </select>
                                <select name="" id="" class="cart-select select-2">
                                    <option value="">數量</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="cart">
                        <label for="check2">
                            <div class="check-area">
                                <input type="checkbox" name="check2" id="check2">
                                <span class="checkmark"></span>
                            </div>

                            <div class="pic-area"><img src="./img/bag-3.jpg"></div>
                            <div class="article-area">
                                <div class="title">CHANEL</div>
                                <div class="content">22包</div>
                                <div class="price">NT$ 21,355</div>
                            </div>
                        </label>
                        <div class="add">
                            <img src="./img/heart.svg">加入珍藏
                        </div>
                        <div class="other-area flex-container align-middle">
                            <div class="flex-container">
                                <select name="" id="" class="cart-select">
                                    <option value="">尺寸</option>
                                    <option value="">ONE SIZE</option>
                                </select>
                                <select name="" id="" class="cart-select select-2">
                                    <option value="">數量</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>

                        </div>
                       
                    </div>
                    <div class="cart">
                        <label for="check3">
                            <div class="check-area">
                                <input type="checkbox" name="check3" id="check3">
                                <span class="checkmark"></span>
                            </div>
                            <div class="pic-area"><img src="./img/bag-2.jpg"></div>
                            <div class="article-area">
                                <div class="title">CHANEL</div>
                                <div class="content">迷你相機包</div>
                                <div class="price">NT$ 17,343</div>
                            </div>
                        </label>
                        <div class="add">
                            <img src="./img/heart.svg">加入珍藏
                        </div>
                        <div class="other-area flex-container align-middle">
                            <div class="flex-container">
                                <select name="" id="" class="cart-select">
                                    <option value="">尺寸</option>
                                    <option value="">ONE SIZE</option>
                                </select>
                                <select name="" id="" class="cart-select select-2">
                                    <option value="">數量</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </form>

        </div>
        <div class="total-price">
            總共 NT$
            <span class="total">17,343</span>
            <div class="note">(內含營業稅）</div>
        </div>
        <div class="ask-area">
            <a href="./step-1.php">
                <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="72.46" height="33.6" viewBox="0 0 72.46 33.6">
                    <g id="c" data-name="圖層 2">
                        <polygon points="58.7 0 0 0 0 33.6 58.7 33.6 72.46 16.8 58.7 0" style="fill: #e95529;" />
                        <g>
                            <path d="M14.66,17.37c-.69,1.11-1.53,2.18-2.34,3.09l5.1-.3c-.44-.64-.91-1.27-1.35-1.81l1.39-.61c1.1,1.26,2.24,2.91,2.8,4.06l-1.46,.76c-.14-.31-.31-.67-.53-1.05-6.35,.5-7.23,.54-7.86,.78-.09-.3-.34-1.06-.52-1.47,.33-.08,.59-.33,.97-.76,.3-.32,1.2-1.45,1.9-2.68h-3.54v-1.51h4.9v-1.79h-3.95v-1.51h3.95v-1.74h1.59v1.74h4.06v1.51h-4.06v1.79h4.97v1.51h-6.01Z" style="fill: #fff;" />
                            <path d="M27.72,15.66c.33,.84,.68,1.95,.79,2.62l-1.13,.4c-.03-.18-.06-.38-.11-.58-2.55,.35-3,.47-3.29,.61-.08-.28-.29-.93-.45-1.31,.33-.08,.59-.35,1-.81,.16-.18,.48-.55,.83-1.06-1,.11-1.29,.19-1.46,.28-.08-.28-.29-.91-.44-1.27,.25-.06,.45-.3,.72-.68,.28-.37,1.1-1.76,1.58-3.1l1.32,.55c-.48,1.05-1.12,2.13-1.78,3.04l.89-.06c.3-.5,.62-1.06,.87-1.59l1.22,.77c-.73,1.26-1.65,2.56-2.61,3.63l1.3-.14c-.09-.34-.2-.67-.3-.97l1.06-.33Zm-2.53,3.64c-.1,1.13-.3,2.34-.57,3.11-.25-.14-.83-.31-1.13-.4,.29-.73,.44-1.88,.52-2.9l1.19,.19Zm1.34-.23c.18,.89,.33,2.07,.38,2.85l-1.13,.23c-.03-.77-.16-1.97-.31-2.87l1.07-.2Zm1.27-.38c.29,.79,.59,1.79,.71,2.47l-1.05,.35c-.1-.67-.4-1.71-.66-2.5l1-.33Zm4.66-4.94v1.44h2.38v1.37h-6.11v-1.37h2.19v-1.44h-2.55v-1.39h2.55v-1.55h1.54v1.55h2.68v1.39h-2.68Zm-3.5,3.78h5.58v5.02h-1.46v-.49h-2.72v.54h-1.4v-5.07Zm1.4,1.35v1.83h2.72v-1.83h-2.72Z" style="fill: #fff;" />
                            <path d="M42.66,18.51c0,.47-.05,.86-.31,1.07-.26,.23-.55,.26-1,.26-.01-.31-.14-.79-.29-1.15v3.91h-1.22V14.46h-.48v5.53h-1.1v-6.84h1.58v-2.32h1.22v2.32h1.6v5.36Zm-1.16,.09c.06,0,.09-.03,.09-.13v-4.01h-.53v4.13h.44Zm8.02,.11c-.57,.39-1.17,.76-1.7,1.07,.57,.6,1.25,1.1,2,1.42-.33,.29-.77,.84-1,1.24-1.71-.89-2.94-2.62-3.67-4.66h-.43v3l1.66-.48c0,.38,.04,.92,.09,1.22-2.38,.77-2.82,.97-3.09,1.16-.1-.37-.44-1.03-.69-1.35,.26-.16,.62-.55,.62-1.1v-2.46h-.48v-1.27h.72v-5.15h5.71v1.17h-4.27v.6h3.74v1.05h-3.74v.64h3.78v1.05h-3.78v.64h4.6v1.27h-3.13c.19,.39,.4,.76,.63,1.11,.48-.35,1-.77,1.32-1.11l1.1,.93Z" style="fill: #fff;" />
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <!-- <div class="brand-area">
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
        </div> -->
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

    // $('.cart-select').niceSelect();
</script>