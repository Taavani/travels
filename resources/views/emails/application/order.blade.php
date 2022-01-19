<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
                    <td class="header">
                        <a href="{{ $url }}" style="display: inline-block;">
                            {{ $appTitle}}
                        </a>
                    </td>
                </tr>

                <!-- Email Body -->
                <tr>
                    <td class="body" width="100%" cellpadding="0" cellspacing="0">
                        <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">

                            <tr>
                                <td class="header">
                                    <a href="{{ $url }}" style="display: inline-block;">
                                        <h2>New inquiry</h2>
                                    </a>
                                </td>
                            </tr>

                            <!-- Body content -->
                            <tr>
                                <td class="content-cell">

                                    <p>
                                        There is a new inquiry with reference: <span style="font-style: italic">{{ $ref }}</span>.
                                    </p>

                                    <div class="table">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Values</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td>{{ $name }}</td>
                                            </tr>
                                            <tr>
                                                <td>E-mail</td>
                                                <td>{{ $email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone</td>
                                                <td>{{ $phone }}</td>
                                            </tr>
                                            <tr>
                                                <td>Message</td>
                                                <td>{{ $message }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </td>
                            </tr>

                            <!-- Footer -->
                            <tr>
                                <td>
                                    <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                        <tr>
                                            <td class="content-cell" align="center">
                                                © {{ $year }} <span class="brand">#TravelsToGreenland</span>. {{ $allRights }}
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>






