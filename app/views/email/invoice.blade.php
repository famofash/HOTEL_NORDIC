@extends("email.index") 
@section("body")
<table bgcolor="#FFFFFF" cellspacing="0" cellpadding="10" border="0" width="650" style="border:1px solid #e0e0e0">
            <tbody>
        
            <tr>
                <td valign="top">
                    <h1 style="font-size:22px;font-weight:normal;line-height:22px;margin:0 0 11px 0">Hello, {{$name}}</h1>
                    <p style="font-size:12px;line-height:16px;margin:0">
                        Thank you for your Booking with Nordic Hospitality Suites.
                       
                        If you have any questions about your booking please contact us at <a href="mailto:info@nordichospitalitysuites.com" style="color:#1e7ec8" target="_blank">info@nordichospitalitysuites.com</a> or call us at <span>+2347080266555</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <h2 style="font-size:18px;font-weight:normal;margin:0">Your <span class="il">Invoice</span> #{{$invoice_no}}</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <table cellspacing="0" cellpadding="0" border="0" width="650">
                        <thead>
                            <tr>
                                <th align="left" width="325" bgcolor="#EAEAEA" style="font-size:13px;padding:5px 9px 6px 9px;line-height:1em">Billing Information:</th>
                                <th width="10"></th>
                                <th align="left" width="325" bgcolor="#EAEAEA" style="font-size:13px;padding:5px 9px 6px 9px;line-height:1em">Payment Method:</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td valign="top" style="font-size:12px;padding:7px 9px 9px 9px;border-left:1px solid #eaeaea;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea">
                                {{$name}}<br>

                                {{$address}}<br>
                                T: {{$phone}}


                            </td>
                            <td>&nbsp;</td>
                            <td valign="top" style="font-size:12px;padding:7px 9px 9px 9px;border-left:1px solid #eaeaea;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea">
                                <p><strong> {{$payment_method}}</strong></p>



                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                   
                    <table cellspacing="0" cellpadding="0" border="0" width="650" style="border:1px solid #eaeaea">
    <thead>
        <tr>
            <th align="left" bgcolor="#EAEAEA" style="font-size:13px;padding:3px 9px">Room</th>
            <th align="left" bgcolor="#EAEAEA" style="font-size:13px;padding:3px 9px">Reference No</th>
            <th align="center" bgcolor="#EAEAEA" style="font-size:13px;padding:3px 9px">Day(s)</th>
            <th align="right" bgcolor="#EAEAEA" style="font-size:13px;padding:3px 9px">Subtotal</th>
        </tr>
    </thead>

            <tbody bgcolor="#F6F6F6">
        <tr>
    <td align="left" valign="top" style="padding:3px 9px;border-bottom:1px dotted #cccccc">
        <strong style="font-size:11px"> {{$description}}</strong>
               
                                                        </td>
    <td align="left" valign="top" style="font-size:11px;padding:3px 9px;border-bottom:1px dotted #cccccc">{{$ref_no}}</td>
    <td align="center" valign="top" style="font-size:11px;padding:3px 9px;border-bottom:1px dotted #cccccc"> {{$days}}</td>
    <td align="right" valign="top" style="font-size:11px;padding:3px 9px;border-bottom:1px dotted #cccccc">
                                                <span>{{$subtotal}}</span>            

                    

            </td>
</tr>
    </tbody>
        
    <tfoot>
                <tr>
        <td colspan="3" align="right" style="padding:3px 9px">
                        Subtotal                    </td>
        <td align="right" style="padding:3px 9px">
                        <span>{{$subtotal}}</span>                    </td>
    </tr>
            <tr>
        <td colspan="3" align="right" style="padding:3px 9px">
                        <strong>Grand Total</strong>
                    </td>
        <td align="right" style="padding:3px 9px">
                        <strong><span>{{$total}}</span></strong>
                    </td>
    </tr>
        </tfoot>
</table>

                    <p style="font-size:12px;margin:0 10px 10px 0"></p>
                </td>
            </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center" style="background:#eaeaea;text-align:center"><center><p style="font-size:12px;margin:0">Thank you again</p></center></td>
            </tr>
        </tbody></table>
@stop