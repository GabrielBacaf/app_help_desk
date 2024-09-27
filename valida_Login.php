
<?php 







$usuario_autenticado = false;
$usuarioCadrastrado=[
    ['email' => 'usuarioteste@gmail.com',
    'senha'=> '12345678',

],
[
    'email'=> 'usuarioteste2@gmail.com',
    'senha'=> '2530',
]
];

    
$cont =0;
    foreach($usuarioCadrastrado as $teste){
        
      
    
        if( ($_POST['email'] == $teste['email']) && ($_POST['senha'] ==  $teste['senha'])){
        $usuario_autenticado = true;
        }
    }
        
    if($usuario_autenticado == true){
    echo'usuario cadrastado';
    }else{
        echo'usuario não cadrastado';
    }
    
 
?>

