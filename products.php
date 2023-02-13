<?php
  usleep(500000);

  $data = [
    [
      'id_product'=>1,
      'title'=>'Iphone 5',
      'price'=>111111
    ],
    [
      'id_product'=>2,
      'title'=>'Iphone 6',
      'price'=>222222
    ],
    [
      'id_product'=>7,
      'title'=>'Iphone 7',
      'price'=>33333
    ]
    ];

  echo json_encode($data)