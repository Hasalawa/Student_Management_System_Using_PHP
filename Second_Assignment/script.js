function adminLogin(){
    window.location="admin.php";
}


function teacherLogin(){
    window.location="teacherLogIn.php";
}


function studentLogin(){
    window.location="studentLogIn.php";
}


function academicOfficerLogin(){
    window.location="academicOfficer.php";
}


function home(){
    window.location="index.php";
}


function adminLogout(){
    window.location="index.php";
}


function cancle(){
    window.location="administration.php";
}


function backtoDashboard(){
    window.location="adminDashboard.php";
}


function adminProfile(){
    window.location="adminProfile.php";
}


function c(){
    window.location="teachers.php";
}


function cancle1(){
    window.location="adminProfile.php";
}


function cancle2(){
    window.location="academicOfficers.php";
}


function acadamicOfficerLogin(){
    window.location="academicOfficer.php";
}


function tline(){
    window.location="addLessonNotes.php";
}


function c4(){
    location.reload();
}


function backtoTDashboard(){
    window.location="teacherDashboard.php";
}


function academicOfficerProfile(){
    window.location="acadamicOfficerProfile.php";
}


function backtoDashboardA(){
    window.location="academicOfficerDashboard.php";
}


function rs(){
    window.location="rejisterStudents.php";
}


function aM(){
    window.location="assignmentMark.php";
}


function checkResult(){
    window.location= "checkResult.php";
}


function studentProfile(){
    window.location="studentProfileUpdate.php";
}


function backtoSDashboard(){
    window.location="studentDashboard.php";
}


function assignment(){
    window.location="stAssignmentSection.php";
}


function vsa(){
    window.location="viewSubmited_answer.php";
}


function vln(){
    window.location="view_Lesson_Note.php";
}

function assignmentMarks(){
    window.location="stAssignmentMarks.php";
}


function adminProcess(){

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var f = new FormData();
    f.append("email", email);
    f.append("password", password);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = this.responseText;
            if(t == "success"){
                window.location="adminDashboard.php";
            }else{
                alert(t);
            }
        }
    }

    r.open("POST","adminProcess.php",true);
    r.send(f);

}


function addAdmin(){

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var f = new FormData();
    f.append("name", name);
    f.append("email", email);
    f.append("password", password);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t == "Admin Adding Successfull"){
                location.reload();
            }
        }
    }

    r.open("POST","administrationProcess.php",true);
    r.send(f);

}


function addTeachers(){

    var name = document.getElementById("name1").value;
    var email = document.getElementById("email1").value;
    var mobile = document.getElementById("mobile1").value;
    var subject = document.getElementById("subject1").value;
    var grade = document.getElementById("grade1").value;
    var password = document.getElementById("password1").value;

    var f = new FormData();
    f.append("name1", name);
    f.append("email1", email);
    f.append("mobile1", mobile);
    f.append("subject1", subject);
    f.append("grade1", grade);
    f.append("password1", password);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = this.responseText;
            alert(t);
            if(t == "Teachers Adding Successfull."){
                location.reload();
            }else{
                echo("Not Successfull.");
            }
        }
    }

    r.open("POST","teacherProcess.php",true);
    r.send(f)

}

function sendEmail(){

    var sender = "hasalawakehan@gmail.com";
    var receiver = document.getElementById("receiver").value;
    var msg = "Hello";

    var f = new FormData();
    f.append("s",sender);
    f.append("r",receiver);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
        }
    }

    r.open("POST","verifyCodeSendingProcess.php",true);
    r.send(f);
   
}


function updateTeacherGradeAndSubject(){

    var i = document.getElementById("i").value;
    var s = document.getElementById("s").value;
    var g = document.getElementById("g").value;

    var f = new FormData();
    f.append("i", i);
    f.append("s", s);
    f.append("g", g);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t == "Subject and Grade Updated Successfull."){
                location.reload();
            }
        }
    }

    r.open("POST","teacherUpdateGradeProcess.php",true);
    r.send(f);

}


