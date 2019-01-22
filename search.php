<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <title>Missing Search</title>
    <style media="screen">

    body{
      background-color: #ddd;
      font-family: 'Kanit', sans-serif;
    }

    label {
      padding-bottom: 10px;
    }

    .column {
        float: left;
        width: 30.3%;
        margin: 10px;
        margin-left: 20px;
        font-size: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
        align-items: center;
    }
    .container {
        margin-top: 150px;
    }

    .Search {
      display: block;
      margin-bottom: 10px;
      text-align: center;

    }
    #input_s{
      padding: 10px 0px 10px 20px;
      font-size: 24px;
      width: 40%;
      box-sizing: border-box;
      border: 3px solid #ccc;
      -webkit-transition: 0.5s;
      transition: 0.5s;
      outline: none;
    }
    #input_s:focus {
      border: 3px solid #555;
    }

    .radio-inline {
      padding: 0px 0px 0px 30px;
    }

    #city {
      padding: 6px 50px 6px 50px;
      margin-left: 20px;
    }

    #submit{
      padding: 6px 15px 6px 15px;
      margin-top: 10px;
      background-color: Gray;
      border: 1px solid #ccc;
      color: white;
      font-size: 19px;
    }

    #submit:hover {
      border: 1px solid #000;
      color: black;
      background-color: #ddd;
    }

    </style>
  </head>


  <body>
  <title>Search</title>
  <form action = "serch_UI.php" method="post">
    <div class="container">

      <div class="row">
        <div class="column">

        </div>
        <div class="column">


		  <input type="text" name="input_n" placeholder="Name or Surname....">
		  <br>
            <label for="Age">Range Age</label>
            <select id="Age" name="Age" method ="post">
              <option value="Age1">---------</option>
              <option value="Age1">1-18</option>
              <option value="Age2">19-24</option>
              <option value="Age3">25-59</option>
              <option value="Age4">60ปีขึ้นไป</option>
            </select>
            <br>
            <label for="gender">Gender</label>
            <label class="radio-inline">
              <label>
                <input type="radio" name="gender" method ="post"<?php if (isset($gender) && $gender=="None")
			  echo "checked";?> value="zero"> None
      </label>
    <label>
              <input type="radio" name="gender" method ="post"<?php if (isset($gender) && $gender=="M")
			  echo "checked";?> value="male"> Male
            </label>
            <label class="radio-inline">
              <input type="radio" name="gender" method ="post"<?php if (isset($gender) && $gender=="M")
			  echo "checked";?> value="female"> Female
</label>
</label>
			<div class="Search_detail">
			<input type="text" name="input_d" placeholder="Detail">
			</div>
            <br>
            <br>
            <input type="submit" value="Search" id="submit">
          </form>
        </div>
        <div class="column">

        </div>
      </div>
    </div>



  </body>
</html>
