<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!--import bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!--class dari bootstrap untuk membagi satu baris jadi beberapa kolom-->
<div class="container">

<!--pembagian kolomnya-->
    <div class="row">
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
    </div>
    


 <div class="row">
      <div class="col-md-4">
      <!--bikin form-->
      <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
	  </form>
      </div>
      
      <!--membuat table didalam pembagian kolom pada satu baris-->
      <!--table ada <thead> dan <tbody>-->
      <!--<th> untuk header, <tr> untuk pindah baris, <td> pindah kolom-->
      <div class="col-md-4">
      <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
         <tr class="active">
            <th>No</th>
            <th>Nama</th>
            <th>Pekerjaan</th>
         </tr>
        </thead>
        
        <tbody>
         <tr>
            <td>1</td>
            <td>Weny Kinanti Putri</td>
            <td>Mahasiswa</td>
         </tr>
        </tbody>
        
       </table>
		</div>
      <div class="col-md-4">.col-md-1</div>
      
 </div>


</div>
</body>
</html>