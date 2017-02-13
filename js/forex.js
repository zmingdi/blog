/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function loadPriceBox() {
    var priceList = {};
    var list = "fx_seurusd,fx_sgbpusd,fx_susdjpy,fx_saudusd,fx_susdchf,fx_susdcad,fx_snzdusd";
    var currs = list.split(',');
    currs.forEach(function (e) {
        priceList["hq_str_" + e] = "";
    });
    var cl = 'red';
    var getPrice = function () {

        $.ajaxSetup({cache: true, processData: false});
        var timestamp = new Date();

        var url = "http://hq.sinajs.cn/rn=" + timestamp.getTime() + "?list=" + list;
        var arrow = "";
        
        $.ajax({url: url
            , cache: true
            , processData:false
            , success: function () {

                var values = '';
                currs.forEach(function (e) {
                    var item = window["hq_str_" + e];
                    item = item.split(',');
                    if (currs["hq_str_" + e] > item[1]) {
                        cl = "green";
                        arrow = "arrow_down";
                    } else if (currs["hq_str_" + e] == item[1]) {
                        cl = "black";
                        arrow = "arrow_none";
                    } else {
                        arrow = "arrow_up";
                        cl = 'red';
                    }
                    currs["hq_str_" + e] = item[1];

                    values += ('<li style="color:[cl]">'.replace("[cl]", cl) + "<span class='[arrow]'></span>".replace('[arrow]', arrow) + item[9].replace('即期汇率', '') + ':' + item[1] + '</li>');
                })

                $("#price_box ul").html(values);
                $("#price_box #refresh_time").html("refresh time: <br />" + timestamp.toLocaleString());

                //$( "#price_box" ).css( "border", "3px solid red" );
            }, 
            dataType:'script'});
        
    }
    getPrice();
    setInterval(getPrice, 10000);
}


function postStrategy() {
    var item = {'item': '', 'date': new Date().toLocaleDateString(), 'direction': 0, entry: 0.0, 'sl': 0.0, tp1: 0.0, tp2: 0.0, term: 0};
    var names = $('.item_name');
    var directions = $('.direction');
    var entries = $('.entry');
    var sls = $('.sl');
    var tp1 = $('.tp1');
    var tp2 = $('.tp2');
    var terms = $('.term');
    var d = [];
    for (var i = 0; i < names.length; i++) {

        item['item'] = $(names[i]).text();
        item['direction'] = $(directions[i]).val();
        item['entry'] = $(entries[i]).val();
        item['sl'] = $(sls[i]).val();
        item['tp1'] = $(tp1[i]).val();
        item['tp2'] = $(tp2[i]).val();
        item['term'] = $(terms[i]).val();
        d.push(JSON.stringify(item));
    }
    var dat = {dat: d};
    //$.post('test.php', $(".strategy").serialize());
    $.ajax({url: 'createStrategy.php'
            , data: dat
            , method: "POST"
            , cache: false
            , processData: true
            , dataType:"json"});
}