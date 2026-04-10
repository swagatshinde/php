//Write AJAX program to read contact.dat file and print the contents of the file in a tabular format 
//when the user clicks on print button. Contact.dat file should contain srno, name, residence number, 
//mobile number, Address. [Enter at least 3 record in contact.dat file] 

<!DOCTYPE html>
<html>

<head>
  <title>Contact List</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

  <button id="printBtn">Print Contacts</button>

  <table border="1" id="contactTable" style="margin-top:10px; width:100%">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Name</th>
        <th>Residence</th>
        <th>Mobile</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>

  <script>
    $(document).ready(function() {
      $("#printBtn").click(function() {
        $.get("contact.dat", function(data) {
          var rows = "";
          // Split by line, then process each line
          data.split("\n").forEach(function(line) {
            var cols = line.split(",");
            if (cols.length === 5) {
              rows += "<tr><td>" + cols.join("</td><td>") + "</td></tr>";
            }
          });
          $("#contactTable tbody").html(rows);
        }).fail(function() {
          alert("Error loading file!");
        });
      });
    });
  </script>

</body>

</html>
