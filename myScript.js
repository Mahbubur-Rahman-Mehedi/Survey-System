
var mainObject ={} ;

var tcount =0;
function checkSurevy() {
    var input = document.getElementById("surveyName").value;
    var data = "Survey name"; //deafult name
    if (input.trim() != '') {
            data = input;
            mainObject.Survey_name = data;
      }
      document.getElementById("demoSurveyName").innerHTML = data;
      console.log(mainObject);
  }
var selectedOption;
var totalOption=2;
function addOption( flag,j ){
  var element = document.getElementById("questionOption");
  var radioYes=[];
  var tc=false;
    var lblYes=[];        
        for(var i=0 ;i<j;i++){
          radioYes[i] = document.createElement("input");
          radioYes[i].setAttribute("name", "q1"); 
          /*creating label for Text to Radio button*/  
         lblYes[i] = document.createElement("input"); 
          if(selectedOption==2){
        /* create a radio button */         
        radioYes[i].setAttribute("type", "radio");             
        } 
        else if(selectedOption==1){
          /* create a radio button */                 
          radioYes[i].setAttribute("type", "checkbox");      
          } 
        else if(selectedOption==3){
           /* create a radio button */
           if(flag)
           radioYes[i].setAttribute("id", i ); 
           else radioYes[i].setAttribute("id", totalOption-1 );
         /*add radio button to Div*/  
         element.appendChild(radioYes[i]);
         tc=true;
           break;                      
        } 
        /*Set id of new created radio button*/  
        if(flag)
        radioYes[i].setAttribute("id", i ); 
        else radioYes[i].setAttribute("id", totalOption-1 ); 
        if(flag)
        lblYes[i].setAttribute("id", "qlabel"+i ); 
           else lblYes[i].setAttribute("id", "qlabel"+(totalOption-1 )); 
         /*add radio button to Div*/  
         element.appendChild(radioYes[i]);
         /*add label to Div*/ 
         element.appendChild(lblYes[i]);
         textYes = document.createElement("br");
         element.appendChild(textYes);           
    }
    if(!tc&&flag){
      /*add button to Div*/ 
      var btn = document.createElement("BUTTON");
      btn.setAttribute("onclick","addMoreOption()");
      btn.innerHTML="Add option";
      document.getElementById("addButton").appendChild(btn);
     }
}

//check which type question
function checkType(){
   
    var e = document.getElementById("qType");
    selectedOption = e.options[e.selectedIndex].value;
    console.log(selectedOption);
     // get the target div 
    var element = document.getElementById("questionOption");
    element.innerHTML=""; // removing previous type
    document.getElementById("addButton").innerHTML="";
    document.getElementById("addQuestion").innerHTML="";
   addOption(true,2);
    /*add button to Div*/ 
    var btn = document.createElement("BUTTON");
    btn.setAttribute("onclick","addQuestionToDemo()");
    btn.innerHTML="Add Question";
    document.getElementById("addQuestion").appendChild(btn);
}
function addMoreOption(){
  console.log("Add more");
  totalOption++;
  addOption(false,1);
 
}

var qLength = 0;
var donebtnAdded =false,opt=true;

function addQuestionToDemo(){
  var question = document.getElementById("question").value;
  var qOption=[];
  if(selectedOption!=3){
  for(var i=0;i<totalOption;i++){
      qOption[i] = document.getElementById("qlabel"+i).value;
      if(qOption[i].trim() == '' ) opt = false;
  }}
  if (question.trim() != ''&& opt) {
    // adding name,type 
    mainObject[tcount]={};
    mainObject[tcount].type = selectedOption;
    mainObject[tcount].name = question;
  var label= document.createElement("label");
  var text = document.createTextNode((qLength+1)+". "+question);
  label.appendChild(text);
  var div = document.createElement("div");
  div.setAttribute("id","dq"+qLength);
  document.getElementById("demoQuestionAdd").appendChild(div);
  document.getElementById("dq"+qLength).appendChild(label);
  document.getElementById("dq"+qLength).appendChild( document.createElement("br"));
  var radioYes=[];
  var tc=false;
  var lblYes=[]; 
  var element = document.getElementById("dq"+qLength); 
  console.log(totalOption);
  //creating mainobject option
  mainObject[tcount].option ={};
  mainObject[tcount].optionLength = totalOption.toString();
  for(var i=0;i<totalOption;i++){

          radioYes[i] = document.createElement("input");
          radioYes[i].setAttribute("name", "dqo1"+qLength); 
         
          if(selectedOption==2){
          /* create a radio button */         
          radioYes[i].setAttribute("type", "radio");             
          } 
          else if(selectedOption==1){
            /* create a radio button */                 
            radioYes[i].setAttribute("type", "checkbox");      
            } 
          else if(selectedOption==3){
             /* create a text field */
             lblYes[i] = document.createElement("input");
             lblYes[i].setAttribute("id", qLength+ "dqlabel"+i  );    
           /*add radio button to Div*/  
           element.appendChild(lblYes[i]);
            //addin to object
          
             break;                      
          } 
           /*creating label for Text to Radio button*/  
           lblYes[i] = document.createElement("label"); 
           var text = document.createTextNode(document.getElementById("qlabel"+i).value);
           lblYes[i].appendChild(text);
          /*Set id of new created radio button*/  
          radioYes[i].setAttribute("id",qLength+ "demoQRadio"+i ); 
          lblYes[i].setAttribute("id", "dqlabel"+i )   
           /*add radio button to Div*/  
           element.appendChild(radioYes[i]);
           /*add label to Div*/ 
           element.appendChild(lblYes[i]);
           textYes = document.createElement("br");
           element.appendChild(textYes);  
           //adding to object
           mainObject[tcount].option[i] =document.getElementById("qlabel"+i).value;
         // qOpt[i] = document.getElementById("qlabel"+i).value;
      
  }  
 
  if(qLength>1&&!donebtnAdded){
    var doneBtn = document.createElement("button");
    doneBtn.setAttribute("onclick","openPop()");
    doneBtn.innerHTML="Done";
    document.getElementById("demoQuestion").appendChild(doneBtn);
    donebtnAdded=true;
  }
  document.getElementById("question").value="";
  totalOption=2;
  qLength++;
  
  } opt=true;
  
  tcount++;

}

