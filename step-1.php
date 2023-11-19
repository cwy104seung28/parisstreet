<!DOCTYPE html>
<html>

<head>
    <?php include 'html_head.php'; ?>
</head>
<?php $now = ''; ?>

<body>
    <?php include 'topmenu.php'; ?>
    <div class="cart-step" id="cart">
        <div class="cart-information flex-container">
            <div class="title">訂單資訊</div>
            <div class="total-price hide-for-large">
                總共 NT$ <span class="total">17,343</span><span class="note">(內含營業稅）</span>
            </div>
            <div class="open">
                <div class="total-price show-for-large">
                    總共 NT$ <span class="total">17,343</span><span class="note">(內含營業稅）</span>
                </div>
                <div class="plus">+</div>
                <div class="minus">-</div>
            </div>
        </div>
        <div class="cart-detail show-for-large">
            <div class="cart-list">
                <div class="cart">
                    <div class="pic-area"><img src="./img/bag-1.jpg"></div>
                    <div class="article-area">
                        <div class="title">CHANEL</div>
                        <div class="content">小型後背包</div>
                    </div>
                    <div class="price">NT$ 15,725</div>
                    <div class="other-area">
                        <div class="del"><img src="./img/cart-close.svg"></div>
                        <div class="size">ONE SIZE / 1</div>
                    </div>
                </div>
                <div class="cart">
                    <div class="pic-area"><img src="./img/bag-3.jpg"></div>
                    <div class="article-area">
                        <div class="title">CHANEL</div>
                        <div class="content">22包</div>
                    </div>
                    <div class="price">NT$ 21,355</div>
                    <div class="other-area">
                        <div class="del"><img src="./img/cart-close.svg"></div>
                        <div class="size">ONE SIZE / 1</div>
                    </div>
                </div>
                <div class="total-price">
                    總共 NT$ <span class="total">17,343</span>
                    <div class="note">(內含營業稅）</div>
                </div>
            </div>
        </div>
        <div class="cart-detail hide-for-large">
            <div class="cart-list">
                <div class="cart">
                    <div class="pic-area"><img src="./img/bag-1.jpg"></div>
                    <div class="article-area">
                        <div class="title">CHANEL</div>
                        <div class="content">小型後背包</div>
                        <div class="price">NT$ 15,725</div>
                    </div>
                    <div class="other-area">
                        <div class="del">X</div>
                        <div class="size">ONE SIZE / 1</div>
                    </div>
                </div>
                <div class="cart">
                    <div class="pic-area"><img src="./img/bag-3.jpg"></div>
                    <div class="article-area">
                        <div class="title">CHANEL</div>
                        <div class="content">22包</div>
                        <div class="price">NT$ 21,355</div>
                    </div>
                    <div class="other-area">
                        <div class="del">X</div>
                        <div class="size">ONE SIZE / 1</div>
                    </div>
                </div>
                <div class="total-price">
                    總共 NT$ <span class="total">17,343</span>
                    <div class="note">(內含營業稅）</div>
                </div>
            </div>
        </div>
        <form action="">
            <div class="title-area">
                <div class="title">訂購資訊</div>
                <div class="note">*為必填</div>
            </div>
            <div class="form">
                <div class="flex-container-for-large">
                    <div class="item flex-container align-middle left">
                        <div class="title">*購買人姓名</div>
                        <div><input type="text" name="" id="" placeholder=""></div>
                    </div>
                    <div class="item flex-container align-middle">
                        <div class="title">*購買人電話</div>
                        <div><input type="text" name="" id="" placeholder=""></div>
                    </div>
                </div>

                <div class="item flex-container align-middle">
                    <div class="title">*E-Mail</div>
                    <div><input type="text" name="" id="" placeholder=""></div>
                </div>
                <label class="flex-container" for="check">
                    <div class="check-area">
                        <input type="checkbox" name="check" id="check">
                        <span class="checkmark"></span>
                    </div>
                    同購買人
                </label>
                <div class="flex-container-for-large">
                    <div class="item flex-container align-middle left">
                        <div class="title">*收件人姓名</div>
                        <div><input type="text" name="" id="" placeholder=""></div>
                    </div>
                    <div class="item flex-container align-middle">
                        <div class="title">*收件人電話</div>
                        <div><input type="text" name="" id="" placeholder=""></div>
                    </div>
                </div>

                <div class="item flex-container align-middle">
                    <div class="title">*收件人地址</div>
                    <div><input type="text" name="" id="" placeholder=""></div>
                </div>
                <div class="item no-border two-row">
                    <div class="title">指定配送時間</div>
                    <div class="flex-container">
                        <div class="item flex-container align-middle no-border">
                            <input type="radio" id="no" name="time" value="no" />
                            <label for="no">無</label>
                        </div>
                        <div class="item flex-container align-middle no-border">
                            <input type="radio" id="yes" name="time" value="yes" />
                            <label for="yes">時段</label>
                            <div><input type="text" name="" id="" placeholder="" class="border"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title-area">
                <div class="title">付款方式</div>
                <div class="note">*為必填</div>
            </div>
            <div class="form">
                <div class="item pay no-border">
                    <div class="flex-container">
                        <div class="item no-border circle">
                            <label class="flex-container align-center-middle" for="card">
                                <div class="check-area">
                                    <input type="checkbox" name="card" id="card">
                                    <span class="checkmark"></span>
                                </div>
                                <div class="title">信用卡</div>
                            </label>
                        </div>
                        <div class="item flex-container align-middle no-border card">
                            <img src="./img/visa.svg">
                        </div>
                        <div class="item flex-container align-middle no-border card">
                            <img src="./img/mastercard.svg">
                        </div>
                        <div class="item flex-container align-middle no-border card">
                            <img src="./img/paypal.svg">
                        </div>
                    </div>
                </div>
                <div class="flex-container-for-large">
                    <div class="item no-border two-row left">
                        <div class="title">*信用卡卡號</div>
                        <div class="flex-container align-middle">
                            <input type="text" name="" id="" placeholder="" class="all-border no-margin">
                            <div class="line"></div>
                            <input type="text" name="" id="" placeholder="" class="all-border no-margin">
                            <div class="line"></div>
                            <input type="text" name="" id="" placeholder="" class="all-border no-margin">
                            <div class="line"></div>
                            <input type="text" name="" id="" placeholder="" class="all-border no-margin">
                        </div>
                    </div>
                    <div class="item no-border two-row">
                        <div class="title">*到期日</div>
                        <div class="flex-container">
                            <div class="month flex-container">
                                <select name="" id="" class="cart-select">
                                    <option value=""></option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10</option>
                                    <option value="">11</option>
                                    <option value="">12</option>
                                </select>
                                <span>月</span>
                            </div>
                            <div class="day flex-container">
                                <select name="" id="" class="cart-select">
                                    <option value=""></option>
                                    <option value="">2029</option>
                                    <option value="">2030</option>
                                    <option value="">2031</option>
                                </select>
                                <span>年</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item short flex-container align-middle">
                    <div class="title">*安全碼</div>
                    <div><input type="text" name="" id="" placeholder=""></div>
                </div>
                <div class="item no-border circle">
                    <label class="flex-container align-center-middle" for="atm">
                        <div class="check-area">
                            <input type="checkbox" name="atm" id="atm">
                            <span class="checkmark"></span>
                        </div>
                        <div class="title">匯款轉帳</div>
                    </label>
                </div>
                <div class="item short-longer flex-container align-middle bank no-border">
                    <div class="title">*銀行代碼</div>
                    <select name="" id="" class="cart-select">
                        <option value=""></option>
                        <option value="">004臺灣銀行</option>
                        <option value="">822中國信託</option>
                        <option value="">700郵局</option>
                    </select>
                </div>
                <div class="item flex-container align-middle">
                    <div class="title">*匯款帳戶</div>
                    <div><input type="text" name="" id="" placeholder=""></div>
                </div>
                <div class="flex-container-for-large">
                    <div class="item policy">
                        <label class="flex-container align-center-middle" @click="policyHandler(1)" for="policy">
                            <div class="check-area">
                                <input type="checkbox" name="policy" id="policy">
                                <span class="checkmark"></span>
                            </div>
                            <div class="title">此購買訂單同意本網站退換貨須知</div>
                        </label>
                    </div>
                    <div class="final-item">
                        <div class="final-price">
                            訂單金額&emsp;NT$<span class="price">17,343</span><br>
                            運費&emsp;+<span class="freight">0</span>
                        </div>
                        <div class="final-total">
                            總共&ensp;NT$&ensp;<span class="total">17,343</span>
                            <div class="note">(內含營業稅）</div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="./step-2.php">
                <div class="submit">
                    確認送出
                </div>
            </a>
        </form>
        <transition name="fade" mode="out-in">
            <div class="policy-windowWrap" v-if="open == 1">
                <div class="policy-window">
                    <div class="topnav flex-container align-middle">
                        <div class="title">退換貨須知</div>
                        <div class="close" @click="policyHandler(0)"><img src="./img/policy-close.svg"></div>
                    </div>
                    <div class="content">
                        <div class="inner">
                            若您於訂購時選擇捐贈/電子發票，我們將於退貨作業完成後，於系統直接作廢發票。若您有申請紙本發票，請於退換貨通知單簽名(營業人請加蓋統編章)後與商品一同退回。<br>
                            <br>
                            依據法令規定，已捐贈的發票無法索取紙本發票及更改捐贈對象，如有退換貨需求，我們將會將該發票作廢。
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
    <?php include 'fix_mobile.php'; ?>
</body>

<?php include 'script.php'; ?>


</html>
<script>
    new Vue({
        el: '#cart',
        data: {
            open: 0,
        },
        computed: {

        },
        methods: {
            policyHandler(i) {
                this.open = i;
                console.log(i);
                console.log(open);
            },
            policyclose(i) {
                this.open = i;
            }
        },
        filters: {},
        mounted() {
            $(window).on("scroll", function() {
                var _scrollTop = $(this).scrollTop();

                if (_scrollTop >= 100) {
                    $(".topmenu").addClass("is-show")
                } else {
                    $(".topmenu").removeClass("is-show")
                }
            }).trigger("scroll");
            $(".cart-information").click(function() {
                $(".cart-detail").slideToggle();
                $('.cart-information .open').toggleClass('is-open')

            });
            // $('.cart-select').niceSelect();
            // $(".item.policy").click(function() {
            //     policyHandler(1);

            // });
        },
        updated() {},
    })
</script>