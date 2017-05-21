<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
</head>
<body>
<html>
<head><title>Profiling system(home)</title>
<style>
ul#nav, ul.sub1{
    list-style-type: none;
}
ul#nav li{
    width: 200px;
    text-align:center;
    position: relative;
    float:left;
    margin-right: 38px;
    align-content: center;
}

ul#nav a{
    text-decoration: none;
    display: block;
    width: 200px;
    height: 40px;
    line-height:25px;
    background-color: violet;
}
ul#nav .sub1 a{
    margin-top:2px;
}

ul#nav li:hover > a{
    background-color: violet;
}

ul#nav li:hover a:hover{
    background-color: white;
}

ul#nav ul.sub1{
    display: none;
    position: absolute;
    top: 25px;
    left:0px;
}
ul#nav li:hover .sub1{
    display: block;
} 
    
    
    </style>
</head>
<body bgcolor="#CCCCCC">
      <table width="1000px" height="auto" border=0 align=center bgcolor="gray">
        <tr>
            <td>
            <div class="logo" width: 1000px; height: 96px;><center><img src="top.jpg" width="1000px" height="98px"></center></div>
            <div class="banner" align: center; width: 1000px; height: 98px;><center><img src="YPMR.jpg" width="1000px" height="98px"></center></div>
            </td>
        </tr>
    </table>
    <table width="1000px" height="20px" align=center background="background.jpg">

           <center>
            <tr>
            <td>
            <ul id="nav">
          <center>
	           <li><a href="home.php"><font face= cambria>Home</font></a></li>
	           <li><a href="info.php"><font face= cambria>Info</font></a>
		              <ul class="sub1">
			                 <li><a href="contact.php"><font face= cambria>Contact Us</font></a></li>
			                
                        </ul>

	           </li>
                 <li><a href="about.php"><font face= cambria>About  Us</font></a></li>
	           <li><a href="Profiling system.php"><font face= cambria>Create your Profile</font></a></li>
		  </center>	   
            </ul>
            </td>
        </tr>
    </table>
    <br>
    <table width= 1000px bgcolor="#333333" align=center>
</center>
            <th> 
                <center>
                </center>
            </th>
            <tr>
                <td align=center padding: 5;><font face="Garamond" color="#FFCCCC" size=10px;><u><b>CREATE YOUR PROFILE</b></u><br><font color="orange">
                        <?php

