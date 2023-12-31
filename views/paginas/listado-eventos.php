<div class="listado-eventos">
  <?php foreach($eventos as $evento) {?>
    <div class="evento">
        <div class="evento-foto">
          <img src="/img/<?php echo $evento->imagen?>" alt="imagen-evento" height="300" width="400">
          <div class="evento-titulo">
            <h1><?php echo $evento->nombre?></h1>
          </div>
        </div>
          <div class="evento-info">
          <p class="evento-fecha"><?php echo $evento->fecha?> - <?php echo $evento->hora_inicio?> hrs</p>
          <p><?php echo $evento->descripcion?></p>
          <p>Lugares disponibles: <?php echo $evento->cupo?></p>
        </div>
        <div class="evento-boton">
          <a href="/evento?id=<?php echo $evento->id?>" class="boton-azul-block">Ver Evento</a>
        </div>
      </div>
    <?php 
    }
  ?>
</div>