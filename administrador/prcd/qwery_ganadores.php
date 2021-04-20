<?php

   // logro académico
   $query_usr_prototipo="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=1 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr_prototipo= $conn->query($query_usr_prototipo);
   $row_usr1 = $resultado_usr_prototipo->fetch_assoc();
 

// logro académico 2
   $query_usr2="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=2 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr2= $conn->query($query_usr2);
   $row_usr2 = $resultado_usr2->fetch_assoc();


// Discapacidad e Integración
   $query_usr3="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=3 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr3= $conn->query($query_usr3);
   $row_usr3 = $resultado_usr3->fetch_assoc();


// Ingenio Emprendedor
   $query_usr4="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=4 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr4= $conn->query($query_usr4);
   $row_usr4 = $resultado_usr4->fetch_assoc();

   

// Responsabilidad Social
   $query_usr5="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=5 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr5= $conn->query($query_usr5);
   $row_usr5 = $resultado_usr5->fetch_assoc();


// Mérito Migrante
   $query_usr6="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=6 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr6= $conn->query($query_usr6);
   $row_usr6 = $resultado_usr6->fetch_assoc();


// Mérito Campesino
   $query_usr7="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=7 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr7= $conn->query($query_usr7);
   $row_usr7 = $resultado_usr7->fetch_assoc();


// Protección al Medio Ambiente
   $query_usr8="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=8 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr8= $conn->query($query_usr8);
   $row_usr8 = $resultado_usr8->fetch_assoc();


// Cultura Cívica, Política y Democracia
   $query_usr9="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=9 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr9= $conn->query($query_usr9);
   $row_usr9 = $resultado_usr9->fetch_assoc();


// Literatura
   $query_usr10="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=10 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr10= $conn->query($query_usr10);
   $row_usr10 = $resultado_usr10->fetch_assoc();


// Artes Escénicas (musica)
   $query_usr11="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=11 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr11= $conn->query($query_usr11);
   $row_usr11 = $resultado_usr11->fetch_assoc();


// Artes Escénicas (teatro)
   $query_usr12="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=12 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr12= $conn->query($query_usr12);
   $row_usr12 = $resultado_usr12->fetch_assoc();


// Artes Escénicas (danza)
   $query_usr13="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=13 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr13= $conn->query($query_usr13);
   $row_usr13 = $resultado_usr13->fetch_assoc();


// Artes Plásticas, Visuales y Populares
   $query_usr14="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=14 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr14= $conn->query($query_usr14);
   $row_usr14 = $resultado_usr14->fetch_assoc();


// Arte Urbano (Grafiti)
   $query_usr15="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=15 and datos.tipo_usr = 1
   GROUP BY calificacion.id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr15= $conn->query($query_usr15);
   $row_usr15 = $resultado_usr15->fetch_assoc();


// ciencia y tecnología
   $query_usr16="SELECT id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
   FROM calificacion 
   INNER JOIN datos 
   ON datos.id_ext=calificacion.id_ext1
   WHERE datos.tematica=16 and datos.tipo_usr = 1
   GROUP BY id_ext1
   ORDER BY promedio DESC
   LIMIT 1";
   $resultado_usr16= $conn->query($query_usr16);
   $row_usr16 = $resultado_usr16->fetch_assoc();


?>
