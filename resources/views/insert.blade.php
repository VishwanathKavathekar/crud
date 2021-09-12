<html>

<head>
<title> </title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
      <div class="container">
        <h1 class="text-center"> Add Employee Data </h1>
          <form method="post" action="/store">   <!--store fuction involved in employeeController.php -->
              @csrf
              <div class="mb-3">
                <label> <b> Employee name:</b></label>
                <input type="text" name="title"  class="form-control">
		            </div>
                <div class="mb-3">
			<label><b>Employee position:</b></label>
			<input type="text" name="author"  class="form-control">
		</div>
    <input type="submit" name="insert" value="Insert" class="btn btn-primary">

          </form>
          <a href="/views/show.blade.php" class="btn btn-success">show data</a>

      </div>
</body>
</html>
