<form method="get" class="booking-page__form" action="">
    <div class="showtime">
        <div class="showtime__date"> <?php echo date("l d/m/Y",strtotime("2021-10-23")) ?></div>
        <select class="showtime__box" name="showtime" onchange="this.form.submit()">
            <option value="">09:00</option>
        </select>
    </div>
</form>