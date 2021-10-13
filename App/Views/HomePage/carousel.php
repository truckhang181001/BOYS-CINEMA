<div class='owl-carousel owl-theme owl-custom'>
    <?php
        foreach($data as $item) {
            echo "<div class='card-container'>
            <div class='card item'>
                <a href='".PRONAME."/thong-tin' class='card__img'>
                    <img src='".PRONAME."/public/img/HaiPhuong.jpg' type='button' alt='Thumb'>
                </a>
                <div class='card__content'>
                    <a href='".PRONAME."/thong-tin' class='card__content__title' style='color: white;'>".$item->name."</a>
                    <div class='card__content__btn-buy'>
                        <a class='btn' href='".PRONAME."/dat-ve'>MUA VÉ</a>
                    </div>
                </div>
            </div>
        </div>";
        }
    ?>
</div>