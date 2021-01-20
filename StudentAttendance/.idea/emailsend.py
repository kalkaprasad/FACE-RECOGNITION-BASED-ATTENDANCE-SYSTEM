import smtplib as s
ob=s.SMTP("smtp.gmail.com","587")
ob.starttls()

ob.login("connectkalka@gmail.com","kalkahacker786786@")
subject="Login Credintials For Login You Dashboard"
body=" This Message are Very important for Pannel Login Credintials ,Please not that email and password"
message="Subject:{}\n\n{}".format(subject,body)
listofaddress=["kalkaprasad59@gmail.com"]
status= ob.sendmail("sbs@kalkaprasad.com",listofaddress,message)
print("MEssage send")
