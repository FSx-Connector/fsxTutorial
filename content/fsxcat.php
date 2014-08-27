<?php

?>

<h1 id="MODULE_FSXCAT">FSx-Connector <span class="color_h1">Catálogo</span></h1>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxdic">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxpec">Siguiente &raquo;</a></div>
</div>
<hr>
<p class="intro">Este Módulo contiene los parámetros que controlan la sincronización del Catálogo entre FactuSOL y la Tienda Web.</p>
<hr>
<p>Si lo desea puede establecer una equivalencia
estricta entre el Catálogo en FactuSOL y en la Tienda Web, o bien organizar de forma
diferente su Catálogo en la Tienda Web. El único requerimiento es que todos los
Productos de la Tienda Web deben tener un equivalente entre los Artículos de
FactuSOL. Así evitará trabajo innecesario a la hora de controlar el stock y emitir
facturas.</p>
<hr>

<h2>Configuración Carga del Catálogo</h2>

<img src="images/fsxconf_cargacatalogo.png" alt="fsxconf_cargacatalogo">

<p id="FSOL_LOAD_SECCIONES"><b>Cargar Secciones</b></p>
<p>Cargar las Secciones de FactuSOL.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>
<hr>

<p id="FSOL_LOAD_FAMILIAS"><b>Cargar Familias</b></p>
<p>Cargar las Familias de FactuSOL. Observe que, para evitar inconsistencias y errores, si hace &quot;Cargar Secciones&quot; igual a &apos;No&apos;, entonces, automáticamente &quot;Cargar Familias&quot; será también &apos;No&apos;.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>
<hr>

<p id="FSOL_LOAD_GROUPS"><b>Grupos de Acceso</b></p>
<p>Grupos de Clientes a los que desea dar acceso a las nuevas Categorías.</p>
<ul>
	<li>Valor: desplegable con los valores: &apos;Sólo Grupos por Defecto&apos;, &apos;Todos los Grupos&apos;.</li>
	<li>Por defecto: &apos;Sólo Grupos por Defecto&apos;.</li>
</ul>

<p class="hint" style="display:block; position:relative; display:inline-block;">
<span>Ahora tiene tres Grupos por Defecto:</span>
<br>
<ol>
<li><span>
<b>Visitor</b>
- Todas las personas sin una cuenta de Cliente o no autenticado.
</span><br><br></li>

<li><span>
<b>Guest</b>
- Cliente que hizo un pedido con Cuenta de invitado
</span><br><br></li>

<li><span>
<b>Customer</b>
- Todas las personas que crearon una cuenta en este sitio.
</span><br><br></li>
</ol>
Estos Grupos son fijos, y no se pueden borrar.
</p>
<hr>

<p id="FSOL_LOAD_ARTICULOS"><b>Cargar Artículos</b></p>
<p>Cargar los Artículos de FactuSOL.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>
<br>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td><b>¿Cómo debe ser el nombre del Artículo?<br></b><br>
		El nombre del Artículo puede contener cualquier carácter, salvo 
		los caracteres que PrestaShop considera no válidos, que son: <b>< > ; = # { }</b>. Si el nombre del Artículo contiene alguno de 
		los caracteres anteriores, PrestaShop genera un error (que podrá consultar en el componente FSx-LOG) y FSx-Connector no cargará 
		el Artículo en el Catálogo de PrestaShop.
		</td>
	</tr>
</table>
<hr>

<p id="FSOL_ARTICULOS_DESC_WEB"><b>Copiar la <i>&quot;Descripción del Artículo en la Web&quot;</i> de FactuSOL a</b></p>
<p>La &quot;<b>Descripción Corta</b>&quot; aparece en las Listas de Productos y en la parte superior de la Página del Producto.<br />La &quot;<b>Descripción Larga</b>&quot; (o simplemente Descripción) aparece en el cuerpo de la Página del Producto.</p>
<ul>
	<li>Valor: desplegable con los valores: &apos;la Descripción Corta del Producto&apos;, &apos;la Descripción Larga del Producto&apos;, &apos;Ambas&apos;.</li>
	<li>Por defecto: &apos;Ambas&apos;.</li>
</ul>

