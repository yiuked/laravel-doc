$(document).ready(function(){
    $("#login").click(function(){
        _this = $(this);
        $.post({
            url:_this.data("ajax-url"),
            date:{email: $("#login").val(), password: $("#password").val()},
            async:false,
            succes:function(){}
        })
    })
})