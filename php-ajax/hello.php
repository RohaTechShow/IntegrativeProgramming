<html>
    <head>
        <script>
            function showFirstState() {
                document.getElementById("status").innerHTML="Processing first name...";
            }

            function showSecondState() {
                document.getElementById("status").innerHTML="Processing last name...";
            }

            function sayHello() {
                var xhr=new XMLHttpRequest();
                var url="say-hello.php";
                var fname=document.getElementById("first_name").value;
                var lname=document.getElementById("last_name").value;

                var names="firstname="+fname+"&lastname="+lname;

                xhr.open("POST",url,true);
                xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                 
                xhr.onreadystatechange=function(){
                    if (xhr.readyState==4 && xhr.status==200){
                        var return_data=xhr.responseText;
                        document.getElementById("status").innerHTML=return_data;
                    }
                };
                
                xhr.send(names);
            }
        </script>
    </head>
   <body>
            <p id="status"></p>
        First Name: <input id="first_name" type="text" onfocus="showFirstState();"/><br><br>
        Last Name: <input id="last_name" type="text" onfocus="showSecondState();"/><br><br>
        <br><br>

       <button type="button" name="btnSubmit" onclick="sayHello();">Submit Data</button>
   </body>
</html>