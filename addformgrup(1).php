<script type='text/javascript'>
    $empleo=0;
    

    function addjob(){       
        $empleo+=1;  

        $xCampo="\'campojob"+$empleo+"\'";
   
        $jobinp="<div id="+$xCampo+"><fieldset > <legend>Employment</legend><p><label>Employer / busines name</label> <input name='empbusine' type='text' id='ID' placeholder='busines name' required='' autofocus=''></p> <p><label>Position / job title</label> <input name='jobposition' type='text' id='ID' placeholder='job title' required=''></p> <p><label>Years</label>  <input name='yearsinjob' type='text' id='yinjob' placeholder='years in this job' required=''></p>  <p><label>Address</label> <input name='address' type='text' id='addr' placeholder='job address' required=''></p> <p><label>Phone</label> <input name='phone' type='text' id='phonn' placeholder='job phone number' required=''></p> </fieldset><a href='javascript:deljob(\""+"campojob"+$empleo+"\" )' class='btn btn-success'><span class='glyphicon glyphicon glyphicon-plus' aria-hidden='true'></span>Delete</a></div>";

        var txt = document.getElementById('jobform');
        txt.insertAdjacentHTML('afterbegin', $jobinp);
              
        }



    function deljob($xeme){ 
       
        $('#'+$xeme).remove();
        
        }
</script>