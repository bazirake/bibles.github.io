

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bible society of Rwanda</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="membersdata.php">
</head>
<body>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead class="bg-warning">
    <tr>
        <th>#No</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>dateOfBirth</th>
        <th>Country</th>
        <th>Province</th>
        <th>District</th>
        <th>Sector</th>
        <th>Cell</th>
        <th>Village</th>
        <th>LocalCommunity</th>
        <th>CurrentCommunity</th>
    </tr>
    </thead>
    <tbody id="tcontent">

    </tbody>
</table>

<button id="st">Save</button>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
<script type="text/x-handlebars-template" id="memberid">
    {{#each pushdata}}
      <tr>
      <td>{{id}}</td>
      <td>{{fname}}</td>
       <td>{{lname}}</td>
       <td>{{email}}</td>
       <td>{{phone}}</td>
       <td>{{dates}}</td>
       <td>{{country}}</td>
       <td>{{province}}</td>
       <td>{{district}}</td>
       <td>{{sector}}</td>
       <td>{{cell}}</td>
       <td>{{village}}</td>
       <td>{{localc}}</td>
       <td>{{currentc}}</td>
      </tr>
    {{/each}}
</script>
</body>
</html>
<script>
  var t1=$("#memberid").html();
  var template =Handlebars.compile(t1);
  $("#st").click(function(){
    alert("hello");
   });

    async function loadMdata()
      {
      var path='../database/api/getmember.php';
       await  axios.get(path)
       .then(function(response){
         $("#tcontent").html(template(response.data));
          console.log(response.data);
        })
        .catch(function(error){
            console.log(error);
         });

     //$("p").html(template(data));
     }
  (function(){

   loadMdata();
  })();
</script>

