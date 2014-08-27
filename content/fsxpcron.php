<?php

?>

<h1 id="MODULE_FSXPCRON">FSx-Connector <span class="color_h1">pCron</span></h1>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxlog">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxfaq">Siguiente &raquo;</a></div>
</div>
<hr>
<p class="intro">Este componente permite definir una URL para descargar directamente los Pedidos (y Clientes). 
Esta URL se puede llamar directamente, o introducir en el Cron de su Sistema como una Tarea Programada (Cron Job) y automatizar el proceso.</p>
<hr>

<p>Este componente es opcional, y no forma parte del núcleo de FSx-Connector. Si este componente está disponible en su sistema, 
aparecerá en el menú de FSx-Connector.</p>

<img src="images/fsxpcron_menu.png" alt="fsxpcron_menu">

<p>Cuando recibe un Pedido en la Tienda, debe ir a la Zona de Administración de su Tienda (Back-Office) y descargarlo (además del Cliente) mediante 
el Componente FSx-Pedidos. A continuación deberá importar los 
ficheros generados desde FactuSOL. El Componente FSx-pCron permite automatizar esta tarea, sin necesidad de acceder a la Zona de Administración 
de su Tienda.</p>

<p>El Componente FSx-pCron permite configurar una Tarea para descargar automáticamente los Clientes y Pedidos de la Tienda PrestaShop. 
Esta tarea se puede agregar al Sistema de Tareas Programadas del Servidor donde está la Tienda (cron del Servidor) para que se realice 
en los momentos que decida. Luego deberá importar los ficheros generados desde FactuSOL, tarea que también se puede programar en FactuSOL 
para que se ejecute automáticamente en los intervalos de tiempo que necesite. </p>

<p>La Tarea Programada del Componente FSx-pCron utiliza la configuración del Componente FSx-Pedidos de FSx-Connector.</p>


<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td>El <b>Componente FSx-pCron</b> sólo podrá instalarse si se han instalado (y configurado correctamente) previamente 
		los módulos básicos: FSx-Configuración, FSx-Diccionario, FSx-Catálogo, FSx-Pedidos 
		y FSx-LOG. 
		</td>
	</tr>
</table>
<hr>

<p>La Caja <b>FSx-pCron</b> le informa sobre las opciones para configurar la Tarea programada de Descarga de 
Clientes y Pedidos:</p>

<img src="images/fsxpcron_box_pcron.png" alt="fsxpcron_box_pcron">

<p>La URL que se muestra:</p>

<p><i> &nbsp; &nbsp; &nbsp;http://&lt;su_tienda&gt;/modules/fsxpcron/fsxpcronjob.php?secure_key=PGFAZJYMNNZJPACQ</i></p>

<p>es específica de su instalación de PrestaShop; en lugar de <i>"&lt;su_tienda&gt;"</i> aparecerá la URL de su Tienda PrestaShop.</p>
<p>La variable <i>"secure_key"</i> es un elemento de seguridad. El valor que toma es específico de su Tienda PrestaShop, y se determina automáticamente durante la instalación 
de FSx-pCron. Si este valor falta o es incorrecto, la Tarea no se ejecutará.</p>

<p>Recuerde que la Tarea Programada utiliza la configuración del Componente FSx-Pedidos de FSx-Connector (consulte la documentación del 
Componente FSx-Pedidos). </p>
<hr>

<h2>Configuración Descarga automática de Pedidos </h2>
<p id="FSX_CRON_REPORT_EMAIL"><b>Enviar el LOG al email</b></p>
<p>El LOG con el resultado de la descarga de Clientes y Pedidos se enviará a esta dirección.</p>
<ul>
	<li>Valor: una dirección de correo electrónico válida.</li>
	<li>Por defecto: la dirección de correo electrónico de la Tienda.</li>
</ul>
<hr>

<h2>Cómo funciona la Descarga automática de Pedidos </h2>
<p>La Tarea programada de Descarga de Clientes y Pedidos se añade al Sistema de Tareas Programadas del Servidor donde está la Tienda 
(cron del Servidor). Cuando se ejecuta (según los intervalos especificados en el crontab del Servidor) sucede:</p>

