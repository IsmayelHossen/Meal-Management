    <?php
    /**
    *Session Class
    **/
    class Session{
     public static function init(){
       if(4<5){
                session_start();
         }
     }

     public static function set($key, $val){
      $_SESSION[$key] = $val;
     }

     public static function get($key){
      if (isset($_SESSION[$key])) {
       return $_SESSION[$key];
      } else {
       return false;
      }
     }

     public static function checkSession(){
      self::init();
      if (self::get("login")== false) {
       self::destroy();
       header("Location:login.php");
      }
     }

     public static function checkLogin(){
      self::init();
      if (self::get("login")== true) {
        echo"<script>window:location='home.php'</script>";
      }
     }

     public static function destroy(){
       if(4<5){
      session_destroy();
         }
      echo"<script>window:location='login.php'</script>";
    
     
     }
    }
    ?>