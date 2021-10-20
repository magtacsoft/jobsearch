@extends('layouts.app')
@section('content')
        <!--// Begin: Center Table -->
        <table cellspacing="0" cellpadding="0" border="0" style="width:100%;">
            <tbody><tr>
                <td style="width:100%;" valign="top">
                    <table cellspacing="0" cellpadding="0" border="0" style="width:100%;">
                        <tbody><tr>
                            <td id="tableup_img" valign="bottom"><img src="{{asset('assets/img/trans_23.gif')}}"></td>
                            <td id="tableup_str" class="tableup_text" align="left" valign="bottom">{{$data->title}}</td>

                        </tr>
                        <tr>
                            <td colspan="2" style="height:20px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <!--// Begin: Text List Table -->
                                <table cellpadding="0" cellspacing="0" style="width:100%;height:100%" border="0" align="center">
                                    <tbody><tr>
                                        <td colspan="3" id="txttable_str"></td>
                                    </tr>
                                    <tr>

{{--                                       {{dd($vacancy)}}--}}
                                        <td id="txttable_td"><img src="{{asset('assets/img/1x1.gif')}}"></td>
                                        <td style="height:10px;"><table cellpadding="2" cellspacing="2" border="0" style="width:100%">
                                                <tbody><tr>
                                                    <td colspan="4" bgcolor="#f2f2f2" height="21" class="text"><span class="title">JOB TITLE:</span>
                                                        {{$data->title}}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" bgcolor="#f2f2f2" height="21" class="text"><span class="title">EMPLOYER:</span> {{$data->employer}}</td>
                                                    <td colspan="2" bgcolor="#f2f2f2" height="21" class="text"><span class="title">DUTY STATION:</span> {{$data->location}}</td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#f2f2f2" height="21" class="text"><span class="title">PUBLISHED:</span>{{$data->published}} </td>
                                                    <td colspan="2" bgcolor="#f2f2f2" height="21" class="text"><span class="title">LAST UPDATED:</span>
                                                        {{$data->updated}} </td>
                                                    <td bgcolor="#f2f2f2" height="21" class="text"><span class="title">DEADLINE:</span> {{$data->deadline}}</td>
                                                </tr>
                                                </tbody></table></td>
                                        <td id="txttable_td"><img src="{{asset('assets/img/1x1.gif')}}"></td>
                                    </tr><tr>
                                        <td colspan="3" id="txttable_str"></td>
                                    </tr>
                                    <tr>
                                        <td id="txttable_td"><img src="{{asset('assets/img/1x1.gif')}}"></td>
                                        <td class="text"><table cellpadding="2" cellspacing="2">
                                                <tbody><tr>
                                                    <td class="text">
                                                        <p><img src="img" border="0" align="center"></p>
                                                                        {!! $data->text !!}
                                                    </td>
                                                </tr>
                                                </tbody></table></td>
                                        <td id="txttable_td"><img src="{{asset('assets/img/1x1.gif')}}" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" id="txttable_str"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" align="center"><table cellpadding="2" cellspacing="2" border="0" style="width:100%">
                                                <tbody><tr>
                                                    <td width="33%"></td>
                                                    <td width="34%" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:100%">
                                                            <tbody><tr>
                                                                <td align="right" valign="middle"><a href="{{route('jobs')}}"><img src="{{asset('assets/img/back.gif')}}" style="border:0px"></a></td>
                                                                <td style="width:5px"></td>
                                                                <td align="left" valign="middle"><a href="{{route('jobs')}}" class="foot_link">Go back to Hot Vacancies</a></td>
                                                            </tr>
                                                            </tbody></table></td>
                                                    <td width="33%"></td>
                                                </tr>
                                                </tbody></table></td>
                                    </tr>
                                    </tbody></table>
                                <br>
                                <!--// End: Text List Table -->
                            </td>
                        </tr>
                        </tbody></table>
                </td>

                <td style="height: 15px"><img src="  {{asset('assets/img/trans_15.gif')}}"></td>
            </tr>
            </tbody></table>
        <!--// End: Center Table -->
@endsection
