<?php
function template_contact(){
	?>
<!--==============================content================================-->
			<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November 21, 2011!</div>
				<div class="main">
					<div class="content-padding-2">
						<div class="container_12">
							<div class="wrapper">
								<article class="grid_8">
									<div class="padding-grid-1">
										<h3>Formulario de <strong>Contacto</strong></h3>
										<form id="contact-form" enctype="multipart/form-data" method="post" >
											<fieldset>
												<label>
													<span class="name-input">Nombre:</span>
													<input name="name" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
												</label>
												<label>
													<span class="name-input">Correo:</span>	
													<input name="name1" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
												</label>
												<label>
													<span class="name-input">Mensaje:</span>
													<textarea onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"></textarea>
												</label>						
											</fieldset>
											<div class="link-form">
												<a class="link link-margin" href="#" onClick="document.getElementById('contact-form').reset()">Limpiar</a>
												<a class="link" href="#" onClick="document.getElementById('contact-form').submit()">Enviar</a>
											</div> 
											<div class="clear"></div>		
										</form>	
									</div>
								</article>
								<article class="grid_4 alpha">
									<div class="padding-grid-3">
										<h3><strong>Informacion</strong> de contacto</h3>
										<div class="wrapper p2">
											<figure class="style-img-2 fleft">
												<iframe width="252" height="195" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
											</figure>
										</div>
										<dl class="list-4">
											<dt>8901 Marmora Road,<br>Glasgow, D04 89GR.</dt>
											<dd>Telephone: +1 959 603 6035</dd>
											<dd>E-mail: <a class="link" href="#">mail@demolink.org</a></dd>
										</dl>
									</div>
								</article>	
		<?php 
}

?>