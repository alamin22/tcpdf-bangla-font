
1.first download sutonnymj.ttf file
2.After downloading sutonnymj.ttf file put it ../tcpdf/fonts folder
3.Generate font from sutonnymj.ttf file with  command mode as
  path/tcpdf/fonts/tcpdf_addfont.php  -t sutonnymj.ttf
if you success then create three file in your path directory
such as 
sutonnymj.ctg.z, 
sutonnymj.z,
sutonnymj.php
sutonnymj.php that you can use font name in tcpdf pdf code
4. you need to create a converter to convert bangla sutonnymj font that use as bijoy font .
example lang -> bn
<?php
include"converter.php";
return[
	
	'Class'=>Unicode2Bijoy::convert('শ্রেণী'),
	'Roll'=>Unicode2Bijoy::convert('রোল'),
	'Working_Days'=>Unicode2Bijoy::convert('কর্মদিবস'),
	'Presence'=>Unicode2Bijoy::convert('উপস্থিতি'),
	'Absence'=>Unicode2Bijoy::convert('অনুপস্থিতি'),
	'Total_Marks'=>Unicode2Bijoy::convert('মোট নম্বর'),
	'Obtain_Marks'=>Unicode2Bijoy::convert('প্রাপ্ত নম্বর'),
	'Total_Students'=>Unicode2Bijoy::convert('মোট শিক্ষার্থী'),
	'Total_GP'=>Unicode2Bijoy::convert('মোট নম্বর'),
	'GPA'=>Unicode2Bijoy::convert('জিপিএ'),
	'Without_Add_Subject'=>Unicode2Bijoy::convert('অতিরিক্ত বিষয় ছাড়া'),
	'letter_grade'=>Unicode2Bijoy::convert('লেটার গ্রেড'),
	'Marks_Interval'=>Unicode2Bijoy::convert('নম্বর বিরতি'),
	'Grade_Point'=>Unicode2Bijoy::convert('গ্রেড নম্বর'),
	'Subject_Name'=>Unicode2Bijoy::convert('বিষয়ের নাম'),


];

?>
