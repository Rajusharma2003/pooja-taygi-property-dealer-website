function select_courses_func()
{
  var select = document.getElementById("coursesid");
  var typevalue = select.options[select.selectedIndex].value;

  
  
  if (typevalue == 'B.Tech')
  {
    document.getElementById("branchsec").style.display = "block";
    document.getElementById("branchpid").innerHTML="<select name='branch' id='branchid' class='input validate[required]'><option value='' selected='selected'>Select Branch*</option>\
    <option value='Civil'>Civil</option>\
    <option value='Electrical'>Electrical</option>\
    <option value='Electronics & Communication'>Electronics & Communication</option>\
    <option value='Electrical & Electronics'>Electrical & Electronics</option>\
    <option value='Mechanical'>Mechanical</option>\
    <option value='Computer Science'>Computer Science</option>\
    <option value='Biotechnology'>Biotechnology</option>\
    <option value='Cloud Computing & Virtualization'>Cloud Computing & Virtualization</option>\
    <option value='Data Analytics'>Data Analytics</option>\
    <option value='Cyber Security and Forensics'>Cyber Security and Forensics</option>\
    <option value='Automobile Engineering'>Automobile Engineering</option>\
    <option value='Mechatronics Engineering'>Mechatronics Engineering</option>\
    <option value='Artificial Intelligence and Machine Learning'>Artificial Intelligence and Machine Learning</option>\
    <option value='Industrial Internet of Things'>Industrial Internet of Things</option>\
    <option value='Smart Manufacturing'>Smart Manufacturing</option>\
    <option value='Electronics & Computer Engineering'>Electronics & Computer Engineering</option>\
    <option value='Electronics & Communication (with minor CS)'>Electronics & Communication (with minor CS)</option>\
    <option value='Electronics & Communication (with VLSI)'>Electronics & Communication (with VLSI)</option>\
	<option value='Computer Science & Engineering (Specialization in Artificial Intelligence & Machine Learning with IOT)'>AIML with IOT</option>\
	<option value='Computer Science & Engineering (Specialization in Block Chain Technology)'>Block Chain Technology</option>\
	<option value='Mechanical Engineering with minor in Computer Science & Engineering'>Mechanical Engineering (with minor CS)</option>\
  </select>";
  }
 

}