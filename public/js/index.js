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