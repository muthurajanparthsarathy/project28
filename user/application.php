<html>
<head>
<style>
  label,
input[type='radio'] {
    margin-top: 0.4em;
    margin-left: 0.4em;

}

input:checked {
    border: none;
    outline: 1px solid red;
}

  #mg
  {
    margin-top:20px;
  }
  
  .form-outer
{
height:auto;
width:100%;
overflow: hidden;
position:relative;
}
.red
{
top:0;
}

.red-stat
{
  position:relative;
top:1000;
height:auto;

}

.blue
{
position:absolute;
top:1000;
height:auto;


}


.yellow
{
position:absolute;
top:1500;
height:auto;

}

.blue-stat
{
  position:relative;
top:2000;
height:auto;

}

.yellow-stat
{
  position:relative;
top:1000;
height:auto;

}





.green
{
position:absolute;
top:2000;
height:auto;

}


.blue-ab
{
position:absolute;
top:0;
height:auto;

}

.yellow-ab
{
position:absolute;
top:0;
height:auto;

}

.red-ab
{
position:absolute;
top:0;
height:auto;


}




.green-ab
{
position:absolute;
top:0;
height:auto;

}


.container
{
width:100%;
overflow: hidden;


}
button
{

margin-left:20px;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

 

<div class="container" id="mg">
  <form class="row g-3 needs-validation" novalidate>

    <div class="form-outer">



    <div class="red  row" id="red-ab">
    <h1>Personal Details</h1>
   
  <div class="col-md-4 p-3">
    <label for="validationCustom01" class="form-label">Name</label>
    <div class="input-group has-validation">

    <input  type="text" class="form-control c1" id="validationCustom01" name="name" placeholder="Name" required/>

    <div class="invalid-feedback">
    Please provide a Name
      </div>
    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom02" class="form-label">Date of birth</label>
    <div class="input-group has-validation">

    <input  class="form-control" id="validationCustom02" type="date" name="dob" placeholder="dateofbirth" required/>

    <div class="invalid-feedback">
            Please provide a date of birth.

    </div>
</div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustomUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input  class="form-control" id="validationCustomUsername"  type="email" name="email" placeholder="Email" aria-describedby="inputGroupPrepend" required/>

      <div class="invalid-feedback">
      Please provide valid format.
      </div>
    </div>
  </div>
  <div class="col-md-4 p-3" >
    <label for="validationCustom03" class="form-label">Parent name</label>    
    <input class="form-control" id="validationCustom03" type="text"  name="parent" placeholder="parentname" required/>

    <div class="invalid-feedback">
      Please provide a Parent name
    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom04" class="form-label">Religion</label>
    <input class="form-control" id="validationCustom04" type="text" name="religion" placeholder="Religion" required/>

    <div class="invalid-feedback">
      Please select a religion.
    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom05" class="form-label">nationality</label>
    <input class="form-control" id="validationCustom05"  type="text"name="nation" placeholder="nationality" required/>

    <div class="invalid-feedback">
      Please provide a nationality.
    </div>
  </div>
  
  <div class="col-md-4 p-3">
    <label for="validationCustom03" class="form-label">Contact number</label>
    <input  class="form-control" id="validationCustom03" type="text"  name="phno" placeholder="Contact number" required/>

    <div class="invalid-feedback">
      Please provide a mobile number
    </div>
  </div>
 
  
</div>
  
  
<div class="blue row" id="blue-ab">
<h1>Community Details</h1>

   <div class="col-md-4 p-3">
    <label for="validationCustom01" class="form-label">category</label>
    <div class="input-group has-validation">

    <input class="form-control" id="validationCustom01"  type="text"  name="category"  placeholder="category" required />

    <div class="invalid-feedback">
      Please provide category
  </div>
  </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom02" class="form-label">caste</label>
    <div class="input-group has-validation">

    <input type="text" class="form-control" id="validationCustom02"  placeholder="caste" required>
    <div class="invalid-feedback">
    Please provide caste
    </div>
</div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom03" class="form-label">Are you PWD(Persons with Disability)</label>
    <br>
                        <label for="validationCustom031">Yes</label><input type="radio" id="validationCustom031" name="pwd" value="yes" required>
                        <label for="validationCustom032">No</label> <input  type="radio" id="validationCustom032" name="pwd" value="No" required> 
                    
    <div class="invalid-feedback">
      Please provide a Yes or No.
    </div>
  </div>



  <div class="col-md-4 p-3">
    <label for="validationCustom03" class="form-label">Represented the University in Games</label>
    <br>

                 <label for="validationCustom033">Yes</label><input type="radio"  id="validationCustom033" name="games" value="Yes" required>
                 <label for="validationCustom034">No</label>  <input type="radio"id="validationCustom034" name="games" value="No" required> 
    <div class="invalid-feedback">
    Please provide a Yes or No.
  </div>
</div>
  <div class="col-md-4 p-3">
    <label for="validationCustom04" class="form-label">Are You a ward of Service/Ex-Serviceman?</label>

      <br>
                  
                        <label class="validationCustom041">Yes</label>   <input type="radio" id="validationCustom041" name="ward" value="Yes" required>
                  
                       <label for="validationCustom042">No</label>  <input type="radio" id="validationCustom042" name="ward" value="No" required>
  
                       <div class="invalid-feedback">
    Please provide a Yes or No.
  </div>
                      </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom05" class="form-label">NRI/Industrial Sponsored</label>
    <br>          
    <label for="validationCustom051">Yes</label>     <input type="radio" id="validationCustom051" name="nri" value="Yes" required></label>
    <label for="validationCustom052">No</label>   <input type="radio" id="validationCustom05"  name="nri" value="No" required></label>    
                       
    <div class="invalid-feedback">
    Please provide a Yes or No.
    </div>
  </div>
  
  <div class="col-md-4 p-3">
    <label for="validationCustom03" class="form-label">Are you NCC Certificate Holder</label>
    <br>          

                   
                   <label for="validationCustom036">Yes</label> <input type="radio" id="validationCustom036" name="NccHolder" value="Yes" required> 
                   <label for="validationCustom037">No</label><input type="radio" id="validationCustom037" name="NccHolder" value="No" required >    
    <div class="invalid-feedback">
      Please provide a Yes or No.
    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom032" class="form-label">Are you from a Sri Lankan Tamil Refugee Camp?</label>
    <br>          

                   
                   <label for="validationCustom038">Yes</label> <input type="radio" id="validationCustom038" name="srilanka" value="Yes" required> 
                   <label for="validationCustom039">No</label><input type="radio" id="validationCustom039" name="srilanka" value="No" required >    
    <div class="invalid-feedback">
      Please provide a Yes or No.
    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom03" class="form-label">Are you Tamil Origin from Andaman and Nicobar Islands?</label>
    <br>          

                   
                   <label for="validationCustom036">Yes</label> <input type="radio" id="validationCustom036" name="andaman" value="Yes" required> 
                   <label for="validationCustom037">No</label><input type="radio" id="validationCustom037" name="andaman" value="No" required >    
    <div class="invalid-feedback">
      Please provide a Yes or No.
    </div>
  </div>
</div>
  
  
  
  

<div class="green row" id="green-ab">
<h4>Programme detail</h4>

   <div class="col-md-4 p-3">
    <label for="validationCustom01" class="form-label">preferred degree</label>
    <input type="text" name="predegree" class="form-control" id="validationCustom01" placeholder="preferred degree programme" required>           

    <div class="invalid-feedback">
    Please provide a preferred degree

    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom02" class="form-label">nativity</label>
   
    <input  class="form-control" id="validationCustom02" type="text" name="nativeplace" placeholder="nativity" required>

    <div class="invalid-feedback">
    Please provide a  nativity
  </div>
  </div>



  <div class="col-md-4 p-3">
    <label for="validationCustom03" class="form-label">Programme name</label>
   
    <input class="form-control" id="validationCustom03"  type="text" name="programname" placeholder="programme name" required>

    <div class="invalid-feedback">
    Please provide a Programme name
  </div>
  </div>











  <h4>SSLC Detail</h4>
  <div class="col-md-4 p-3">
    <label for="validationCustom03" class="form-label">Status</label>
               
               <select name="sslc_status" class="form-select" id="validationCustom03" required>
                 <option value="Ongoing">Ongoing</option>
                 <option value="Completed">Completed</option>
              </select>       
    <div class="invalid-feedback">

      Please provide a status.
    </div>
  </div>
 <div class="col-md-4 p-3">
    <label for="validationCustom03" class="form-label">school</label>
    <input type="text" name="sslc_school"  class="form-control" id="validationCustom03" placeholder="School" required>

    <div class="invalid-feedback">
      Please provide a sslc school.
    </div>
  </div>

  <div class="col-md-4 p-3">
    <label for="validationCustom05" class="form-label">Board</label>
    <select name="sslc_board" class="form-select" id="validationCustom05" required>
                  <option value="State Board">STATE BOARD</option>
                  <option value="CBSC">CBSC</option>
                  <option value="ICSC">ICSC</option>
               </select>      
    <div class="invalid-feedback">
      Please provide a Board
    </div>
  </div>
  
  <div class="col-md-4 p-3">
    <label for="validationCustom03" class="form-label">Mark</label>
    <input type="text" name="sslc_mark"  class="form-control" id="validationCustom03"  placeholder="Mark" required>

    <div class="invalid-feedback">
      Please provide a sslc mark
    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom04" class="form-label">Year of passing</label>
    <input type="text" name="sslc_yop" class="form-control" id="validationCustom0334" placeholder="year of passing" required> 

    <div class="invalid-feedback">
      Please provide a year of passing.
    </div>
  </div>
  
</div>
  
  




<div class="yellow row" id="yellow-ab">

   <div class="col-md-4 p-3" >
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks asd!
    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  
  <div class="col-md-4 p-3">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-4 p-3"  >
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-4 p-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
</div>
  














    
  



  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
<!--   
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div> -->

 


</div>

<div id="p1"><button class="btn btn-primary m-2 btn-lg " id="btn">next</button></div>
<div id="p2"><button class="btn btn-primary m-2 btn-lg "id="back">back</button><button class="btn btn-primary btn-lg " id="btn1">next</button></div>
<div id="p3"><button class="btn btn-primary m-2 btn-lg "id="back1">back</button><button class="btn btn-primary btn-lg " id="btn2">next</button></div>
<div id="p4"><button class="btn btn-primary m-2 btn-lg "id="back2">back</button><button class="btn btn-primary btn-lg " id="btn3">next</button></div>

</form>
</div>
<script>

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {

  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {

      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')

      }, false)
	  
    })
})()



