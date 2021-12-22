var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "School"  
});  
con.connect(function(err) {  
if (err) throw err;  
console.log("Connected!");  
var sql = "INSERT INTO Student_detail (student_id, Name, Address, Email, Mobile_no) VALUES ('111', 'ved patel', 'abc123', 'ved@gmail.com','9087654321')";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log("1 record inserted");  
}); 
});
