$(function () {
    // 动画样式
    function moveToCenter() {
        $('.form-box').css({
            'width': 'calc(4.6rem * 3)',
            'height': 'calc(4rem * 3)'
        });
        $('#btn-closeFormBox').css({
            'width': 'calc(0.72rem*3)',
            'height': 'calc(0.5rem*3)',
            'top':'calc(-0.5rem*3)'
        });
        $('.form-box .form-title').css({
            'lineHeight':'calc(0.8rem*3)',
            'fontSize': 'calc(0.4rem*3)'
        });
        $('.form-box form').css({
            'height': 'calc(3rem*3)'
        });
        $('.form-box form .form-content').css({
            'height': 'calc(2.6rem*3)'
        });
        $('form .form-content .left>div').css({
            'marginRight': 'calc(0.1rem*3)',
            'fontSize': 'calc(0.24rem*3)'
        });
        $('form .form-content .right img').css({
            'marginLeft':'calc(0.1rem*3)',
            'width': 'calc(0.2rem*3)',
            'height': 'calc(0.2rem*3)'
        });
        $('form .form-content .right>div').css({
            'marginLeft':'calc(0.1rem*3)',
            'fontSize':'calc(0.24rem*3)'
        });
        $('form .form-content .right #selectModel').css({
            'width': 'calc(1.4rem*3)',
            'height':'calc(0.3rem*3)',
            'paddingLeft': 'calc(0.1rem*3)'
        });
        $('form .form-content .right #selectModel>span').css({
            'width': 'calc(0.2rem*3)',
            'height': 'calc(0.2rem*3)',
            'top': 'calc(0.05rem*3)'
        });
        $('form .form-content .right #option-box').css({
            'width':'calc(1.4rem*3)',
            'top': 'calc(0.3rem*3)'
        });
        $('form .form-content .right #option-box>a').css({
            'width': 'calc(1.4rem*3)',
            'height': 'calc(0.3rem*3)',
            'paddingLeft':'calc(0.1rem*3)',
            'lineHeight': 'calc(0.3rem*3)'
        });
        $('form .form-content .right>div input').css({
            'height':'calc(0.3rem*3)',
            'paddingLeft':'calc(0.1rem*3)'
        });
        $('form .form-content .right #productsNumber').css({
            'width':'calc(0.8rem*3)',
            'marginRight':'calc(0.1rem*3)'
        });
        $('form .form-content .right #telNumber').css({
            'width':'calc(1.4rem*3)'
        });
        $('form .form-content .right #username').css({
            'width':'calc(1.2rem*3)'
        });
        $('.form-box #btn-submit').css({
            'fontSize':'calc(0.22rem*3)',
            'width':'calc(2rem*3)',
            'height':'calc(0.5rem*3)',
            'lineHeight':'calc(0.5rem*3)'
        });
    }

    // 初始化样式
    function initial() {
        $('.form-box').css({
            'width': '4.6rem',
            'height': '4rem'
        });
        $('#btn-closeFormBox').css({
            'width': '0.72rem',
            'height': '0.5rem',
            'top': '-0.5rem'
        });
        $('.form-box .form-title').css({
            'lineHeight': '0.8rem',
            'fontSize': '0.4rem'
        });
        $('.form-box form').css({
            'height': '3rem'
        });
        $('.form-box form .form-content').css({
            'height': '2.6rem'
        });
        $('form .form-content .left>div').css({
            'marginRight': '0.1rem',
            'fontSize': '0.24rem'
        });
        $('form .form-content .right img').css({
            'marginLeft': '0.1rem',
            'width': '0.2rem',
            'height': '0.2rem'
        });
        $('form .form-content .right>div').css({
            'marginLeft': '0.1rem',
            'fontSize': '0.24rem'
        });
        $('form .form-content .right #selectModel').css({
            'width': '1.4rem',
            'height': '0.3rem',
            'paddingLeft': '0.1rem'
        });
        $('form .form-content .right #selectModel>span').css({
            'width': '0.2rem',
            'height': '0.2rem',
            'top': '0.05rem'
        });
        $('form .form-content .right #option-box').css({
            'width': '1.4rem',
            'top': '0.3rem'
        });
        $('form .form-content .right #option-box>a').css({
            'width': '1.4rem',
            'height': '0.3rem',
            'paddingLeft': '0.1rem',
            'lineHeight': '0.3rem'
        });
        $('form .form-content .right>div input').css({
            'height': '0.3rem',
            'paddingLeft': '0.1rem'
        });
        $('form .form-content .right #productsNumber').css({
            'width': '0.8rem',
            'marginRight': '0.1rem'
        });
        $('form .form-content .right #telNumber').css({
            'width': '1.4rem'
        });
        $('form .form-content .right #username').css({
            'width': '1.2rem'
        });
        $('.form-box #btn-submit').css({
            'fontSize': '0.22rem',
            'width': '2rem',
            'height': '0.5rem',
            'lineHeight': '0.5rem'
        });
    }
    // 判断是否为PC端
    function browserRedirect() {
        var sUserAgent = navigator.userAgent.toLowerCase();
        var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
        var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
        var bIsMidp = sUserAgent.match(/midp/i) == "midp";
        var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
        var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
        var bIsAndroid = sUserAgent.match(/android/i) == "android";
        var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
        var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
        if (!(bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM)) {
            if (window.innerWidth <= 1200) {
                //$('html')[0].style.fontSize = '62.5px';
                //$('html')[0].style.minWidth = '1200px';
                //$('body')[0].style.minWidth = '1200px';
                //$('.wrap')[0].style.minWidth = '1200px';
                $('html')[0].style.fontSize = '5.2083333vw';
                $('html')[0].style.minWidth = 'unset';
                $('body')[0].style.minWidth = 'unset';
                $('.wrap')[0].style.minWidth = 'unset';
            }
        } else {
            $('html')[0].style.fontSize = '62.5px';
            $('html')[0].style.minWidth = '1200px';
            $('body')[0].style.minWidth = '1200px';
            $('.wrap')[0].style.minWidth = '1200px';
            $('.form-box form').on('click', function () {
                $('.form-box').addClass('moveToCenter');
                moveToCenter();
            });
        }
    }
    browserRedirect();
    $(window).on('resize', function () {
        browserRedirect();
    });

    // 动画
    $('#btn-closeFormBox').on('click', function () {
        $(this).toggleClass('animation');
        $('.form-box').removeClass('moveToCenter');
        if ($('.form-box').hasClass('animation')) {
            $('.form-box').animate({
                'height': '4rem'
            });
            $('.form-box form')[0].style.visibility = 'unset';
            $('.form-box p')[0].style.visibility = 'unset';
        } else {
            initial();
            $('.form-box').animate({
                'height': '0'
            });
            $('.form-box form')[0].style.visibility = 'hidden';
            $('.form-box p')[0].style.visibility = 'hidden';
        }
        $('.form-box').toggleClass('animation');
    });
    $('#btn-close-sidebar').on('click', function () {
        this.parentElement.remove();
    });

    // 表单正则
    var regMobile = /^(13[0-9]|14[57]|15[0-9]|18[0-9])\d{8}$/;
    $('#telNumber').on('change',function(){
        if(regMobile.test($('#telNumber').val())){
            $('#telNumber').siblings('span').find('img').attr('src','./img/true.png');
        }else{
            $('#telNumber').siblings('span').find('img').attr('src','./img/false.png');
        }
    });

    // 侧栏效果
    function sidebarShow(elem, e) {
        e = e || window.event;
        e.preventDefault();
        $(elem).siblings().hide();
        $('.sidebar .qrcode').show();
        $(elem).show();
    }
    $('#btn-wechat').on('click', function () {
        sidebarShow('.wechat-qrcode');
    });
    $('#btn-phone').on('click', function () {
        sidebarShow('.phoneContact');
    });
    $('#btn-qq').on('click', function () {
        sidebarShow('.qq-qrcode');
    });
    $('.sidebar').on('mouseleave', function () {
        $('.sidebar .qrcode').hide();
    });

    // 自定义下拉框
    $('#selectModel').on('click',function(){
        $('#option-box').toggleClass('animation');
    });
    $('#option-box>a').on('click',function(e){
        e = e || window.event;
        e.preventDefault();
        $('.selectValue').text($(this).text());
    });

    //
    var BrowserMatch = {
        init: function() {
            this.browser = this.getBrowser().browser || "An Unknown Browser";
            this.version = this.getBrowser().version || "An Unknown Version";
            this.OS = this.getOS() || "An Unknown OS";
        },
        getOS: function() {
            if (navigator.platform.indexOf("Win") != -1) return "Windows";
            if (navigator.platform.indexOf("Mac") != -1) return "Mac";
            if (navigator.platform.indexOf("Linux") != -1) return "Linux";
            if (navigator.userAgent.indexOf("iPhone") != -1) return "iPhone/iPod";
        },
        getBrowser: function() {
            var rMsie = /(msie\s|trident\/7)([\w\.]+)/;
            var rTrident = /(trident)\/([\w.]+)/;
            var rFirefox = /(firefox)\/([\w.]+)/;
            var rOpera = /(opera).+version\/([\w.]+)/;
            var rNewOpera = /(opr)\/(.+)/;
            var rChrome = /(chrome)\/([\w.]+)/;
            var rSafari = /version\/([\w.]+).*(safari)/;
            var ua = navigator.userAgent.toLowerCase();
            var matchBS, matchBS2;
            matchBS = rMsie.exec(ua);
            if (matchBS != null) {
                matchBS2 = rTrident.exec(ua);
                if (matchBS2 != null) {
                    switch (matchBS2[2]) {
                        case "4.0":
                            return {
                                browser:
                                    "IE",
                                version: "8"
                            };
                            break;
                        case "5.0":
                            return {
                                browser:
                                    "IE",
                                version: "9"
                            };
                            break;
                        case "6.0":
                            return {
                                browser:
                                    "IE",
                                version: "10"
                            };
                            break;
                        case "7.0":
                            return {
                                browser:
                                    "IE",
                                version: "11"
                            };
                            break;
                        default:
                            return {
                                browser:
                                    "IE",
                                version: "Undefined"
                            };
                    }
                } else {
                    return {
                        browser: "IE",
                        version: matchBS[2] || "0"
                    };
                }
            }
            matchBS = rFirefox.exec(ua);
            if ((matchBS != null) && (!(window.attachEvent)) && (!(window.chrome)) && (!(window.opera))) {
                return {
                    browser: matchBS[1] || "",
                    version: matchBS[2] || "0"
                };
            }
            matchBS = rOpera.exec(ua);
            if ((matchBS != null) && (!(window.attachEvent))) {
                return {
                    browser: matchBS[1] || "",
                    version: matchBS[2] || "0"
                };
            }
            matchBS = rChrome.exec(ua);
            if ((matchBS != null) && ( !! (window.chrome)) && (!(window.attachEvent))) {
                matchBS2 = rNewOpera.exec(ua);
                if (matchBS2 == null) {
                    return {
                        browser: matchBS[1] || "",
                        version: matchBS[2] || "0"
                    };
                } else {
                    return {
                        browser: "Opera",
                        version: matchBS2[2] || "0"
                    };
                }
            }
            matchBS = rSafari.exec(ua);
            if ((matchBS != null) && (!(window.attachEvent)) && (!(window.chrome)) && (!(window.opera))) {
                return {
                    browser: matchBS[2] || "",
                    version: matchBS[1] || "0"
                };
            }
        }
    };

    function tshi(){
        BrowserMatch.init();
        if(BrowserMatch.browser=='safari'){
            alert("使用当前浏览器访问可能造成不好的访问效果，请更换，我们推荐使用谷歌浏览器");
        }
        if( BrowserMatch.browser == "IE"){
            if(BrowserMatch.version == "8")
                alert("使用当前浏览器访问可能造成不好的访问效果，请更换，我们推荐使用谷歌浏览器");
        }
    }

    window.onload=tshi();

    //alert("当前浏览器为：" + BrowserMatch.browser +"\n版本为："+ BrowserMatch.version + "\n所处操作系统为："+BrowserMatch.OS);
});