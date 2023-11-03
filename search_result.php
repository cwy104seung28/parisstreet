<!DOCTYPE html>
<html>

<head>
    <?php include 'html_head.php'; ?>
</head>
<?php $now = ''; ?>

<body>
    <?php include 'topmenu.php'; ?>
    <div class="result-container">
        <div class="top-area is-white">
            <div class="result-area flex-container align-middle">
                <img src="./img/search-mobile.svg">
                <div class="ch result-text"><span class="en">"LV"</span></div>
                <div class="ch">搜尋結果</div>
            </div>
            <!-- <div class="select-area flex-container align-middle">
                <img src="./img/select.svg">
                <select name="" id="" class="cart-select">
                    <option value="">系列</option>
                    <option value="">LV</option>
                    <option value="">CHANEL</option>
                    <option value="">GUCCI</option>
                    <option value="">YSL</option>
                    <option value="">Hermes</option>
                    <option value="">Dior</option>
                </select>
                <select name="" id="" class="cart-select">
                    <option value="">類別</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                </select>
                <select name="" id="" class="cart-select">
                    <option value="">材質</option>
                    <option value="">A</option>
                    <option value="">B</option>
                    <option value="">C</option>
                </select>
                <select name="" id="" class="cart-select">
                    <option value="">顏色</option>
                    <option value="">棕色</option>
                    <option value="">卡其色</option>
                    <option value="">黑色</option>
                </select>
            </div> -->
            <div class="select-area flex-container">
                <div class="filter-area">
                    <div class="flex-container align-middle filterOutWrap">
                        <div class="ch title">品牌</div>
                        <ul class="filterWrap flex-container">
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    Chanel(12)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    Burberry(2)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    Gucci(4)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    Louis Vuitton(12)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    Hermes(1)
                                </a>
                            </li>
                        </ul>
                        <!-- <div class="delete">
                            <a class="ch flex-container aligm-middle">
                                <svg class="svg-inline--fa fa-trash" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                </svg>
                            </a>
                        </div> -->
                    </div>
                    <div class="flex-container align-middle filterOutWrap">
                        <div class="ch title">顏色</div>
                        <ul class="filterWrap flex-container">
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    黃(5)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    綠(2)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    藍(4)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    黑(3)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    紅(5)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    棕(5)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    橙(4)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    粉紅(2)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    灰(1)
                                </a>
                            </li>
                        </ul>
                        <!-- <div class="delete">
                            <a class="ch flex-container aligm-middle">
                                <svg class="svg-inline--fa fa-trash" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                </svg>
                            </a>
                        </div> -->
                    </div>
                    <div class="flex-container align-middle filterOutWrap">
                        <div class="ch title">有無現貨</div>
                        <ul class="filterWrap flex-container">
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    有現貨(13)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    無現貨(18)
                                </a>
                            </li>
                        </ul>
                        <!-- <div class="delete">
                            <a class="ch flex-container aligm-middle">
                                <svg class="svg-inline--fa fa-trash" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                </svg>
                            </a>
                        </div> -->
                    </div>
                    <div class="flex-container align-middle filterOutWrap">
                        <div class="ch title">材質</div>
                        <ul class="filterWrap flex-container">
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    牛皮(9)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    帆布(5)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    麂皮(4)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    小羊皮(4)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    羊皮(4)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    亞麻(4)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    鱷魚皮(1)
                                </a>
                            </li>
                        </ul>
                        <!-- <div class="delete">
                            <a class="ch flex-container aligm-middle">
                                <svg class="svg-inline--fa fa-trash" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                </svg>
                            </a>
                        </div> -->
                    </div>
                    <div class="flex-container align-middle filterOutWrap">
                        <div class="ch title">使用性別</div>
                        <ul class="filterWrap flex-container">
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    中性(28)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    男性(1)
                                </a>
                            </li>
                            <li>
                                <a class="ch flex-container aligm-middle">
                                    <svg class="svg-inline--fa fa-circle" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                    </svg>
                                    女性(2)
                                </a>
                            </li>
                        </ul>
                        <!-- <div class="delete">
                            <a class="ch flex-container aligm-middle">
                                <svg class="svg-inline--fa fa-trash" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                </svg>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <ul class="search-list">
            <li>
                <div class="pic-area"><img src="./img/new1.jpg"></div>
                <div class="article-area">
                    <div class="title">LV BOULOGNE</div>
                    <div class="add"><img src="./img/search-heart-pc.svg">加入珍藏</div>
                </div>
            </li>
            <li>
                <div class="pic-area"><img src="./img/new2.jpg"></div>
                <div class="article-area">
                    <div class="title">CHANEL 迷你相機包</div>
                    <div class="add"><img src="./img/search-heart-pc.svg">加入珍藏</div>
                </div>
            </li>
            <li>
                <div class="pic-area"><img src="./img/new2.jpg"></div>
                <div class="article-area">
                    <div class="title">CHANEL 迷你相機包</div>
                    <div class="add"><img src="./img/search-heart-pc.svg">加入珍藏</div>
                </div>
            </li>
            <li>
                <div class="pic-area"><img src="./img/new2.jpg"></div>
                <div class="article-area">
                    <div class="title">CHANEL 迷你相機包</div>
                    <div class="add"><img src="./img/search-heart-pc.svg">加入珍藏</div>
                </div>
            </li>
            <li>
                <div class="pic-area"><img src="./img/new2.jpg"></div>
                <div class="article-area">
                    <div class="title">CHANEL 迷你相機包</div>
                    <div class="add"><img src="./img/search-heart-pc.svg">加入珍藏</div>
                </div>
            </li>
            <li>
                <div class="pic-area"><img src="./img/new2.jpg"></div>
                <div class="article-area">
                    <div class="title">CHANEL 迷你相機包</div>
                    <div class="add"><img src="./img/search-heart-pc.svg">加入珍藏</div>
                </div>
            </li>
        </ul>
        <div class="page-area">
            <div class="prev-arrow arrow not-show">
                <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="7.84" height="9.75" viewBox="0 0 7.84 9.75">
                    <g id="c" data-name="圖層 2">
                        <polygon class="d" points="7.84 0 0 4.87 7.84 9.75 7.84 0" />
                    </g>
                </svg>
            </div>
            <ul class="page">
                <li class="li-1 current" data-num="1">
                    <span class="num">1</span>
                    <span class="dot">.</span>
                </li>
                <li class="li-2" data-num="2">
                    <span class="num">2</span>
                    <span class="dot">.</span>
                </li>
                <li class="li-3" data-num="3">
                    <span class="num">3</span>
                    <span class="dot">.</span>
                </li>
                <li class="li-4" data-num="4">
                    <span class="num">4</span>
                    <span class="dot">.</span>
                </li>
                <li class="li-5" data-num="5">
                    <span class="num">5</span>
                    <span class="dot">.</span>
                </li>
            </ul>
            <div class="next-arrow arrow">
                <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="7.84" height="9.75" viewBox="0 0 7.84 9.75">
                    <g id="c" data-name="圖層 2">
                        <polygon class="d" points="0 0 7.84 4.88 0 9.75 0 0" />
                    </g>
                </svg>
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

    // $('.cart-select').niceSelect();
</script>