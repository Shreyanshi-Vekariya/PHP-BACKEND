var mysql = require('mysql');


var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "School"
});


con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM Student_detail WHERE address LIKE 'a%'", function (err, result) {
    if (err) throw err;
    console.log(result);
  });
});
