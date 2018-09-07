var clipboard = new ClipboardJS('.btn');
clipboard.on('success', function(e) {
    swal({
        title:"复制成功！",
        text:"1秒后自动关闭！",
        timer:1000,
        showConfirmButton:false
    });
    // console.log(e);
});
clipboard.on('error', function(e) {
    // console.log(e);
});

$('.add').click(function () {
    $('.remind-show').show();
});

$('.remind__btn--1').click(function () {
    $('.remind-show').hide();
});

$('.remind__btn--2').click(function () {
    $.ajax({
        type : 'POST',
        url : 'api/project',
        dataType : 'json',
        data : {
            project_name : $('#project_name').val(),
            project_dir : $('#project_dir').val(),
            local_url : $('#local_url').val(),
            offline_url : $('#offline_url').val(),
            online_url : $('#online_url').val(),
            password : $('#password').val(),
        },
        success : function (data) {
            console.log(data);
            console.log(data.code);
            if (data.code == 200) {
                console.log(data.message);
                window.location.href = location.href;
            }
        }
    });
});