if(mysql_connect('localhost','root','')) {
	if(mysql_select_db('ec_council'))
		echo '';
	else
		echo 'db not  connected.';
}
else
	echo 'not connected';

	if(isset($_POST['submit'])){
		if($Query = mysql_query("INSERT INTO  employee_profile(Name,Address,Age,Gender,Civil_Status,Date_of_Birth,Weight,Height,Religion,Nationality,Contact_Number,Email,Objectives,Skills,Proficient,primary_name_school,primary_address,secondary_name_school,secondary_address,tertiary_name_school,tertiary_address,tertiary_course,seminars_trainings)
		VALUES('".$_POST['CharName']."','".$_POST['CharAddress']."','".$_POST['IntAge']."','".$_POST['CharGender']."','".$_POST['CharCivilStatus']."','".$_POST['IntDateofBirth']."','".$_POST['IntWeight']."','".$_POST['IntHeight']."','".$_POST['CharReligion']."','".$_POST['CharNationality']."','".$_POST['IntContactNumber']."','".$_POST['CharE-Mail']."','".$_POST['CharObjectives']."','".$_POST['CharSkills']."','".$_POST['CharProficient_in_speaking_and_writing']."','".$_POST['CharNameofSchool']."','".$_POST['CharSchoolAddress']."','".$_POST['CharNameofSchool']."','".$_POST['CharSchoolAddress']."','".$_POST['CharNameofSchool']."','".$_POST['CharSchoolAddress']."','".$_POST['CharCourse']."','".$_POST['CharTrainingsandSeminarsAttended']."') ") or die(mysql_error()))
			echo 'Your profile is Added!';
		else
			echo 'Error!';

/*
			foreach($_POST as $key => $Data){
			echo $key.' = '.$Data.'<br/>';
		}
		
		*/
			

	}


?>
</font>
                  </center>
                  <img src="Profiling of  applicants_clip_image001.png" alt="lign" width="998" height="20">
<form action = "response.php" method = "post">
    <center>
      <font type="arial" color="#999966" size="6">
        <p><b><u></u></b></p>
      </font>
    </center>
  </form>
  <form action = "#" method = "post"><center><font type="arial" color="#FFCCCC" size="6"><p><b><u>Personal Information</u></b></p>
    </font></center>
    <center><font type="arial" color="#999966" size="05"><b></b></font><p><font color="#999966" size="05" type="arial"><b><u>Name:</u>
      <input type  = "text" name = "CharName" size="40" placeholder = "Last name, Given name, Initial name"/>
      <u>Address:</u></b></font><font color="#999966" size="05" type="arial"><b>
      <input type  = "text" name = "CharAddress" size="40" placeholder = "Type your Address here......"/>
      <u>Age:</u>
      <select name="IntAge">
	   <option>21 years old</option>
	   <option>22 years old</option>
	   <option>23 years old</option>
	   <option>24 years old</option>
	   <option>25 years old</option>
	   <option>26 years old</option>
	   <option>27 years old</option>
	   <option>28 years old</option>
	   <option>29 years old</option>
	   <option>30 years old</option>
	   <option>31 years old</option>
	   <option>32 years old</option>
	   <option>33 years old</option>
	   <option>34 years old</option>
	   <option>35 years old</option>
	   <option>36 years old</option>
	   <option>37 years old</option>
	   <option>38 years old</option>
	   <option>39 years old</option>
	   <option>40 years old</option>
	   <option>41 years old</option>
	   <option>42 years old</option>
	   <option>43 years old</option>
	   <option>44 years old</option>
	   <option>45 years old</option>
	   <option>46 years old</option>
	   <option>47 years old</option>
	   <option>48 years old</option>
	   <option>49 years old</option>
	   <option>50 years old</option>
	   <option>51  years old</option>
	   <option>52  years old</option>
	   <option>53  years old</option>
	   <option>54  years old</option>
	   <option>55  years old</option>
	   <option>56  years old</option>
	   <option>57  years old</option>
	   <option>58  years old</option>
	   <option>59  years old</option>
	   <option>60  years old</option>
	   <option>61  years old</option>
	   <option>62  years old</option>
	   <option>63  years old</option>
	   <option>64  years old</option>
	   <option>65  years old</option>
	   <option>66  years old</option>
	   <option>67  years old</option>
	   <option>68  years old</option>
	   <option>69  years old</option>
	   <option>70  years old</option>
	   <option>71  years old</option>
	   <option>72  years old</option>
	   <option>73  years old</option>
	   <option>74  years old</option>
	   <option>75  years old</option>
      </select>
      </b></font></p>
    </center>

	
	 <center><font type="arial" color="#999966" size="05"><b></b></font><p><font color="#999966" size="05" type="arial"><b><u>Gender:</u>
	   <select name="CharGender">
	   <option>Male</option>
	   <option>Female</option>
	   </select>
      <u>Civil Status:</u></b></font><font color="#999966" size="05" type="arial"><b>
      <select name="CharCivilStatus">
	   <option>Single</option>
	   <option>Married</option>
	    <option>Divorced</option>
	   </select>
      <u>Date of Birth:</u>      </b></font><font color="#999966" size="05" type="arial"><b>
      <input type  = "text" name = "IntDateofBirth" size="40" placeholder = "Type here......"/>
      </b></font></p>
    </center>
	
	 <center><font type="arial" color="#999966" size="05"><b></b></font>
	   <p><font color="#999966" size="05" type="arial"><b><u>Weight:</u>
	   <input type  = "text" name = "IntWeight" size="20" placeholder = "Type your Weight in kilogram......."/>
      <u>Height:</u></b></font><font color="#999966" size="05" type="arial"><b>
      <input type  = "text" name = "IntHeight" size="20" placeholder = "Type your Height in centimeter......."/>
      </b></font><font color="#999966" size="05" type="arial"><b>
      <u>Religion:</u>
      <input type  = "text" name = "CharReligion" size="40" placeholder = "Type your Religion here......."/>
      </b></font></p>
    </center>
	
	 <center>
	   <p><font color="#999966" size="05" type="arial"><b><u>Nationality:</u></b></font><font color="#999966" size="05" type="arial"><b>
	   <input type  = "text" name = "CharNationality" size="20" placeholder = "Type here......."/>
	   <u>Contact Number:</u>	 </b></font><font color="#999966" size="05" type="arial"><b>
	 <input type="text" size="20" name = "IntContactNumber" placeholder = "Type your cp Number here......."/>
	 </b></font><font color="#999966" size="05" type="arial"><b>
	 <u>E-Mail:</u>
	 <input type  = "text" name = "CharE-Mail" size="30" placeholder = "Type your E-Mail here......"/>
	 </b></font></p>
    </center>
	
	
	
    <center>
      <font type="arial" color="#999966" size="05"><b><img src="Profiling of  applicants_clip_image001.png" alt="lign" width="988" height="20" /></b></font><font type="arial" color="#999966" size="05"><b><b><u>Objectives:</u></b></b></font>
    </center>

 
    <center><font type="arial" color="#999966" size="05"><b><p><b><u>
   <textarea name = "CharObjectives" cols = "80" rows = "5" placeholder = "Type your objectives here......"></textarea>
 </u></b></p>
</b></font>
 </center>
 
<center><font type="arial" color="#999966" size="05"></font>
  <p>&nbsp;</p>
</center>

<center> <font type="arial" color="#999966" size="05"><p><b><u>Proficient in speaking and writing:</u></b></p></font><p><textarea name = "CharProficient in speaking and writing" cols = "80" rows = "5" placeholder = "Type here......"></textarea></p></center>

<center> <font type="arial" color="#999966" size="05"><p><b><u>Skills:</u></b></p></font><p>
  <textarea name = "CharSkills" cols = "80" rows = "5" placeholder = "Type your Skills here......"></textarea>
    </p>
  <p>&nbsp;</p>
  <p><img src="Profiling of  applicants_clip_image001.png" alt="" width="981" height="22" />    </p>
</center>

<center><font type="arial" color="#FFCCCC" size="6"><p><b><u>Educational Background</u></b></p>
    </font></center>
	
	<center><font type="arial" color="gray" size="6"><p><b><u>Primary</u></b></p>
        <img src="Profiling of  applicants_clip_image001.png" alt="lign" width="439" height="25"></font>
	</center>
	<center>
	  <p><font color="#999966" size="05" type="arial"><b><u>Name of School:</u>
      <input type  = "text" name = "CharNameofSchool" size="30" placeholder ="Type the name of your School here......"/>
      <u>Address:</u></b></font><font color="#999966" size="05" type="arial"><b>
      <input type  = "text" name = "CharSchoolAddress" size="30" placeholder = "Type your school Address here......"/>
       <u>Year Graduated:</u>
      <select name=="IntYearGraduated">
	   <option>1940</option>
	   <option>1941</option>
	   <option>1942</option>
	   <option>1943</option>
	   <option>1944</option>
	   <option>1945</option>
	   <option>1946</option>
	   <option>1947</option>
	   <option>1948</option>
	   <option>1949</option>
	   <option>1950</option>
	   <option>1951</option>
	   <option>1952</option>
	   <option>1953</option>
	   <option>1954</option>
	   <option>1955</option>
	   <option>1956</option>
	   <option>1957</option>
	   <option>1958</option>
	   <option>1959</option>
	   <option>1960</option>
	   <option>1961</option>
	   <option>1962</option>
	   <option>1963</option>
	   <option>1964</option>
	   <option>1965</option>
	   <option>1966</option>
	   <option>1967</option>
	   <option>1968</option>
	   <option>1969</option>
	   <option>1970</option>
	   <option>1971</option>
	   <option>1972</option>
	   <option>1973</option>
	   <option>1974</option>
	   <option>1975</option>
	   <option>1976</option>
	   <option>1977</option>
	   <option>1978</option>
	   <option>1979</option>
	   <option>1980</option>
	   <option>1981</option>
	   <option>1982</option>
	   <option>1983</option>
	   <option>1984</option>
	   <option>1985</option>
	   <option>1986</option>
	   <option>1987</option>
	   <option>1988</option>
	   <option>1989</option>
	   <option>1990</option>
	   <option>1991</option>
	   <option>1992</option>
	   <option>1993</option>
	   <option>1994</option>
	   <option>1995</option>
	   <option>1996</option>
	   <option>1997</option>
	   <option>1998</option>
	   <option>1999</option>
	   <option>2000</option>
	   <option>2001</option>
	   <option>2002</option>
	   <option>2003</option>
	   <option>2004</option>
	   <option>2005</option>
	   <option>2006</option>
	   <option>2007</option>
	   <option>2008</option>
	   <option>2009</option>
	   <option>2010</option>
	   <option>2011</option>
	   <option>2012</option>
	   <option>2013</option>
	   <option>2014</option>
	   <option>2015</option>
      </select>
      </b></font></p>
    </center>
	
	<center><font type="arial" color="gray" size="6"><p><b><u>Secondary</u></b></p>
        <img src="Profiling of  applicants_clip_image001.png" alt="lign" width="439" height="25"></font>
	</center>
	<center>
	  <p><font color="#999966" size="05" type="arial"><b><u>Name of School:</u>
      <input type  = "text" name = "CharNameofSchool" size="30" placeholder ="Type the name of your School here......"/>
      <u>Address:</u></b></font><font color="#999966" size="05" type="arial"><b>
      <input type  = "text" name = "CharSchoolAddress" size="30" placeholder = "Type your school Address here......"/>
       <u>Year Graduated:</u>
      <select name=="IntYearGraduated">
	   <option>1940</option>
	   <option>1941</option>
	   <option>1942</option>
	   <option>1943</option>
	   <option>1944</option>
	   <option>1945</option>
	   <option>1946</option>
	   <option>1947</option>
	   <option>1948</option>
	   <option>1949</option>
	   <option>1950</option>
	   <option>1951</option>
	   <option>1952</option>
	   <option>1953</option>
	   <option>1954</option>
	   <option>1955</option>
	   <option>1956</option>
	   <option>1957</option>
	   <option>1958</option>
	   <option>1959</option>
	   <option>1960</option>
	   <option>1961</option>
	   <option>1962</option>
	   <option>1963</option>
	   <option>1964</option>
	   <option>1965</option>
	   <option>1966</option>
	   <option>1967</option>
	   <option>1968</option>
	   <option>1969</option>
	   <option>1970</option>
	   <option>1971</option>
	   <option>1972</option>
	   <option>1973</option>
	   <option>1974</option>
	   <option>1975</option>
	   <option>1976</option>
	   <option>1977</option>
	   <option>1978</option>
	   <option>1979</option>
	   <option>1980</option>
	   <option>1981</option>
	   <option>1982</option>
	   <option>1983</option>
	   <option>1984</option>
	   <option>1985</option>
	   <option>1986</option>
	   <option>1987</option>
	   <option>1988</option>
	   <option>1989</option>
	   <option>1990</option>
	   <option>1991</option>
	   <option>1992</option>
	   <option>1993</option>
	   <option>1994</option>
	   <option>1995</option>
	   <option>1996</option>
	   <option>1997</option>
	   <option>1998</option>
	   <option>1999</option>
	   <option>2000</option>
	   <option>2001</option>
	   <option>2002</option>
	   <option>2003</option>
	   <option>2004</option>
	   <option>2005</option>
	   <option>2006</option>
	   <option>2007</option>
	   <option>2008</option>
	   <option>2009</option>
	   <option>2010</option>
	   <option>2011</option>
	   <option>2012</option>
	   <option>2013</option>
	   <option>2014</option>
	   <option>2015</option>
	   </select>
      </b></font></p>
    </center>
	
	<center><font type="arial" color="gray" size="6"><p><b><u>Tertiary</u></b></p>
        <img src="Profiling of  applicants_clip_image001.png" alt="lign" width="439" height="25"></font>
	</center>
	<center>
	  <p><font color="#999966" size="05" type="arial"><b><u>Name of School:</u>
      <input type  = "text" name = "CharNameofSchool" size="30" placeholder ="Type the name of your School here......"/>
      <u>Address:</u></b></font><font color="#999966" size="05" type="arial"><b>
      <input type  = "text" name = "CharSchoolAddress" size="30" placeholder = "Type your school Address here......"/>
      <u>Course:</u>
      <input type  = "text" name = "CharCourse" size="0" placeholder = "Type your course here....."/>
      </b></font></p>
	  <p><font color="#999966" size="05" type="arial"><b>
	  <u>Year Graduated:</u>
      <select name=="IntYearGraduated">
	   <option>1940</option>
	   <option>1941</option>
	   <option>1942</option>
	   <option>1943</option>
	   <option>1944</option>
	   <option>1945</option>
	   <option>1946</option>
	   <option>1947</option>
	   <option>1948</option>
	   <option>1949</option>
	   <option>1950</option>
	   <option>1951</option>
	   <option>1952</option>
	   <option>1953</option>
	   <option>1954</option>
	   <option>1955</option>
	   <option>1956</option>
	   <option>1957</option>
	   <option>1958</option>
	   <option>1959</option>
	   <option>1960</option>
	   <option>1961</option>
	   <option>1962</option>
	   <option>1963</option>
	   <option>1964</option>
	   <option>1965</option>
	   <option>1966</option>
	   <option>1967</option>
	   <option>1968</option>
	   <option>1969</option>
	   <option>1970</option>
	   <option>1971</option>
	   <option>1972</option>
	   <option>1973</option>
	   <option>1974</option>
	   <option>1975</option>
	   <option>1976</option>
	   <option>1977</option>
	   <option>1978</option>
	   <option>1979</option>
	   <option>1980</option>
	   <option>1981</option>
	   <option>1982</option>
	   <option>1983</option>
	   <option>1984</option>
	   <option>1985</option>
	   <option>1986</option>
	   <option>1987</option>
	   <option>1988</option>
	   <option>1989</option>
	   <option>1990</option>
	   <option>1991</option>
	   <option>1992</option>
	   <option>1993</option>
	   <option>1994</option>
	   <option>1995</option>
	   <option>1996</option>
	   <option>1997</option>
	   <option>1998</option>
	   <option>1999</option>
	   <option>2000</option>
	   <option>2001</option>
	   <option>2002</option>
	   <option>2003</option>
	   <option>2004</option>
	   <option>2005</option>
	   <option>2006</option>
	   <option>2007</option>
	   <option>2008</option>
	   <option>2009</option>
	   <option>2010</option>
	   <option>2011</option>
	   <option>2012</option>
	   <option>2013</option>
	   <option>2014</option>
	   <option>2015</option>
      </select>
    </center>
	
	<img src="Profiling of  applicants_clip_image001.png" alt="lign" width="972" height="20">
<center><font type="arial" color="gray" size="6"><p><b><u>Trainings and Seminars Attended</u></b></p>
    </font></center>
	<center></u></b></p></font><p><textarea name = "CharTrainingsandSeminarsAttended" cols = "120" rows = "7" placeholder = "Type here......"></textarea></p></center>
	
<center><input type = "submit" name = "submit" value = "Submit profile"/><input type = "reset" value = "Clear form"/></center>
</form>


</body>
</html></font></b></p><br></td>   
            </tr>
            
    </table>
     <hr align=center width=80% color=violet>
    <table width=1000px align=center background="background.jpg">
	<tr>
	<td>
    <div>
        <center>
			<a target="_blank" href="http://"><img src="down.jpg" width=80px height=30px></a><br>
			<font face="cambria" size=3 color="#FFCCCC"> P O W E R E D <br>
			All Right Reserved 2014
			
			</font>
         
                                
         </center>
	</td>
	</tr>
    </div>
    </table>
   
</body>
</html>
