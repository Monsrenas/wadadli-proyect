<script type='text/javascript'>
    $empleo=0;
    

    function addjob(){       
        $empleo+=1;  

        $xCampo="\'campojob"+$empleo+"\'";
   
        $jobinp="<div id=\""+"campojob"+$empleo+"\"><fieldset > <legend>Employment</legend><p><label>Employer / busines name</label> <input name='empbusine"+$empleo+"' type='text' id='ID"+$empleo+"' placeholder='busines name' required='' autofocus=''></p> <p><label>Position / job title</label> <input name='jobposition"+$empleo+"' type='text' id='jobp"+$empleo+"' placeholder='job title' required=''></p> <p><label>Years</label>  <input name='yearsinjob"+$empleo+"' type='text' id='yinjob"+$empleo+"' placeholder='years in this job' required=''></p>  <p><label>Address</label> <input name='address"+$empleo+"' type='text' id='addr"+$empleo+"' placeholder='job address' required=''></p> <p><label>Phone</label> <input name='phone"+$empleo+"' type='text' id='phonn"+$empleo+"' placeholder='job phone number' required=''></p> </fieldset><a href='javascript:deljob(\""+"campojob"+$empleo+"\" )' class='btn btn-success'><span class='glyphicon glyphicon glyphicon-minus' aria-hidden='true'></span> Delete</a></div>";

        var txt = document.getElementById('jobform');
        txt.insertAdjacentHTML('afterbegin', $jobinp);

        }



    function deljob($xeme){ 
       
        $('#'+$xeme).remove();
        
        }
</script>