function saveChanges(){

    var n = document.getElementById("n").value;
    var e = document.getElementById("e").value;
    var p = document.getElementById("p").value;

    var f = new FormData();
    f.append("n", n);
    f.append("e", e);
    f.append("p", p);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t = "success"){
                window.location="index.php";
            }
        }
    }
    
    r.open("POST","adminUpdateProfileProcess.php",true);
    r.send(f);

}


function addAcademicOfficers(){

    var name = document.getElementById("name2").value;
    var email = document.getElementById("email2").value;
    var mobile = document.getElementById("mobile2").value;
    var password = document.getElementById("password2").value;

    var f = new FormData();
    f.append("name2", name);
    f.append("email2", email);
    f.append("mobile2", mobile);
    f.append("password2", password);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t == "Acadamic Officer Adding Successfull."){
                location.reload();
            }
        }
    }

    r.open("POST","addAcademicOfficersProcess.php",true);
    r.send(f);

}


function updateStudentGrade(){

    var id1 = document.getElementById("id1").value;
    var grad1 = document.getElementById("grad1").value;

    var f = new FormData();
    f.append("id1", id1);
    f.append("grad1", grad1);
    
    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t == "Grade Updated Successfull."){
                location.reload();
            }
        }
    }

    r.open("POST","studentsUpdateGradeProcess.php",true);
    r.send(f);

}


function teacherLogIN(){

    var email = document.getElementById("email3").value;
    var password = document.getElementById("password3").value;
    var rememberMe = document.getElementById("rememberme").checked;

    var f = new FormData();
    f.append("email3", email);
    f.append("password3", password);
    f.append("rememberme", rememberMe);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            if(t == "success"){
                window.location="teacherVerify.php";
            }else{
                alert(t);
            }
        }
    }

    r.open("POST","teacherLogInProcess.php",true);
    r.send(f);

}

function teacherVerify(){

    var verification = document.getElementById("verification").value;

    var f = new FormData();
    f.append("verification", verification);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            if(t == "success"){
                window.location="teacherDashboard.php";
            }else{
                alert(t);
            }
        }
    }

    r.open("POST","teacherVerifyProcess.php",true);
    r.send(f);

}

function academicOfficerLogIN(){

    var email = document.getElementById("email4").value;
    var password = document.getElementById("password4").value;
    var rememberMe = document.getElementById("rememberme1").checked;

    var f = new FormData();
    f.append("email4", email);
    f.append("password4", password);
    f.append("rememberme1", rememberMe);

    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            if(t == "success"){
                window.location="acadamicOfficerVerify.php";
            }else{
                alert(t);
            }
        }
    }

    r.open("POST","academicOfficerLogInProcess.php",true);
    r.send(f);

}


function acadamicOfficerVerify(){

    var verification = document.getElementById("verification1").value;

    var f = new FormData();
    f.append("verification1", verification);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            if(t == "success"){
                window.location="academicOfficerDashboard.php";
            }else{
                alert(t);
            }
        }
    }

    r.open("POST","academicOfficerVerifyProcess.php",true);
    r.send(f);

}


function studentLogIN(){

    var email = document.getElementById("email5").value;
    var password = document.getElementById("password5").value;
    var rememberMe = document.getElementById("rememberme2").checked;

    var f = new FormData();
    f.append("email5", email);
    f.append("password5", password);
    f.append("rememberme2", rememberMe);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            if(t == "success"){
                window.location="studentVerify.php";
            }else{
                alert(t);
            }
        }
    }

    r.open("POST","studentLogInProcess.php",true);
    r.send(f);

}


function studentVerify(){

    var verification = document.getElementById("verification2").value;

    var f = new FormData();
    f.append("verification2", verification);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            if(t == "success"){
                window.location="studentDashboard.php";
            }else{
                alert(t);
            }
        }
    }

    r.open("POST","studentVerifyProcess.php",true);
    r.send(f);

}