<p>En FactuSOL, en la pestaña Internet de la Ficha de un Artículo, podrá indicar varios campos que se utilizarán en la Tienda Web:</p>

<img src="images/fsxcat_fsol_webdesc.png" alt="fsxcat_box_tareas">

<ul>
	<li><i>Permitir el uso de este artículo en la web</i>: Indique si este artículo será incluido en la base de datos que FactuSOL puede subir a Internet a petición del usuario.</li><br />
	<li><i>Control de stock del artículo</i>: Este campo no se utiliza actualmente en la Tienda Web, ya que PrestaShop tiene su propia configuración para el Control de Stock.</li><br />
	<li><i>Descripción web del artículo</i>: Indique la descripción detallada que se mostrará en la web. Observe que puede introducir la descripción como HTML.</li><br />
	<li><i>Mensaje emergente web</i>: Este campo no se utiliza actualmente por FSx-Connector ni en la Tienda Web.</li><br />
</ul>

<br>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td><b>¿Cuál es el tamaño máximo de la "Descripción Corta" de un producto en PrestaShop?<br></b><br>
		El tamaño por defecto es de 400 caracteres, pero puede ampliarse dando el valor deseado en 
		<br><br>
		&quot;Preferencias -> Productos -> Productos (general) :: Tamaño máximo para la descripción corta&quot;. 
		<br><br>
		Si esta opción no está disponible en su instalación de PrestaShop, deberá asignar directamente el valor a la varible de configuración 
		<b>'PS_PRODUCT_SHORT_DESC_LIMIT'</b> en la tabla <b>'configuration'</b>; si esta variable no existe, puede crearse sin riesgo.
		</td>
	</tr>
</table>
<hr>

<p id="FSOL_LOAD_ARTICULOS_ACTIVE"><b>¿Activar nuevos Artículos?</b></p>
<p>Los nuevos Artículos se crean con status &apos;Activo&apos; (Mostrado = &apos;Sí&apos;).</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>
<hr>

<p id="FSOL_LOAD_ARTICULOS_PRIZE_ALL"><b>Actualizar precios</b></p>
<p>Actualizar precios de todos los Productos. Observe que si hace &quot;Actualizar precios&quot; igual a &apos;Si&apos;, 
entonces, para que sea tenido en cuenta por el componente FSx-Catálogo, deberá hacer también &quot;Cargar Artículos&quot; igual a &apos;Si&apos;.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;No&apos;.</li>
</ul>
<hr>

<p id="FSOL_LOAD_ARTICULOS_STOCK_ALL"><b>Actualizar stock</b></p>
<p>Actualizar stock de todos los Productos. Observe que si hace &quot;Actualizar stock&quot; igual a &apos;Si&apos;, 
entonces, para que sea tenido en cuenta por el componente FSx-Catálogo, deberá hacer también &quot;Cargar Artículos&quot; igual a &apos;Si&apos;.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;No&apos;.</li>
</ul>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td><b>¿Qué ocurre si &quot;Administración Avanzada de Stock&quot; está activado?<br></b><br>
		Esta opción es incompatible con &quot;Administración Avanzada de Stock&quot; activo.<br><br>
		<img src="images/fsxcat_stock.png" alt="fsxcat_stock"><br>
		FactuSOL está concebido para utilizar en la web una sola Tienda y el stock correspondiente a un único Almacén 
		definido en FactuSOL. Si necesita utilizar la &quot;Administración Avanzada de Stock&quot; en PrestaShop, 
		podrá utilizar FSx-Connector, pero no podrá actualizar el stock de los Productos con este Módulo.
		</td>
	</tr>
</table>
<hr>

<p id="FSOL_ARTICULOS_CAT_NOT_FOUND"><b>Categoría por defecto</b></p>
<p>Si no existe la Categoría del Artículo, asociarle esta Categoría (Si
no selecciona ninguna, se cargarán en la raíz del Catálogo).</p>
<ul>
	<li>Valor: desplegable con las Categorías de la Tienda.</li>
	<li>Por defecto: vacío.</li>
</ul>
<hr>

