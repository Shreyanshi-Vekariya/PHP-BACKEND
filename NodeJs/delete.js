var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "School"  
});  
con.connect(function(err) {  
if (err) throw err;  
var sql = "DELETE FROM Student_detail WHERE student_id = '111'";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log("Number of records deleted: " + result.affectedRows);  
});  
}); 
