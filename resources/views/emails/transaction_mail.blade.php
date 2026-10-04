
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank You for Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #ffffff;
, sans-serif;
        }
        table {
            border-collapse: collapse;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            border: 1px solid #ddd;
            background-color: #f5f5f5;
        }
        .header {
            background-color: #000;
            padding: 20px;
            text-align: center;
        }
        .header img {
            max-width: 200px;
            height: auto;
        }
        .content {
            padding: 20px;
            background-color: #fff;
            color: #000;
        }
        .footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            font-size: 13px;
            padding: 10px;
        }
        .bold {
            font-weight: bold;
        }
        .highlight {
            color: #0000ee;
            font-weight: bold;
        }
        a {
            color: #0000ee;
            text-decoration: none;
        }
        @media screen and (max-width: 600px) {
            .content, .header, .footer {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <table width="100%" class="email-container">
        <tr>
            <td class="header">
                <img src="{{asset('images/logo/logo_far_and_beyond.png')}}" alt="Far and Beyond Logo">
            </td>
        </tr>
        <tr>
            <td class="content">
                <p>Hi <strong>{{$data['name']}}</strong>,</p>

                <p><span class="bold">Transaction ID :-</span> {{$data['order_id']}}</p>
                <p><span class="bold">Transaction Status :-</span> Success</p>

                <p>Warm Regards,</p>

                <p><strong>Team  Far And Beyond </strong><br>
                Support: <a href="tel:+919818401791">+91 9818-401-791</a>,
                         <a href="tel:+919971466955">+91 9971-466-955</a><br>
                Email: <a href="mailto:info@info@farandbeyond.in">info@farandbeyond.in</a></p>
            </td>
        </tr>
        <tr>
            <td class="footer">
                {{ \Carbon\Carbon::now()->year }} © Far And Beyond All Rights Reserved.
            </td>
        </tr>
    </table>
</body>
</html>