<p id="FSOL_PROD_PSH_ONLY_DEACTIVATE"><b>Desactivar los Productos no encontrados</b></p>
<p>Desactivar los Productos de la Tienda que no tienen correspondencia en FactuSOL.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;No&apos;.</li>
</ul>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td><b>¿Cómo funciona &quot;Desactivar los Productos no encontrados&quot;?<br></b><br>
		Cuando se realiza &quot;Actualizar la Base de Datos de FactuSOLWeb&quot; (componente FSx-Configuración), se cargarán en la Base de Datos de FactuSOLWeb los datos que se obtuvieron de FactuSOL.
		Cuando &quot;Desactivar los Productos no encontrados&quot; es &apos;Si&apos;, FSx-Connector consulta los Productos que existen en la Tienda, y si no encuentra una correspondencia en la Base de Datos de FactuSOLWeb, los desactiva (Mostrado = &apos;No&apos;).
		</td>
	</tr>
</table>
<br>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/tip.png" width="32" height="32" alt="tip" title=" Sugerencia! "></th>
		<td>Cuándo hacer <b>&quot;Desactivar los Productos no encontrados&quot; = &apos;Si&apos;<br></b><br>
		Cuando se discontinúa la comercialización de un Producto, y en FactuSOL se marca para no subir a Internet. En este caso no debe borrarse el Producto de la Tienda, ya que puede haber Pedidos y afecta a las Estadísticas; basta con desactivarlo (Mostrado = &apos;No&apos;).
		</td>
	</tr>
</table>
<br>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/tip.png" width="32" height="32" alt="tip" title=" Sugerencia! "></th>
		<td>Cuándo hacer <b>&quot;Desactivar los Productos no encontrados&quot; = &apos;No&apos;<br></b><br>
		Cuando quiere tener en la Tienda PrestaShop Productos de otros Fabricantes, pero no desea darlos de alta en FactuSOL, ya que no tiene stock de los mismos.
		</td>
	</tr>
</table>
<hr>

<p id="FSX_RESUME_ON_TIMEOUT"><b>Si se alcanza el Tiempo Máximo de Ejecución</b></p>
<p>Si se alcanza el Tiempo Máximo de Ejecución del script (timeout), realizar la acción indicada. El script es el programa que se ejecuta, en este caso es el Programa de Carga del Catálogo.</p>
<ul>
	<li>Valor: selector <br><br>
	  <ul>
		<li>&apos;esperar respuesta de usuario&apos;<br>
		El proceso se detiene antes de alcanzar el timeout. El usuario puede hacer que continúe donde se quedó pulsando nuevamente &quot;Comenzar&quot; en la <b>Caja de Tareas</b>.<br><br></li>
		<li>&apos;continuar automáticamente&apos;<br>
		El proceso se detiene antes de alcanzar el timeout. Después de unos segundos, el proceso continuará autométicamente donde se quedó.<br><br></li>
	  </ul></li>
	<li>Por defecto: &apos;esperar respuesta de usuario&apos;.</li>
</ul>
<hr>

<h2 id="FSXCAT_EGGTIMER">Control de Tiempos</h2>

<p>Si su Catálogo es extenso (muchas Categorías o Productos), el proceso de Carga del Catálogo puede ser una tarea que necesite 
mucho tiempo de ejecución, 
y por tanto se corre el riesgo de alcanzar el Tiempo Máximo de Ejecución del script (timeout). Cuando esto sucede, el programa se 
detiene inmediatamente, y como el proceso de Carga del Catálogo realiza actualizaciones de la Base de Datos de PrestaShop, existe la 
posibilidad de que algún elemento (Categoría o Producto) no llegue a registrarse completamente en la Base de Datos. 
Esto puede provocar inconsistencias en los datos y ciertas inestabilidades.</p>

<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/tip.png" width="32" height="32" alt="tip" title=" Sugerencia! "></th>
		<td>El <b>Timeout</b><br><br>
		El Tiempo Máximo de Ejecución del script (timeout) lo controla la variable: <b><i>max_execution_time</i></b>, que se define en el 
		fichero de configuración <b><i>php.ini</i></b> del intérprete de comandos PHP. Esto ayuda a prevenir que scripts mal escritos bloqueen el servidor. 
		El valor por defecto es <b><i>30 segundos</i></b>. <br><br>
		No se puede cambiar esta opción con ini_set() cuando se ejecuta en safe mode. La única manera es desactivar safe mode o 
		cambiando el límite en php.ini (para ello es posible que deba contactar con su proveedor de hosting).
		</td>
	</tr>
