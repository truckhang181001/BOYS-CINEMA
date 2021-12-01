<div class="effect-and-categogy">

    <form class="effect" method="get">
        <h4 class="effect__text">HÌNH THỨC</h4>
        <div class="effect__items" >
            <input name='type[]' class="effect__items--checkbox" type="checkbox" value="2D">
            <label for="2d">2D</label>
        </div>
        <div class="effect__items">
            <input name='type[]' class="effect__items--checkbox" type="checkbox" value="3D">
            <label for="3d">3D</label>
        </div>
        <button class='btnf'>Lọc</button>
    </form>
    
    <form class="categogy" method="get">
        <h4 class="categogy__text">THỂ LOẠI</h4>
        <?php
            foreach($data['category'] as $item){
                echo "
                <div class='categogy__items' >
                    <input class='categogy__items--checkbox' type='checkbox' name='category[]' value='$item->id'>
                    <label for='chinhkich'>$item->name</label>
                </div>";
            }
        ?>
        <button class='btnf'>Lọc</button>
    </form>

</div>