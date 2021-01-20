import tkinter as tk
from tkinter import Message, Text
import cv2,os
import csv
import pandas as pd
import datetime
import time
from  tkinter import messagebox
from firebase import firebase
import  requests
import  StudentAttendance.checkconnection as connection
from  StudentAttendance.attadancenoti import attadancenotif as sendnoti

from google.cloud import storage
from google.cloud.storage.blob import Blob

window = tk.Tk()
window.title("Shaheed Bhagat Singh State technical Campus B.tech CSE 2017-2021")
mycolor2 = '#40E0D0'  # or use hex if you prefer
p1 = tk.PhotoImage(file='sbsicon.png')
url = 'http://sbsproject.kalkaprasad.com/index.php/Api/attendancedata'
# Setting icon of master window
window.iconphoto(False, p1)
window.configure(background=mycolor2)
window.geometry('1280x670')

netcon= connection.connect()
if(netcon==False):
    mstatus = messagebox.showerror("No connection", "No Internet Connected")
    print(mstatus)
    if (mstatus =="ok"):
        window.destroy()


lbl = tk.Label(window, text="Face Recognition Based Attendance System", bg="white", fg="black", width=50, height=3, font=('times', 30, 'italic bold')) 
lbl.place(x=100, y=20)

lbl1 = tk.Label(window, text="↓  List Of Present Students  ↓", width=25, fg="black", bg="white", height=2, font=('times', 15, ' bold')) 
lbl1.place(x=540, y=320)

message = tk.Label(window, text="", fg="black", bg="white", activeforeground = "green", width=35, height=7, font=('times', 15, ' bold ')) 
message.place(x=470, y=400)

config = {
    "apiKey": "Enter here apiKey",
    "authDomain": "Enter here authDomain",
    "databaseURL": "Enter here databaseURL",
    "projectId": "Enter here projectId",
    "storageBucket": "Enter here storageBucket",
    "messagingSenderId": "Enter here messagingSenderId",
    "appId": "Enter here appId"
}

firebase = firebase.FirebaseApplication("https://Enter here databaseURL", None)
blob = Blob.from_string("gs://Enter here storageBucket path")


def savedattendance(Id,aa,date,timeStamp,status):
    urlgetdata = "http://sbsproject.kalkaprasad.com/index.php/Api/getdetails?rollno={}".format(Id)
    x = requests.get(urlgetdata)
    data = x.json()
    email=data[0]['email']
    print("id", Id)
    print("name", aa)
    print("data", date)
    # dd/mm/YY
    print("time", timeStamp)
    myobj = {'rollno': Id, 'name': aa, 'email': email,
             'date': date, 'time': timeStamp,'status':status}


    x = requests.post(url, data=myobj)
    if(x.text=="success"):
        sendnoti(aa,email,Id,date,timeStamp)
        messagebox.showinfo("Success","Attendance Submitted Successfully")
    else:
        messagebox.showinfo("Failed","Attendance Already Submitted");

    print(x.text)

    print("sahi chal rha hai")



def trackImages():
    recognizer = cv2.face.LBPHFaceRecognizer_create()
    recognizer.read("DataSet\Trainner.yml")
    harcascadePath = "haarcascade_frontalface_default.xml"
    faceCascade = cv2.CascadeClassifier(harcascadePath)   
    df=pd.read_csv("StudentRecord.csv")
    
    cam = cv2.VideoCapture(0)
    font = cv2.FONT_HERSHEY_SIMPLEX        
    col_names =  ['Id','Name','Date','Time']
    attendance = pd.DataFrame(columns = col_names)    
    while True:
        ret, im =cam.read()
        gray=cv2.cvtColor(im,cv2.COLOR_BGR2GRAY)
        faces=faceCascade.detectMultiScale(gray, 1.2,5)    
        for(x,y,w,h) in faces:
            cv2.rectangle(im,(x,y),(x+w,y+h),(225,0,0),2)
            Id, conf = recognizer.predict(gray[y:y+h,x:x+w])                                   
            if(conf < 50):
                ts = time.time()      
                date = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d')
                timeStamp = datetime.datetime.fromtimestamp(ts).strftime('%H:%M:%S')
                aa=df.loc[df['Id'] == Id]['Name'].values
                tt=str(Id)+"-"+aa
                attendance.loc[len(attendance)] = [Id,aa,date,timeStamp]
                print("yanhi sai save hota hai")
                status="0"
                savedattendance(Id,aa,date,timeStamp,status)
                
            else:
                Id='Unknown'
                messagebox.showerror("Failed!","Please Train Your data into machine..")
                print("failed")
                tt=str(Id)  
            if(conf > 75):
                noOfFile=len(os.listdir("UnknownImages"))+1
                cv2.imwrite("UnknownImages\Image"+str(noOfFile) + ".jpg", im[y:y+h,x:x+w])
                messagebox.showerror("Failed!", "Please Train Your data into machine..")
                print("Not face matched")
            cv2.putText(im,str(tt),(x,y+h), font, 1,(255,255,255),2)        
        attendance=attendance.drop_duplicates(subset=['Id'],keep='first') 

        cv2.imshow('Face Recognizing',im)
        pass

        if cv2.waitKey(10000):
            break

    ts = time.time()      
    date = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d')
    timeStamp = datetime.datetime.fromtimestamp(ts).strftime('%H:%M:%S')
    Hour,Minute,Second=timeStamp.split(":")

    #fileName="Attendance\Attendance_"+date+"_"+Hour+"-"+Minute+"-"+Second+".csv"
    fileName="Attendance\Attendance_"+date+"_"+Hour+"-"+Minute+".csv"
    attendance.to_csv(fileName,index=False)
    # Firebase started...
    # Firebase = pyrebase.initialize_app(config)
    # storage = Firebase.storage()
    # blob = storage.child('uploads/'+ fileName).put(fileName)
    # #jay = storage.child().get_url(blob['downloadTokens'])
    #
    # data =  { 'name': "Date_"+date+"  Time_"+Hour+"-"+Minute+"-"+Second, 'url': "https://firebasestorage.googleapis.com/v0/b/ <Enter here storageBucket path> %2FAttendance%5CAttendance_"+date+"_"+Hour+"-"+Minute+".csv?alt=media&token="+blob['downloadTokens']}
    # #data =  { 'name': "Date_"+date+"  Time_"+Hour+"-"+Minute+"-"+Second, 'url': jay}
    # result = firebase.post('/uploads',data)
    # print(result)
    # Firebase ended here..

    cam.release()
    cv2.destroyAllWindows()

    res=attendance
    message.configure(text= res)

trackImg = tk.Button(window, text="Take Attendance", command=trackImages, fg="black", bg="white", width=20, height=3, activebackground = "Yellow", font=('times', 15, ' bold '))
trackImg.place(x=400, y=200)

quitWindow = tk.Button(window, text="Quit", command=window.destroy, fg="black", bg="white", width=20, height=3, activebackground = "Red", font=('times', 15, ' bold '))
quitWindow.place(x=700, y=200)

lbl3 = tk.Label(window, text="DESIGN BY Shaheed Bhagat Singh State technical campus B.TEch-CSE BATCH 2017, GROUP : A ", width=80, fg="white", bg="black", font=('times', 15, ' bold'))
lbl3.place(x=200, y=620)

window.mainloop()