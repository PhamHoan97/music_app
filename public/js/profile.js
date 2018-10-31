$(document).ready(function() { 
	// lấy src gốc để phòng trường hợp hủy
	var src_cover = $('.banner--cover').attr('src');
	


	// lấy src ảnh
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('.banner--cover').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // hiển thị nút submit ảnh
    $(".input-file").change(function(){
        readURL(this);
        $('.btn--upload__cover').css({
        	display: 'block'
        });
        $('.btn--upload__cancel').css({

        	display: 'block'
        });
    });
    $('.btn--upload__cancel').click(function(event) {
    	$('.banner--cover').attr('src', src_cover);
    	$('.btn--upload__cover').css({
        	display: 'none'
        });
        $('.btn--upload__cancel').css({
        	display: 'none'
        });
    });
    // xóa sạch ca sĩ được chọn
     $('.xoa--all').click(function(event) {
       $('.list--chon').html('');
    });

    // thêm 1 ca sĩ mới
    $('.cs--goi_y').click(function(event) {
        var value = $(this).attr('value');
        var name  = $(this).text();
        var classValue = "choosed choosed1"+value;
       
        
        var newSinger = {
            id: value,
            class: classValue,
            value: value
        };

        var $span = $("<span>", newSinger);
          $span.html(name);
          $(".list--chon").append($span);
    });
    
    // xóa sạch nhac sĩ được chọn
     $('.xoa--all--nhac--si').click(function(event) {
       $('.list--nhac--si--chon').html('');
    });

    // thêm 1 ca sĩ mới
    $('.ns--goi_y').click(function(event) {
        var value = $(this).attr('value');
        var name  = $(this).text();
        var classValue = "choosed choosed1"+value;
        
        
        var newAuthor = {
            id: value,
            class: classValue,
            value: value
        };

        var $span = $("<span>", newAuthor);
          $span.html(name);
          $(".list--nhac--si--chon").append($span);
    });

    // xóa sạch the loai được chọn
     $('.xoa--all--the--loai').click(function(event) {
       $('.the-loai-duoc-chon').html('');
    });

    // thêm 1 ca sĩ mới
    $('.tl--goi_y').click(function(event) {
        var value = $(this).attr('value');
        var name  = $(this).text();
        var classValue = "choosed choosed1"+value;
        
        
        var newAuthor = {
            id: value,
            class: classValue,
            value: value
        };

        var $span = $("<span>", newAuthor);
          $span.html(name);
          $(".the-loai-duoc-chon").append($span);
    });
});