<ul>
	<li>Descarga de Clientes y Pedidos, de igual manera a como se hace manualmente con el Componente FSx-Pedidos. 
	Se obtiene como resultado los ficheros en el Servidor correspondientes a los Pedidos y Clientes descargados. Estos 
	deberán importarse a FactuSOL manualmente (consulte la documentación del Componente FSx-Pedidos) o automáticamente 
	(vea el siguiente apartado).<br><br></li>
	
	<li>Los procesos que activa el Módulo pCon pueden generar información en tiempo real sobre el éxito o error en la operación, 
	y por tanto producen entradas en el LOG del Conector (Componente FSx-LOG). Por ejemplo, si no fue posible descargar un Pedido, se le informará 
	de este hecho, indicando el número de Pedido y la causa que produjo el error. Para que el LOG tenga persistencia, o sea, 
	para evitar que las entradas del LOG de una tarea se sobreescriban la próxima vez que se ejecute, las entradas del LOG se 
	vuelcan en un fichero HTML identificado por la fecha y hora en que se realizó la Tarea Programada. Podrá consultar este fichero 
	desde su navegador.<br><br></li>
	
	<li>Notificación de la tarea realizada, a la dirección de correo electrónico indicada en la configuración del Componente FSx-pCron.<br><br></li>
</ul>

<p>El correo de notificación, que puede personalizarse modificando la plantilla correspondiente, es similar a:</p>



<img style="border: 2px solid #D4D4D4" src="images/fsxpcron_mail.png" alt="fsxpcron_mail">

<p>Proporciona un enlace directo al fichero que contiene el LOG. En este caso el nombre es:</p>

<p><i> &nbsp; &nbsp; &nbsp;cron_2013-06-28_11-19-17.html</i></p>
 
<p>que está en la carpeta del Servidor:</p>

<p><i> &nbsp; &nbsp; &nbsp;/&lt;ruta_prestashop&gt;/modules/fsxpcron/cronLOG/</i></p>

<p>La ruta completa no se da en el correo por razones de seguridad, que será algo como:</p>

<p><i> &nbsp; &nbsp; &nbsp;/public_html/&lt;ruta_prestashop&gt;/modules/fsxpcron/cronLOG/</i></p>

<p>El contenido del fichero que contiene el LOG es similar al que produce el Componente FSx-LOG:</p>

<img src="images/fsxpcron_log.png" alt="fsxpcron_log">

<hr>

<p>
<img width="15" height="15" src="images/lamp.gif" alt="lamp">
La Tarea programada de Descarga de Clientes y Pedidos se puede ejecutar manualmente desde un navegador web 
(o desde un acceso directo en el escritorio del ordenador); el proceso es el mismo, y se obtienen idénticos resultados.
</p>
<hr>

<h2 id="FSX_CRON_IMPORT_FSOL">Importación a FactuSOL</h2>
<p>La importación a FactuSOL de Pedidos y Clientes puede automatizarse, indicando la frecuencia con la que FactuSOL se conectará a la web 
para verificar si existen nuevos ficheros de Pedidos y/o Clientes pendientes de desacargar.</p>

<img alt="fsxfsol_confmenu" src="images/fsxfsol_confmenu.png">

<hr>

<p id="">
<b>Descargar Clientes automáticamente a FactuSOL</b>
</p>

<img src="images/fsxpcron_factusol_cli.png" alt="fsxpcron_factusol_cli">

<p>"Descargar los clientes On-line": Indique la frecuencia con la que el programa descargará los nuevos clientes desde la web.</p>
<hr>

<p id="">
<b>Descargar Pedidos automáticamente a FactuSOL</b>
</p>

<img src="images/fsxpcron_factusol_pec.png" alt="fsxpcron_factusol_pec">

<p>"Descargar los pedidos de cliente On-line": Indique la frecuencia con la que el programa descargará los nuevos pedidos de clientes desde la web.
</p>
<hr>

<h2>Cómo usar las Tareas Programadas del Servidor (Cron Jobs)</h2>
<p>Las Tareas Programadas del Servidor (Cron Jobs) suelen ser una opción del Panel de Administración de su Hosting 
(si no la encuentra, consulte a su proveedor). Esta opción permite crear tareas u operaciones para ser realizadas 
cada cierto tiempo por el Servidor. Por ejemplo puede crear una Tarea Programada para eliminar archivos temporales 
cada semana y así evitar que se sobrepase la capacidad de almacenamiento para su sitio web.</p>

<p>Para introducir una nueva Tarea Programada, encontrará un formulario similar a:</p>

<img src="images/fsxpcron_cronjobs.png" alt="fsxpcron_cronjobs">

<p>Los cinco primeros campos definen el momento en que se ejecutará la tarea, el siguiente es el comando (la tarea que se ejecutará) 
y el último es la dirección de correo electrónico a la que se notificará la ejecución de la tarea, y la salida (output) de la misma. 
Otros proveedores de hosting pueden ofrecer un sistema diferente, similar a:</p>

<img src="images/fsxpcron_cronjobs_conf.png" alt="fsxpcron_cronjobs_conf">