</table>
<br>
<p>Para evitar estos inconvenientes, el Componente FSx-Catálogo incorpora un sistema de Control del Tiempo de ejecución. Este Sistema contabiliza 
el tiempo consumido en operaciones elementales y el total acumulado, de forma que detiene el programa de forma segura antes de alcanzar 
el Tiempo Máximo de Ejecución del script. Al final del proceso de Carga del Catálogo se mostrará un resumen de las tareas realizadas, el 
tiempo empleado y, si no terminó completamente el proceso, el punto en el que se quedó:</p>

<img src="images/timer.png" alt="timer">

<p>Si el proceso agotó el tiempo y no terminó, dependiendo del valor que haya asignado a '<i>Si se alcanza el Tiempo Máximo de Ejecución</i>', 
el proceso seguirá automáticamente donde se quedó (tras algunos segundos), o el usuario deberá hacer que continúe pulsando nuevamente &quot;Comenzar&quot; en la <i>"Caja de Tareas"</i></p>


<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/tip.png" width="32" height="32" alt="tip" title=" Sugerencia! "></th>
		<td><b>Si el proceso de Carga del Catálogo termina abruptamente con <i>Error 500</i></b><br><br>
		FSx-Connector conoce el Tiempo Máximo de Ejecución consultando la variable <b><i>max_execution_time</i></b>, 
		que obtiene del intérprete de comandos PHP. No obstante, en algunos servidores existen otras limitaciones al Tiempo Máximo de 
		Ejecución que no pueden ser conocidas por el intérprete de comandos PHP. <br><br>
		Un ejemplo del caso anterior es cuando el intérprete PHP se está ejecutando como CGI, y hay un límite de tiempo para los hilos de 
		ejecución que es inferior a <i>max_execution_time</i>. <br><br>
		Otra situación similar es cuando el límite de tiempo se establece a nivel de servidor Apache, y es inferior a <i>max_execution_time</i>. 
		En este caso, como en el anterior, el intérprete PHP no puede conocer el verdadero Tiempo Máximo de Ejecución 
		(que es inferior al valor de max_execution_time), y el proceso de Carga del Catálogo puede terminar abruptamente con un 
		<i>Error 500</i> del servidor. <br><br>
		También deberá analizarse el consumo de recursos del servidor durante el proceso de Carga del Catálogo, particularmente 
		el consumos de memoria (variable <b><i>memory_limit</i></b>, que se define en el fichero de configuración <b><i>php.ini</i></b>).<br><br>
		</td>
	</tr>
</table>
<br><br>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/tip.png" width="32" height="32" alt="tip" title=" Sugerencia! "></th>
		<td><b>No siempre es correcto el tiempo de ejecución máximo que obtiene PHP</b><br><br>
