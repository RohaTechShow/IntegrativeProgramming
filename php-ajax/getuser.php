<html>
    <head>
        <title></title>
    </head>
    <body>
        <script>
            function getAllUsers() {
                document.getElementById("displayUser").innerHTML="";
                var xhr=new XMLHttpRequest();
                xhr.onreadystatechange=function () {
                    if (xhr.readyState==4 && xhr.status==200){
                        var xmlData=xhr.responseXML;

                        var users=xmlData.getElementsByTagName("employee");

                        for (i=0; i<users.length; i++){
                            var x=users[i].childNodes;
                            var fullName="";
                            var qualification="";
                            var dept="";
                            for (j=0; j<x.length; j++){
                                if (x[j].nodeType==1){
                                    if (x[j].nodeName=="emp_fname" || x[j].nodeName=="emp_mname" || x[j].nodeName=="emp_lname"){
                                        fullName+=x[j].childNodes[0].nodeValue+" ";
                                        // document.getElementById("users").innerHTML+="Full Name"+x[j].childNodes[0].nodeValue+" ";
                                    }
                                    else if (x[j].nodeName=="emp_qualification") {
                                        qualification+=x[j].childNodes[0].nodeValue+" ";
                                        // document.getElementById("users").innerHTML+="Qualification"+x[j].childNodes[0].nodeValue+" ";
                                    }

                                    else if (x[j].nodeName=="emp_dept"){
                                        dept+=x[j].childNodes[0].nodeValue+" ";
                                        // document.getElementById("users").innerHTML+="Department"+x[j].childNodes[0].nodeValue+" " ;
                                    }

                                }
                            }

                            document.getElementById("displayUser").innerHTML+="<div style=''> ";
                            document.getElementById("displayUser").innerHTML+="<b>Full Name: </b>"+fullName+"<br/>";
                            document.getElementById("displayUser").innerHTML+="<b>Qualification:</b> "+qualification+"<br/>";
                            document.getElementById("displayUser").innerHTML+="<b>Department: </b>"+dept+"<br/>";

                            document.getElementById("displayUser").innerHTML+="<br/><br/>";

                        }
                    }
                };
                xhr.open("GET","users.php",true);
                xhr.send();
            }

            function searchUser() {
                document.getElementById("displayUser").innerHTML="";
                var xhr=new XMLHttpRequest();
                var url="search-user.php";
                var fname=document.getElementById("firstname").value;

                xhr.onreadystatechange=function () {
                    if (xhr.readyState==4 && xhr.status==200) {
                        var returnData = xhr.responseText;

                        if (document.getElementById("firstname").value==null){
                            document.getElementById("displayUser").innerHTML="";
                        }
                        document.getElementById("displayUser").innerHTML=returnData;
                    }
                };
                var name="first_name="+fname;
                xhr.open("POST",url,true);
                xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xhr.send(name);
            }
        </script>

        <button type="button" onclick="getAllUsers()">Get All Users</button>
        <input type="text" id="firstname" onkeyup="searchUser()"/>
        <a href="create-new-user.html">Create new user</a>

        <a href="users.php">Show users XML Data</a>
        <p id="displayUser"></p>
    </body>
</html>