<p>Los cinco primeros campos definen el momento en que se ejecutará la tarea deben contener un valor válido, o no se realizará la tarea. 
Los valores válidos son:</p>

<ul>
	<li>Una estrella (*), es un comodín, equivale a cualquier valor (o "siempre")<br><br></li>
	<li>Un número entero<br><br></li>
	<li>Una lista de números separados por comas, ej.: 2,3,7,19,25<br><br></li>
	<li>Un rango de números, ej.: 5-9 que es equivalente a: 5,6,7,8,9<br><br></li>
	<li>Una estrella (*), barra (/) y un número. Ej.: */15 que haría que la tarea se realice cada 15 minutos, o sea 0,15,30,45<br><br></li>
	<li>Una combinación de los anteriores, ej.: 9-12,14,18,20-22, que es equivalente a: 9,10,11,12,14,18,20,21,22<br><br></li>
</ul>

<p>Los rangos para cada campo son:</p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
*  *  *  *  *  /comando/a/ejecutar<br>
|  |  |  |  |<br>
|  |  |  |  |----- día de la semana (0 - 6) (0-> Domingo)<br>
|  |  |  |------- Mes (1 - 12)<br>
|  |  |--------- Día del mes (1 - 31)<br>
|  |----------- Hora (0 - 23)<br>
|------------- Minuto (0 - 59)<br>
<br>
</div>
</div>

<p>Ejemplos de repetición:</p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
30   10   *   *   *  <br>
Todos los días a las 10:30 hrs.<br>
<br>
0   0   1,10,20 * *  <br>
Los días 1, 10 y 20 de cada mes a la media noche.<br>
<br>
0,30   *   *   *   1  <br>
Cada 30 minutos los días lunes, (00:00hrs., 00:30hrs., 01:00hrs., ...).<br>
<br>
0   22 *   1,2,3,4,5,6,7   *   5  <br>
El primer viernes de cada mes a las 10 de la noche.<br>
<br>
</div>
</div>


<p>El comando que se ejecutará puede ser cualquiera. Para realizar automáticamente la Descarga de Pedidos con el Componente 
FSx-pCron (Tareas Programadas) de FSx-Connector, se ha de ejecutar el script que se indica en el Componente. Una forma de hacerlo 
es especificando que el script debe ser ejecutado con el intérprete PHP, ya que el script no es ejecutable por sí mismo. 
La forma más sencilla es especificar un comando como </p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
/usr/local/bin/php /full/path/to/your/script.php<br>
<br>
</div>
</div>

<p>Donde "/full/path/to/your/script.php" debe reemplazarse por la ruta completa (absoluta) de su script: </p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
/usr/local/bin/php  /htdocs/…/fsxpcronjob.php?secure_key=PGFAZJYMNNZJPACQ<br>
<br>
</div>
</div>

<p>Normalmente recibirá un email cuando se realiza cada Tarea Programada originado por el Sistema de Tareas Programadas del Servidor. 
Si no desea esta notificación, añada </p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
>/dev/null<br>
<br>
</div>
</div>

<p>al final del comando. En muchas instalaciones esto elimina toda la salida (output) del script, excepto los mensajes de error. 
Si esto no funciona en su instalación, pruebe</p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
&>/dev/null <br>
<br>
</div>
</div>

<p>o bien</p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
>/dev/null 2>&1<br>
<br>
</div>
</div>

<p>Otra forma de realizar automáticamente la Descarga de Pedidos con el Módulo pCron de FSx-Connector es mediante "wget". 
En este caso, el comando que se ejecutará es:</p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
wget -nv -O /dev/null http://www.dominio.com/archivo.php<br>
<br>
</div>
</div>

<p>donde "http://www.dominio.com/archivo.php" debe reemplazarse por la URL completa de su script: </p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
wget -nv -O /dev/null http://&lt;su_tienda&gt;/.../fsxpcronjob.php?secure_key=PGFAZJYMNNZJPACQ<br>
<br>
</div>
</div>

<p>Y si no quiere recibir el email cada vez que se ejecute el cron:</p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
wget -nv -O /dev/null http://www.dominio.com/archivo.php >/dev/null 2>&1<br>
<br>
</div>
</div>

<p>Usuarios avanzados pueden crear Tareas Programadas editando directamente el fichero "crontab" a través de una conexión segura SSH.</p>



<!--

<h2>Configuración General</h2>
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
	<li>Por defecto: &apos;Si&apos;.<br><br></li>
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
<br>

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
<div class="prev"><a class="chapter" href="index.php?tab=fsxlog">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxfaq">Siguiente &raquo;</a></div>
</div>

