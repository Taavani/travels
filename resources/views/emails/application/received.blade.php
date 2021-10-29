<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
<style>
    @media only screen and (max-width: 600px) {
        .inner-body {
            width: 100% !important;
        }

        .footer {
            width: 100% !important;
        }
    }

    @media only screen and (max-width: 500px) {
        .button {
            width: 100% !important;
        }
    }

    body {
        -webkit-text-size-adjust: none;
        background-color: #ffffff;
        color: #000000;
        height: 100%;
        line-height: 1.15;
        font-size: 16px;
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        width: 100% !important;
    }

    h1 {
        font-weight: 200;
        text-align: center;
    }

    h2 {
        text-align: center;
    }

    p {
        text-align: center;
    }

    .brand {
        font-family: "Relaway", sans-serif;
        color: #00b4f1;
        text-align: center;
    }

    .header {
        padding: 25px 0;
        text-align: center;

    }
</style>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
        <td align="center">
            <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                    <td class="body" width="100%" cellpadding="0" cellspacing="0">
                        <h1>Hello {{ $name }}</h1>

                        <p>Thank you for your inquiry.</p>

                        <p>Your reference number is <span style="font-style: italic">{{ $ref }}</span>.</p>

                        <p>
                            We will contact you as soon as possible and help you find your perfect
                            Greenlandic adventure.
                        </p>

                        <p>
                            If you have any follow-up questions just email us by replying to this
                            email.
                        </p>

                        <p>
                            Thanks,<br>
                            <div class="brand">#TravelsToGreenland</div>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
