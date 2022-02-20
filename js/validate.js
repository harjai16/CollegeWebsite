
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}      
// close 

function seepass(){
    var y = document.getElementById("cpassword");
  if (y.type === "cpassword") {
    y.type = "text";
  } else {
    y.type = "cpassword";
  }
} 
    		
			  function apply() {     
          window.location = "Register.php";             
             document.write(
               '<link rel="stylesheet" href="style/online-apply.css"> <h3 class="heading">You have redirect to Student registration page within few seconds.<br><br><progress value="0" max="4" id="progressBar" class="progress"></progress> </h3>' );
            setTimeout('apply()', 5000);
            
var timeleft = 10;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
  }
  document.getElementById("progressBar").value = 10 - timeleft;
  timeleft -= 1;
}, 1000);
var delayInMilliseconds = 5000; //1 second

setTimeout(function() {
  //your code to be executed after 1 second
}, delayInMilliseconds);
        }
			


// 
 function notify() {
      window.location.href = 'underwork.php';
    }


    // home page location
    function homepage() {
      window.location = "index.php";
        }



// movile validate

function phoneno(){          
	$('#mobile').keypress(function(e) {
		var a = [];
		var k = e.which;
  
		for (i = 48; i < 58; i++)
			a.push(i);
  
		if (!(a.indexOf(k)>=0))
			e.preventDefault();
	});
  }

  function info_toast(){
      
  toastr.options = {
    "closeButton": true,
    "debug": true,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-bottom-left",
    "preventDuplicates": true,
    "onclick":null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "8000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
    toastr.warning("This  site is under maintainence...");
  }

  // getdata state and country
  
// getdataa


// crreate myHome belong to country and states
function myHome(data)
{
	
	const ajaxreq = new XMLHttpRequest();
	ajaxreq.open('GET', 'http://localhost/ssiet/getdata.php?selectvalue='+data, 'TRUE');
	ajaxreq.send();

	ajaxreq.onreadystatechange = function(){
		if(ajaxreq.readyState == 4 && ajaxreq.status == 200){
			document.getElementById('states').innerHTML = ajaxreq.responseText;
		}
	}
}


// go to top

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// captcha validate


function logout(){
      
  toastr.options = {
    "closeButton": true,
    "debug": true,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-center",
    "preventDuplicates": true,
    "onclick":logout,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "8000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
    toastr.success("You are log out");
    
  }

  function logout() {     
    window.location = "logout.php";             
      setTimeout('logout()', 3000);
  }
  

  // login please wait function
