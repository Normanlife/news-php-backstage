$(document).ready(function() {
    
    $('.main-nav-box ul li').click(function(index) {

        // $('.content-container').load('./baijia.htm', function(a, status, c) {
        //     console.log(status);
        //     if (status == 'error') {
        //         $('.content-container').text('出现错误了哦')
        //     }
        // });

        var index=$(this).index();
        // console.log(index);
        var cat=index;
        var id=1;

        //先检查页面是否有东西；
        var content=$('.content');
        if (content) {
            content.hide();
        }

        //ajax请求;
        $.ajax({
            url:'./PHP/server.php',
            type:'POST',
            dataType:'json',
            data:{
                'id':id,
                'cat':cat
            }
        })
        //获取完成;
        .done(function(data){
            console.log('server ok!')
            if(data.error){
                console.log('data error!')
            }else{
                console.log("data also ok!");
                console.log(data);
                for (var i = 0; i < data.response.length; i++) {
                    var imgHtml="";
                    if (data.response[i].img != '') {
                        imgHtml='<div class="content-right"><img src="'+data.response[i].img+'"></div>'
                    }
                    
                    var html='<div class="content"><div class="content-left"><h2>'+data.response[i].title+'</h2><span>'+data.response[i].content+'</span><p>'+data.response[i].time+'</p></div>'+imgHtml+'</div>';
                    $('.content-box').append(html);
                }
            }
        });

    });
    // $('#caijing').click(function() {

    //     $('.content-container').load('./caijing.htm', function(a, status, c) {
    //         console.log(status);
    //         if (status == 'error') {
    //             $('.content-container').text('出现错误了哦');
    //         }
    //     });

    // });
    // $('#yule').click(function() {
    	
    //     $('.content-container').text('请稍等......');
    //     alert('aaa');

    //     $('.content-container').load('./yule.htm', function(a, status, c) {
    //         console.log(status);
    //         if (status == 'error') {
    //             $('.content-container').text('出现错误了哦')
    //         }

    // });
  
});

