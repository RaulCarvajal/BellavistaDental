<h2>Odontograma de <?php echo($_GET['nombre']); ?></h2>
<div id='odo'><img src="../IMG/odo.jpg"></div>
	
<script>
	$(document).ready(function(e) {
    $('#odo').click(function(e) {
      alert(e.pageX+ ' , ' + e.pageY);
      if((e.pageX>=680&&e.pageX<=710)&&(e.pageY>=343&&e.pageY<=375))
      {
       mostrarDetalle(1,<?php echo($_GET['id']) ?>);
     

      }

       if((e.pageX>=680&&e.pageX<=710)&&(e.pageY>=301&&e.pageY<=334))
      {
      mostrarDetalle(2,<?php echo($_GET['id']) ?>);

      }

       if((e.pageX>=680&&e.pageX<=726)&&(e.pageY>=262&&e.pageY<=292))
      {
       mostrarDetalle(3,<?php echo($_GET['id']) ?>);
      }

      if((e.pageX>=680&&e.pageX<=726)&&(e.pageY>=232&&e.pageY<=258))
      {
       mostrarDetalle(4,<?php echo($_GET['id']) ?>);
      
      }

      if((e.pageX>=706&&e.pageX<=730)&&(e.pageY>=202&&e.pageY<=223))
      {
       mostrarDetalle(5,<?php echo($_GET['id']) ?>);
      }

      if((e.pageX>=722&&e.pageX<=747)&&(e.pageY>=171&&e.pageY<=196))
      {
       mostrarDetalle(6,<?php echo($_GET['id']) ?>);
      }

      if((e.pageX>=748&&e.pageX<=774)&&(e.pageY>=163&&e.pageY<=184))
      {
       mostrarDetalle(7,<?php echo($_GET['id']) ?>);
     
      }

      if((e.pageX>=780&&e.pageX<=804)&&(e.pageY>=153&&e.pageY<=184))
      {
       mostrarDetalle(8,<?php echo($_GET['id']) ?>);
      }

      if((e.pageX>=812&&e.pageX<=841)&&(e.pageY>=156&&e.pageY<=187))
      {
       mostrarDetalle(9,<?php echo($_GET['id']) ?>);
      }

      if((e.pageX>=848&&e.pageX<=871)&&(e.pageY>=165&&e.pageY<=186))
      {
       mostrarDetalle(10,<?php echo($_GET['id']) ?>);
      }

      if((e.pageX>=871&&e.pageX<=897)&&(e.pageY>=169&&e.pageY<=194))
      {
       mostrarDetalle(11,<?php echo($_GET['id']) ?>);
      }

      if((e.pageX>=844&&e.pageX<=912)&&(e.pageY>=197&&e.pageY<=226))
      {
          mostrarDetalle(12,<?php echo($_GET['id']) ?>);
      }


      if((e.pageX>=893&&e.pageX<=910)&&(e.pageY>=230&&e.pageY<=253))
      {
       mostrarDetalle(13,<?php echo($_GET['id']) ?>);
       
      }

      if((e.pageX>=900&&e.pageX<=930)&&(e.pageY>=260&&e.pageY<=292))
      {
       mostrarDetalle(14,<?php echo($_GET['id']) ?>);
       
      }

      if((e.pageX>=911&&e.pageX<=941)&&(e.pageY>=305&&e.pageY<=330))
      {
       mostrarDetalle(15,<?php echo($_GET['id']) ?>);
        
      
      }

        if((e.pageX>=911&&e.pageX<=947)&&(e.pageY>=343&&e.pageY<=370))
      {
       mostrarDetalle(16,<?php echo($_GET['id']) ?>);
      }

      if((e.pageX>=669&&e.pageX<=740)&&(e.pageY>=433&&e.pageY<=468))
      {
            mostrarDetalle(17,<?php echo($_GET['id']) ?>);
      }

      if((e.pageX>=688&&e.pageX<=716)&&(e.pageY>=473&&e.pageY<=509))
      {
            mostrarDetalle(18,<?php echo($_GET['id']) ?>);
      }

        if((e.pageX>=680&&e.pageX<=724)&&(e.pageY>=510&&e.pageY<=548))
        {
            mostrarDetalle(19,<?php echo($_GET['id']) ?>);
        }
        if((e.pageX>=701&&e.pageX<=730)&&(e.pageY>=552&&e.pageY<=580))
        {
            mostrarDetalle(20,<?php echo($_GET['id']) ?>);
        }
        if((e.pageX>=716&&e.pageX<=742)&&(e.pageY>=582&&e.pageY<=610))
        {
            mostrarDetalle(21,<?php echo($_GET['id']) ?>);
        }
        if((e.pageX>=732&&e.pageX<=764)&&(e.pageY>=606&&e.pageY<=640))
        {
            mostrarDetalle(22,<?php echo($_GET['id']) ?>);
        }
        if((e.pageX>=760&&e.pageX<=784)&&(e.pageY>=614&&e.pageY<=642))
        {
            mostrarDetalle(23,<?php echo($_GET['id']) ?>);
        }
        if((e.pageX>=786&&e.pageX<=809)&&(e.pageY>=614&&e.pageY<=647))
        {
            mostrarDetalle(24,<?php echo($_GET['id']) ?>);
        }
        if((e.pageX>=812&&e.pageX<=833)&&(e.pageY>=617&&e.pageY<=647))
        {
            mostrarDetalle(25,<?php echo($_GET['id']) ?>);
        }
        if((e.pageX>=836&&e.pageX<=858)&&(e.pageY>=613&&e.pageY<=642))
        {
            mostrarDetalle(26,<?php echo($_GET['id']) ?>);
        }
        if((e.pageX>=856&&e.pageX<=886)&&(e.pageY>=602&&e.pageY<=640))
        {
            mostrarDetalle(27,<?php echo($_GET['id']) ?>);
        }
        if((e.pageX>=873&&e.pageX<=902)&&(e.pageY>=578&&e.pageY<=607))
        {
            mostrarDetalle(28,<?php echo($_GET['id']) ?>);
        }
        if((e.pageX>=885&&e.pageX<=912)&&(e.pageY>=549&&e.pageY<=578))
        {
            mostrarDetalle(29,<?php echo($_GET['id']) ?>);
        }

        if((e.pageX>=888&&e.pageX<=928)&&(e.pageY>=509&&e.pageY<=547))
        {
            mostrarDetalle(30,<?php echo($_GET['id']) ?>);
        }
        if((e.pageX>=902&&e.pageX<=934)&&(e.pageY>=469&&e.pageY<=506))
        {
            mostrarDetalle(31,<?php echo($_GET['id']) ?>);
        }
        if((e.pageX>=904&&e.pageX<=941)&&(e.pageY>=429&&e.pageY<=466))
        {
            mostrarDetalle(32,<?php echo($_GET['id']) ?>);
        }
        




    });   


    function mostrarDetalle(diente,idPaciente)
{

	$('#detalleDiente').animate({

		top:'0%'
	});

	var formData=new FormData();
	formData.append("diente",diente);
	formData.append("idPaciente",idPaciente);
	$.ajax({
		url:"odontograma/obtenDetalle.php",
		type:"post",
		dataType:"html",
		data:formData,
		cache:false,
		contentType:false,
		processData:false
	})

	.done(function(res){
		var padre=document.getElementById('cuerpoDetalle');
		padre.innerHTML=res;
	});
} 
    
});

</script>

  <script>
$(document).ready(main); 
function main(){
  $('#detalle').click(function(){

      });

  $('#cerrarDetalle').click(function(){

    // $('nav').toggle(); 
        $('#detalleDiente').animate({
        top: '-100%'
      });
     
      });
};
</script>