O que é um callback? 
    são funçõe passadas como parametros para outras funções.
    ex: 
     function teste($name)
     {
        return 'Olá meu nome é'. $name;
     }
     function teste2($callback)
     {
        return $callback('Joane');
     }
      echo teste2('teste');

---------------------------------------------------------------------------------
 Verificar se é callback com is_callback

   {
        return 'Olá meu nome é'. $name;
     }
     function teste2($callback)
     {
        if(is_callback(callback)){
            return $callback('Joane');
        }
     }
     $user ='Joao';
      echo teste2('User'); vai dar erro pois user não é uma funcao. teria que ser teste.
      se eu passar como aqui em baixo funcionaria..
      $user ='teste';
      echo teste2($user);

____________________________________________________________________________________
 call_use_func :  ele espera um callback como parametro
    function teste($name)
    {
        return'Ola meu nome é'. $name;
    }     
    echo call_use_func('teste', 'Joane');



_____________________________________________________________________________________

Chamar primeiro parametro com array caso for um objeto com metodo estatico 

ou não queira usar um metodo dele: pode ser trabalahdo de duas formas:
   Ex 1 = php
         class User 
         {
            public function teste($name,$age)
            {
               return 'Olá meu nome é'. $name . 'e minha idade é' . $age;
            }
         }
         $user  = new User;
         echo call_use_func([$user,'teste'],'Joane',35);


         ex 2 :   class User 
         {
            public static function teste($name,$age)
            {
               return 'Olá meu nome é'. $name . 'e minha idade é' . $age;
            }
         }
         echo call_use_func(['user','teste'],'Joane',35);
_____________________________________________________________________________________

call_use_func dentro de outras funções:

        function teste($name)
        {
         return 'teste' . $name;
        }
        function teste2($callback)
        {
         return call_use_func($callback,'Joane');
        }
        echo teste2('teste');

_____________________________________________________________________________________
     __invoke pode ser passado como callback:
        class User
        {
         public function --invoke()
         {
            return 'teste2';
         }
        }
        $user = new User;
        
        function teste($callback)
        {
         return $callback();
        }
        echo teste($user);
____________________________________________________________________________________
call_use_func_array :
      function teste($name,$age){
         return 'Olá meu nome é'. $age;
      }
      echo call_use_func_array('teste',['Joane']);
      


