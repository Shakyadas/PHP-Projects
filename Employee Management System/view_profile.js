function checkMobile(){
    var pattern = /^[0-9]+$/;
    var x = document.forms["personal_form"]["mobile"].value;
    var y = document.getElementById("errmobile");
    if(x=="")   {x=""; y.innerHTML="*Mobile must be filled out";   return false;}
    else if(!x.match(pattern)) {x=""; y.innerHTML="*Only Numbers are allowed";   return false;}
    else if(x.length!=10) {x=""; y.innerHTML="*Length should be 10 ";   return false;}
    else{y.innerHTML=""; return true;}
}

function checkEmail(){
    var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var x = document.forms["personal_form"]["email"];
    var y = document.getElementById("erremail");
    if(x.value=="")   {x=""; y.innerHTML="*Email must be filled out";  return false;}
    else if(!x.value.match(pattern)) {x=""; y.innerHTML="*Invalid Email";  return false;}
    else if(x.length>35) {x=""; y.innerHTML="*Max 35 characters";  return false;}
    else{y.innerHTML=""; return true;}
}

function checkF_name(){
    var pattern = /^[a-zA-Z ]+$/;
    var x = document.forms["personal_form"]["f_name"].value;
    var y = document.getElementById("errf_name");
    if(x=="") {y.innerHTML=""; return true;}
    if(!x.match(pattern)) {x=""; y.innerHTML="*Only characters are allowed";   return false;}
    else if(x.length>30) {x=""; y.innerHTML="*Max 30 characters";  return false;}
    else{y.innerHTML=""; return true;}
}

function checkS_name(){
    var pattern = /^[a-zA-Z ]+$/;
    var x = document.forms["personal_form"]["s_name"].value;
    var y = document.getElementById("errs_name");
    if(x=="") {y.innerHTML=""; return true;}
    else if(!x.match(pattern)) {x=""; y.innerHTML="*Only characters are allowed";   return false;}
    else if(x.length>30) {x=""; y.innerHTML="*Max 30 characters";  return false;}
    else{y.innerHTML=""; return true;}
}

function checkMYear(){
    var pattern = /^[0-9]+$/;
    var x = document.forms["education_form"]["m_year"].value;
    var y = document.getElementById("errm_year");
    if(x=="")   {y.innerHTML="";  return true;}
    if(!x.match(pattern)) {x=""; y.innerHTML="*Only Numbers are allowed";   return false;}
    if(parseInt(x)<1950 || isNaN(x) || x.length>4) {x=""; y.innerHTML="*Invalid Year";   return false;}
    y.innerHTML=""; return true;
}

function checkBYear(){
    var pattern = /^[0-9]+$/;
    var x = document.forms["education_form"]["b_year"].value;
    var y = document.getElementById("errb_year");
    if(x=="")   { y.innerHTML="";  return true;}
    if(!x.match(pattern)) {x=""; y.innerHTML="*Only Numbers are allowed";   return false;}
    if(parseInt(x)<1950 || isNaN(x) || x.length>4) {x=""; y.innerHTML="*Invalid Year";   return false;}
    y.innerHTML=""; return true;
}

function checkMCGPA(){
    var pattern1 = /^([0-9]){1,2}$/;
    var pattern = /^([0-9]){1,2}([.]){1}([0-9]){1,2}$/;
    var per = /[%]/;
    var x = document.forms["education_form"]["m_cgpa"].value;
    var y = document.getElementById("errm_cgpa");
    if(x=="")   {y.innerHTML="";  return true;}
    if(x.match(pattern1)) {y.innerHTML="";   return true;}
    if(x.match(per)) {x=""; y.innerHTML="*% sign not allowed";   return false;}
    if(!x.match(pattern)) {x=""; y.innerHTML="*Invalid CGPA";   return false;}
    if(parseInt(x)<0 || parseInt(x)>100 || isNaN(x) || x.length>4) {x=""; y.innerHTML="*Invalid CGPA";   return false;}
    y.innerHTML=""; return true;
}

