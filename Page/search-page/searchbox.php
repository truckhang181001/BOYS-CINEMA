 <!-- ok  -->
<div class="searchbox d-flex justify-content-center">
    <input class="searchbox__input" type="text" placeholder="Nhập thông tin cần tìm">
    <div class="searchbox__icon d-flex align-items-center">
        <i onclick="ClearSearchBox()" class="fas fa-times"></i>
        <i class="fas fa-search"></i>
    </div>
</div>

<script>
   
    function ClearSearchBox(){
        document.querySelector(".searchbox__input").value="";
    }
</script>