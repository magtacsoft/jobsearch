<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head profile="http://www.w3.org/2000/08/w3c-synd/#">
    <title>JobSearch.az</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="resource-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="expires" content="Thu, 01-Jan-1970 00:00:01 GMT"/>
    <meta http-equiv="cache-control" content="no-store"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta http-equiv="reply-to" content="rashad@aliev.info"/>
    <meta name="author" content="Rashad Aliyev"/>
    <meta name="title" content="JobSearch.az"/>
    <meta name="copyright" content="&copy; MicroPHP.com Development Group"/>
    <meta name="robots" content="all"/>
    <meta name="revisit-after" content="2 days"/>
    <meta name="document-state" content="dynamic"/>
    <meta name="abstract" content="JobSearch.az "/>
    <meta name="author" content="Rəşad Əliev"/>
    <meta name="keywords"
          content="job, jobsearch, hr, recruitment, employment, vacancy, website in Azerbaijan, IRES, employment agency, поиск работы, вакансии, побор кадров, ires, isheduzeltme, kadrlar, vakansiyalar"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}"/>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets//js/jquery.snow.js')}}"></script>


    <SCRIPT language="javascript">
        /***********************************
         *   http://javascripts.vbarsan.com/
         *   This notice may not be removed
         ***********************************/

//slider's width
        var swidth = 180;

        //slider's height
        var sheight = 103;

        //slider's speed
        var sspeed = 2;
        var restart = sspeed;
        var rspeed = sspeed;

        //slider's background
        var scolor = "#4c7eb0";

        //slider's border
        var sborder = "0";

        var imagef = '';

        //images-1: change to your own set of Images
        //Preload is recommended (no downloading check) - otherwise you may skip this:
        preload1 = new Image();
        preload1.src = "{{asset('assets/img/img_48.jpg')}}";
        preload2 = new Image();
        preload2.src = "{{asset('assets/img/img_34.jpg')}}";
        preload3 = new Image();
        preload3.src = "{{asset('assets/img/img_39.jpg')}}";
        preload4 = new Image();
        preload4.src = "{{asset('assets/img/img_30.jpg')}}";
        preload5 = new Image();
        preload5.src = "{{asset('assets/img/img_62.jpg')}}";
        preload6 = new Image();
        preload6.src = "{{asset('assets/img/img_08.jpg')}}";


        var leftimage = new Array();
        //images-2: change to your own set of Hyperlinks and Images parameters
        //remove <a ... > & </a> portions where no Hyperlink used
        //if no preloading, replace '+ ... +' with the actual Images path "..."
        leftimage[0] = '<a href="inside15_en.html"><img src=' + preload1.src + ' height=100 alt="Image" border="0"></a>&nbsp;';
        leftimage[1] = '<a href="inside15_en.html"><img src=' + preload2.src + ' height=100 alt="Image" border="0"></a>&nbsp;';
        leftimage[2] = '<a href="inside15_en.html"><img src=' + preload3.src + ' height=100 alt="Image" border="0"></a>&nbsp;';
        leftimage[3] = '<a href="inside15_en.html"><img src=' + preload1.src + ' height=100 alt="Image" border="0"></a>&nbsp;';
        leftimage[4] = '<a href="inside15_en.html"><img src=' + preload2.src + ' height=100 alt="Image" border="0"></a>&nbsp;';
        leftimage[5] = '<a href="inside15_en.html"><img src=' + preload3.src + ' height=100 alt="Image" border="0"></a>&nbsp;';
        //leftimage[...]=' ... ';

        for (mi = leftimage.length - 1; mi >= 0; mi--)
            imagef = imagef + leftimage[mi];

        var operbr = navigator.userAgent.toLowerCase().indexOf('opera');
        if (operbr == -1 && navigator.product && navigator.product == "Gecko") {
            var agt = navigator.userAgent.toLowerCase();
            var rvStart = agt.indexOf('rv:');
            var rvEnd = agt.indexOf(')', rvStart);
            var check15 = agt.substring(rvStart + 3, rvEnd);
            if (parseFloat(check15) >= 1.8) operbr = 0;
        }
        if (navigator.appVersion.indexOf("Mac") != -1) operbr = 0;

        function goup() {
            if (sspeed != rspeed * 8) {
                sspeed = sspeed * 2;
                restart = sspeed;
            }
        }

        function startimg() {
            if (document.getElementById) {
                tdiv6 = document.getElementById('slider');
                firstns6();
            } else if (document.all) {
                tdivie = slider;
                firstie();
            } else if (document.layers) {
                tdivns4 = document.slider1.document.slider2;
                firstns4();
            }
        }

        function firstns4() {
            tdivns4.document.write('<nobr>' + imagef + '</nobr>');
            tdivns4.document.close();
            thel = tdivns4.document.width;
            tdivns4.left = -thel;
            slidens4();
        }

        function slidens4() {
            if (tdivns4.left <= swidth) {
                tdivns4.left += sspeed;
                setTimeout("slidens4()", 100);
            } else {
                tdivns4.left = -thel;
                slidens4();
            }
        }

        function firstie() {
            tdivie.innerHTML = ('<nobr>' + imagef + '</nobr>');
            thel = tdivie.offsetWidth;
            tdivie.style.pixelLeft = -thel;
            slideie();
        }

        function slideie() {
            if (tdivie.style.pixelLeft <= swidth) {
                tdivie.style.pixelLeft += sspeed;
                setTimeout("slideie()", 100);
            } else {
                tdivie.style.pixelLeft = -thel;
                slideie();
            }
        }

        function firstns6() {
            tdiv6.innerHTML = ('<nobr>' + imagef + '</nobr>');
            thel = tdiv6.offsetWidth;
            if (operbr != -1) {
                document.getElementById('opslider').innerHTML = '<nobr>' + imagef + '</nobr>';
                thel = document.getElementById('opslider').offsetWidth;
            }
            tdiv6.style.left = -thel;
            slidens6();
        }

        function slidens6() {
            if (parseInt(tdiv6.style.left) <= swidth) {
                tdiv6.style.left = parseInt(tdiv6.style.left) + sspeed;
                setTimeout("slidens6()", 100);
            } else {
                tdiv6.style.left = -thel;
                slidens6();
            }
        }
    </SCRIPT>