function checkBCGPA(){
    var pattern1 = /^([0-9]){1,2}$/;
    var pattern = /^([0-9]){1,2}([.]){1}([0-9]){1,2}$/;
    var per = /[%]/;
    var x = document.forms["education_form"]["b_cgpa"].value;
    var y = document.getElementById("errb_cgpa");
    if(x=="")   {y.innerHTML="";  return true;}
    if(x.match(pattern1)) {y.innerHTML="";   return true;}
    if(x.match(per)) {x=""; y.innerHTML="*% sign not allowed";   return false;}
    if(!x.match(pattern)) {x=""; y.innerHTML="*Invalid CGPA";   return false;}
    if(parseInt(x)<0 || parseInt(x)>100 || isNaN(x) || x.length>4) {x=""; y.innerHTML="*Invalid CGPA";   return false;}
    y.innerHTML=""; return true;
}

function checkBasic(){
    var pattern = /^[0-9]+$/;
    var x = document.forms["payment_form"]["basic"].value;
    var y = document.getElementById("errbasic");
    if(x=="")   {x=""; y.innerHTML="*Basic Salary must be filled out";   return false;}
    else if(!x.match(pattern)) {x=""; y.innerHTML="*Only Numbers are allowed";   return false;}
    else{y.innerHTML=""; return true;}
}

function checkHRA(){
    var pattern = /^[0-9]+$/;
    var x = document.forms["payment_form"]["hra"].value;
    var y = document.getElementById("errhra");
    if(x=="") {y.innerHTML=""; return true;}
    if(!x.match(pattern)) {x=""; y.innerHTML="*Only Numbers are allowed";   return false;}
    else{y.innerHTML=""; return true;}
}

function checkConveyance(){
    var pattern = /^[0-9]+$/;
    var x = document.forms["payment_form"]["conveyance"].value;
    var y = document.getElementById("errconveyance");
    if(x=="") {y.innerHTML=""; return true;}
    if(!x.match(pattern)) {x=""; y.innerHTML="*Only Numbers are allowed";   return false;}
    else{y.innerHTML=""; return true;}
}

function checkMedical(){
    var pattern = /^[0-9]+$/;
    var x = document.forms["payment_form"]["medical"].value;
    var y = document.getElementById("errmedical");
    if(x=="") {y.innerHTML=""; return true;}
    if(!x.match(pattern)) {x=""; y.innerHTML="*Only Numbers are allowed";   return false;}
    else{y.innerHTML=""; return true;}
}

function checkSpecial(){
    var pattern = /^[0-9]+$/;
    var x = document.forms["payment_form"]["special"].value;
    var y = document.getElementById("errspecial");
    if(x=="") {y.innerHTML=""; return true;}
    if(!x.match(pattern)) {x=""; y.innerHTML="*Only Numbers are allowed";   return false;}
    else{y.innerHTML=""; return true;}
}

function checkProvident(){
    var pattern = /^[0-9]+$/;
    var x = document.forms["payment_form"]["provident"].value;
    var y = document.getElementById("errprovident");
    if(x=="") {y.innerHTML=""; return true;}
    if(!x.match(pattern)) {x=""; y.innerHTML="*Only Numbers are allowed";   return false;}
    else{y.innerHTML=""; return true;}
}

function checkBankName(){
    var pattern = /^[a-zA-Z ]+$/;
    var x = document.forms["bank_form"]["bankname"].value;
    var y = document.getElementById("errbankname");
    if(x=="")   {x=""; y.innerHTML="*Bank Name must be filled out";   return false;}
    else if(!x.match(pattern)) {x=""; y.innerHTML="*Only characters are allowed";   return false;}
    else{y.innerHTML=""; return true;}
}

function checkAccount(){
    var pattern = /^[0-9]+$/;
    var x = document.forms["bank_form"]["account"].value;
    var y = document.getElementById("erraccount");
    if(x=="")   {x=""; y.innerHTML="*Account No. must be filled out";   return false;}
    else if(!x.match(pattern)) {x=""; y.innerHTML="*Only Numbers are allowed";   return false;}
    else if(x.length<10 || x.length>16) {x=""; y.innerHTML="*Invalid Length ";   return false;}
    else{y.innerHTML=""; return true;}
}

function checkPAN(){
    var pattern = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}$/;
    var x = document.forms["bank_form"]["pan"].value;
    var y = document.getElementById("errpan");
    if(x=="")   {y.innerHTML="";   return true;}
    else if(!x.match(pattern)) {x=""; y.innerHTML="*Invalid PAN";   return false;}
    else{y.innerHTML=""; return true;}
}