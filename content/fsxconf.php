<?php

?>

<h1 id="MODULE_FSXCONF">FSx-Connector <span class="color_h1">Configuración</span></h1>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxfsol">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxdic">Siguiente &raquo;</a></div>
</div>
<hr>
<p class="intro">Los Parámetros de Configuración que se establecen en este componente de FSx-Connector se utilizan, en general, por todos los componentes de FSx-Connector.</p>
<hr>
<p>Cuando se realiza en FactuSOL una &quot;Subida de Datos Genérica&quot; (desde la pestaña &quot;Internet&quot;), se crea en el Servidor el fichero <i>factusolweb.sql</i> que contiene los datos exportados. Con Fsx-Configuración podrá incorporar estos datos a la base de Datos de FactuSOLWeb, que está dentro de la Base de Datos de PrestaShop. La Tienda PrestaShop todavía no conoce estos datos, pero es el primer paso, antes de procesarlos con otros componentes de FSx-Connector.</p>
<hr>

<h2>Configuración General</h2>

<img src="images/fsxconf_configuracion.png" alt="fsxconf_configuracion">

<p id="FSX_DEFAULT_SHOP"><b>Tienda por defecto</b></p>
<p>Tienda en la que se cargarán los datos de FactuSOL.</p>
<ul>
	<li>Valor: Tienda por defecto en el Sistema PrestaShop.</li>
	<li>Por defecto: &apos;la Tienda por defecto en el Sistema PrestaShop&apos;.</li>
</ul>
<p><img width="15" height="15" alt="lamp" src="images/lamp.gif"> <b>NOTA:</b> el valor de este campo se establece cuando se instala FSx-Connector, y NO puede modificarse posteriormente.</p>
<hr>

<p id="FSOL_LANGUAGE_ISO"><b>Idioma destino</b></p>
<p>Idioma de la Tienda que corresponde al idioma de FactuSOL (código ISO). Ponga &apos;es&apos; para español, &apos;ca&apos; para catalán o &apos;gl&apos; para gallego.</p>
<ul>
	<li>Valor: desplegable con los idiomas de la Tienda.</li>
	<li>Por defecto: &apos;es&apos;.</li>
</ul>
<hr>

<p id="FSX_COPY_TO_ALL_LANGUAGES"><b>Copiar textos a todos los Idiomas</b></p>
<p>Los textos de FactuSOL (descripciones de Secciones, Familias, Categorías, etc.) se copian a todos los idiomas o sólo al definido en &quot;Idioma destino&quot;.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>
<hr>

<p id="FSOL_CUSTOMER_CODE_BASE"><b>Código base para Clientes en FactuSOL</b></p>
<p>Los Clientes que se importan a FactuSOL se numeran a partir de este valor. Un valor suficientemente alto permite separar los Clientes de la Tienda Web de los Clientes del mundo real.</p>
<ul>
	<li>Valor: número entero positivo.</li>
	<li>Por defecto: 50000.</li>
</ul>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td><b>¿Cuál será el Código de Cliente en FactuSOL?<br></b><br>
		El Código de Cliente en FactuSOL se calcula sumando el ID (identificador) del Cliente en PrestaShop al Código Base. El resultado es único para cada Cliente de PrestaShop, y si el Código Base es suficientemente alto, no existirá en FactuSOL un Cliente con ese código.<br /><br />
		Ejemplo: supongamos que en FactuSOL los Clientes del mundo real se numeran secuencialmente, empezando desde 1. Un Cliente de PrestaShop cuyo ID es 4 se descargará a FactuSOL y su Código en FactuSOL será 50004 (muy probablemente ¡ya existía en FactuSOL el Cliente 4!). 
		</td>
	</tr>
</table>
<hr>

<p id="FSX_LOG_EMPTY_BEFORE_RUN"><b>Vaciar el LOG</b></p>
<p>El LOG (FSx-LOG) se vacía automáticamente antes de iniciar un proceso de Carga del Catálogo, o de descarga de Clientes y Pedidos.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>
<hr>

<p id="FSX_LOG_EXPORT_FORMAT"><b>Exportar el LOG en formato</b></p>
<p>Cuando se exporta el LOG (FSx-LOG) a un fichero en formato CSV se usará este juego de caracteres. Seleccione el valor adecuado para que se representen correctamente los caracteres especiales (como las letras acentuadas) en el fichero generado. El valor seleccionado no afecta al contenido del LOG ni a cómo se muestra en pantalla, sólo al fichero CSV que se genera.</p>
<ul>
	<li>Valor: desplegable con los valores: 'ISO-8859-1', 'UTF-8'.</li>
	<li>Por defecto: &apos;ISO-8859-1&apos;.</li>