El intérprete PHP tiene limitado el tiempo de ejecución máximo permitido a un script, especialmente si está en un hosting compartido. El límite de tiempo por defecto es de 30 segundos y se define en la opción <i>max_execution_time</i> del fichero de configuración <b><i>php.ini</i></b> (consulte a su proveedor de hosting para más detalles sobre la configuración de su instalación). PHP dispone de la función <i>'ini_get'</i> para conocer el tiempo de ejecución máximo permitido: 
<br><br>
<div class="code notranslate" style="width: 98%;">
<div>
$maxTime = ini_get ('max_execution_time'); 
</div>
</div>
<br>
PHP tiene además una función llamada <i>'set_time_limit'</i> que se puede utilizar para ajustar dinámicamente el tiempo de ejecución máximo permitido a un script. Permite especificar el tiempo en segundos y fija el tiempo de ejecución del script a ese número de segundos. 
<br><br>
Normalmente <i>'set_time_limit'</i> se llama al principio de un scipt para extender el tiempo de ejecución del script a esa cantidad de segundos. Así 
<br><br>
<div class="code notranslate" style="width: 98%;">
<div>
set_time_limit(480);
</div>
</div>
<br>
hace que el tiempo de ejecución máximo permitido al script sea de 480 segundos.
<br><br>
Sin embargo cuando el script se ejecuta desde un navegador (es decir dentro de un entorno externo al intérprete PHP, como es el servidor Apache), y necesita mantener PHP enviando salida de datos al navegador, entonces la opción <i>'max_execution_time'</i> de <b><i>php.ini</i></b> y la función <i>'set_time_limit'</i> de PHP no son los únicos que controlan el tiempo que el script PHP puede ejecutar y la salida de los datos al navegador. La configuración del servidor también puede imponer restricciones de tiempo al script, más severas incluso que las de PHP. 
<br><br>
Si está ejecutando PHP usando <b>mod_php</b> de Apache entonces usted puede utilizar <i>set_time_limit(480)</i> para ajustar el límite de tiempo de ejecución en el script PHP. Esto funcionará como se espera en la mayoría de situaciones. 
<br><br>
Sin embargo, cuando PHP se ejecuta a través de <b>mod_fcgid</b> o <b>mod_fastcgi</b> o con un gestor de procesos <b>fastcgi</b> como PHP-FPM, entonces el entorno de ejecución impondrá sus propias restricciones de tiempo al script. En estos casos es posible que, incluso después de ajustar set_time_limit a 480, el script termine después de un período de tiempo específico, pero inferior al establecido por <i>max_execution_time</i> o la función <i>'set_time_limit'</i>. Esta será la restricción de tiempo forzada por el entorno de ejecución. 
<br><br>
Por ejemplo, <b>mod_fastcgi</b> tiene una opción llamada <i>"-idle-timeout"</i> que controla el tiempo de inactividad del script. Así que si el script no produce ninguna salida al controlador fastcgi en esa cantidad de segundos, entonces fastcgi forzará la terminación del script. La arquitectura es algo como esto: 
<br><br>
<div class="code notranslate" style="width: 98%;">
<div>
<span class="color_h1">Apache &lt;-&gt; mod_fastcgi &lt;-&gt; procesos PHP </span>
</div>
</div>
<br>
Lo mismo sucede con <b>mod_fcgid</b>. También tiene una restricción de tiempo incorporado. PHP-FPM tiene la opción llamada <i>"request_terminate_timeout"</i> que hará terminar el proceso después de la cantidad de segundos especificada. 
<br><br>
<p><img width="15" height="15" alt="lamp" src="images/lamp.gif"> 
Consulte a su proveedor de hosting para más detalles sobre la configuración de su instalación.</p>

		<br>
		</td>
	</tr>
</table>
<br>
<hr>
<br>

<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td>¿Es lo mismo el <b>Control de Tiempos</b> que el <b>Componente FSx-LOG</b>?<br><br>
		Es cierto que tienen algunas funciones comunes, pero la razón de ser de cada uno es diferente:
<ul>
	<li>El <b>Componente FSx-LOG</b><br><br>
<ul>
	<li>Registra mensajes de todos los Componentes de FSx-Connector.<br><br></li>
	<li>Los mensajes tienen distinto nivel: Información, Aviso, Error.<br><br></li>
	<li>Se centra en informar de las tareas realizadas y del resultado de las mismas.<br><br></li>
</ul>
	</li>
	<li>El <b>Control de Tiempos</b><br><br>
<ul>
	<li>Registra mensajes exclusivamente de la tarea "Carga del Catálogo" del Componente FSx-Catálogo.<br><br></li>
	<li>Los mensajes tienen todos el mismo nivel, no se controlan errores, sólo tareas realizadas.<br><br></li>
	<li>Se centra en detallar los pasos elementales de la tarea, e informar del tiempo empleado, por paso y acumulado.</li>
</ul>
	</li>
</ul>
		</td>
	</tr>
</table>
<br>

<p>Para lograr persistencia de los mensajes del Control de Tiempos, especialmente cuando la Carga del Catálogo se realiza en vaias etapas, 
los mensajes del Control de Tiempos se copian en el Componente FSx-LOG:</p>

<img src="images/timer_log.png" alt="timer_log">

