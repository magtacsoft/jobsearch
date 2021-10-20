@extends('layouts.app')
@section('content')

    <table cellspacing="0" cellpadding="0" border="0" style="width:100%;">
        <tr>
            <td style="width:100%;" valign="top">
                <table cellspacing="0" cellpadding="0" border="0" style="width:100%;">
                    <tr>
                        <td id="tableup_img" valign="bottom"><img src="{{asset('assets/img/trans_23.gif')}}"/></td>
                        <td id="tableup_str" class="tableup_text" align="left" valign="bottom">{{$page['title']}}</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height:10px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <!--// Begin: Text List Table -->

                            <table cellspacing="0" cellpadding="0" border="0" style="width:100%;" class="hotvac">
                                <tr bgcolor="#3b5e84">
                                    <td width="41%;" class="vacheader_text"><a href="order0_1_en.html"
                                                                               class="vacheader_text">&nbsp;&nbsp;POSITION</a>
                                    </td>
                                    <td width="33%;" class="vacheader_text"><a href="order1_1_en.html"
                                                                               class="vacheader_text">&nbsp;&nbsp;EMPLOYER</a>
                                    </td>
                                    <td width="13%;" class="vacheader_text"><a href="order2_1_en.html"
                                                                               class="vacheader_text"><img
                                                src="{{asset('assets/img/order_2.gif')}}" border="0"/>&nbsp;POSTED</a>
                                    </td>
                                    <td width="13%;" class="vacheader_text"><a href="order3_1_en.html"
                                                                               class="vacheader_text">&nbsp;&nbsp;DEADLINE</a>
                                    </td>
                                </tr>

                                @foreach($data as $item)
                                <tr onmouseover="this.style.backgroundColor='#f2f2f2';"
                                    onmouseout="this.style.backgroundColor='#ffffff';"
                                    style="background-color: rgb(255, 255, 255);">

                                    <td class="hotv_text"><a href="{{route('read', [$item->id])}}" class="hotv_text">{{$item->title}}</a><a
                                            href="vacancies72354_en.html" target="_blank"><img
                                                src="{{asset('assets/img/newwindow.gif')}}" border="0"></a>&nbsp;<sup
                                            style="color:red;">(new)</sup></td>
                                    <td class="hotv_text">&nbsp;{{$item->employer}}</td>
                                    <td class="date_text" align="center">{{$item->published}}</td>
                                    <td class="date_text" align="center">{{$item->deadline}}</td>
                                </tr>

                                @endforeach

                            </table>
                            <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                            <!--// End: Text List Table -->
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height:10px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
            <td style='15px'><img src="{{asset('assets/img/trans_15.gif')}}"/></td>
        </tr>
    </table>
@endsection