</ul>
<p>
<img width="15" height="15" src="images/lamp.gif" alt="lamp">
 Para abrir directamente el fichero CSV con Microsoft Excel, normalmente es mejor seleccionar 'ISO-8859-1'.
</p>
<hr>

<p id="FSX_SHOW_CONTEXT_HELP"><b>Mostrar Ayuda</b></p>
<p>Muestra enlaces para obtener ayuda sensible al contexto.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>

<img src="images/fsxconf_help_1.png" alt="fsxconf_help_1">

<img src="images/fsxconf_help_2.png" alt="fsxconf_help_2">

<hr>

<p id="FSX_HELP_URL"><b>URL para obtener ayuda</b></p>
<p>Puede ser la URL de los archivos de ayuda incluídos en FSx-Connector, o de un sitio externo.</p>
<ul>
	<li>Valor:<br><br></li>
		<ul>
			<li>URL de los archivos de ayuda incluídos en FSx-Connector: <i>&apos;../modules/fsxconf/help/index.php&apos;</i> (o en la forma equivalente: <i>&apos;http://&lt;url_tienda_prestashop&gt;/modules/fsxconf/help/index.php&apos;</i>). Por motivos de seguridad, sólo podrá acceder a esta URL si está logueado en el Back Office de su tienda PrestaShop.<br><br></li>
			<li>URL externa: <i>&apos;http://fsxtutorial.FactuSOL-PrestaShop.es&apos;</i>. La ventaja de utilizar esta URL es que está permanentemente actualizada.<br><br></li>
		</ul>
	<li>Por defecto: &apos;../modules/fsxconf/help/index.php&apos;.<br><br></li>
</ul>
<hr>

<p id="FSX_DISPLAY_ERRORS"><b>Modo Depuración</b></p>
<p>Muestra errores PHP si aparecen. Desactivar en el Entorno de Producción.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>

<br>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/tip.png" width="32" height="32" alt="tip" title=" Sugerencia! "></th>
		<td><b>¿Si no funciona esta directiva?<br></b><br>
		Es posible que no note diferencia al cambiar los valores de esta directiva. Esto es porque su instalación de PrestaShop controla la activación del Modo de Depuración. <br><br>
		<img width="15" height="15" alt="lamp" src="images/lamp.gif"> Para activar el Modo de Depuración (Debug) de Prestashop 
		localice el fichero 
		<br><br>
		<i>&apos;&lt;tienda_prestashop&gt;/config/defines.inc.php&apos;</i>
		<br><br>
		Ábralo con un editor de texto y encuentre la línea:<br><br>
		<div class="code notranslate" style="width: 98%;">
			<div>
			define('_PS_MODE_DEV_', false);<br>
			</div>
		</div>
		<br>Deberá cambiarla por:<br><br>
		<div class="code notranslate" style="width: 98%;">
			<div>
			define('_PS_MODE_DEV_', true);<br>
			</div>
		</div>
		<br>Una vez activado el Modo de Depuración, al navegar por la Tienda PrestaShop (front o back-office), el sistema mostrará los errores de PHP que se produzcan. 
		Debe desactivar el Modo de Depuración después de acabar de realizar pruebas y pasar la Tienda al Entorno de Producción. Para ello basta revertir los cambios anteriores.

		</td>
	</tr>
</table>

<br>
<hr>
<br>

<h2>Configuraciones Técnicas del Enlace con FactuSOL</h2>

<img src="images/fsxconf_configuraciones.png" alt="fsxconf_configuraciones">

<p>Las configuraciones que siguen deben coincidir con las &quot;Configuraciones Técnicas&quot; de FactuSOL, si su Tienda PrestaShop está instalada en la raíz de su acceso FTP. Las carpetas indicadas DEBEN existir en el Servidor y tener permisos suficientes de escritura.</p>

<p>Si su Tienda PrestaShop NO está instalada en la raíz de su acceso FTP, siga leyendo para configurar correctamente los valores de &quot;Carpeta de Ejecución del Proyecto&quot; en FactuSOL y en su Tienda PrestaShop, ya que serán valores diferentes.</p>

<p id="FSOL_CBDCFG"><b>Carpeta de Ejecución del Proyecto</b></p>
<p>Poner la ruta relativa respecto a la carpeta donde está instalado PrestaShop, por ejemplo: <i>/modules/fsxconf/fsweb/BBDD/</i>. Debe empezar y acabar con &apos;<i>/</i>&nbsp;&apos;. 
Cuando se realiza en FactuSOL una &quot;Subida de Datos Genérica&quot; (desde la pestaña &quot;Internet&quot;), en esta carpeta se crea el fichero <i>factusolweb.sql</i> que contiene los datos exportados.</p>
<ul>
	<li>Valor: ruta a una carpeta del Servidor.</li>
	<li>Por defecto: &apos;/modules/fsxconf/fsweb/BBDD/&apos;.</li>
</ul>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td><b>¿Cuál es la &quot;Carpeta de Ejecución del Proyecto&quot; en FactuSOL?<br></b><br>
		Si su Tienda PrestaShop está instalada en la raíz de su acceso FTP, la Carpeta de Ejecución del Proyecto tiene el mismo valor en PrestaShop y en FactuSOL. Si no es así:
		<ol>
			<li>Acceda a su Servidor mediante su programa FTP favorito. El directorio que está viendo es la carpeta raíz de su FTP (carpeta &apos;<i>/</i>&nbsp;&apos;).<br><br></li>
			<li>Navegue a la carpeta donde está instalada la Tienda. El directorio que está viendo es una carpeta como &apos;<i>/public_html/</i>&apos; (este dato se lo indicará su programa FTP).<br><br></li>
			<li>Si la Carpeta de Ejecución del Proyecto en PrestaShop es &apos;/modules/fsxconf/fsweb/BBDD/&apos;, en FactuSOL deberá poner:<br><br></li>
				<ul><li>Carpeta de Ejecución del Proyecto: &apos;/public_html/modules/fsxconf/fsweb/BBDD/&apos;</li></ul>
		</ol><br>
		</td>
	</tr>
</table>
<br>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/tip.png" width="32" height="32" alt="tip" title=" Sugerencia! "></th>
		<td><b>...también FSx-Connector puede buscar &quot;Carpeta de Ejecución del Proyecto&quot;:<br></b><br>
		Utilice el enlace que se muestra en la figura (componente FSx-Configuración).<br><br>
<img src="images/fsxconf_configuraciones_1.png" alt="fsxconf_configuraciones_1">
<br></td>
	</tr>
</table>

<br>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/tip.png" width="32" height="32" alt="tip" title=" Sugerencia! "></th>
		<td><b>Seguridad de la &quot;Carpeta de Ejecución del Proyecto&quot;:<br></b><br>
		Además de las directrices de seguridad que deben seguirse con respecto a la estructura de carpetas de los Módulos de PrestaShop, 
		en la &quot;Carpeta de Ejecución del Proyecto&quot; deberá proteger específicamente el fichero <i>factusolweb.sql</i> 
		que contiene los datos exportados de FactuSOL, para evitar que sea accesible y su contenido pueda ser divulgado. <br><br>
		<img width="15" height="15" alt="lamp" src="images/lamp.gif"> Una forma sencilla y efectiva es mediante un fichero 
		<b><i>&apos;.htaccess&apos;</i></b> (sistemas *NIX) con el contenido:<br><br>
		<div class="code notranslate" style="width: 98%;">
			<div>
			&lt;Files *.sql&gt;<br>
			Order Deny,Allow<br>
			Deny from all<br>
			&lt;/Files&gt;<br>
			</div>
		</div>
		<br>Este fichero forma parte de la distribución estándar de FSx-Connector.
		<br>
		</td>
	</tr>
</table>

<br>


<hr>

<p id="FSOL_CIACFG"><b>Subcarpeta de Imágenes de Artículos</b></p>
<p>Poner la ruta relativa a la <i>Carpeta de Ejecución del Proyecto</i>. Debe acabar con &apos;<i>/</i>&nbsp;&apos;. 
Cuando se realiza en FactuSOL una &quot;Subida de Datos Genérica&quot; (desde la pestaña &quot;Internet&quot;), en esta carpeta se suben las imágenes de los Artículos.</p>
<ul>
	<li>Valor: ruta relativa a una carpeta del Servidor.</li>
	<li>Por defecto: &apos;imagenes/&apos;.</li>
</ul>
<hr>

<p id="FSOL_CPVCFG"><b>Subcarpeta de Pedidos de Clientes</b></p>
<p>Poner la ruta relativa a la <i>Carpeta de Ejecución del Proyecto</i>. Debe acabar con &apos;<i>/</i>&nbsp;&apos;.
Cuando se realiza en FSx-Connector una &quot;Descarga de pedidos&quot; (FSx-Pedidos), en esta carpeta del Servidor se crean ficheros, uno por cada Pedido descargado. Por tanto esta carpeta deberá tener los permisos necesarios de escritura (en UNIX: 755, 775 ó 777).</p>
<ul>
	<li>Valor: ruta relativa a una carpeta del Servidor.</li>
	<li>Por defecto: &apos;npedidos/&apos;.</li>
</ul>
<hr>

<p id="FSOL_CCLCFG"><b>Subcarpeta de Clientes Creados On Line</b></p>
<p>Poner la ruta relativa a la <i>Carpeta de Ejecución del Proyecto</i>. Debe acabar con &apos;<i>/</i>&nbsp;&apos;. 
Cuando se realiza en FSx-Connector una &quot;Descarga de pedidos&quot; (FSx-Pedidos), en esta carpeta del Servidor se crean ficheros, uno por cada Cliente correspondiente a un Pedido descargado. Por tanto esta carpeta deberá tener los permisos necesarios de escritura (en UNIX: 755, 775 ó 777).</p>
<ul>
	<li>Valor: ruta relativa a una carpeta del Servidor.</li>
	<li>Por defecto: &apos;nclientes/&apos;.</li>
</ul>
<hr>

<h2 id="FSXCONF_BOX_TAREAS">Caja de Tareas</h2>

<p>La Caja de Tareas le informa sobre el Estado General del Conector. Le indica cuando se realizó por última vez la importación de datos desde FactuSOL, y contiene un botón de acción para actualizar la Base de Datos de FactuSOLWeb.</p>

<img src="images/fsxconf_box_tareas.png" alt="fsxconf_box_tareas">

<p>Si el Conector detecta un fichero <i>factusolweb.sql</i> más reciente que la &quot;Ultima actualización la Base de Datos de FactuSOLWeb (importar factusolweb.sql)&quot;, obtendrá un aviso &quot;<span style="color: red; font-weight: bold">DEBE</span>
Actualizar la Base de Datos de FactuSOLWeb&quot; en la Caja de Tareas. 

</p><p>Al pulsar &quot;Comenzar&quot;, se cargarán los datos obtenidos de FactuSOL en la Base de Datos de FactuSOLWeb (normalmente una parte de la Base de Datos de PrestaShop). Tenga en cuenta que los datos se cargan en la Base de Datos, pero aún no están disponibles para PrestaShop (Vea la sección FSx-Connector Catálogo).

</p><p>Al finalizar el proceso correctamente obtendrá un mensaje de confirmación, indicando el número de instrucciones procesadas, y también el número de Secciones, Familias y Artículos listos para cargarse en el Catálogo de PrestaShop.

</p><p>Si se produjera algún error, se indicará la instrucción que lo causó. En este caso, deberá corregir el error y empezar de nuevo (aunque se hayan procesado correctamente un cierto número de instrucciones). Un error aquí se debe normalmente a que introdujo en los campos de FactuSOL algún carácter que origina una sentencia SQL mal formada en el fichero <i>factusolweb.sql</i>. Generalmente se trata de la comilla sencilla ( &apos; ), que debe evitarse; si necesita utilizar este carácter, puede sustituirlo por la entidad html <b>&amp;apos;</b> o por su código <b>&amp;#39;</b> .

</p><p>El &quot;Ultimo procesado de FSx-Connector (Carga del Catálogo)&quot; indica la última vez que se actualizó el Catálogo de Productos en la Tienda Web. Vea también la sección FSx-Connector Catálogo. 

</p><p>El &quot;Ultimo procesado de FSx-Connector (Descarga de Pedidos)&quot; indica la última vez que se descargaron Clientes y Pedidos. Vea también la sección FSx-Connector Pedidos.

</p>
<hr>

<h2 id="FSXCONF_BOX_INFORMACIONES">Caja de Informaciones</h2>

<p>La Caja de Informaciones contiene enlaces de Recursos de Ayuda. Además ofrece un botón para comprobar si la versión de FSx-Connector que hay instalada es la última o existen actualizaciones.</p>
<img src="images/fsxconf_box_informaciones.png" alt="fsxconf_box_tareas">
<hr>

<h2 id="FSXCONF_BOX_INFORMACIONES_FACTUSOL">Caja de Informaciones FactuSOL</h2>

<p>La Caja de Informaciones FactuSOL le informa sobre algunos parámetros relevantes de las &quot;Configuraciones Técnicas&quot; de FactuSOL, una vez que se ha actualizado la Base de Datos de FactuSOLWeb. </p>
<img src="images/fsxconf_box_informacionesfactusol.png" alt="fsxconf_box_tareas">
<hr>

<br>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxfsol">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxdic">Siguiente &raquo;</a></div>
</div>

