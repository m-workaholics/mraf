function showMap() {
	document.getElementById('map-div').style.display='block';
	document.getElementById('update-me').style.display='none'
}

function showUpdate(){
	document.getElementById('update-me').style.display='block';
	document.getElementById('map-div').style.display='none'
}
function ShowImageUpdate() {
	document.getElementById('mechanic-wrapper').style.display='block'
}
function accSetting(){
    document.getElementById('accSettings').style.display="block"
    document.getElementById('all_fields').style.display="none"
    document.getElementById('update-me').style.display='none';
	document.getElementById('map-div').style.display='none'
}
function updateMyrepr(id){
     var checkboxes = document.getElementsByName('check_veh');
  var checkboxesChecked = [];
  // loop over them all
  for (var i=0; i<checkboxes.length; i++) {
     // And stick the checked ones onto an array...
     if (checkboxes[i].checked) {
        checkboxesChecked.push(checkboxes[i].value);
     }
  }
	work_time = document.getElementById('time').value;
	if(work_time == '' || work_time == ' '){
		document.getElementById('time_span').style.display = 'block'
	}
	if(work_time != '' && work_time != ' '){
		document.getElementById('job_span').style.display = 'none';
		document.getElementById('time_span').style.display = 'none'

        var request = false;
        if (window.XMLHttpRequest) {
            request = new XMLHttpRequest();
        }
        else if (window.ActiveXObject) {
            request = new ActiveXObject('Microsoft.XMLHTTP');
        }
        if(request){
            request.open('POST', "updateforUsers.php", true);
            request.onreadystatechange = function(){

            	if (request.readyState == 4 && request.status == 200) {
                 alert(request.responseText)
                }   
            }
            
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send("id="+id+"&time="+work_time+"&veh="+checkboxesChecked);
        }

	}
}