document.getElementById("p2").style.display="none";
document.getElementById("p3").style.display="none";
document.getElementById("p4").style.display="none";

document.getElementById("btn").addEventListener("click",function(){
  
document.getElementById("p2").style.display="block";
document.getElementById("p4").style.display="none";
document.getElementById("p3").style.display="none";


document.getElementById("p1").style.display="none";
document.getElementById("blue-ab").classList.add("blue-ab");
document.getElementById("red-ab").classList.add("red-stat");
});





document.getElementById("btn1").addEventListener("click",function(){
  document.getElementById("p4").style.display="none";

  document.getElementById("p3").style.display="block";
  document.getElementById("p2").style.display="none";
  document.getElementById("p1").style.display="none";
  document.getElementById("blue-ab").classList.add("blue-stat");
  document.getElementById("red-ab").classList.add("red-stat");

document.getElementById("red-ab").classList.remove("red-ab");
document.getElementById("blue-ab").classList.remove("blue-ab");

document.getElementById("green-ab").classList.add("green-ab");
document.getElementById("blue-ab").classList.remove("blue-stat");

});





document.getElementById("back").addEventListener("click",function(){
  document.getElementById("p4").style.display="none";

  document.getElementById("p3").style.display="none";
document.getElementById("p2").style.display="none";
document.getElementById("p1").style.display="block";

// document.getElementById("red-ab").classList.add("red-ab");

document.getElementById("red-ab").classList.remove("red-stat");


document.getElementById("blue-ab").classList.remove("blue-ab");



});



