<html>
<head>
    <title></title>
</head>
<body>
<script>
    var xhr=new XMLHttpRequest();

    xhr.onreadystatechange=function () {
        if (xhr.readyState==4 && xhr.status==200){
            var xmlData=xhr.responseXML;



            /* var users=xmlData.getElementsByTagName("employee");

            for (i=0; i<users.length; i++){
                var x=users[i].childNodes;
                for (j=0; j<x.length; j++){

                    if (x[j].nodeType==1){
                        // document.write(x[j].childNodes[0].nodeValue+"<br/>");

                        document.write(xmlData.getElementsByTagName("emp_fname")[j].childNodes[0].nodeValue+" ");
                        // document.write(xmlData.getElementsByTagName("emp_mname")[j].childNodes[0].nodeValue+" ");
                        // document.write(xmlData.getElementsByTagName("emp_lname")[j].childNodes[0].nodeValue+" ");
                        //
                        // document.write(xmlData.getElementsByTagName("emp_qualification")[j].childNodes[0].nodeValue+"<br/>");
                        // document.write(xmlData.getElementsByTagName("emp_dept")[j].childNodes[0].nodeValue+"<br/>");
                    }
                }

                document.write("<br/><br/>");
            } */
        }
    };
    xhr.open("GET","users.php",true);
    xhr.send();
</script>
</body>
</html>

