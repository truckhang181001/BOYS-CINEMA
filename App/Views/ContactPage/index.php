<head>
    <link rel="stylesheet" href="<?php echo PRONAME?>/public/css/ContactPage.css">
    <title>BOYSCINEMA | Liên hệ</title>
</head>
<body>
    <div class="container-fluid">
        <form class="row" style="padding-top:100px" method="post">
            <div class="col-md-1 col-lg-1"></div>
            <div class="col-12 col-md-6 col-lg-5 form-wrapper">
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Nhập tên của bạn">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="phone" placeholder="Điện thoại">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content" placeholder="Bạn muốn nói gì với chúng tôi"></textarea>
                </div>    
                <div class="button-send">
                    <input class="button-send--text btn" type="submit" value="Gửi"></input>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-5">
                    <img src="<?php echo PRONAME?>/public/img/Mail sent-rafiki.svg" alt="">
            </div>
        </form>
    </div>
</body>
</html>