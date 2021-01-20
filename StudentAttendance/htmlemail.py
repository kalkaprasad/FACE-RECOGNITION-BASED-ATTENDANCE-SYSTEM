import smtplib, ssl
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

def sendemail(useremail,userpassword):

    sender_email = "Enter Your Email Id "
    receiver_email = useremail
    password ="Enter Your Password"

    message = MIMEMultipart("alternative")
    message["Subject"] = "Login credentials For DashBoard"
    message["From"] = sender_email
    message["To"] = receiver_email

    # Create the plain-text and HTML version of your message
    text = """\
    Hi,
    How are you?
    Real Python has many great tutorials:
    www.realpython.com"""
    html = """
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width" />
       <link rel="stylesheet"href="http://kalkaprasad.com/emailcs.css" type="text/css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sbs College</title>
      
    </head>
    
    <body bgcolor="#ffffff">
    
      <div align="center">
        <table class="head-wrap w320 full-width-gmail-android" bgcolor="#f9f8f8" cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td background="https://www.filepicker.io/api/file/UOesoVZTFObSHCgUDygC" bgcolor="#ffffff" width="100%" height="8" valign="top">
              <!--[if gte mso 9]>
              <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;height:8px;">
                <v:fill type="tile" src="https://www.filepicker.io/api/file/UOesoVZTFObSHCgUDygC" color="#ffffff" />
                <v:textbox inset="0,0,0,0">
              <![endif]-->
              <div height="8">
              </div>
              <!--[if gte mso 9]>
                </v:textbox>
              </v:rect>
              <![endif]-->
            </td>
          </tr>
          <tr class="header-background">
            <td class="header container" align="center">
              <div class="content">
                <span class="brand">
                  <a href="#">
                    Sbsstc Ferojpur punjab
                  </a>
                </span>
              </div>
            </td>
          </tr>
        </table>
    
        <table class="body-wrap w320">
          <tr>
            <td></td>
            <td class="container">
              <div class="content">
                <table cellspacing="0">
                  <tr>
                    <td>
                      <table class="soapbox">
                        <tr>
                          <td class="soapbox-title">Your Dashboard Login Credintials ! Never Share Your Details to Other . </td>
                        </tr>
                      </table>
                      <table class="status-container single">
                        <tr>
                          <td class="status-padding"></td>
                          <td>
                            <table class="status" bgcolor="#fffeea" cellspacing="0">
                              <tr>
                                <td class="status-cell">
                                  Email: <b>{}</b>
                                </td>
                                
                              </tr>
                              <tr>
    
                                <td class="status-cell">
                                    Password: <b>{}</b>
                                  </td>
                              </tr>
                            </table>
                          </td>
                          <td class="status-padding"></td>
                        </tr>
                      </table>
                      <table class="body">
                        <tr>
                          <td class="body-padding"></td>
                          <td class="body-padded">
                            <div class="body-title">Instructions.</div>
                            <table class="body-text">
                              <tr>
                                <td class="body-text-cell">
                                 1. Click on given Button.<br>
                                 2. After Clicked  below buttton you will  landed into new Page  and Fill  here your Credintials and Your Category.
                                 3. Never Forget To Logout after use.
    
                                </td>
                              </tr>
                            </table>
    
                            <div><!--[if mso]>
                                <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:38px;v-text-anchor:middle;width:210px;" arcsize="10%" strokecolor="#407429" fill="t">
                                <v:fill type="tile" src="https://www.filepicker.io/api/file/N8GiNGsmT6mK6ORk00S7" color="#41CC00" />
                                <w:anchorlock/>
                                <center style="color:#ffffff;font-family:sans-serif;font-size:17px;font-weight:bold;">Add more info here</center>
                              </v:roundrect>
                            <![endif]--><a href="http://sbsproject.kalkaprasad.com/index.php"
                            style="background-color:#41CC00;background-image:url(https://www.filepicker.io/api/file/N8GiNGsmT6mK6ORk00S7);border:1px solid #407429;border-radius:4px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:17px;font-weight:bold;line-height:38px;text-align:center;text-decoration:none;width:210px;-webkit-text-size-adjust:none;mso-hide:all;">Login</a></div>
    
                            <table class="body-signature-block">
                              <tr>
                                <td class="body-signature-cell">
                                  <p>Sbsstc Ferojpur punjab,Developed by B.tech cse 2017 Batch students A Group.</p>
                                  <p class="body-signature"><img src="http://www.sbsstc.ac.in/IMGs/LogoWG.png"height="90px" width="90px" alt="kalkaprasad"></p>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td class="body-padding"></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
            <td></td>
          </tr>
        </table>
    
        <table class="footer-wrap w320 full-width-gmail-android" bgcolor="#e5e5e5">
          <tr>
            <td>
              <div class="content footer-lead">
                <a href="#"><b>Get in touch</b></a> if you have any questions or feedback
              </div>
            </td>
          </tr>
        </table>
        <table class="footer-wrap w320 full-width-gmail-android" bgcolor="#e5e5e5">
          <tr>
            <td>
              <div class="content">
                <a href="www.kalkaprasad.com">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <span class="footer-group">
                  <a href="https://www.linkedin.com/in/kalkaprasad/">Linkdin</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                  <a href="https://github.com/kalkaprasad/">Github</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                  <a href="#">kalkaprasad59@gmail.com</a>
                </span>
              </div>
            </td>
          </tr>
        </table>
      </div>
       <link rel="stylesheet"href="http://kalkaprasad.com/emailcs.css" type="text/css">
    </body>
       <link rel="stylesheet"href="http://kalkaprasad.com/emailcs.css" type="text/css">
    </html>
    """.format(useremail,userpassword)

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
