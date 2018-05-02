$(document).ready(function () {

    $('.side-info-img').num();//调用头像边框效果

    hljs.initHighlightingOnLoad();//开启代码高亮插件 highlightjs

    $(".comment-textarea").focus(function () {
        $(".comment-tools").addClass("show");
        $(".comment-form").addClass("show");
        $(".respond").addClass("showBtn");
    });

    // 回到顶部
    $('.go-top').click(function () {
        var _this = this;
        if ($(window).scrollTop() > 100) {
            $(window).scrollTop(0);
            $('html,body').animate({scrollTop: 0}, 800, function () {
                $(_this).css('bottom', '-30px');
                $(_this).animate({bottom: '50px'}, 800);
            });
            $(_this).animate({bottom: '700px'}, 700);
        }
    });
});

(function ($) {
    $.fn.num = function (options) {
        var _this = $(this);
        var _thisTop, _thisRight, _thisBottom, _thisLeft, _thisTopBottom, _thisRightLeft, _thisAll;

        var n1 = _this.width();
        var h1 = _this.height();

        var defaults = {
            Type: 'num',
            Color: '#219a26',
            speed: 300,
        };
        var options = $.extend({}, defaults, options);
        var becurr = "background:" + options.Color + ";position:absolute;border-radius:10px;opahide;";

        num();//执行

        function than(_this) {
            var obj = new Object();
            obj.name = '123';
            obj.thsn = function () {
                _thisTop = _this.find('.divTop').stop().show();
                _thisRight = _this.find('.divRight').stop().show();
                _thisBottom = _this.find('.divBottom').stop().show();
                _thisLeft = _this.find('.divLeft').stop().show();
                _thisTopBottom = _this.find('.divTop,.divBottom').stop().show();
                _thisRightLeft = _this.find('.divLeft,.divRight').stop().show();
                _thisAll = _this.find('.divTop,.divBottom,.divLeft,.divRight').stop().show();
            };
            return obj;
        }

        var opashow = 'opashow', opahide = 'opahide';

        function num() {
            // top
            var divTop = "<div style='" + becurr + "top:-2px;left:" + n1 / 2 + "px;width:0;height:2px' class='divTop'></div>";
            // right
            var divRight = "<div style='" + becurr + "top:" + h1 / 2 + "px;right:-2px;width:2px;height:0;' class='divRight'></div>";
            // Bottom
            var divBottom = "<div style='" + becurr + "bottom:-2px;right:" + n1 / 2 + "px;width:0;height:2px' class='divBottom'></div>";
            // Left
            var divLeft = "<div style='" + becurr + "bottom:" + h1 / 2 + "px;left:-2px;width:2px;height:0;' class='divLeft'></div>";
            _this.hover(function () {
                el = $(this);
                el.append(divTop, divRight, divBottom, divLeft);
                num6 = new than(el);
                num6.thsn();
                _thisTopBottom.animate({width: n1 + 3.5, left: -2}, options.speed);
                _thisRightLeft.animate({height: h1 + 3.5, top: -2}, options.speed);
            }, function () {
                _thisTopBottom.animate({width: 0, left: n1 / 2}, options.speed);
                _thisRightLeft.animate({height: 0, top: h1 / 2}, options.speed, function () {
                    _thisAll.remove()
                });
            })
        }
    }
})(jQuery);