document.getElementById("back1").addEventListener("click",function(){
  document.getElementById("p1").style.display="none";

document.getElementById("p3").style.display="none";
document.getElementById("p4").style.display="none";

document.getElementById("p2").style.display="block";

// document.getElementById("green-ab").classList.add("green-ab");
// document.getElementById("red-ab").classList.remove("red-stat");

document.getElementById("blue-ab").classList.remove("blue-stat");
document.getElementById("blue-ab").classList.add("blue-ab");


document.getElementById("green-ab").classList.remove("green-ab");



});







document.getElementById("btn2").addEventListener("click",function(){
  document.getElementById("p4").style.display="block";

document.getElementById("p3").style.display="none";
document.getElementById("p2").style.display="none";
document.getElementById("p1").style.display="none";
document.getElementById("green-ab").classList.add("green-stat");
document.getElementById("blue-ab").classList.remove("blue-stat");

document.getElementById("blue-ab").classList.remove("blue-ab");
document.getElementById("green-ab").classList.remove("green-ab");

document.getElementById("yellow-ab").classList.add("yellow-ab");
document.getElementById("green-ab").classList.remove("green-stat");

});











document.getElementById("back2").addEventListener("click",function(){
  document.getElementById("p1").style.display="none";
  document.getElementById("p3").style.display="block";

document.getElementById("p4").style.display="none";
document.getElementById("p2").style.display="none";

document.getElementById("green-ab").classList.add("green-ab");
document.getElementById("blue-ab").classList.remove("blue-stat");

document.getElementById("green-ab").classList.remove("green-stat");


document.getElementById("yellow-ab").classList.remove("yellow-ab");



});












</script>
</body>

</html>