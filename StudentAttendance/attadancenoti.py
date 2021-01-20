import smtplib, ssl
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart


def attadancenotif(aa,reciver,Id,date,timeStamp):
    sender_email = "Enter Your Email"
    receiver_email = reciver
    password = "Enter Your Password"
    message = MIMEMultipart("alternative")
    message["Subject"] = "Attadance taken Successfully|| Check Your  DashBoard"
    message["From"] = sender_email
    message["To"] = receiver_email

    # Create the plain-text and HTML version of your message
    text = """\
    Hi,
    How are you?
    Real Python has many great tutorials:
    www.realpython.com"""
    html = """
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=320, initial-scale=1" />
  <link rel="stylesheet" href="http://kalkaprasad.com/attandancecss.css" type="text/css">
  <title>Attandance Taken Successfully</title>
  

</head>
<body style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
 <td valign="top" align="left" width="100%" style="background:repeat-x url(https://www.filepicker.io/api/file/al80sTOMSEi5bKdmCgp2) #f9f8f8;">
 <center>

   <table class="w320 full-width-gmail-android" bgcolor="#f9f8f8" background="https://www.filepicker.io/api/file/al80sTOMSEi5bKdmCgp2" style="background-color:transparent" cellpadding="0" cellspacing="0" border="0" width="100%">
      <tr>
        <td width="100%" height="48" valign="top">
            <!--[if gte mso 9]>
            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;height:49px;">
              <v:fill type="tile" src="https://www.filepicker.io/api/file/al80sTOMSEi5bKdmCgp2" color="#ffffff" />
              <v:textbox inset="0,0,0,0">
            <![endif]-->
              <table class="full-width-gmail-android" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                  <td class="header center" width="100%">
                    <a href="#">
                      Sbsstc FErojpur Punjab 
                    </a>
                  </td>
                </tr>
              </table>
            <!--[if gte mso 9]>
              </v:textbox>
            </v:rect>
            <![endif]-->
        </td>
      </tr>
    </table>

    <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff">
      <tr>
        <td align="center">
          <center>
            <table class="w320" cellspacing="0" cellpadding="0" width="500">
              <tr>
                <td class="body-padding mobile-padding">

                <table cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                    <td style="text-align:center; font-size:30px; padding-bottom:20px;">
                      Your Attandance Take Successfully.
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom:20px;">
                      Hello {}, <br>
                      <br>
                      We want to inform  you  that your Attandance taken Successfully! To view your Attandance Informtion  please click login button which are given below.<br>
                      <br>
                      <b><a class="blue-link" href="#">Login</a></b>
                    </td>
                  </tr>
                </table>

                <table cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                    <td class="left" style="padding-bottom:20px; text-align:left;">
                    ID :{}<br>
                      Date: {} <br>
                      <b>time</b>{}
                    </td>
                  </tr>
                </table>

                <table cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                    <td>
                      <b>Attandance Date</b>
                    </td>
                    <td>
                      
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom" height="5"></td>
                    <td class="border-bottom" height="5"></td>
                  </tr>
                  <tr>
                    <td style="padding-top:5px; vertical-align:top;">
                     {}
                    </td>
                   
                  </tr>
                </table>

                <table cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                    <td class="mobile-center" align="left" style="padding:40px 0;">
                      <div class="mobile-center" align="left"><!--[if mso]>
                          <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:38px;v-text-anchor:middle;width:190px;" arcsize="11%" strokecolor="#407429" fill="t">
                            <v:fill type="tile" src="https://www.filepicker.io/api/file/N8GiNGsmT6mK6ORk00S7" color="#41CC00" />
                            <w:anchorlock/>
                            <center style="color:#ffffff;font-family:sans-serif;font-size:17px;font-weight:bold;">My Order</center>
                          </v:roundrect>
                        <![endif]--><a href="sbsproject.kalkaprasad.com/"
                        style="background-color:#41CC00;background-image:url(https://www.filepicker.io/api/file/N8GiNGsmT6mK6ORk00S7);border:1px solid #407429;border-radius:4px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:17px;font-weight:bold;text-shadow: -1px -1px #47A54B;line-height:37px;text-align:center;text-decoration:none;width:190px;-webkit-text-size-adjust:none;mso-hide:all;">Login</a></div>
                    </td>
                  </tr>
                </table>

                <table cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                    <td class="left" style="text-align:left;">
                      Project Created by Sbsstc students Batch 2017 Group A.
                    </td>
                  </tr>
                  <tr>
                    <td class="left" width="129" height="20" style="padding-top:10px; text-align:left;">
                      <img class="left" width="90" height="90" src="http://www.sbsstc.ac.in/IMGs/LogoWG.png" alt="Company Name">
                    </td>
                  </tr>
                </table>

                </td>
              </tr>
            </table>
          </center>
        </td>
      </tr>
    </table>

    <table class="w320" bgcolor="#E5E5E5" cellpadding="0" cellspacing="0" border="0" width="100%">
      <tr>
        <td style="border-top:1px solid #B3B3B3;" align="center">
          <center>
            <table class="w320" cellspacing="0" cellpadding="0" width="500" bgcolor="#E5E5E5">
              <tr>
                <td>
                  <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#E5E5E5">
                    <tr>
                      <td class="center" style="padding:25px; text-align:center;">
                        <b><a href="#">Get in touch</a></b> if you have any questions or feedback
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </center>
        </td>
      </tr>
      <tr>
        <td style="border-top:1px solid #B3B3B3; border-bottom:1px solid #B3B3B3;" align="center">
          <center>
            <table class="w320" cellspacing="0" cellpadding="0" width="500" bgcolor="#E5E5E5">
              <tr>
                <td align="center" style="padding:25px; text-align:center">
                  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#E5E5E5">
                    <tr>
                      <td class="center footer" style="font-size:12px;">
                        <a href="#">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <span class="footer-group">
                          <a href="#">Facebook</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                          <a href="#">Twitter</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                          <a href="#">Support</a>
                        </span>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </center>
        </td>
      </tr>
    </table>

  </center>
  </td>
</tr>
</table>
</body>
</html>
    """.format(aa,Id,date,timeStamp,date)

    # Turn these into plain/html MIMEText objects
    part1 = MIMEText(text, "plain")
    part2 = MIMEText(html, "html")

    # Add HTML/plain-text parts to MIMEMultipart message
    # The email client will try to render the last part first
    message.attach(part1)
    message.attach(part2)

    # Create secure connection with server and send email
    context = ssl.create_default_context()
    with smtplib.SMTP_SSL("smtp.gmail.com", 465, context=context) as server:
        server.login(sender_email, password)
        server.sendmail(
            sender_email, receiver_email, message.as_string()
        )
