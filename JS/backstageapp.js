$('#submit1').click(function() {

    // e.preventDefault();
    $.ajax({
        url: './PHP/backstage-addnew.php',
        data: {
            cat: $('.cat').val(),
            title: $('.title').val(),
            content: $('.content').val(),
            img: $('.img').val(),
            time: $('.time').val()
        },
        dataType: 'json',
        type: 'post',
        success: function(data) {
            console.log("OK")
        },
        error: function() {
            console.log('not ok!')
        }

    });

});

$('#submit2').click(function() {

    // e.preventDefault();
    // console.log($('.cat1').val());

    $.ajax({
        url: './PHP/backstage-lookupnews.php',
        data: {
            cat1: $('.cat1').val()
                // time: $('.time').val()
        },
        dataType: 'json',
        type: 'post',
        success: function() {
            console.log("send to php OK")
        },
        error: function() {
            console.log('not ok!')
        }
    }).done(function(data) {

        if ($('.tat')) {
            $('.tat').remove();
        }

        console.log("data send back also ok!");

        for (var i = 0; i < data.response.length; i++) {
            var html = '<tr class="tat"><td>' + data.response[i].id + '</td><td>' + data.response[i].title + '</td><td>' + data.response[i].content + '</td><td>' + data.response[i].img + '</td><td>' + data.response[i].time + '</td></tr>';
            $('#something').append(html);
        }
    });

});

$('#submit3').click(function() {
    //先检测输入的是否为数字
    var id = $('#deletenum').val();
    //console.log(id);

    if (isNaN(id)) {
        alert('输入的不是数字');
        return;
    }
    $.ajax({
        url: './PHP/backstage-deletenews.php',
        dataType: 'json',
        type: 'post',
        data: {
            id: id
        }
    });
    console.log('删除执行完成！');





});

//调出需要修改的新闻内容
$('#submit4').click(function() {
    var id = $('#rewirte-num').val();
    //console.log(id);

    if (isNaN(id)) {
        alert('输入的不是数字');
        return;
    }



    $.ajax({
        url: './PHP/backstage-rewirtenews.php',
        dataType: 'json',
        type: 'post',
        data: { id: id }
    }).done(function(data) {
        console.log('data send back ok!');
        // console.log(data);
        // console.log(data.response[0]);
        //反回结果为空，即数据库中无此ID时
        if (data.response[0].title == undefined) {
            alert('无此ID号！');
            return;
        } //???
        //加载内容
        $('#reid').val(data.response[0].id);
        $('#retitle').val(data.response[0].title);
        $('#recontent').val(data.response[0].content);
        $('#reimg').val(data.response[0].img);
        $('#retime').val(data.response[0].time);
        $('#recat').val(data.response[0].cat);

        $('#rewrite').show();
    });
});

//修改调出后的新闻内容
$('#submit5').click(function() {
	console.log($('#retitle').val());
	console.log($('#recontent').val());
	console.log($('#reimg').val());
	console.log($('#retime').val());
	console.log($('#recat').val());
	console.log($('#reid').val());
    $.ajax({
        url: './PHP/backstage-rewirtenews1.php',
        dataType: 'json',
        type: 'post',
        data: {
        	id:$('#reid').val(),
            title:$('#retitle').val(),
            content:$('#recontent').val(),
            img:$('#reimg').val(),
            time:$('#retime').val(),
            cat:$('#recat').val()
        }
    }).done(function(){
    	console.log('更改成功！');
    });
});