<br><br><p><img width="15" height="15" alt="lamp" src="images/lamp.gif"> Para ver todos 
los mensajes del Control de Tiempos en el Componente FSx-LOG, símplemente utilice el filtro del Componente FSx-LOG:</p>

<img src="images/timer_log_filter.png" alt="timer_log_filter">

<p>La información del Control de Tiempos le ayudará a optimizar el redimiento de su instalación de PrestaShop.</p>
<hr>


<h2 id="FSXCAT_BOX_TAREAS">Caja de Tareas</h2>

<p>Una vez fijados los parámetros de FSx-
Connector, puede iniciar el proceso de
Carga del Catálogo pulsando &quot;Comenzar&quot;. Este proceso carga las Secciones, Familias y Categorías de la Base de Datos de FactoSOLWeb a Categorías, Sub-Categorías y Productos de PrestaShop.
</p>
<p>Ajustando convenientemente los
parámetros de este Módulo, puede
también realizar los procesos periódicos de
actualización de stock y actualización de
precios de Productos.
Se recomienda que, previamente a la importación, se vacíe el LOG (consulte el apartado correspondiente al componente FSx-LOG).</p>

<img src="images/fsxcat_box_tareas.png" alt="fsxcat_box_tareas">

<p id="FSX_CATEGORIES_CHECK"><b>Comprobar Diccionario de Categorías</b></p>
<p>Esta opción se utiliza para comprobar la correspondencia entre Secciones / Familias y
Categorías antes de cargar o actualizar el Catálogo.</p>
<ul>
	<li>Valor: desplegable con los valores: <br><br></li>
		<ul>
			<li>&apos;No comprobar&apos;<br><br></li>
			<li>&apos;Comprobar e informar&apos;<br />
				Comprueba el Diccionario de
Categorías e informa (en el LOG) si encuentra una
Sección / Familia sin correspondencia en PrestaShop, o si
encuentra una Categoría sin correspondencia en
FactuSOL. Esta opción no realiza ninguna reparación.<br><br></li>
			<li>&apos;Reparar&apos;<br />
			Comprueba el Diccionario de Categorías y
elimina las entradas &quot;huérfanas&quot; (sin correspondencia) del
Diccionario.<br><br></li>
		</ul>
	<li>Por defecto: &apos;No comprobar&apos;.<br><br></li>
</ul>
<p><img width="15" height="15" alt="lamp" src="images/lamp.gif"> <b>NOTA:</b> se recomienda poner el valor por defecto &apos;No comprobar&apos;, y realizar la comprobación del Diccionario de Categorías mediante el Componente FSx-Diccionario.</p>
<hr>

<h2 id="FSXCAT_BOX_CATALOGOFACTUSOL">Caja del Catálogo FactuSOL</h2>

<p>En la caja Catálogo FactuSOL puede
comprobar la estructura del Catálogo que
va a cargar a su Tienda Web, tal como se
exportó desde FactuSOL. Las Familias y
Secciones que ya se han cargado
aparecen con un icono verde; las que no
se han cargado aparecen con un icono
rojo. En todas las Familias aparece entre
paréntesis el número de Artículos que
contienen.</p>

<img src="images/fsxcat_box_catalogo.png" alt="fsxcat_box_catalogo">

<hr>


<h2 id="MODULE_FSXCAT_PCC">Productos con Combinaciones en PrestaShop </h2>

<br>
<table class="lamp" id="table1">
	<tbody><tr>
		<th width="34"><img src="images/troubleshooting-1.jpg" width="32" height="32" alt="lamp"></th>
		<td>Esta funcionalidad es opcional, y no forma parte del núcleo de FSx-Connector. 
		</td>
	</tr>
	</tbody>
</table>
<br>
<hr>

<p>En una Tienda PrestaShop los Productos pueden tener Atributos, que son características concretas que dan lugar a variantes de un Producto (talla, color, material, formato, etc.). Cada Atributo, tendrá una serie de valores. Por ejemplo, para el Atributo Color, los valores pueden ser: verde, azul, etc. Un Producto puede tener varios Atributos, y las variantes con distintos valores de atributos se denominan Combinaciones en PrestaShop. </p>

