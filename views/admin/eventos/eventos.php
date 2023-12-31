<input type="hidden" value="<?php echo $pagina;?>" id="pag">
<h1 class="admin-titulo">Eventos</h1>
<div class="admin-boton">
  <a href="/eventos/crear" class="boton-azul">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eee" fill="none" stroke-linecap="round" stroke-linejoin="round">
      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
      <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
      <path d="M9 12h6" />
      <path d="M12 9v6" />
    </svg>
    <p>Nuevo Evento</p>
  </a>
</div>
<?php 
  if($resultado) {
    $mensaje = mostrarMensaje(intval($resultado));
    if($mensaje) { ?>
      <p class="alerta exito"><?php echo s($mensaje); ?></p>
    <?php 
    }
  }
  if($numero === 0) { ?>
    <p class="alerta error">Actualmente no hay eventos registrados</p>
    <?php 
  }
?>
<div>
  <table class="admin-tabla">
    <thead class="admin-tabla-cabecera">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Cupo</th>
        <th>Fecha</th>
        <th>Hora Inicio</th>
        <th>Hora final</th>
        <th>Lugar</th>
        <th>Organizador</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody class="admin-tabla-cuerpo">
      <?php 
          foreach($eventos as $evento) { ?>
            <tr>
              <td><?php echo $evento->id?></td>
              <td><?php echo $evento->nombre?></td>
              <td><?php echo $evento->categoria?></td>
              <td><?php echo $evento->cupo?></td>
              <td><?php echo $evento->fecha?></td>
              <td><?php echo $evento->hora_inicio?></td>
              <td><?php echo $evento->hora_fin?></td>
              <td><?php echo $evento->lugar?></td>
              <td><?php echo $evento->nombre_o . " " . $evento->apellido?></td>
              <td class="botones-acciones">
                <div class="btn-accion-pos">
                  <a href="/eventos/evento?id=<?=$evento->id?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                      <path fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6zm6 11h6"/>
                    </svg>
                  </a>
                  <a href="/eventos/actualizar?id=<?php echo $evento->id;?>" class="boton-actualizar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="40" height="40"  viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                      <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                      <path d="M16 5l3 3" />
                    </svg>
                  </a>
                  <a href="/eventos/eliminar?id=<?= $evento->id?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-x" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M4 7h16" />
                      <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                      <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                      <path d="M10 12l4 4m0 -4l-4 4" />
                    </svg>
                  </a>
                </div>
              </td>
            </tr>
            <?php 
          }
        ?>
    </tbody>
  </table>
</div>
