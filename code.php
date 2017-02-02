
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HW 6</title>
		<style>
			table{
			border: 2px solid; 
			text-align: center;
			border-collapse: collapse;
			margin: 0 auto; 
			line-height: 15pt;
            }
            h1,p {text-align: center;}
		</style>
        <script>
            function validateForm(){
               var x = document.getElementById("congDB").value;
                var var1="";
                var cd= document.getElementById("congDB").value;
                var ch=document.forms["form"]["Chamber"].value;
                var key=document.forms["form"]["Keyword"].value;
                
                //for congress database
                var cd= document.getElementById("congDB").value;
                if(x == "Select your option"){
                    var1+="Congress database "
                }
                
                // for chamber
                var ch=document.forms["form"]["Chamber"].value;
                if(ch == null || ch == ""){
                var1+="Chamber ";
                }
                // for keyword
				var key=document.forms["form"]["Keyword"].value;
				if(key == null || key == ""){
                var1+="Keyword ";
                }
                
                if(var1=="" || var1==null)
                return true;
                else{
                    
					alert("Please enter the following missing information:"+ var1);
                return false;
            }
            }
            function billDetails(billid,bill_title,sponsor,intronon,last_action_at,billurl){
                //var bill_id=billid;
                //alert(bill_id);
                text1="<table  align=center style=\"width: 900px;\">";
                text1=text1+"<tr><td><br /><td></tr>";
                text1=text1+"<tr><td style='text-align:left;padding-left:200px;'>Bill id</td>";
                text1=text1+"<td style='text-align:left;'>"+billid+"</td></tr>";
                text1=text1+"<tr><td style='text-align:left;padding-left:200px;'>Bill Title</td>";
                if (bill_title=="")
                    text1=text1+"<td style='text-align:left;'>"+"NA"+"</td></tr>";
                else
                    text1=text1+"<td style='text-align:left;'>"+bill_title+"</td></tr>";
                text1=text1+"<tr><td style='text-align:left;padding-left:200px;'>Sponsor</td>";
                text1=text1+"<td style='text-align:left;'>"+sponsor+"</td></tr>";
                text1=text1+"<tr><td style='text-align:left;padding-left:200px;'>Introduced on</td>";
                text1=text1+"<td style='text-align:left;'>"+intronon+"</td></tr>";
                text1=text1+"<tr><td style='text-align:left;padding-left:200px;'>Last action with date</td>";
                text1=text1+"<td style='text-align:left;'>"+last_action_at+"</td></tr>";
                text1=text1+"<tr><td style='text-align:left;padding-left:200px;'>Bill URL</td>";
                if (bill_title=="")
                    text1=text1+"<td style='text-align:left;'><a target='_blank' href="+billurl+">"+billid+"</td></tr>"; 
                else
                    text1=text1+"<td style='text-align:left;'><a target='_blank' href="+billurl+">"+bill_title+"</td></tr>"; 
                    
                text1=text1+"<tr><td><br /><td></tr>";
			    text1=text1+"</table>";
                document.getElementById("output").innerHTML = text1;
			}
            
            function showlegislatordetails(image,fullname,fname,lname,termend,website,office,facebook,twitter){
                
                text1="<table  align=center style=\"width: 900px;\">";
                text1=text1+"<tr><td><br /></td></tr>";
                text1=text1+"<tr><td colspan=2><img src='"+image+"'></img></td></tr>"
                text1=text1+"<tr><td><br /></td></tr>";
                text1=text1+"<tr><td style='text-align:left;padding-left:200px;'>Full Name</td>";
                text1=text1+"<td style='text-align:left;'>"+fullname+"</td></tr>";
                text1=text1+"<tr><td style='text-align:left;padding-left:200px;'>Term Ends on</td>";
                text1=text1+"<td style='text-align:left;'>"+termend+"</td></tr>";
                text1=text1+"<tr><td style='text-align:left;padding-left:200px;'>Website</td>";
                if (website=="")
                    text1=text1+"<td style='text-align:left;'>NA</td></tr>";
                else
                    text1=text1+"<td style='text-align:left;'><a target='_blank' href="+website+">"+website+ "</a></td></tr>";
                text1=text1+"<tr><td style='text-align:left;padding-left:200px;'>Office</td>";
                text1=text1+"<td style='text-align:left;'>"+office+"</td></tr>";
                text1=text1+"<tr><td style='text-align:left;padding-left:200px;'>Facebook</td>";
                if (facebook=="")
                    text1=text1+"<td style='text-align:left;'>NA</td></tr>";
                else{
                    faceb="http://www.facebook.com/"+facebook;
                    text1=text1+"<td style='text-align:left;'><a target='_blank' href="+faceb+">"+fname+" "+lname+ "</td></tr>"; 
                }
                text1=text1+"<tr><td style='text-align:left;padding-left:200px;'>Twitter</td>";
                if (twitter=="")
                    text1=text1+"<td style='text-align:left;'>NA</td></tr>";
                else{
                    tweet="http://www.twitter.com/"+twitter;
                    text1=text1+"<td style='text-align:left;'><a target='_blank' href=\""+tweet+"\">"+fname+" "+lname+ "</td></tr>";
                }    
                text1=text1+"<tr><td><br /></td></tr>";
                text1=text1+"</table>";
                document.getElementById("output").innerHTML = text1;
                
            }
           
            function changeCongressDB(){
                var x = document.getElementById("congDB").value;
                document.getElementById("demo").innerHTML = x;
                document.getElementById("keywordid").value="";
            }
			 function clearInputs(){
                document.getElementById("myForm").reset();
                document.getElementById("demo").innerHTML = "Keyword*";
                document.getElementById("output").innerHTML="";
            }
        </script>
    </head>
    <body>
        <h1>Congress Information Search</h1>
        <div>
        <form name="form" id="myForm" method="post">
			<table align="center" style="border: 1px solid; text-align: center;width: 310px;
			margin: 0 auto; line-height: 20pt;">
				<tr>
					<td>Congress Database</td>
					<td>
            <select name="CongressDatabase" id="congDB" onchange="changeCongressDB()">
                <option selected disabled>Select your option</option>
                <option name="Legislator" id="legis" value="State/Representative*" >Legislator</option>
                <option name="Committee" value="Committee ID*">Committee</option>
                <option name="Bills" value="Bill ID*">Bills</option>
                <option name="Amendments" value="Amendment ID*">Amendments</option>
            </select>
                        <script type="text/javascript">
                                document.getElementById("congDB").value= "<br />