function openPop(){
  console.log(mainObject);
  console.log(JSON.stringify(mainObject));
  var ce = document.getElementById("demoSurveyName");
  if(ce.innerHTML!=""&&ce.innerHTML!="Survey name")
  document.getElementById("checkBefore").style.display = "block";
}
function closep() {
  document.getElementById("checkBefore").style.display = "none";
}
function surveyQuestion(){
  setCookie("jsonQuestion",JSON.stringify(mainObject),10);
  setSurvey();
  window.location="survey.php?flag=1";
}
function setSurvey() {
  var req = new XMLHttpRequest();
  var sm = "name="+JSON.stringify(mainObject);
  var ln = "length="+tcount;
  console.log(ln);
  console.log(qLength);
  console.log(sm);
  req.open('POST', 'setSurvey.php', true);
  req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  req.onload = function() {
      
  }
  req.send(sm+'&'+ln);
}
function setCookie(cname, cvalue, exday) {
  var d = new Date();
  d.setTime(d.getTime() + (exday*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  console.log("OK COOKIE");
}

// survey.php
document.getElementById('get').addEventListener('click', getSurvey);
function getSurvey() {
    var req = new XMLHttpRequest();
    req.open('GET','getSurvey.php',true );
    req.onload = function(){
        if(req.status==200){
        var namez = JSON.parse(req.responseText);
        var jsurvey = JSON.parse(namez[0]['survey']);
       // console.log(namez);
        var display = '<label id='+"surveyName"+'>'+ jsurvey['Survey_name']+'</label>';
        var display1 = jsurvey[1]['type'];
        var length = namez[0]['length'];
       // console.log(jsurvey);
        //console.log(display);
        //console.log(display1);
       // console.log(length);
       // console.log("length"+jsurvey[0]['optionLength']);
        for(var i=0;i<length;i++){
            console.log(jsurvey[i]);
            var qno = i+1;
            display+='<div class='+"questionfinal"+' >' + '<label class='+"qName"+'>' + qno +'.' + jsurvey[i]['name'] + '</label>' ;
            // add json data to display
            if(jsurvey[i]['type']==3){ // for text field
                 display+= '<br><input class='+"textQ"+' >' ;
                 console.log("text ok");
            }
            else{ // for radio and checkbox
                display+= '<div class='+"options"+' >';
                if(jsurvey[i]['type']==1){ // checkbox
                    for(var j=0;j<jsurvey[i]['optionLength'];j++){
                        display+= '<input class='+"checkboxOption"+ ' type="checkbox" name='+i+ ' >' + '<label>' + jsurvey[i]['option'][j] + '</label>' +'<br>';
                    }   console.log("check ok");                
                }
                else if(jsurvey[i]['type']==2){ // radio button
                    for(var j=0;j<jsurvey[i]['optionLength'];j++){
                        display+= '<input class='+"radioOption"+ ' type="radio" name='+i+ ' >' + '<label>' + jsurvey[i]['option'][j] + '</label>' +'<br>';
                    } console.log("radio ok");
                }
                display+='</div>'+'</div>';
            }
        } 
        //console.log(display);
        document.getElementById('survey').innerHTML=display;
       /* display +='<div class='+"users"+' >' +'<div class='+"im"+' >'+'<img src="'+people[i].avatar_url+' width="100px" height="100px" >' +'</div>'+'<div class='+"unLi"+' >'+'<ul>' +'<li>ID: '+people[i].id+'</li>' +'<li>Login: '+people[i].login+'</li>' +"<li><a href = '"+ people[i].repos_url  +"'>Repos:'" + people[i].repos_url + '</a>'+'</li>'+'</ul>' +'</div>'+'</div>';
                document.getElementById('showme').innerHTML = display;*/
    }
}
    req.send();
}
 