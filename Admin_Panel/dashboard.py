#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable()
print ("Content-type:text/html\r\n\r\n")

db = pymysql.connect(host="localhost",user="root",password="",database="Admin_Panel" )

cursor = db.cursor()

cursor.execute("SELECT * from student")


data = cursor.fetchall()
print("<html>")
print("<table>")
print("<h2>Student Details</h2>")
print("<table border = '1'>")
print("<tr>")
print("<th>ID</th>")
print("<th>NAME</th>")
print("<th>EMAIL</th>")
print("<th>PASSWORD</th>")
print("<th>CONTACT NO</th>")
print("<th colspan='2'>ACTION</th>")
print("</tr>")
print("</table>")
print("</html>")
for row in data:
    id =row[0]
    name = row[1]
    email = row[2]
    password = row[3]
    mobno = row[4]

    print ("id=%d,stud_name=%s,stud_email=%s,stud_password=%s,stud_mobno=%s" % (id,name, email, password, mobno))
    print("<a href='update_1.py?sid=%d'>UPDATE</a>"%(id))
    print("<a href='dlt.py?sid=%d'>DELETE</a>"%(id))
    print("<br/>")
# disconnect from server
db.close()
