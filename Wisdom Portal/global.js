        var a;var b;var count;var attem;
        $('.upped').height('-=320');
        a = $('.cover').height()+$('.logo').height()+$('#downsided').height()+50;
        $('.main').css({height:a});
        $('.back').css({height:a});
        b = a + 310;
        $('#deact').css({height:b});
        $('#footer').css({top:a}) 
    $('#author').click(function () {
        $('.cover').show();
        $('#times').hide(200);
        $('#authors').show(200);
        $('#hidable').show(200);
        if ($('#downsided').hasClass('upped')) {
        $('#downsided').animate({top:'+=310px'},200).removeClass('upped');
        $('.main').css({height:'+=310px'})
        };
        
});
    $('#time').click(function () {
        $('#auth_page1').show();
        $('.cover').show();
        $('#authors').hide(200);
        $('#times').show(200);
        $('.cover').css({height:'280px'});
        $('tr.expanded').hide();
        $('dispander').hide();
        $('#hidable').show();
        $('#auth_page2').hide();
        if ($('#downsided').hasClass('upped')) {
        $('#downsided').animate({top:'+=310px'},200).removeClass('upped');
        $('.main').css({height:'+=310px'})
        }
        
    })
    $('#expander').click(function () {
        $('.cover').animate({height:"650px"},600);
        $('#hidable').hide(100);
        $('tr.expanded').show(200);
        $('#dispander').show(200);
        $('#deact').fadeIn(500);
        $('#downsided').animate({opacity:'0.2'},500)});
    $('#dispander').click(function () {
        $('tr.expanded').hide(200);
        $('.cover').animate({height:"280px"},600);
        $(this).hide(200);
        $('#hidable').show(200);
        $('#downsided').animate({opacity:'1'},400);
        $('#deact').fadeOut(500);
    });
    $('.a_pag_2').click(function () {
        $('#auth_page1').fadeOut();
        $('#auth_page2').fadeIn()});
    $('#dispander_2').click(function () {
        $('#auth_page2').fadeOut();
        $('.cover').animate({height:"280px"},600);
        $('#auth_page1').fadeIn();
        $('tr.expanded').hide();
        $('#hidable').show();
        $('#downsided').animate({opacity:'1'},400);
        $('#deact').fadeOut(500);});
    $('.a_pag_1').click(function () {
        $('#auth_page2').fadeOut();
        $('#auth_page1').fadeIn()});
    $('#close').click(function () {
        $('tr.expanded').hide();
        $('#auth_page2').hide();
        $('#auth_page1').show();
        $('.cover').fadeOut(200);
        $('.cover').css({height:'280px'});
        $('#downsided').animate({top:'-=310px'},200);
        $('#downsided').addClass('upped');
        $('#downsided').animate({opacity:'1'},400);
        $('#deact').fadeOut(500);
        $('.main').css({height:'-=310px'})
    });
    $('div.note').mouseenter(function () {
        $(this).find('.fav_img').animate({'opacity':'1'},200);
        $(this).find('.n_loved').animate({'opacity':'1'},200);
        $(this).find('.n_soc').animate({opacity:'1'},200);
        $(this).find('.n_comt').animate({opacity:'1'},200);
        $(this).find('.n_like').animate({opacity:'1'},200)
    });
    $('div.note').mouseleave(function () {
        $('.fav_img').animate({'opacity':'0.3'},200).finish();
        $('.n_loved').animate({'opacity':'0.3'},200).finish();
        $('.n_soc').animate({opacity:'0.3'},200).finish();
        $('.n_comt').animate({opacity:'0.3'},200).finish();
        $('.n_like').animate({opacity:'0.3'},200).finish()
    });
    like =[];
    dis =[];

    $('img.like').click(function () {
        id = $(this).prop('id');
        count = parseInt($(this).parent('.n_like').find('span.like').html());
        if (dis[id]==1) {
            alert("И тут ничего!")
        }
        else {
            if (like[id]==1) {
                count--;
                $(this).parent('.n_like').find('span.like').html(count);
                like[id]=0; 
            }
            else {
                count++;
                $(this).parent('.n_like').find('span.like').html(count);
                like[id] = 1;
            };
        };
        sent = 'num='+$(this).prop('id')+'&'+'c='+count+'act=l';
        $.ajax({
            type: "GET",
            url: "handler.php",
            data: "num="+$(this).prop('id')+"&"+"c="+count+"&"+"act=l",
        })
    });
    $('img.dis').click(function () {
        id = $(this).prop('id');
        count = parseInt($(this).parent('.n_like').find('span.dis').html());
        if (like[id]==1) {
            $(this).animate({'cursor':'normal'},100)
            }
        else {
            if (dis[id]==1) {
                count--;
                $(this).parent('.n_like').find('span.dis').html(count);
                dis[id] = 0;
            }
            else {
                count++;
                $(this).parent('.n_like').find('span.dis').html(count);
                dis[id] = 1;
            };
        };
        $.ajax({
            type: "GET",
            url: "handler.php",
            data: "num="+$(this).prop('id')+"&"+"c="+count+"&"+"act=d",
        })
    })