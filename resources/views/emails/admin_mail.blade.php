<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Visitor Details</title>
    <style>
        body {
, sans-serif;
            margin: 30px;
            background-color: #ffffff;
        }
        .header {
            background-color: black;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            font-size: 18px;
            letter-spacing: 2px;
        }
        .content {
            padding: 30px 20px;
        }
        .label {
            width: 180px;
            display: inline-block;
            vertical-align: top;
        }
        .value {
            display: inline-block;
        }
        .row {
            margin-bottom: 12px;
        }
        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-weight: bold;
            font-size: 16px;
            margin-top: 40px;
            letter-spacing: 2px;
        }
        a {
            color: #0000ee;
            text-decoration: underline;
        }
        .main{
            border: 1px solid #ccad45;
            padding-top: 21px;
            padding-bottom: 21px;
        }
        .footer a{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
 <div class="main">
    <div class="header">PAYMENT : VISITOR DETAILS</div>

    <div class="content">
        <p>Dear Sir/Mam,</p>

        <div class="row"><span class="label">Full Name</span>: <span class="value">{{$data['name']}} </span></div>
        <div class="row"><span class="label">Email ID</span>: <span class="value"><a href="mailto:{{$data['customer_email']}}">{{$data['customer_email']}}</a></span></div>
        <div class="row"><span class="label">Mobile Number</span>: <span class="value">{{$data['customer_phone']}}</span></div>
        <div class="row"><span class="label">Currency</span>: <span class="value">{{$data['currency']}}</span></div>
        <div class="row"><span class="label">Amount</span>: <span class="value">{{$data['amount']}}</span></div>
        <div class="row"><span class="label">TransactionID</span>: <span class="value">{{$data['order_id']}}</span></div>
        <div class="row"><span class="label">Transaction Status</span>: <span class="value">success</span></div>
        <div class="row"><span class="label">Message/remarks</span>: <span class="value">{{$data['description']}}</span></div>

        <br>
        <p>Warm Regards,<br>{{$data['name']}}</p>
    </div>

    <div class="footer"><a href="https://farandbeyond.in/">www.farandbeyond.in</a></div>
    </div>
</body>
</html>
