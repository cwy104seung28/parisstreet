<!DOCTYPE html>
<html>

<head>
    <?php include 'html_head.php'; ?>
</head>
<?php $now = ''; ?>

<body>
    <label>喜歡的顏色:</label>
    <label><input type="checkbox" name="color1" value="blue">藍色</label>
    <label><input type="checkbox" name="color2" value="yellow">黃色</label>
    <label><input type="checkbox" name="color3" value="red">紅色</label>
    <label><input type="checkbox" name="color4" value="green">綠色</label>
    <div class="inquiry-container">
        <div class="inquiry-area">
            <form action="">

            </form>

        </div>
    </div>

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