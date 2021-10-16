<?php
$i=0;
foreach($data['film'] as $key=>$item){
  $i+=1;
  $date = date_create($item->release);
  $time = FLOOR($item->time/60)." giờ ".($item->time%60)." phút";

  echo "<div class='card mb-3'>
    <div class='row g-0'>
      <a class='col-3 col-md-3 before-img' href='".PRONAME."/thong-tin'>
        <img src='".PRONAME."/public/img/HaiPhuong.jpg' class='img-fluid rounded-start' alt='...'>
      </a>
      <div class='col-9 col-md-9'>
        <div class='card-body'>
          <div>
            <a class='card-title' href='".PRONAME."/thong-tin'>".$item->name."</a>
            <div class='card-time'>".$time."</div>
          </div>           
           <div>
                <p class='card-category'>".$data['category'][$key]->name."</p>
                <p class='card-date'><small>Ngày công chiếu: ".date_format($date,"d/m/Y")."</small></p>      
           </div>
           
           <div class='card-footer d-flex justify-content-between align-items-center'>
                <div class='card-footer__items d-flex align-items-center'>
                    <div onclick='ClickHeart(".$i.")' class='card-footer__items--circle d-flex justify-content-center align-items-center'>
                        <i class='far fa-heart'></i>
                    </div>
                    <div><h4>Yêu thích</h4></div>
                </div>
               <div class='card-footer__items d-flex align-items-center'>
                   <div class='card-footer__items--circle d-flex justify-content-center align-items-center'>
                       <i class='fas fa-play'></i>
                    </div>
                    <div><h4>Xem trailer</h4></div>
               </div>
               <div class='card-footer__items d-flex align-items-center'>
                    <button class='card-footer__items--button'>MUA VÉ</button>
                </div>
           </div>
        </div>
      </div>
    </div>
</div>";
}
?>
<script>
    function ClickHeart($i){
    
        var element =document.querySelectorAll('.fa-heart')[$i];
        if (element.classList.contains('far'))
        {
          element.classList.remove('far');
          element.classList.add('fas', 'colorred');
        }
        else {
          element.classList.remove('fas', 'colorred');
          element.classList.add('far');
        }
    }   
</script>   