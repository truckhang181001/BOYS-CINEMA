<div class="card mb-3">
    <div class="row g-0">
      <div class="col-3 col-md-3" id="before-img">
        <img src="<?php echo PRONAME ?>/public/img/BD-Ocard-reference-Copy-2722-1557282318.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-9 col-md-9">
        <div class="card-body">
          <div><h5 class="card-title">TÔI THẤY HOA VÀNG TRÊN CỎ XANH</h5></div>
           
           <!-- <p class="card-text">Chuyện phim là tuổi thơ nghèo khó của hai anh em Thiều và Tường ở một làng quê Việt thân thuộc và nên thơ. Là nơi đã chứng kiến những rung động đầu đời của cả hai, tình cảm gia đình, tình anh em yêu thương chân thành, cũng như những đố kỵ, ghen tuông và những nỗi đau trong veo trong quá trình trưởng thành.</p> -->
           <div>
                <p class="card-category">Thể loại: Tâm lý</p>
                <p class="card-date"><small>Ngày công chiếu: 29/12/2021</small></p>
                <p class="card-time"><small>Thời lượng: 90 phút</small></p>
           </div>
           
           <div class="card-footer d-flex justify-content-between align-items-center">
                <div class="card-footer__items d-flex align-items-center">
                    <div onclick="ClickHeart()" class="card-footer__items--circle d-flex justify-content-center align-items-center">
                        <i class="far fa-heart"></i>
                    </div>
                    <div><h4>Yêu thích</h4></div>
                </div>
               <div class="card-footer__items d-flex align-items-center">
                   <div class="card-footer__items--circle d-flex justify-content-center align-items-center">
                       <i class="fas fa-play"></i>
                    </div>
                    <div><h4>Xem trailer</h4></div>
               </div>
               <div class="card-footer__items d-flex align-items-center">
                    <button class="card-footer__items--button">MUA VÉ</button>
                </div>
           </div>
        </div>
      </div>
    </div>
</div>

<script>
    function ClickHeart(){
    
        var element =document.querySelector(".fa-heart");
        if (element.classList.contains("far"))
        {
          element.classList.remove("far");
          element.classList.add("fas", "colorred");
        }
        else {
          element.classList.remove("fas", "colorred");
          element.classList.add("far");
        }
    }   
</script>   