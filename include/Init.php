<?php
/**
 * @package Genesis
 */

 namespace inc;
 
 final class Init { 
   //final mean telling php not to allow extending this class
   // Store all classes in an array
   // @return array full list of classes

   public static function get_services(){
      return [
         Pages\Admin::class, // return list of classes without creating instances
         Base\Enqueue::class
      ];

   } 

   // Loop through the classes, initialize them, and call register() 

   public static function register_services() {
      // use self instead of $this because no instance of a class
      foreach (self::get_services() as $class) { 
         $service = self::instantiate($class);
         if (method_exists($service, 'register')) {
            $service->register();
         }
      }
    }

    // Initialize the class
    // @param class $class    class from the services array
    // @return class instance new instance of the class

    private static function instantiate($class){
      $service = new $class();
      return new $service;
    }
 }