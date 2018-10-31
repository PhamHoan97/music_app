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
        $('#list_singer').val('');
        $('.list--chon').html('');
    });

    // thêm 1 ca sĩ mới
    // $('.cs--goi_y').click(function(event) {
    //     var value = $(this).attr('value');
    //     var name  = $(this).text();
    //     var classValue = "choosed choosed1"+value;
       
        
    //     var newSinger = {
    //         id: value,
    //         class: classValue,
    //         value: value
    //     };

    //     var $span = $("<span>", newSinger);
    //       $span.html(name);
    //       $(".list--chon").append($span);
    // });
    
    // xóa sạch nhac sĩ được chọn
     $('.xoa--all--nhac--si').click(function(event) {
        $('#list_artist').val('');
        $('.list--nhac--si--chon').html('');
    });

    // thêm 1 nhac sĩ mới
    // $('.ns--goi_y').click(function(event) {
    //     var value = $(this).attr('value');
    //     var name  = $(this).text();
    //     var classValue = "choosed choosed1"+value;
        
        
    //     var newAuthor = {
    //         id: value,
    //         class: classValue,
    //         value: value
    //     };

    //     var $span = $("<span>", newAuthor);
    //       $span.html(name);
    //       $(".list--nhac--si--chon").append($span);
    // });

    // xóa sạch the loai được chọn
     $('.xoa--all--the--loai').click(function(event) {
        $('#list_style').val('');
        $('.the-loai-duoc-chon').html('');
    });

    // thêm 1 tl sĩ mới
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

        var list_style = document.getElementById('list_style').value;

        if(list_style == 0){
            document.getElementById('list_style').value = value;
            $(".the-loai-duoc-chon").append($span);
            console.log("Oke");
        }else{
            //Kiểm tra tl sĩ trùng
            if(checkStyleExist(list_style,value)){
                console.log("Trung cmnr");
            }else{
                var newvalue = list_style + ',' + value;
                document.getElementById('list_style').value = newvalue;
                $(".the-loai-duoc-chon").append($span);
                console.log("Oke");
            }
        }        

    });

    function checkStyleExist(list_style,value){
        if(list_style != 0){
            var array_liststyle = list_style.split(",");
            for (var i = 0; i < array_liststyle.length; i++) {
                    if(value == array_liststyle[i]){
                        return true;
                    }
                }
        }
        return false;
    }
});
