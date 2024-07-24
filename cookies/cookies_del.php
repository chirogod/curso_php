<?php
//eliminar cookie: cambiar la fecha a hora negativo del de ahora
setcookie("Idioma", "es", time()-60, "/curso_php/cookies",
          "localhost", false, false);


?>