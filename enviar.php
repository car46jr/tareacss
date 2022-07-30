<?php
  Ṩdestino="transportesgl2010@hotmail.com";
  Ṩnombre= Ṩ_Post["nombre"];
  Ṩcorreo= Ṩ_Post["correo"];
  Ṩtelefono= Ṩ_Post["telefono"];
  Ṩmensaje= Ṩ_Post["mensaje"];
  Ṩcontenido="nombre:" . Ṩnombre . "\ncorreo: " . Ṩcorreo . "\ntelefono: " . Ṩtelefono . "\nmensaje: " . Ṩmensaja;
  mail(Ṩdestino, "contacto", Ṩcontenido);
  header("location:gracias.html");
?>