<div class="city-sort filter-item">
    <div class="filter-item__icon">
        <img src="http://pixner.net/boleto/demo/assets/images/ticket/city.png" alt="ticket">
    </div>
    <select class="filter-item__form" name="city" onchange="this.form.submit()">
        <option selected disabled>Chọn thành phố</option>
    </select>
</div>
<div class="theater-sort filter-item">
    <div class="filter-item__icon">
        <img src="http://pixner.net/boleto/demo/assets/images/ticket/cinema.png" alt="ticket">
    </div>
    <select class="filter-item__form" name="theater">
        <option selected disabled>Chọn rạp</option>
    </select>
</div>
<div class="date-sort filter-item">
    <div class="filter-item__icon">
        <img src="http://pixner.net/boleto/demo/assets/images/ticket/date.png" alt="icon">
    </div>
    <select class="filter-item__form" name="date" onchange="this.form.submit()">
        <option><?php echo date("d/m/Y") ?></option>
        <?php
        // Hàm in ngày (Tính từ ngày hiện tại)
        $date_day = date("d");
        for ($i = 0; $i < 5; $i++) {
            $date_day += 1;
            echo "<option ".selectItem($date_day).">" . $date_day . "/" . date("m/Y") . "</option>";
        }
        // Hàm kiểm tra item Selected
        function selectItem($date_day){
            if(isset($_GET['date']))
            if($_GET['date'] == $date_day . "/" . date("m/Y")) return "selected";
            else return " ";
        }
        ?>
    </select>
</div>