function uploadNote(){

    var title = document.getElementById("ti").value;
    var grade = document.getElementById("gr").value;
    var subject = document.getElementById("su").value;
    var note = document.getElementById("up");

    var f = new FormData();
    f.append("ti", title);
    f.append("gr", grade);
    f.append("su", subject);
    f.append("up",note.files[0]);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = this.responseText;
            alert(t);
            if(t == "success"){
                location.reload();
            }
        }
    }

    r.open("POST","uploadNoteProcess.php",true);
    r.send(f);

}


function uploadAssignment(){

    var ai = document.getElementById("ai").value;
    var to = document.getElementById("to").value;
    var sd = document.getElementById("sd").value;
    var ed = document.getElementById("ed").value;
    var sub = document.getElementById("sub").value;
    var gra = document.getElementById("gra").value;
    var upA = document.getElementById("upA");

    var f = new FormData();
    f.append("ai", ai);
    f.append("to", to);
    f.append("sd", sd);
    f.append("ed", ed);
    f.append("sub", sub);
    f.append("gra", gra);
    f.append("upA", upA.files[0]);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t == "success"){
                location.reload();
            }
        }
    }

    r.open("POST","uploadAssignmentProcess.php",true);
    r.send(f);

}


function teacherProfile(){
    window.location="teacherProfile.php";
}


function tSaveChanges(){

    var tName = document.getElementById("tName").value;
    var tEmail = document.getElementById("tEmail").value;
    var tMobile = document.getElementById("tMobile").value;
    var tPassword = document.getElementById("tPassword").value;

    var f = new FormData();
    f.append("tName", tName);
    f.append("tEmail", tEmail);
    f.append("tMobile", tMobile);
    f.append("tPassword", tPassword);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t == "success"){
                window.location="index.php";
            }
        }
    }

    r.open("POST","teacherUpdateProfileProcess.php",true);
    r.send(f);

}


function addMarks(){

    var stId = document.getElementById("stId").value;
    var asiId = document.getElementById("asiId").value;
    var sName = document.getElementById("sN").value;
    var grade = document.getElementById("grad").value;
    var mar = document.getElementById("mar").value;

    var f = new FormData();
    f.append("stId", stId);
    f.append("asiId", asiId);
    f.append("sN", sName);
    f.append("grad", grade);
    f.append("mar", mar);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t == "success"){
                location.reload();
            }
        }
    }

    r.open("POST","addMarksProcess.php",true);
    r.send(f);

}


function savechangeAcademic(){

    var name = document.getElementById("nameAcademic").value;
    var email = document.getElementById("emailAcademic").value;
    var mobile = document.getElementById("mobileAcademic").value;
    var password = document.getElementById("passwordAcademic").value;

    var f = new FormData();
    f.append("nameA", name);
    f.append("emailA", email);
    f.append("mobileA", mobile);
    f.append("passwordA", password);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t == "success"){
                window.location="index.php";
            }
        }
    }

    r.open("POST","academicOfficerUpdateProfileProcess.php",true);
    r.send(f);

}


function addStudent(){

    var name = document.getElementById("sName").value;
    var email = document.getElementById("sEmail").value;
    var mobile = document.getElementById("sMobile").value;
    var grade = document.getElementById("sGrade").value;
    var password = document.getElementById("sPassword").value;

    var f = new FormData();
    f.append("sN", name);
    f.append("sE", email);
    f.append("sM", mobile);
    f.append("sG", grade);
    f.append("sP", password);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t == "Student Adding Successful."){
                location.reload();
            }
        }
    }

    r.open("POST","addStudentProcess.php",true);
    r.send(f);

}


function releaseMarks(){

    var stu_Id = document.getElementById("stu_Id").value;
    var assin_Id = document.getElementById("assin_Id").value;
    var stu_Name = document.getElementById("stu_Name").value;
    var stu_Grad = document.getElementById("stu_Grad").value;
    var stu_Mar = document.getElementById("stu_Mar").value;

    var f = new FormData();
    f.append("sid", stu_Id);
    f.append("aid", assin_Id);
    f.append("aName", stu_Name);
    f.append("sGrade", stu_Grad);
    f.append("sMark", stu_Mar);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t == "Marks Adding Successful"){
                location.reload();
            }
        }
    }

    r.open("POST","releaseAddAssignmentMarkProcess.php",true);
    r.send(f);

}


