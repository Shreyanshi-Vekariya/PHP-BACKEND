#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable()
db = pymysql.connect(host="localhost",user="root",password="",database="Admin_Panel" )

cursor = db.cursor()
cursor.execute("SELECT VERSION()")
data = cursor.fetchone()
print ("Content-type:text/html\r\n");

db.close()
