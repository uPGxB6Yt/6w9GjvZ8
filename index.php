<head>
    <link href="http://0x0.st/iTYk.jpg" rel="icon" type="image/ico">
    <link rel="stylesheet" href="style.css">

    <script src="main.js"></script>

    <meta property="og:title" content="readifgay.cf"/>
    <meta property="og:url" content="http://www.readifgay.cf/" />
    <meta property="og:description" content="Personal site by Cyanide" />
    
<script type="text/javascript"> 
function disableselect(e){  
return false  
}  

function reEnable(){  
return true  
}  

//if IE4+  
document.onselectstart=new Function ("return false")  
document.oncontextmenu=new Function ("return false")  
//if NS6  
if (window.sidebar){  
document.onmousedown=disableselect  
document.onclick=reEnable  
}
</script>

</head>
<body>
    
    <script src="//instant.page/3.0.0" type="module" defer integrity="sha384-OeDn4XE77tdHo8pGtE1apMPmAipjoxUQ++eeJa6EtJCfHlvijigWiJpD7VDPWXV1"></script>
    
    <div id="mid">
        <span id="clock">14:50:57</span>
        <div id="date">Thursday Febuary 21 2019</div>
        <div class="title animated fadeInUp delay-1s">readifgay.cf</div>
        <a href="https://twitter.com/_Cyanide01" target="_blank">twitter</a> |
        <a href="https://steamcommunity.com/id/eq7/" target="_blank">steam</a> |
        <a href="https://www.youtube.com/channel/UC2Zrv-QU9R7fsJy2nii3jjg?sub_confirmation=1" target="_blank">youtube</a>
    </div>
    
    <script type="text/javascript">
	function clock() {
	    var d = new Date();
	    var hours = d.getHours();
	    var minutes = d.getMinutes();
	    var seconds = d.getSeconds();
	    if (hours <= 9) hours = "0" + hours;
	    if (minutes <= 9) minutes = "0" + minutes;
	    if (seconds <= 9) seconds = "0" + seconds;
	    date_time = hours + ":" + minutes + ":" + seconds;
	    if (document.layers) {
	        document.layers.doc_time.document.write(date_time);
	        document.layers.doc_time.document.close();
	    } else document.getElementById("clock").innerHTML = date_time;
	    setTimeout("clock()", 1000);
	}
	clock();
	document.getElementById("date").innerHTML = formatAMPM();

	function formatAMPM() {
	    var d = new Date(),
	        minutes = d.getMinutes().toString().length == 1 ? '0' + d.getMinutes() : d.getMinutes(),
	        hours = d.getHours().toString().length == 1 ? '0' + d.getHours() : d.getHours(),
	        ampm = d.getHours() >= 12 ? 'pm' : 'am',
	        months = ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
	        days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
	    return days[d.getDay()] + ' ' + months[d.getMonth()] + ' ' + d.getDate() + ' ' + d.getFullYear();
	}
    </script> 
    
    <video playsinline autoplay loop id="video">
        <source src="music.mp3" type="audio/mpeg">
            <script>
            var video = document.currentScript.parentElement;
            video.volume = 0.02;
            </script>
     </video>
</body>