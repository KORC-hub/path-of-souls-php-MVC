<?php 

    if ($peticionAjax) {
        require_once "../config/server.php";
    } else {
        require_once "./config/server.php";
    }

    class mainModel {

        /* funcion para conectar a la base de datos */
        protected static function connect(){
            $connect = new PDO(SGBD, USER, PASS);
            $connect -> exec("SET CHARACTER SET utf8");
            return $connect;
        } 

        /* Ejecuta consulta simple */
        protected static function simpleQuery($query){
            $sql = self::connect() -> prepare($query);
            $sql -> execute();
            return $sql;
        } 

        /* Encriptar datos */
        public static function encryption($string){
			$output=FALSE;
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
		}

        /* desencriptar datos */
		protected static function decryption($string){
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
			return $output;
		}


        /* generar codigo aleatorio */
        protected static function generateCode($letra,$longitud,$numero) {
            for ($i=1; $i <= $longitud; $i++) { 
                $aleatorio = rand(0,9);
                $letra .= $aleatorio;
            }
            return $letra."-".$numero;
        }

        /* limpiar cadenas  */
        protected static function cleanString($string) {
            $string = trim($string);
            $string = stripslashes($string);
            $string = str_ireplace("<script>","",$string);
            $string = str_ireplace("<script src>","",$string);
            $string = str_ireplace("<script type=>","",$string);
            $string = str_ireplace("SELECT * FROM","",$string);
            $string = str_ireplace("DELETE FROM","",$string);
            $string = str_ireplace("INSERT INTO","",$string);
            $string = str_ireplace("DROP TABLE","",$string);
            $string = str_ireplace("DROP DATABASE","",$string);
            $string = str_ireplace("TRUNCATE TABLE","",$string);
            $string = str_ireplace("SHOW TABLES","",$string);
            $string = str_ireplace("SHOW DATABASES","",$string);
            $string = str_ireplace("<?php","",$string);
            $string = str_ireplace("?>","",$string);
            $string = str_ireplace("--","",$string);
            $string = str_ireplace(">","",$string);
            $string = str_ireplace("<","",$string);
            $string = str_ireplace("[","",$string);
            $string = str_ireplace("]","",$string);
            $string = str_ireplace("^","",$string);
            $string = str_ireplace("==","",$string);
            $string = str_ireplace(";","",$string);
            $string = str_ireplace("::","",$string);
            $string = stripslashes($string);
            $string = trim($string);
            return $string;
        }

        /* validar datos */
        protected static function checkData($filter,$string){
            if (preg_match("/^".$filter."$/", $string)) {
                return false;
            } else {
                return true;
            }
        }

        /* validar fechas */
        protected static function checkDate($date){
            $var = explode("-",$date);
            if (count($var)==3 && checkdate($var[1],$var[2],$var[0])) {
                return false;
            } else {
                return true;
            }
        }

    }
?>