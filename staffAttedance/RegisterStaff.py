import tkinter as tk
from  tkinter import *
import  requests
from tkinter import messagebox
from datetime import date
import  random
from  tkinter import ttk
from StudentAttendance.htmlemail import sendemail as reginotif
from  staffAttedance.checkconnection import connect as net
import StudentAttendance.htmlemail as sentreginoti
import mysql.connector
import tkinter.messagebox as m
from operator import itemgetter



window = tk.Tk()
window.title("Shaheed Bhagat Singh State technical Campus B.tech CSE 2017-2021")
mycolor2 = '#075476'  # or use hex if you prefer
p1 = tk.PhotoImage(file='sbsicon.png')

# Setting icon of master window
window.iconphoto(False, p1)
window.configure(background=mycolor2)
window.geometry('1280x670')

window.title("Student Registration")
netcon= net() # this check the internet Connection
if(netcon==False):
    mstatus = messagebox.showerror("No connection", "No Internet Connected")
    print(mstatus)
    if (mstatus =="ok"):
        window.destroy()

url = 'http://sbsproject.kalkaprasad.com/index.php/Api/staffdetails'
lbl = tk.Label(window, text="Face Recognition Based Attendance System", bg="white", fg="black", width=50, height=3, font=('times', 30, 'italic bold'))
lbl.place(x=50, y=20)

# this is for name
rollno = tk.Label(window, text=" Enter ID", width=20 , height=2 , fg="black" , bg="white", font=('times', 15, ' bold ') )
rollno.place(x=200, y=200)

rollnotxt1 = tk.Entry(window, width=20, bg="white", fg="black", font=('times', 15, ' bold '))
rollnotxt1.place(x=500, y=215)
# this is for the name

name = tk.Label(window, text="Enter Name", width=20 , fg="black", bg="white", height=2, font=('times', 15, ' bold '))
name.place(x=200, y=300)

nametxt2 = tk.Entry(window, width=20, bg="white", fg="black", font=('times', 15, ' bold ')  )
nametxt2.place(x=500, y=315)

email = tk.Label(window, text="Enter Email ", width=20 , fg="black", bg="white", height=2, font=('times', 15, ' bold '))
email.place(x=200, y=400)

emailtxt2 = tk.Entry(window, width=20, bg="white", fg="black", font=('times', 15, ' bold ')  )
emailtxt2.place(x=500, y=415)

phone = tk.Label(window, text="Enter Phone ", width=20 , fg="black", bg="white", height=2, font=('times', 15, ' bold '))
phone.place(x=200, y=500)

phonetxt2 = tk.Entry(window, width=20, bg="white", fg="black", font=('times', 15, ' bold ')  )
phonetxt2.place(x=500, y=515)
#
# fatheremail = tk.Label(window, text="Category ", width=20 , fg="black", bg="white", height=2, font=('times', 15, ' bold '))
# fatheremail.place(x=200, y=600)
#
# fatheremailtxt2 = tk.Entry(window, width=20, bg="white", fg="black", font=('times', 15, ' bold ')  )
# fatheremailtxt2.place(x=500, y=615)
optns= StringVar()
# comboExample = ttk.Combobox(tk,
#                             values=[
#                                     "January",
#                                     "February",
#                                     "March",
#                                     "April"])
# comboExample.grid(column=0, row=1)
# comboExample.current(1)

# mycombo=ttk.Combobox(window,textvariable=optns,width=30,height=20)
# mycombo['values']=['Select Category','Teacher','other Staff']
# mycombo.pack(padx=30,pady=30)
# mycombo.place(x=500, y=615)
# mycombo.current(0)
# print(mycombo.current())

# goToLogin = Button(window,text="Login",fg='green',font = "Verdana 10 bold")
# goToLogin.place(x=120,y=200)



goToRegister = Button(window,text="Register",fg='black',font = "Verdana 10 bold",command=lambda:studentdata())
goToRegister.place(x=800,y=400)

def studentdata():
    if(str(rollnotxt1.get())==""):
        alertbox()
    elif(str(nametxt2.get())==""):
        alertbox()
    elif(str(emailtxt2.get())==""):
        alertbox()
    elif (str(phonetxt2.get()) == ""):
        alertbox()

    else:
        ranvalue = random.randint(0, 100000)
        passwords =str(nametxt2.get()) + str(ranvalue)
        checks =senddata(str(rollnotxt1.get()),str(nametxt2.get()),str(emailtxt2.get()),str(phonetxt2.get()),passwords)
        if(checks.text=="success"):
            reginotif(str(emailtxt2.get()),passwords)
            rollnotxt1.delete(0,END)
            nametxt2.delete(0,END)
            emailtxt2.delete(0,END)
            phonetxt2.delete(0,END)
            # fatheremailtxt2.delete(0,END)
            messagebox.showinfo("Message", "Registration Successfully Done.!")
        else:
            messagebox.showerror("Error","Registration Failed ! May be Data Already Exist!  Try again Later..")




def alertbox():
    messagebox.showerror("showerror", "Filed is Empty, please Enter Values..")

def senddata(roll,name,email,phone,passwords):
    today = date.today()
    # dd/mm/YY
    d1 = today.strftime("%d/%m/%Y")
    password=passwords
    print("d1 =", d1)
    myobj = {'idno': roll, 'name': name, 'email': email, 'phone': phone,
             'password': password, 'date': d1}

    x = requests.post(url, data=myobj)
    return  x;

def progressbar():
    img = PhotoImage(file="808.gif")
    window.create_image(20, 20, anchor=NW, image=img)
# btnExit = Button(window,text="exit",bg='red',command=window.destroy)
# btnExit.place(x=350,y=350)
window.mainloop()