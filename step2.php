<!DOCTYPE html>
<html>

<head>
    <?php include 'html_head.php'; ?>
</head>

<body>
    <?php include 'topmenu.php'; ?>
    <div class="class-container">
        <ul class="class">
            <li>
                <a href="step3.php">
                    女士
                    <img src="./img/small-arrow.svg" alt="">
                </a>
            </li>
            <li>
                <a href="step3.php">
                    男士
                    <img src="./img/small-arrow.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
    <?php include 'fix_mobile.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>
<script>
    // $(window).on("scroll", function() {
    //     var _scrollTop = $(this).scrollTop();

    //     if (_scrollTop >= 100) {
    //         $(".topmenu").addClass("is-show")
    //     } else {
    //         $(".topmenu").removeClass("is-show")
    //     }
    // }).trigger("scroll");
</script>