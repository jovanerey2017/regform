<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="D:\bootstrap\bootstrap-4.4.1-dist\bootstrap-4.4.1-dist\css"></li>
	<script type="text/javascript" src="D:\bootstrap\bootstrap-4.4.1-dist\bootstrap-4.4.1-dist\js" ></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card mt-2">
                <div class="card-header bg-primary text-white bg-sample"></div>
                    <h4 class="bg-primary">R e g i s t r a t i o n F o r m</h4>
            </div>
            <div class="card-body">
                <form action="post.php" method="POST">    
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text"  name="firstname" class="form-control" placeholder="First Name" >
                    </div>
 
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                    </div>

                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" name="middlename" class="form-control" placeholder="Middle Name">
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>                   

                    <div class="date mb-2">
                        <small id="msg"></small>
                        <input type="date" name="dateofbirth" class="form-control" placeholder="Date of Birth">
                    </div>

                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" name="placeofbirth" class="form-control" placeholder="Palce of Birth">
                    </div>

                    <div class="gender mb-2">
                        <small id="msg"></small>
                        <a> M a l e</a><input type="radio" name="gender" class="form-control" placeholder="Gender"><a> F e m a l e</a><input type="radio" onkeyup="validate(this);" name="username" class="form-control" placeholder="Gender">
                    </div>

                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" name="guardian" class="form-control" placeholder="Guardian">
                    </div>

                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" name="contactnumber" class="form-control" placeholder="Contact Number Exm. (+63917*******)">
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" name="civilstatus" class="form-control" placeholder="Civil Status">
                    </div>

                    <div class="select">
                        <select name="yearlevel" size="1" class="form-control" name="yearlevel" >
                            <option selected="selected"><span class="opt"><h1>Select Year Level</h1></span></option>
                            <option>1st Year</option>  
                            <option>2nd Year</option>  
                            <option>3rd Year</option>  
                            <option>4th Year</option>  
                            <option>5th Yyear</option>
                        </select>
                    </div>

                    <div class="select">
                        <select name="course" size="1" class="form-control" name="course">      
                                <option selected="selected"><span class="opt">Select Course </span></option>
                                <option>B.S. in Information Technology</option>  
                                <option>B.S. in Technology Communication Management</option>  
                                <option>B.S. in Data Science</option>  
                                <option >B.S. in Computer Engineering</option>  
                            </select>
                    </div>
                    
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" name="schoolyear" class="form-control" placeholder="School Year" required>
                    </div>

                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-primary mb-1 form-control">
                            Register
                        </button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>