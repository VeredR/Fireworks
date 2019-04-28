<!DOCTYPE html>
<html>
<head>
<!--https://docs.google.com/spreadsheets/d/1Xd2JlcGMHJ7LMq0AnWZrYJutODgh0DnLCc3-fDmagjE/edit#gid=0-->
 

  <!--<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />-->
  
  <meta charset utf-8>
  <meta name = "viewport" content="width=device-width,initial-scale=1.0">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <link href="js/jquery.mobile-1.4.5.min.css" rel = "stylesheet" >
 <link href="css/fireworks.css" rel = "stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="js/jquery-4.3.0.min.js" type="text/javascript"></script>
  <script src="js/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
<script src='//script.sheetsu.com/'></script>
  <title>Fireworks</title>
  <!-- -->


</head>

<body background="../images/fireworks_BG_1280x720.png">
  <style >
  #progressTimer {
    width:560px;
    height:5px;
}
    </style>
  

  <div class="mobile-app-dashboard-header">
    <div id="progressTimer" ><progress ></progress></div>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://www.jqueryscript.net/demo/Easy-jQuery-Progress-Bar-Timer-Plugin-For-Bootstrap-3-progressTimer/js/jquery.progressTimer.js'></script>
</div>
 <script>
        $("#progressTimer").progressTimer({
            timeLimit: 20,
            warningThreshold: 10,
            baseStyle: 'progress-bar-warning',
            warningStyle: 'progress-bar-danger',
            completeStyle: 'progress-bar-info',
            onFinish: function() {
                console.log("I'm done");
            }
        });
    </script>
<script async defer src="https://apis.google.com/js/api.js"
      onload="this.onload=function(){};handleClientLoad()"
      onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>
    <!--<progress value="00:00" max="03:20" style="width:100%"></progress>-->
 
   <h3  style='text-align:center;color:white;' >#1 Song Country</h3>
 </div>
 <div class="mobile-app-dashboard">
   <table align ="center" id='eurojis' sheetsu='https://sheetsu.com/apis/v1.0su/fac06970e004'>
    <tr >
      <td > 
        <a href="" >
         <div class="mobile-app-dashboard-inner"   onclick="makeApiCall(event)"> 
          <!--<i class="fa fa-heart" aria-hidden="true" name= "love" id=U+1F60D></i>-->
           <i><img src="../images/fireworks_eurogi_96x96_06.png"  id = 6  name='euroji'/></i>
           <img src="../images/eurogi_06.png" class="clicked" style="display:none"/>
          <!-- <span>Love</span>-->
        </div>
      </a>
    </td>
    <td>
      <a href="" > 
        <div class="mobile-app-dashboard-inner"  onclick="makeApiCall(event)">
         <!-- <i class="fa fa-thumbs-up mobile-app-dashboard-icon" aria-hidden="true" name= "like" id=U+1F44D></i>-->
         <i><img src="../images/fireworks_eurogi_96x96_02.png" id= 2   name='euroji'/></i>
         <img src="../images/eurogi_2.png" class="clicked" style="display:none"/>
          <!-- <span>Like</span>-->
        </div>
      </a>
    </td>
  </tr>
  <tr><td>
    <a href="" >
      <div class="mobile-app-dashboard-inner"   onclick="makeApiCall(event)">
        <!--<i class="fa fa-meh" aria-hidden="true" name="meh" id=U+1F612></i>-->
        <i><img src="../images/fireworks_eurogi_96x96_03.png" id= 3  name='euroji'/></i>
        <img src="../images/eurogi_03.png" class="clicked" style="display:none"/>
        <!--<span>Meh</span>-->
      </div>
    </a>
  </td><td>
    <a href="" >
      <div class="mobile-app-dashboard-inner"  onclick="makeApiCall(event)">
        <!--<i class="fa fa-sad-tear" aria-hidden="true" name="sad" id=U+1F622 ></i>-->
         <i><img src="../images/fireworks_eurogi_96x96_04.png" id =4  name='euroji' /></i>
         <img src="../images/eurogi_04.png" class="clicked" style="display:none"/>
        <!--<span>Sad</span>-->
      </div>
    </a>
  </td></tr>
  <tr>
    <td> <a href=" " >
      <div class="mobile-app-dashboard-inner"   onclick="makeApiCall(event)" >
        <!--<i class="fa fa-poop" name="poop" aria-hidden="true" id =U+1F4A9></i>-->
        <i><img src="../images/fireworks_eurogi_96x96_01.png"  id =1   name='euroji'/></i>
        <img src="../images/eurogi_01.png" class="clicked" style="display:none"/>
        <!--<span>Poop</span>-->
      </div>
    </a>
  </td><td>
    <a href="" >
      <div class="mobile-app-dashboard-inner"   onclick="makeApiCall(event)">
        <!--<i class="fa fa-user-astronaut" aria-hidden="true" name="wow" id=U+1F631></i>-->
      <i><img src="../images/fireworks_eurogi_96x96_05.png"  id = 5  name='euroji'/></i>
      <img src="../images/eurogi_05.png" class="clicked" style="display:none"/>
        <!--<span>Wow</span>-->
      </div>
    </a>
  </td></tr>
  
</table>
   
 

<!--<script src="js/fireworks.js"></script>-->
<script language="javascript" type="text/javascript">
  
  
 
  function makeApiCall(e){
     e.preventDefault();
    var now = new Date();
    var time =now.getMinutes()+":"+now.getSeconds();
    var id = e.target['id'];
    $('#'+id+'.clicked').show();
    var rng ='A1:B1';
  
  var ssID = '1Xd2JlcGMHJ7LMq0AnWZrYJutODgh0DnLCc3-fDmagjE';
      var params = {
        spreadsheetId: ssID,  
        range: rng,  
       valueInputOption: 'RAW',  
      insertDataOption: 'INSERT_ROWS',  
      };

      var valueRangeBody = {
       id,time// TODO: Add desired properties to the request body.
      };

      var request = gapi.client.sheets.spreadsheets.values.append(params, valueRangeBody);
      request.then(function(response) {
        // TODO: Change code below to process the `response` object:
        console.log(response.result);
      }, function(reason) {
        console.error('error: ' + reason.result.error.message);
      });
    }


    function initClient() {
      var API_KEY = 'AIzaSyCSsbSuKgRzro-17-88XWN-gXFirvnseWQ'; 

      var CLIENT_ID = '1028108984154-hqvurpsbm7ugkvt4gas0rbmdcuds69n9.apps.googleusercontent.com';  

      var SCOPE = 'https://www.googleapis.com/auth/spreadsheets';

      gapi.client.init({
        'apiKey': API_KEY,
        'clientId': CLIENT_ID,
        'scope': SCOPE,
        'discoveryDocs': ['https://sheets.googleapis.com/$discovery/rest?version=v4'],
      }).then(function() {
        gapi.auth2.getAuthInstance().isSignedIn.listen(updateSignInStatus);
        updateSignInStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
      });
    }

    function handleClientLoad() {
      gapi.load('client:auth2', initClient);
    }

    function updateSignInStatus(isSignedIn) {
      if (isSignedIn) {
        makeApiCall();
      }
    }

    function handleSignInClick(event) {
      gapi.auth2.getAuthInstance().signIn();
    }

    function handleSignOutClick(event) {
      gapi.auth2.getAuthInstance().signOut();
    }

 
</script>







</body>
</html>