<b>Notice</b>:  Undefined index: CongressDatabase in <b>/home/scf-25/nickysin/apache2/htdocs/congress.php</b> on line <b>145</b><br />
";
                            </script>
                    </td></tr> 
			<tr>
			<td>Chamber</td>
            <td><input type="radio" name="Chamber" id="senate" value="senate" checked="checked">Senate
				<input type="radio" name="Chamber" id ="house" value="house">House
                <script type="text/javascript">
                                document.getElementById("<br />
<b>Notice</b>:  Undefined index: Chamber in <b>/home/scf-25/nickysin/apache2/htdocs/congress.php</b> on line <b>153</b><br />
").checked= true;
                            </script>
                </td></tr>
            <tr>
				<td><span id="demo">Keyword*</span></td>
				<td><input type="text" name="Keyword" id="keywordid" required>
                    <script type="text/javascript">
                                document.getElementById("keywordid").value= "";
                            </script>
                </td></tr>
			<tr>
				<td></td><td>
            <input type="submit" value="Search" name="submit" onclick="validateForm()">
            <input type="reset" value="Clear" onclick="clearInputs()">  
			<br/>
			</td></tr><tr>
			<td colspan="2">
				<div style="text-align:center">
				<a target='_blank' href="http://sunlightfoundation.com/" >Powerd by Sunlight Foundation</a></div></td></tr>
			</table>
         </form>
        
        </div>
        <div id="output">
                </div>
        <NOSCRIPT />
    </body>
</html>
