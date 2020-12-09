
    var today =  new Date();    
    document.getElementById("today").defaultValue =today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
     function calculate_age()
     {
          var  dob = document.getElementById("dobdate").value ;
          console.log(dob);
          var dob = new  Date(dob);
          var year = Math.abs(today.getFullYear() - dob.getFullYear() ) ;
          var month = Math.abs(( today.getMonth() - dob.getMonth()) +1 +1) ;
          var day =  Math.abs(( today.getDate() - dob.getDate())) ;
          alert( "  You Are  " + year + " Year " +  month + "  Month  & " + day + "  Day Old .");
          document.getElementById("age").innerHTML = "  " + year + " Year " +  month + "  Month  " + day + "  Day Old ." ;
    
     }
    
     var stop;
     var secs=hour=mint=0;
     var psecs=phour=pmint=0;
     function StartTime() 
     {
         var clock = document.getElementById('time');
          stop = window.setInterval(function(){
            secs++;
            secs = ("0"+String(Math.round(secs % 60))).substr(-2);
            if(secs/59==0)
            mint ++;
            if(secs/(59*59)==1)
            hour ++ ;
         mint = ("0"+String(Math.round(mint % 60))).substr(-2);
         hour = ("0"+String(Math.round(hour % 12))).substr(-2);
        document.getElementById("time").firstChild.data=hour+":"+mint+":"+secs;
         }, 1000)
     }
     function stopTime()
     {
         window.clearInterval(stop);
     }
     function ResetTime()
     {
         secs=hour=mint=0; 
         window.clearInterval(stop);
         document.getElementById("time").firstChild.data="00:00:00"; 
     }
     function resumeTime()
     {
          StartTime(); 
     }

    function SplitTime()
    {
        psecs=secs-psecs;
        psecs= Math.abs(psecs);
        pmint=mint -pmint;
        pmint= Math.abs(pmint);
        phour=hour-phour;
        phour= Math.abs(phour);
        psecs = ("0"+String(Math.round(psecs % 60))).substr(-2);
        pmint = ("0"+String(Math.round(pmint % 60))).substr(-2);
        phour = ("0"+String(Math.round(phour % 12))).substr(-2);

    
        var list = document.createElement("li");
        var node = document.createTextNode(phour+":"+pmint+":"+psecs);
        list.appendChild(node);
        var element = document.getElementById("splitlist");
        element.appendChild(list);
        psecs=secs;
        pmint=mint;
        phour=hour;
    }
       
