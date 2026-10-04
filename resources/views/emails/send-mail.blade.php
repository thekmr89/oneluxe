<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oneluxe</title>
    <style>
        body {
, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
        }
        .header {
            background-color: #000000;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            padding: 20px;
            color: #333333;
        }
        .content h1 {
            font-size: 18px;
            color: #333333;
        }
        .content p {
            font-size: 16px;
            color: #333333;
            line-height: 1.5;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #000000;
            color: #ffffff;
            font-size: 14px;
        }
        .contact-details {
            margin-top: 20px;
        }
        .contact-details a {
            color: #007bff;
            text-decoration: none;
        }
        .contact-details a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{asset('images/logo/Oneluxe_Logo.png')}}" alt="distinct destinations logo">
        </div>
        <div class="content">
            <h1>Hi {{$details['name']}},</h1>
            <p>Thank you for contacting us. We'll contact you within 24 working hours. Meantime, please keep exploring exciting destinations & services.</p>
            <p>Warm Regards,</p>
            <p>Team Oneluxe </p>
            <div class="contact-details">
                <p>Contact details: <a href="tel:+919971466955">+91 9599-360-800</a></p>
                <p>Email: <a href="mailto:info@distinctdestinations.in">info@oneluxe.in</a></p>
            </div>
        </div>
        <div class="footer">
            <p>{{ \Carbon\Carbon::now()->year }} &copy; Oneluxe. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>