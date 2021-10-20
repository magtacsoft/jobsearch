@extends('resources.views.layouts.app')
@section('content')
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
                <table cellspacing="2" cellpadding="2" border="0" style="width:100%;">
                    <tbody><tr>
                        <td class="table_text">{!! $data->text !!}</td>
                    </tr>
                    <tr>
                        <td style="height:1px;"></td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                    </tr>
                    </tbody></table>
            </td>
        </tr>
        </tbody></table>
@endsection
