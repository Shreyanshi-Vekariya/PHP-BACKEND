var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "School"  
});  
con.connect(function(err) {  
if (err) throw err;  
var sql = "UPDATE Student_detail SET Name = 'Avni Patel' WHERE student_id = '102'";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log(result.affectedRows + " record(s) updated");  
});  
}); 
