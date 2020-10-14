<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
<table cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>
            <table align="center" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #ccc;">
                <tr>
                    <td bgcolor="#e4e4e4" style="padding: 40px 30px 40px 30px;">
                        <table cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                            <tr>
                                <td align="center" style="padding: 0 0 20px 0; font-family: Arial, sans-serif; font-weight: 500; font-size: 20px;">
                                    Здравствуйте {{ $manager->name }}. Поступило сообщение.
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="font-family: Arial, sans-serif; font-size: 18px; font-weight: 500;">
                                    <p>Тема сообщения: <b>{{ $topic->topic }}</b></p>
                                    <p>Текст сообщения: <b>{{ $topic->message }}</b></p>
                                    <p>Дата отправки: <b>{{ $topic->created_at->format('H:i Y.m.d') }}</b></p>
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
