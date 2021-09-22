<!-- - Khong phai de html o day!!!
- Khong phai goi du lieu o day!!!
=> Nhiem vu dieu huong

Model => Bang du lieu Database

Search => Phim, Lich Chieu (Models)
Search => HTML, CSS, Thẻ phim (Views)
Hiên tại đang code dữ liệu nhập tay 
timkiem/PhimDangChieu
Boyscinema.com/thanhtoan-->
<?php
    class Search extends controller{
        function PhimDangChieu(){
            $this->getView("SearchPage");
        }
        function PhimSapChieu(){
            echo "Phim sap chieu";
        }
    }
?>