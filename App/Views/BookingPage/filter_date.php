<div class="date-sort filter-item">
    <div class="filter-item__icon">
        <img src="http://pixner.net/boleto/demo/assets/images/ticket/date.png" alt="icon">
    </div>
    <select class="filter-item__form" name="date" onchange="this.form.submit()">
        <option><?php echo date("d/m/Y")?></option>
        <?php
            $date_day = date("d");
            for($i=0; $i <5; $i++){
                $date_day += 1;
                echo "<option>".$date_day."/".date("m/Y")."</option>";
            }
        ?>
    </select>
</div>