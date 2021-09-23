$(document).ready(function() {
    // Hàm active tab nào đó
    function activeTab(obj) {
        // Xóa class active tất cả các tab
        $('.info-page__tab-content div div').removeClass('active');

        // Thêm class active vòa tab đang click
        $(obj).addClass('active');

        // Lấy href của tab để show content tương ứng
        var id = $(obj).find('a').attr('href');

        // Ẩn hết nội dung các tab đang hiển thị
        $('.info-page__tab-content__tab--tabcontent').hide();

        // Hiển thị nội dung của tab hiện tại
        $(id).show();
    }

    // Sự kiện click đổi tab
    $('.info-page__tab-content__tab div').click(function() {
        activeTab(this);
        return false;
    });

    // Active tab đầu tiên khi trang web được chạy
    activeTab($('.info-page__tab-content__tab div:first-child'));
    $('.info-page--fas-style').on('click', function() {
        $(this).find('.fas')
            .toggleClass('fa-play')
            .toggleClass('fa-pause');

    });
    showInfoPoster = function() {
        $('.info-page__header__btn-group__poster').find('.fas')
            .toggleClass('fa-play')
            .toggleClass('fa-pause');
    };
    $('.info-page__header__btn-group__poster img').on('click', showInfoPoster)
    $('.info-page__header__btn-group__poster__info--name').on('click', showInfoPoster)

});