</head>
<body style="margin: 0px;">
<script>
    $(document).ready(function () {
        //$.fn.snow();

    });
</script>
<!--// Begin: Main Table -->
<table cellspacing="0" cellpadding="0" border="0" style="width:100%;">
    <tr>
        <td style="width:100%;">
            <!--// Begin: Header Table -->
            <table cellspacing="0" cellpadding="0" border="0" style="width:100%;">
                <tr>
                    <td id="head_str">
                        <table cellspacing="0" cellpadding="0" border="0" style="width:100%;">
                            <tr>
                                <td width="2"></td>
                                <td id="header">
                                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                                            codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
                                            id="intro" align="left" height="100%" width="100%">
                                        <param name="movie"
                                               value="http://jobsearch.az/system/templates/default/view/anime.swf">
                                        <param name="quality" value="high">
                                        <param name="scale" value="noscale">
                                        <param name="salign" value="tl"/>
                                        <param name="wmode" value="transparent">
                                        <param name="bgcolor" value="#ffffff">
                                        <embed src="http://jobsearch.az/system/templates/default/view/anime.swf"
                                               quality="high" scale="noscale" wmode="transparent" salign="tl"
                                               bgcolor="#ffffff" name="intro" type="application/x-shockwave-flash"
                                               pluginspage="http://www.macromedia.com/go/getflashplayer" height="100%"
                                               width="100%">
                                    </object>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--// End: Header Table -->
        </td>
    </tr>
    <tr>
        <td style="width:100%;">
            <table cellspacing="0" cellpadding="0" border="0" style="width:100%;">
                <tr>
                    <td id="undhead_left"><img src="{{asset('assets/img/trans_4.gif')}}"/></td>
                    <td id="undhead_str">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table cellspacing="0" cellpadding="0" border="0" style="width:100%;">
                <tr>
                    <td valign="top">
                        <table cellspacing="0" cellpadding="0" border="0" style="width:160px;height:100%">
                            <tr>
                                <td id="menu_str1">&nbsp;</td>
                                <td style="height:450px;" valign="top" class="Nav">
                                    <!--// Begin: Menus Table -->
                                    <table cellspacing="0" cellpadding="0" border="0" style="width:147px;">
                                        <tr>
                                            <td colspan="3" height="24" class="Nav"><img
                                                    src="{{asset('assets/img/blank.gif')}}" height="1" width="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" height="1" bgcolor="#FFFFFF"><img
                                                    src="{{asset('assets/img/blank.gif')}}" height="1" width="1"></td>
                                        </tr>
                                        @foreach($menu as $item)
                                        <tr>

                                            <td></td>

                                            <td height="18" class="menuBoldNav"><a class='menuNav' href="{{$item->route}}" id="link_c2"
                                                                         >{{$item->title}}</a></td>

                                            <td class="Nav">&nbsp;</td>

                                        </tr>

                                        <tr>
                                            <td colspan="3" height="1" bgcolor="#FFFFFF"><img
                                                    src="{{asset('assets/img/blank.gif')}}" height="1" width="1"></td>
                                        </tr>
                                        @endforeach


                                        <tr>
                                            <td colspan="3" style="height:10px;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="height:1px;" bgcolor="#FFFFFF"><img
                                                    src="{{asset('assets/img/blank.gif')}}" height="1" width="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" align="center">
                                                <!--LiveInternet counter-->
                                                <script type="text/javascript">
                                                    document.write("<a href='http://www.liveinternet.ru/click' " +
                                                        "target=_blank><img src='//counter.yadro.ru/hit?t27.6;r" +
                                                        escape(document.referrer) + ((typeof (screen) == "undefined") ? "" :
                                                            ";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
                                                                screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
                                                        ";" + Math.random() +
                                                        "' alt='' title='LiveInternet: показано количество просмотров и" +
                                                        " посетителей' " +
                                                        "border='0' width='88' height='120'><\/a>")
                                                </script><!--/LiveInternet-->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="height:1px;" bgcolor="#FFFFFF"><img
                                                    src="{{asset('assets/img/blank.gif')}}" height="1" width="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="height:1px;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="height:1px;" bgcolor="#FFFFFF"><img
                                                    src="{{asset('assets/img/blank.gif')}}" height="1" width="1"></td>
                                        </tr>
                                    </table>
                                    <!--// End: Menus Table -->
                                </td>
                                <td id="menu_str2">&nbsp;</td>
                            </tr>
                        </table>
                    </td>

                    <td style="width:100%; height:500px;" valign="top">
                        <!--// Begin: Center Table -->
                    @yield('content')
                    <!--// End: Center Table -->
                    </td>
                    <!--// Begin: Right Panel Table -->
                    <td valign="top">
                        <table cellspacing="0" cellpadding="0" border="0" style="width:191px;height:100%">
                            <tr>
                                <td id="rpanel_str1"></td>
                                <td style="height:450px;" valign="top" class="Nav">
                                    <table cellspacing="0" cellpadding="0" border="0" style="width:185px;">
                                        <tr>
                                            <td style="height:24px;" class="Nav" align="right">
                                                <a href="index_en.html" class="lang_text">EN</a>
                                                <a href="index_ru.html" class="lang_text">RU</a>
                                                <a href="index_az.html" class="lang_text">AZ</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="height:1px;" bgcolor="#FFFFFF"><img
                                                    src="{{asset('assets/img/blank.gif')}}" height="1" width="1"></td>
                                        </tr>


                                        <tr>
                                            <td colspan="3" style="height:1px;" bgcolor="#FFFFFF"><img
                                                    src="{{asset('assets/img/blank.gif')}}" height="1" width="1"></td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" style="height:1px;" align="center">
                                                <a href="https://getsmart.com.ua/event/motivation-level-up-ru/"
                                                   target="_blank"><img border=0
                                                                        src="{{asset('assets/img/hr_avto_120x248.gif')}}"
                                                                        width=128></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" style="height:1px;" bgcolor="#FFFFFF"><img
                                                    src="{{asset('assets/img/blank.gi')}}f" height="1" width="1"></td>
                                        </tr>

                                        <tr>
                                            <td style="height:11px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="height:1px;" bgcolor="#FFFFFF"><img
                                                    src="{{asset('assets/img/blank.gif')}}" height="1" width="1"></td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" style="height:1px;" align="center">
                                                <!--<a href="http://visionacademy.az/az/primavera-kurslari/" target="_blank"><img border=0 src="./system/templates/default/view/img/webp_net_resizeimage4.gif" width=120 height=248></a>-->
                                                <!--<a href="http://visionacademy.az/az/primavera-kurslari/" target="_blank"><img border=0 src="./system/templates/default/view/img/webp_net_resizeimage5.gif" width=120 height=248></a>-->
                                                <!--<a href="http://www.visionacademy.az/az/card/7/" target="_blank"><img border=0 src="./system/templates/default/view/img/webp_net_resizeimage6.png" width=120 height=248></a>-->
                                            </td>
                                        </tr>


                                        <tr>
                                            <td colspan="3" style="height:1px;" bgcolor="#FFFFFF"><img
                                                    src="{{asset('assets/img/blank.gif')}}" height="1" width="1"></td>
                                        </tr>

                                        <tr>
                                            <td style="height:11px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td style="height:24px;" class="Nav" align="center">
                                                <iframe
                                                    src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FJobSearchaz%2F141439299232477&amp;width=168&amp;connections=8&amp;stream=false&amp;header=false&amp;height=255"
                                                    scrolling="no" frameborder="0"
                                                    style="border:none; overflow:hidden; width:168px; height:255px;background-color:#FFFFFF;"
                                                    allowTransparency="true"></iframe>
                                            </td>
                                        </tr>


                                    </table>
                                </td>
                                <td id="rpanel_str2">&nbsp;</td>
                            </tr>
                        </table>
                        <!--// End: Right Panel Table -->
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="width:100%;">
            <!--// Begin: Footer Table -->
            <table cellspacing="0" cellpadding="0" border="0" style="width:100%;">
                <tr>
                    <td id="foot_left"><img src="{{asset('assets/img/trans_4.gif')}}"/>
                        <!--mernik counter start-->
                        <span id='Mernik_Image'></span>
                        <script type='text/javascript'>
                            var SID = 145;
                            (function () {
                                var t = 'text/javascript', h, s, u, d = document, l = 'http://az1s.countby.com/code.js';

                                try {
                                    h = d.getElementsByTagName('head')[0];
                                    s = d.createElement('script');
                                    s.src = l;
                                    s.type = t;
                                    h.appendChild(s);
                                } catch (e) {
                                    u = '%3Cscript%20src="' + l + '"%20type="' + t + '"%3E%3C/script%3E';
                                    d.write(unescape(u));
                                }
                            })();
                        </script>
                        <noscript>
                            <a target='_top' href='http://www.day.az/'><img src='http://az1c.countby.com/cnt?id=145'
                                                                            border='0' alt=''/></a>
                        </noscript>
                        <!--mernik counter end-->
                    </td>
                    <td id="foot_str" class="white_text" align="right">&#169; Copyright 2006&mdash;2021 www.JobSearch.az
                        &nbsp;<br/> Developed by <a href="http://www.microphp.com?jobsearch.az" class="white_text">MicroPHP</a>
                        &nbsp;
                        <br>&nbsp;
                    </td>
                    <td id="foot_right"><img src="{{asset('assets/img/trans_4.gif')}}"/></td>
                </tr>
            </table>
            <!--// End: Footer Table -->
        </td>
    </tr>
</table>
<!--// End: Main Table -->

</body>
