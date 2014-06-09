<?php

?>

<h1 id="MODULE_FSXFSOL">FSx-Connector <span class="color_h1">Preparar FactuSOL</span></h1>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxdaily">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxconf">Siguiente &raquo;</a></div>
</div>
<hr>
<p class="intro">Este capítulo cubre las tareas que hay que realizar en FactuSOL para utilizar FSx-Connector eficientemente, incidiendo en los principales aspectos de Configuración.</p>
<hr>

<h2 id="FSXFSOL_BBDD">Preparar la Base de Datos</h2>
<p>Los elementos de FactuSOL que puede exportar a su Tienda PrestaShop son:</p>
<ul>
	<li>Secciones</li>
	<li>Familias</li>
	<li>Artículos</li>
	<li>Formas de Pago</li>
</ul>
<p>El formulario de datos de cada unos de estos elementos contiene un apartado "Internet" donde deberá activar el campo "Permitir el uso en la web".</p>
<hr>
<p id="FSXFSOL_BBDD_ART"><b>Más sobre Artículos</b></p>

<p>Evite en la medida de lo posible utilizar caracteres especiales (ª, #, $, etc.) en la "Decripción general" del Artículo (Nombre del Artículo) y otros campos de texto, ya que pueden producir errores en la exportación de datos; si necesita utilizar alguno de estos caracteres, pruebe a sustituirlo por la entidad html (o código hexadecimal) que le corresponda.</p>

<p>En FactuSOL, en la Solapa Internet de la Ficha de un Artículo, podrá indicar varios campos que se utilizarán en la Tienda Web:</p>

<img src="images/fsxcat_fsol_webdesc.png" alt="fsxcat_box_tareas">

<ul>
	<li><i>Permitir el uso de este artículo en la web</i>: Indique si este artículo será incluido en la base de datos que FactuSOL puede subir a Internet a petición del usuario.</li><br />
	<li><i>Control de stock del artículo</i>: Este campo no se utiliza actualmente en la Tienda Web, ya que PrestaShop tiene su propia configuración para el Control de Stock.</li><br />
	<li><i>Descripción web del artículo</i>: Indique la descripción detallada que se mostrará en la web. Observe que puede introducir la descripción como HTML. Tenga en cuenta que algunos caracteres 
	especiales pueden producir errores en la exportación de datos: generalmente se trata de la comilla sencilla ( ' ), que debe evitarse; si necesita utilizar este carácter, puede sustituirlo por la entidad html <b>&amp;apos;</b> o por su código <b>&amp;#39;</b>.</li><br />
	<li><i>Mensaje emergente web</i>: Este campo no se utiliza actualmente por FSx-Connector ni en la Tienda Web.</li><br />
</ul>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td><b>¿Es suficiente "Permitir el uso en la web" a un Artículo?<br></b><br>
		Para que un Artículo se pueda usar en la web: 
		<ul>
			<li>El campo "Permitir el uso en la web" del Artículo debe estar activo.</li><br />
			<li>El Artículo debe pertenecer a una Familia cuyo campo "Permitir el uso en la web" debe estar activo.</li><br />
			<li>La Familia del Artículo debe pertenecer a una Sección cuyo campo "Permitir el uso en la web" debe estar activo.</li><br />
		</ul>
		NOTA: Si una Familia tiene el campo "Permitir el uso en la web" en estado activo, esto NO implica que los Artículos asociados se activan automáticamente. 
		Si una Sección tiene el campo "Permitir el uso en la web" en estado activo, esto NO implica que las Familias asociadas se activan automáticamente. En ambos casos, hay que activar explícitamente el uso en la web.<br><br>
		</td>
	</tr>
</table>
<br>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/tip.png" width="32" height="32" alt="tip" title=" Sugerencia! "></th>
		<td><b>Asociar imágenes a los Artículos en FactuSOL<br></b>
		<ul>
			<li>Los tipos permitidos por PrestaShop son: gif, jpg, jpeg y png.</li><br>
			<li>Se recomienda que organice todas las imágenes de sus Artículos en una carpeta del ordenador donde tenga instalado FactuSOL. Ahorrar´tiempo y esfuerzo. </li><br>
			<li>No utilice espacios o caracteres especiales (letras acentuadas, eñes, o símbolos especiales como ª, #, $, etc.) en el nombre del fichero de la imagen. Estos caracteres suelen ser incompatibles con los servidores web, y si los usa no podrá subir el fichero al servidor.</li>
		</ul>
		</td>
	</tr>
</table>
<br>

<hr>

<p id="FSXFSOL_BBDD_FPAGO"><b>Más sobre las Formas de Pago</b></p>

<p>Deberá rellenar el campo &quot;Descripción en la web de la forma de pago&quot; para que FSx-Connector pueda identificar la Forma de Pago:</p>

<img src="images/fsxdic_formaspago_1.png" alt="fsxdic_formaspago_1">

<p>No es obligatorio usar en la web las Formas de Pago de factuSOL. Los Pedidos se
descargarán, pero el campo &quot;Forma de Pago&quot; del Pedido que se crea en FactuSOL, estará vacío.</p>
<hr>

<p id="FSXFSOL_BBDD_FILTROS"><b>Filtrado de Datos</b></p>

<p>Puede activar o desactivar para usar en la web los elementos anteriors utilizando las herramientas de filtrado de datos, &quot;FactuSOL -&gt; Internet -&gt; Filtrar datos&quot;:</p>

<img src="images/fsxfsol_filtrado.png" alt="fsxfsol_filtrado">

<p>Para comprender estas opciones en detalle, consulte el Manual de su versión de FactuSOL.</p>
<hr>

<h2 id="FSXFSOL_FTP">Preparar la Conexión a Internet</h2>

<p>La configuración de la conexión se realiza en: &quot;FactuSOL -&gt; Internet -&gt; Configuración&quot;. Esta opción consta de una serie de Solapas; los valores por defecto que aparecen suelen ser adecuados para la mayoría de las situaciones, excepto los correspondientes a "Configuraciones técnicas", que siempre son específicos de cada instalación.</p>

<img src="images/fsxfsol_confmenu.png" alt="fsxfsol_confmenu">

<p>Para comprender todas las opciones en detalle, consulte el Manual de su versión de FactuSOL. No obstante, destacamos algunos puntos.</p>
<hr>

<p id="FSXFSOL_FTP_ART">Solapa <b>Alta de Clientes On Line</b></p>

<img src="images/fsxfsol_confcli.png" alt="fsxfsol_confcli">

<p>En la ventana que aparece, la opción "Activar la posibilidad de creación de cliente On-line" debe estar marcada. 
Se recomienda desmarcar la opción "Enviar e-mail de confirmación de recepción de datos y clave de acceso".</p>
<hr>

<p id="FSXFSOL_FTP_ART">Solapa <b>Consulta de Artículos</b></p>

<img src="images/fsxfsol_confart.png" alt="fsxfsol_confart">

<p>La sección "Datos de los artículos a mostrar en la consulta" contiene los campos de los Artículos que se exportarán a la Tienda PrestaShop. 
Tenga en cuenta que aunque marque los Campos Programables, FSx-Connector no los tendrá en cuenta (a no ser que se modifique para ello), ya que no está definida la correspondencia con campos de PrestaShop.</p>

<p>La "Tarifa de precios a mostrar a los clientes sin autenticar" se utiliza para recuperar el Precio (base) de los Artículos, tanto para usuarios no registrados como para clientes registrados en la Tienda PrestaShop. 
Debe definir también el Almacén del que se obtendrá el stock; las opciones de gestión del stock en la Tienda PrestaShop se definen en el Back-Office de PrestaShop.</p>
<hr>

<p id="FSXFSOL_FTP_PEC">Solapa <b>Pedidos de Cliente</b></p>

<img src="images/fsxfsol_confpec.png" alt="fsxfsol_confpec">

<p>En la ventana que aparece, la opción "Activar la posibilidad de recibir pedidos de cliente" debe estar marcada. 
Se recomienda desmarcar la opción "Enviar e-mail de confirmación de recepción de datos".</p>
<p>En el campo "Número de serie para pedidos por Internet" indique la serie que se utilizará para crear los pedidos de cliente que sean recibidos desde Internet.</p>
<p>En el campo "Descargar los pedidos de cliente On-line" indique la frecuencia con la que el programa descargará los nuevos pedidos de clientes desde la web. Utilice el mismo valor que para el mismo campo de la Solapa "Alta de Clientes On Line". La opción por defecto es 'Siempre que se solicite manualmente'.</p>
<hr>

<p id="FSXFSOL_FTP_TEC">Solapa <b>Configuraciones Técnicas</b></p>

<img src="images/fsxfsol_conftec.png" alt="fsxfsol_conftec">

<ul>
	<li><i>Dirección del servidor FTP: </i><br>
	Indique la dirección del servidor FTP al que se realizará la subida de los distintos ficheros. 
	Es la dirección del FTP donde tiene instalada su tienda PrestaShop</li><br>
	<li><i>Nombre del usuario FTP: </i><br>
	Indique el nombre de usuario FTP, que será utilizado para establecer la conexión con el servidor.</li><br>
	<li><i>Contraseña del usuario FTP: </i><br>
	Indique la contraseña del usuario FTP, que será utilizada para establecer la conexión con el servidor.</li><br>

	<li><i>Carpeta de subida para fichero de texto ASCII:</i><br>
	Indique la carpeta en la que FactuSOL debe situar el fichero de texto con la información necesaria para la actualización 
	de la base de datos MySQL de FactuSOLWeb. Poner la ruta relativa a la carpeta raíz del acceso FTP que esté utilizando. 
	Debe empezar y acabar con '<i>/</i>&nbsp;', por ejemplo: <br><br><span style="margin-left: 3em;"><i>/public_html/modules/fsxconf/fsweb/BBDD/</i></span><br><br> 
	En este cado la Tienda PrestaShop está instalada en la carpeta: <i>/public_html/</i>.<br><br>
	Cuando se realiza en FactuSOL una "Subida de Datos Genérica" (desde la Solapa "Internet"), en esta carpeta se crea el fichero <i>factusolweb.sql</i> que contiene los datos exportados.</li><br>
	<li><i>Ruta de página de activación de actualización: </i><br>
	Indique la página que realizará el proceso de actualización de la base de datos de FactuSOLWeb a partir del fichero de texto ASCII generado por FactuSOL. 
	Debe comenzar por 'http://' (o 'https://'). Se recomienda poner aquí la url de acceso al Back Office de su Tienda PrestaShop, por ejemplo: <i>http://www.suweb.com/tienda/admin/</i>.</li><br>

	<li><i>Carpeta de ejecución del proyecto:</i><br>
	Ponga aquí el mismo valor que para la <i>Carpeta de subida para fichero de texto ASCII</i>. Sólo debe poner un valor diferente si sabe realmente lo que está haciendo, y bajo su responsabilidad.</li><br>
 	<li><i>Subcarpeta de imágenes de artículos: </i><br>
	Indique la carpeta en la que se encuentran almacenadas las imágenes de los artículos que serán utilizadas en las consultas de éstos. Poner la ruta relativa a la <i>Carpeta de Ejecución del Proyecto</i>. Debe acabar con '<i>/</i>&nbsp;'.</li><br>
	<li><i>Subcarpeta de pedidos validados: </i><br>
	Indique la carpeta de la que FactuSOL deberá descargar los pedidos realizados tanto por clientes. Poner la ruta relativa a la <i>Carpeta de Ejecución del Proyecto</i>. Debe acabar con '<i>/</i>&nbsp;'.</li><br>
	<li><i>Subcarpeta de clientes creados On-line: </i><br>
	Indique la carpeta de la que FactuSOL deberá descargar los clientes dados de alta en la Tienda PrestaShop. Poner la ruta relativa a la <i>Carpeta de Ejecución del Proyecto</i>. Debe acabar con '<i>/</i>&nbsp;'.</li><br>
	<li><i>Ruta de página de administración: </i><br>
	El valor de este campo no se utiliza por FSx-Connector. Ponga aquí, por ejemplo, el mismo valor que para la <i>Ruta de página de activación de actualización</i>.</li><br>
</ul>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td><b>Configuraciones Técnicas en FactuSOL y en FSx-Connector<br></b><br>
		Lo valores que introduzca en las "Configuraciones Técnicas" de FactuSOL están muy relacionados con la Configuración general de FSx-Connector. Consulte en este Tutorial el apartado correspondiente al componente <b>FSx-Configuración</b>.<br><br>
		</td>
	</tr>
</table>
<br>
<hr>

<h2 id="FSXFSOL_FACTUSOL">Subida de datos genérica</h2>
<p>Una vez hecha la Preparación de FactuSOL, ya es posible realizar una <b>Subida de datos genérica</b>. Este proceso confecciona 
un fichero con los datos de las Secciones, Familias, Artículos, etc., que tengan activada su subida a la web.</p>

<p>Una vez realizado este fichero (<i>factusolweb.sql</i>) y de forma automática, FactuSOL procederá a la subida del fichero al servidor ftp que se haya indicado en las Configuraciones Técnicas de Internet, en la "Carpeta de Ejecución del Proyecto".</p>

<img src="images/fsxfsol_factusol.png" alt="fsxfsol_factusol">

<hr>

<!--
<hr>

<h2>Configuración General</h2>

<img src="images/fsxconf_configuracion.png" alt="fsxconf_configuracion">

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
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>
<hr>

<p id="FSX_SHOW_CONTEXT_HELP"><b>Mostrar Ayuda</b></p>
<p>Muestra enlaces para obtener ayuda sensible al contexto.</p>
<ul>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>

<img src="images/fsxconf_help_1.png" alt="fsxconf_help_1">

<img src="images/fsxconf_help_2.png" alt="fsxconf_help_2">

<hr>

<p id="FSX_DISPLAY_ERRORS"><b>Modo Depuración</b></p>
<p>Muestra errores PHP si aparecen. Desactivar en el Entorno de Producción.</p>
<ul>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>
<hr>

<h2>Configuraciones Técnicas del Enlace con FactuSOL</h2>

<img src="images/fsxconf_configuraciones.png" alt="fsxconf_configuraciones">

<p>Las configuraciones que siguen deben coincidir con las &quot;Configuraciones Técnicas&quot; de FactuSOL, si su Tienda PrestaShop está instalada en la raíz de su acceso FTP. Las carpetas indicadas DEBEN existir en el Servidor y tener permisos suficientes de escritura.</p>

<p>Si su Tienda PrestaShop NO está instalada en la raíz de su acceso FTP, siga leyendo para configurar correctamente los valores de &quot;Carpeta de Ejecución del Proyecto&quot; en FactuSOL y en su Tienda PrestaShop, ya que serán valores diferentes.</p>

<p id="FSOL_CBDCFG"><b>Carpeta de Ejecución del Proyecto</b></p>
<p>Poner la ruta relativa respecto a la carpeta donde está instalado PrestaShop, por ejemplo: <i>/modules/fsxconf/fsweb/BBDD/</i>. Debe empezar y acabar con &apos;<i>/</i>&bnsp;&apos;. 
Cuando se realiza en FactuSOL una &quot;Subida de Datos Genérica&quot;, en esta carpeta se crea el fichero <i>factusolweb.sql</i> que contiene los datos exportados.</p>
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
			<li>Acceda a su Servidor mediante su programa FTP favorito. El directorio que está viendo es la carpeta raíz de su FTP (carpeta &apos;<i>/</i>&bnsp;&apos;).</li>
			<li>Navegue a la carpeta donde está instalada la Tienda. El directorio que está viendo es una carpeta como &apos;<i>/public_html/</i>&apos; (este dato se lo indicará su programa FTP).</li>
			<li>Si la Carpeta de Ejecución del Proyecto en PrestaShop es &apos;/modules/fsxconf/fsweb/BBDD/&apos;, en FactuSOL deberá poner:</li>
				<ul><li>Carpeta de Ejecución del Proyecto: &apos;/public_html/modules/fsxconf/fsweb/BBDD/&apos;</li></ul>
		</ol>
		</td>
	</tr>
</table>
<hr>

<p id="FSOL_CIACFG"><b>Subcarpeta de Imágenes de Artículos</b></p>
<p>Poner la ruta relativa a la <i>Carpeta de Ejecución del Proyecto</i>. Debe acabar con &apos;<i>/</i>&bnsp;&apos;. 
Cuando se realiza en FactuSOL una &quot;Subida de Datos Genérica&quot;, en esta carpeta se suben las imágenes de los Artículos.</p>
<ul>
	<li>Valor: ruta relativa a una carpeta del Servidor.</li>
	<li>Por defecto: &apos;imagenes/&apos;.</li>
</ul>
<hr>

<p id="FSOL_CPVCFG"><b>Subcarpeta de Pedidos de Clientes</b></p>
<p>Poner la ruta relativa a la <i>Carpeta de Ejecución del Proyecto</i>. Debe acabar con &apos;<i>/</i>&bnsp;&apos;.
Cuando se realiza en FSx-Connector una &quot;Descarga de pedidos&quot; (FSx-Pedidos), en esta carpeta del Servidor se crean ficheros, uno por cada Pedido descargado. Por tanto esta carpeta deberá tener los permisos necesarios de escritura (en UNIX: 755, 775 ó 777).</p>
<ul>
	<li>Valor: ruta relativa a una carpeta del Servidor.</li>
	<li>Por defecto: &apos;npedidos/&apos;.</li>
</ul>
<hr>

<p id="FSOL_CCLCFG"><b>Subcarpeta de Clientes Creados On Line</b></p>
<p>Poner la ruta relativa a la <i>Carpeta de Ejecución del Proyecto</i>. Debe acabar con &apos;<i>/</i>&bnsp;&apos;. 
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

</p><p>El &quot;Ultimo procesado de FSx-Connector (Carga del Catálogo)&quot; se refiere a la última vez que se actualizó el Catálogo de Productos en la Tienda Web. Vea también la sección FSx-Connector Catálogo. 

</p><p>El &quot;Ultimo procesado de FSx-Connector (Descarga de Pedidos)&quot; se refiere a la última vez que se descargaron Clientes y Pedidos. Vea también la sección FSx-Connector Pedidos.

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

-->

<br>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxdaily">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxconf">Siguiente &raquo;</a></div>
</div>