<p>En FactuSOL se pueden definir únicamente dos características: Talla y Color, aunque se les puede poner nombres diferentes. Estas dos características se aplicarán a todos los Productos. Por tanto, si un Producto en PrestaShop tiene más de dos atributos, no será posible representarlo exactamente en FactuSOL. Tampoco será posible representar el Catálogo de PrestaShop si se manejan más de dos atributos, aunque un Producto tenga dos atributos como máximo. </p>

<p>Además FactuSOL no contempla en la exportación a la web (pestaña "Internet" -> "Subida Genérica de Datos"), ni en la importación de la Tienda online (pestaña "Internet" -> "Descarga de Pedidos"), los datos relativos a Talla y Color. Por ello no se puede establecer una correspondencia exacta entre productos, ni tampoco controlar el stock por Talla y Color en las ventas online. </p>

<p>En general, la integración de FactuSOL con una Tienda PrestaShop en sectores en que todo el Catálogo está formado exclusivamente por Productos que tienen Atributos no es viable en la práctica. Sin embargo, cuando sólo una pequeña parte del Catálogo tienen atributos, FSx-Connector puede modificarse para relacionar de forma unívoca el Catálogo en PrestaShop y el de FactuSOL, con un trabajo manual adicional en PrestaShop. </p>

<p>Con esta Extensión de FSx-Connector, la forma de trabajar con "Productos con Combinaciones" es: </p>

<ol>
	<li>Crear los Productos con Combinaciones (Atributos) en PrestaShop. Cada Combinaci&oacute;n ha de tener un valor &uacute;nico en el campo "Referencia". El campo "Referencia" debe tener una longitud m&aacute;xima de 13 caracteres, que podr&aacute;n ser letras (no acentuadas, no "&ntilde;", no "&ccedil;"), n&uacute;meros y guiones (medio o bajo). <br /> <br /> Ejemplo: Producto "Exprimidor" disponible en tres colores: rojo (Referencia 'exp001'), verde (Referencia 'exp002'), azul (Referencia 'exp003'). Es un Producto con tres combinaciones.<br /><br /></li>
	<li>Crear en FactuSOL tantos Productos como Combinaciones se hayan creado en PrestaShop. Se utilizar&aacute; el valor del campo "Referencia" de la Combinaci&oacute;n en PrestaShop como C&oacute;digo de Art&iacute;culo en FactuSOL. No se usar&aacute;n en FactuSOL la funcionalidad de tallas y colores. <br /> <br /> Ejemplo: crear en FactuSOL los Productos (tres): "Exprimidor rojo" (C&oacute;digo de Art&iacute;culo: 'exp001'), "Exprimidor verde" (C&oacute;digo de Art&iacute;culo: 'exp002'), "Exprimidor azul" (C&oacute;digo de Art&iacute;culo: 'exp003').<br /><br /></li>
	<li>FSx-Connector (modificado) detectar&aacute; que los c&oacute;digos de Art&iacute;culo 'exp001', 'exp002' y 'exp003' existen en PrestaShop (en Combinaciones de Productos) y no crear&aacute; nuevos Productos. Para que esto sea posible, en FactuSOL debe estar permitido el uso en Internet de los Art&iacute;culos anteriores. <br /><br /></li>
	<li>El precio y el stock de las Combinaciones se actualiza a partir del precio y el stock de los Art&iacute;culos correspondientes en FactuSOL, como para el resto de Art&iacute;culos.<br /><br />Los Precios se cargan en las Combinaciones de los Productos en el campo "Impacto en el Precio". Por tanto, para que PrestaShop calcule correctamente el Precio de las Combinaciones, el Precio del Producto principal (el "padre" de las combinaciones) deber&aacute; ponerse como cero cuando se crea el Producto.<br /><br />Además, para evitar problemas de identificación, el campo "Referencia" del Producto principal (el "padre" de las combinaciones) deber&aacute; dejarse en blanco cuando se crea el Producto.<br /><br /></li>
	<li>Los Pedidos se descargan de igual manera que para el resto de Art&iacute;culos.</li>
</ol>

<br>
<hr>



<br>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxdic">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxpec">Siguiente &raquo;</a></div>
</div>

