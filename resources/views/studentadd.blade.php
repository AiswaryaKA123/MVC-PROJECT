<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-6 col-m-6 col-lg-6 col-xl-6">
<div class="col col-12 col-sm-6 col-m-6 col-lg-6 col-xl-6">
<form action="/studentread" method="post">
{{csrf_field()}}
<table class="table">
<tr>
    <td>Name</td>
    <td><input name="sname" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Rollno</td>
    <td><input name="sroll" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Adm No</td>
    <td><input name="sadmno" type="text" class="form-control"></td>
</tr>
<tr>
    <td>college</td>
    <td><input name="scoll" type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-success">submit</button></td>
</tr>
</table>
</form>
</div>
</div></div></div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>