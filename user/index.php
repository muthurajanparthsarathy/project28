<!DOCTYPE html>
<!--Code By Webdevtrick ( https://webdevtrick.com )-->
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Multi Step Form | Webdevtrick.com</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<?php

      @$reg_no = $_POST['reg'];
      @$name = $_POST['name'] ;
      @$dob = $_POST['dob'];
      @$parent_name = $_POST['parent'];
      @$mobile_number=$_POST['phno'];
      @$gender=$_POST['gender'];
      @$religion=$_POST['religion'];
      @$nationality = $_POST['nation'];
      @$email = $_POST['email'];
   
      @$category = $_POST['category'];
      @$caste = $_POST['caste'] ;
      
          @$pwd = $_POST['pwd'];
          @$games = $_POST['games'];
          @$wardOfService = $_POST['ward'];
          @$NRI = $_POST['nri'];
          @$andaman = $_POST['andaman'];
          @$NccHolder = $_POST['NccHolder'];
          @$srilankaRefugee = $_POST['srilanka'];
            @$preferreddegree=$_POST['predegree'];
            @$programname=$_POST['programname'];
            @$natives=$_POST['nativeplace'];



    
  @$sslc_status=$_POST['sslc_status'];
  @$sslc_school=$_POST['sslc_school'];
  @$sslc_Board=$_POST['sslc_board'];
  @$sslc_mark=$_POST['sslc_mark'];
  @$sslc_yop=$_POST['sslc_yop'];

  @$hsc_group=$_POST['hsc_group'];
  @$hsc_status=$_POST['hsc_status'];
  @$hsc_school=$_POST['hsc_school'];
  @$hsc_Board=$_POST['hsc_board'];
  @$hsc_mark=$_POST['hsc_mark'];
  @$hsc_yop=$_POST['hsc_yop'];

  
  @$g_status=$_POST["g_status"];
  @$g_exampattern=$_POST["g_exampattern"];
  @$g_college=$_POST["g_college"];
  @$g_university=$_POST["g_university"];
  @$g_branch=$_POST["g_branch"];
  @$g_yop=$_POST["g_yop"];
  @$g_mark1=$_POST["g_mark1"];
  @$g_mark2=$_POST["g_mark2"];
  @$g_mark3=$_POST["g_mark3"];

  @$checkvalue=$_POST["checkvalue"];
    

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin";

    // creating a connection
    $con =new mysqli($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
   ///
 
   $sql="select reg from personaldetail where reg='$reg_no'";
   $result=$con->query($sql);
   @$row = mysqli_fetch_row($result);
   
   @$regid=$row[0]; 
   if(is_null($regid))
   {

$sql="select nationid from nationality where nationalityname='$nationality'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$nid=$row[0];
  if(is_null($nid))
{
   
   $sql1="INSERT INTO nationality(nationalityname) values ('$nationality')";
   $con->query($sql1);
   $sql2="select nationid from nationality where nationalityname='$nationality'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$nid=$row[0]; 

}

$sql2="select religionId from religion where religionname='$religion'";
  
$check=$con->query($sql2);
@$row = mysqli_fetch_row($check);

@$rid=$row[0];
if(is_null($rid))
{
 
 $sql1="INSERT INTO religion(religionname) values('$religion')";
 $con->query($sql1);
 $sql2="select religionid from religion where religionname='$religion'";

 $result= mysqli_query($con,$sql2);

 @$row = mysqli_fetch_row($result);

 @$rid=$row[0];

}
///

$sql="select genderid from gender where gendername='$gender'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$gid=$row[0];
  if(is_null($gid))
{
   
   $sql1="INSERT INTO gender(gendername) values ('$gender')";
   $con->query($sql1);
   $sql2="select genderid from gender where gendername='$gender'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$gid=$row[0]; 

}
$sql="select reg from personaldetail where reg='$reg_no'";
$result=$con->query($sql);
@$row = mysqli_fetch_row($result);

@$regid=$row[0]; 
if(is_null($regid))
{
$sql1 = "INSERT INTO personaldetail(reg,studentname,dob, parentName,mobileNo,genderId,religionId,nationId,emailId) VALUES ('$reg_no', '$name', '$dob', '$parent_name','$mobile_number', '$gid', '$rid', '$nid','$email')";
$con->query($sql1);



$sql="select categoryid from category where categoryname='$category'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$categoryid=$row[0];
  if(is_null($categoryid))
{
   
   $sql1="INSERT INTO category(categoryname) values ('$category')";
   $con->query($sql1);
   $sql2="select categoryid from category where categoryname='$category'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$categoryid=$row[0]; 

}

$sql="select casteid from caste where castename='$caste'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$casteid=$row[0];
  if(is_null($casteid))
{
   
   $sql1="INSERT INTO caste(castename) values ('$caste')";
   $con->query($sql1);
   $sql2="select casteid from caste where castename='$caste'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$casteid=$row[0]; 

}



$sql2 = "INSERT INTO communitydetail(reg,categoryid,casteid,pwd,games,wardofservice,NRI,AndamanIsland,NccHolder,srilankaRefugee) VALUES ('$reg_no','$categoryid', '$casteid', '$pwd', '$games','$wardOfService', '$NRI', '$andaman', '$NccHolder','$srilankaRefugee')";
if ($con->query($sql2) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . $con->error;
}


$sql = "INSERT INTO programmedetail(reg,preferred_degree,programme_name,nativity) VALUES ('$reg_no','$preferreddegree', '$programname', '$natives')";
if ($con->query($sql) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . $con->error;
}
///



$sslc="sslc";
$hsc="hsc";

$sql="select gradeid from schooldegree where schoolgrade='$sslc'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$grade1id=$row[0];
  if(is_null($grade1id))
{
   
   $sql1="INSERT INTO schooldegree(schoolgrade) values ('$sslc')";
   $con->query($sql1);
   $sql2="select gradeid from schooldegree where schoolgrade='$sslc'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$grade1id=$row[0]; 

}

////

$sql="select gradeid from schooldegree where schoolgrade='$hsc'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$grade2id=$row[0];
  if(is_null($grade2id))
{
   
   $sql1="INSERT INTO schooldegree(schoolgrade) values ('$hsc')";
   $con->query($sql1);
   $sql2="select gradeid from schooldegree where schoolgrade='$hsc'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$grade2id=$row[0]; 

}



$sql="select schoolid from school where schoolname='$hsc_school'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$schoolid=$row[0];
  if(is_null($schoolid))
{
   
   $sql1="INSERT INTO school(schoolname) values ('$hsc_school')";
   $con->query($sql1);
   $sql2="select schoolid from school where schoolname='$hsc_school'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$schoolid=$row[0]; 

}




$sql="select boardid from board where boardname='$hsc_Board'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$boardid=$row[0];
  if(is_null($boardid))
{
   
   $sql1="INSERT INTO board(boardname) values ('$hsc_Board')";
   $con->query($sql1);
   $sql2="select boardid from board where boardname='$hsc_Board'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$boardid=$row[0]; 

}




$sql="INSERT INTO schooldetail(reg,currentstatus,schooldegree,schoolid,Boardid,mark,yop)values('$reg_no','$sslc_status','$grade1id','$schoolid','$boardid','$sslc_mark','$sslc_yop')";
$con->query($sql);
$sql="INSERT INTO schooldetail(reg,currentstatus,schooldegree,schoolid,Boardid,mark,yop,subgroup)values('$reg_no','$hsc_status','$grade2id','$schoolid','$boardid','$hsc_mark','$hsc_yop','$hsc_group')";
$con->query($sql);
if(is_null($checkvalue))
{
      $sql="INSERT INTO graduationdetails(g_id,g_status,g_exampattern,g_college,g_university,g_branch,g_yop,g_mark1,g_mark2,g_mark3) VALUES ('$reg_no','$g_status','$g_exampattern','$g_college','$g_university','$g_branch','$g_yop','$g_mark1','$g_mark2','$g_mark3')";
      $con->query($sql);  
}
}

}


?>


<header class="header">
  <h1 class="header__title">ADMISSION</h1>
</header>
<div class="content">
  <div class="content__inner">
   
    <div class="container overflow-hidden">
      <div class="multisteps-form">
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="PInfo">Personal</button>
              <button class="multisteps-form__progress-btn" type="button" title="comdetail">community</button>
              <button class="multisteps-form__progress-btn" type="button" title="perogramme">school</button>
              <button class="multisteps-form__progress-btn" type="button" title="school">graduation</button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-10 m-auto">

            <form  action=add.php method="post" class="multisteps-form__form" >
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Personal Details</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6 ">
                      <input class="multisteps-form__input  form-control " type="text" name="reg"  placeholder="Register no" />
                    </div>
                    <div class="col-12 col-sm-6  mt-5 mt-sm-0">
                      
                      <select name="gender" class="multisteps-form__input form-control">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                     </select>
                    </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control input-lg" type="text"  name="name" placeholder="Name" />
                    </div>
                    <div class="col-12 col-sm-6 mt-5 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="email" name="religion" placeholder="Religion"/>
                    </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="date" name="dob" placeholder="dateofbirth"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-5 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="text"name="nation" placeholder="nationality"/>
                    </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text"  name="parent" placeholder="parentname"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-5 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="email" name="email" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text"  name="phno" placeholder="Contact number"/>
                    </div>
                  
                  </div>
                  <div class="button-row d-flex mt-5">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
              <h3 class="multisteps-form__title">community Details</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6 ">
                      <input class="multisteps-form__input  form-control " type="text"  name="category"  placeholder="category" />
                    </div>
                    <div class="col-12 col-sm-6  mt-5 mt-sm-0">
                      
                    <input class="multisteps-form__input  form-control " type="text"  name="caste"  placeholder="caste" />

                    </div>
                  </div>
                  <div class="form-row mt-5">
                     <div class="col-12 col-sm-6">
                       <div class="label">Are you PWD(Persons with Disability)</div>
                        <label for="radio11">Yes 
                        <input type="radio" id="radio11" name="pwd" value="yes"></label>
                        <label for="radio12">No
                        <input type="radio" id="radio12" name="pwd" value="No"></label>   
                       </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                       <div class="label">Represented the University in Games</div>
                       <label for="radio21">Yes 
                       <input type="radio" id="radio21" name="games" value="Yes"></label>
                      <label for="radio22">No
                       <input type="radio" id="radio22" name="games" value="No"></label>
                          </div>
                        </div>
                
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                      <div class="label">Are You a ward of Service/Ex-Serviceman?</div>
                        <label for="radio31">Yes 
                       <input type="radio" id="radio31" name="ward" value="Yes"></label>
                       <label for="radio32">No
                         <input type="radio" id="radio32" name="ward" value="No"></label>
                        </div>
                
              
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                     <div class="label">NRI/Industrial Sponsored</div>
                      <label for="radio41">Yes 
                       <input type="radio" id="radio41" name="nri" value="Yes"></label>
                     <label for="radio42">No
                        <input type="radio" id="radio42" name="nri" value="No"></label>        
                        </div>
                
               </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <div class="label">Are you NCC Certificate Holder</div>
                     <label for="radio61">Yes 
                    <input type="radio" id="radio61" name="NccHolder" value="Yes"></label>
                     <label for="radio62">No
                   <input type="radio" id="radio62" name="NccHolder" value="No"></label>                 
                     </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                    <div class="label">Are you from a Sri Lankan Tamil Refugee Camp?</div>
            <label for="radio71">Yes 
               <input type="radio" id="radio71" name="srilanka" value="Yes"></label>
               <label for="radio72">No
               <input type="radio" id="radio72" name="srilanka" value="No"></label>                    </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <div class="label">Are you Tamil Origin from Andaman and Nicobar Islands?</div>
              <div class="spacetop">
              <label for="radio51">Yes 
               <input type="radio" id="radio51" name="andaman" value="Yes"></label>
               <label for="radio52">No
               <input type="radio" id="radio52" name="andaman" value="No"></label>
            </div>                    </div>
                  
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
              <h3 class="multisteps-form__title">Personal Details</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6 ">
                      <input type="text" name="predegree"  class="multisteps-form__input form-control" placeholder="preferred degree programme">                    </div>
                    <div class="col-12 col-sm-6  mt-5 mt-sm-0">
                      
                    <input   class="multisteps-form__input form-control" type="text" name="nativeplace" placeholder="nativity">
                    </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <input class="multisteps-form__input form-control"  type="text" name="programname" placeholder="programme name">
                    </div>
                   
                  </div>
                  <h2 id="head" >SSLC</h2>

                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <div class="label">Status</span></div>
               
               <select name="sslc_status" class="multisteps-form__input form-control">
                 <option value="Ongoing">Ongoing</option>
                 <option value="Completed">Completed</option>
              </select>              
                  </div>

                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <input type="text" name="sslc_school"  class="multisteps-form__input form-control" placeholder="School">
                  
                  </div>
                    <div class="col-12 col-sm-6 mt-5 mt-sm-0">
                    <select name="sslc_board" class="multisteps-form__input form-control">
                  <option value="State Board">STATE BOARD</option>
                  <option value="CBSC">CBSC</option>
                  <option value="ICSC">ICSC</option>
               </select>                     </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <input type="text" name="sslc_mark"  class="multisteps-form__input form-control" placeholder="Mark">
                    </div>
                    <div class="col-12 col-sm-6  mt-5 mt-sm-0">
                      
                    <input type="text" name="sslc_yop"  class="multisteps-form__input form-control" placeholder="year of passing"> 
                      </div>
                  </div>
                  <h3 class="multisteps-form__title" id="head">HSC</h3>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <div class="label">Status</span></div>
               
               <select name="hsc_status" class="multisteps-form__input form-control">
                 <option value="Ongoing">Ongoing</option>
                 <option value="Completed">Completed</option>
              </select>              
                  </div>
                  <div class="col-12 col-sm-6  mt-5 mt-sm-0">
                      
                  <input type="text" name="hsc_group"  class="multisteps-form__input form-control" placeholder="GROUP/SUBJECT">
                    </div>

                  </div>
       

                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <input type="text" name="hsc_school"  class="multisteps-form__input form-control" placeholder="School">       
                  </div>
                  <div class="col-12 col-sm-6  mt-5 mt-sm-0">
                      
    
                <select name="hsc_board" class="multisteps-form__input form-control">
                 <option value="State Board">STATE BOARD</option>
                 <option value="CBSC">CBSC</option>
                 <option value="ICSC">ICSC</option>
              </select>
                    </div>

                  </div>
                  
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <input type="text" name="hsc_mark" class="multisteps-form__input form-control" placeholder="Mark">
                    </div>
                    <div class="col-12 col-sm-6  mt-5 mt-sm-0">
                      
                    <input type="text" name="hsc_yop"  class="multisteps-form__input form-control" placeholder="year of passing"> 
                      </div>
                  </div>
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                
                    </div>
                  </div>
                </div>
              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
         
                <div class="multisteps-form__content">
                <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
<div><label for="g_status">Status</label></div>
                    <select name="g_status" class="multisteps-form__input form-control" >
                                 <option value="Ongoing">Ongoing</option>
                                 <option value="Completed">Completed</option>
                              </select>                    </div>
                    <div class="col-12 col-sm-6  mt-5 mt-sm-0">
                      
                    <div><label for="g_exampattern">&nbsp;</label></div>
                    <input type="text" name="g_exampattern" class="multisteps-form__input form-control" placeholder="exampattern">   
                                     </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <input type="text" name="g_college"  class="multisteps-form__input form-control" placeholder="College">     
                                 </div>
                    <div class="col-12 col-sm-6  mt-5 mt-sm-0">
                      
                    <input type="text" name="g_university"  class="multisteps-form__input form-control" placeholder="University">         
                               </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <input type="text" name="g_branch"  class="multisteps-form__input form-control" placeholder="branch">     
                                 </div>
                    <div class="col-12 col-sm-6  mt-5 mt-sm-0">
                      
                    <input type="text" name="g_yop"  class="multisteps-form__input form-control" placeholder="Year of passing">         
                               </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <input type="text" name="g_mark1"  class="multisteps-form__input form-control" placeholder="Percentage of Mark(PART 1)">     
                                 </div>
                    <div class="col-12 col-sm-6  mt-5 mt-sm-0">
                      
                    <input type="text" name="g_mark2"  class="multisteps-form__input form-control" placeholder="Percentage of Mark(PART 2)">     
                               </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6">
                    <input type="text" name="g_mark3"  class="multisteps-form__input form-control" placeholder="Percentage of Mark(PART 3)">     
                                 </div>
                  
                  </div>
                
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>

                    <button type="submit" class="btn btn-success"  id="submit">Submit</button>       


                     </div>
                  
                </div>
              </div>
          
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script  src="function.js"></script>

</body>
</html>