
<?php

function fakequote()
{
  $ar1=array('В частности ', 
             'С другой стороны ,', 
             'Однако ', 'Аналогично ,', 
             'Таким образом ,', 
             'Нетрудно видеть, что ', 
             'Как показывают приведенные выше соображения, ',
             'Например ', 
             'Итак, ', 
             'Что касается нашей конкретной задачи, то ');

  $ar2=array('гиперповерхность в пространстве состояний ', 
             'постоянный поток эффективной информации ',
             'отличительная особенность выбранных критериев ', 
             'инициация развития критической подсистемы ',
             'комплексная программа испытаний ', 
             'траектория в конфигурационном пространстве ',
             'нагруженный несущий элемент ', 
             'включение дополнительных внутренних связей ',
             'независимый принцип функциорирования ', 
             'первичное отношение между подсистемой и технологией подсистемы ');

  $ar3=array('находит широкое применение и требует ', 
             'сводит до минимума затраты при условии ',
             'указывает на пределы применимости ', 
             'свидетельствует о необходимости более тщательного анализа ',
             'чрезвычайно усложняется, если не принимать во внимание условие ', 
             'подразумевает более основательное использование теории ', 
             'открывает весьма интересные перспективы ',
             'признает значимость других систем и необходимость ', 
             'позволяет эффективное использование ',
             'требует применения ');

  $ar4=array('более тонкой аппаратурной реализации. ', 
             'оборудования четвертого поколения. ',
             'тестирования четвертого поколения. ', 
             'проектирования на основе системного подхода. ',
             'предварительного отбора данных по определенным критериям. ', 
             'гибкого, изменяющегося в зависимости от условий описания. ', 
             'интеграции и специализации. ', 
             'более строгой стандартизации основных модулей. ', 
             'функционирования в режиме дискретного времени. ', 
             'паттернов ООП. ');

  echo $ar1[array_rand($ar1,1)].$ar2[array_rand($ar2,1)].$ar3[array_rand($ar3,1)].$ar4[array_rand  
  ($ar4,1)];
}

?>

