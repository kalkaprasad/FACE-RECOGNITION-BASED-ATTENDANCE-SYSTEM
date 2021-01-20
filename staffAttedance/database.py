import  mysql.connector as connecter
import  requests
import  random
url = 'http://sbsproject.kalkaprasad.com/index.php/Api/studentdetails'
urlgetdata="http://sbsproject.kalkaprasad.com/index.php/Api/getdetails?rollno={}".format(170280113)

myobj = {'rollno': '170280113','name':'raju','email':'raju89@gmail.com','phone':'8127826696','fatheremail':'jp90@gmail.com','password':'kalka786','date':'01/12/2021'}

# x = requests.post(url, data = myobj)
PARAMS = {'rollno':"170280113"}
x= requests.get(urlgetdata)
data= x.json()
print(data[0]['email'])

#print the response text (the content of the requested file):


# print(x.text)



# class DatabaseHelper: # this is the our Database Helper Class.
#     def __init__(self):
#         self.con= connecter.connect(host='localhost',
#                                     database='pythonmysql',
#                                     user='root',
#                                     password='')
#         print("connection successfully")
#
#     def insertdata(self,Roll_no,Name,Phone,Email):
#         query="""INSERT INTO Studentsdata (RollNo,Name,Phone,Email)
#                            VALUES
#                            ('{}', '{}', '{}','{}') """.format(Roll_no,Name,Phone,Email)
#         cur= self.con.cursor() # for connect the data base
#         cur.execute(query)
#         self.con.commit()
#         print("data save in user")
#
#     # def insertAttendence(self,roll_no,name):
#
# dbstatus= DatabaseHelper()
# dbstatus.insertdata("17020113","kalka prasad","9140356115","kalkaprasad59@gmail.com")
#