function sSaveChanges(){

    var name = document.getElementById("sName").value;
    var email = document.getElementById("sEmail").value;
    var pwd = document.getElementById("sPassword").value;
    var mobile = document.getElementById("sMobile").value;

    var f = new FormData();
    f.append("name", name);
    f.append("email", email);
    f.append("pwd", pwd);
    f.append("mobile", mobile);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t == "Detailes Updated Successful."){
                window.location="index.php";
            }
        }
    }

    r.open("POST","studentProfileUpdateProcess.php",true);
    r.send(f);

}


function uploadAssi(){

    var sId = document.getElementById("stId1").value;
    var name = document.getElementById("sName1").value;
    var subject = document.getElementById("sSubject1").value;
    var grade = document.getElementById("sGrade1").value;
    var file = document.getElementById("asFile1");

    var f = new FormData();
    f.append("id", sId);
    f.append("name", name);
    f.append("subject", subject);
    f.append("grade", grade);
    f.append("file", file.files[0]);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
            if(t == "Your assigment uploaded successfully"){
                location.reload();
            }
        }
    }

    r.open("POST","studentAssignmentUploadProcess.php",true);
    r.send(f);

}


function proceedPayment(){

    var name = document.getElementById("name").innerText;
    var stu_id = document.getElementById("stu_id").innerText;
    var stu_grade = document.getElementById("stu_grade").innerText;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
        if(r.readyState == 4 && r.status == 200){
            var txt = r.responseText;
                    // Payment completed. It can be a successful failure.
            payhere.onCompleted = function onCompleted(orderId) {
                console.log("Payment completed. OrderID:" + orderId);
                // Note: validate the payment and show success or failure page to the customer
            };

            // Payment window closed
            payhere.onDismissed = function onDismissed() {
                // Note: Prompt user to pay again or show an error page
                console.log("Payment dismissed");
            };

            // Error occurred
            payhere.onError = function onError(error) {
                // Note: show an error page
                console.log("Error:"  + error);
            };

            // Put the payment variables here
            var payment = {
                "sandbox": true,
                "merchant_id": "1222356",    // Replace your Merchant ID
                "return_url": "http://localhost/Day_20/success.php",     // Important
                "cancel_url": "http://localhost/Day_20/error.php",     // Important
                "notify_url": "http://sample.com/notify",
                "order_id": "",
                "items": "Grade Upgrade",
                "amount": "1000.00",
                "currency": "LKR",
                "hash": txt, // *Replace with generated hash retrieved from backend
                "first_name": name,
                "last_name": "",
                "email": stu_id,
                "phone": stu_grade,
                "address": "",
                "city": "",
                "country": "",
                "delivery_address": "",
                "delivery_city": "",
                "delivery_country": "",
                
            };

            // Show the payhere.js popup, when "PayHere Pay" is clicked
            payhere.startPayment(payment);
            //document.getElementById('payhere-payment').onclick = function (e) {
                
            //};
        }
    }

    r.open("GET","paymentProcess.php",true);
    r.send();

}


function sendTeaEmail(){

    var sender = "hasalawakehan@gmail.com";
    var receiver = document.getElementById("receivert").value;

    var f = new FormData();
    f.append("s",sender);
    f.append("r",receiver);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
        }
    }

    r.open("POST","verifyTeaCodeSendingProcess.php",true);
    r.send(f);
    
}


function sendAcadeEmail(){
    
    var sender = "hasalawakehan@gmail.com";
    var receiver = document.getElementById("receiverA").value;

    var f = new FormData();
    f.append("s",sender);
    f.append("r",receiver);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            alert(t);
        }
    }

    r.open("POST","verifyAcaCodeSendingProcess.php",true);
    r.send(f);

}