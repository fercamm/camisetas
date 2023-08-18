<?php

require_once('conexion.php');

$precios = [];

$param_tiempo_entrega = [];
$param_demora = [];

//global $con;

function traerPrecios() {
    global $con, $precios;
    $sqlprecios = mysqli_query($con, 'SELECT * FROM precios WHERE vigente = 1');
    $precios = mysqli_fetch_object($sqlprecios);
}

function traerParametros() {
    global $con, $param_tiempo_entrega, $param_demora, $estados;
    
    $sqlParametros = mysqli_query($con, 'SELECT * FROM parametros where nombre = "tiempo_entrega"');
    $param_tiempo_entrega = mysqli_fetch_object($sqlParametros);

    $sqlEstados = mysqli_query($con, 'SELECT * FROM pedido_estado');
    $estados = array();
    while ( $estado = mysqli_fetch_object($sqlEstados) ){
        array_push($estados, $estado);
    }

    $sqlParametros = mysqli_query($con, 'SELECT * FROM parametros where nombre = "demoraGralEnvio"');
    $param_demora = mysqli_fetch_object($sqlParametros);
}

function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}

function _format_json($json, $html = false) {
    $tabcount = 0;
    $result = '';
    $inquote = false;
    $ignorenext = false;
    if ($html) {
        $tab = "&nbsp;&nbsp;&nbsp;";
        $newline = "<br/>";
    } else {
        $tab = "\t";
        $newline = "\n";
    }
    for($i = 0; $i < strlen($json); $i++) {
        $char = $json[$i];
        if ($ignorenext) {
            $result .= $char;
            $ignorenext = false;
        } else {
            switch($char) {
                case '{':
                    $tabcount++;
                    $result .= $char . $newline . str_repeat($tab, $tabcount);
                    break;
                case '}':
                    $tabcount--;
                    $result = trim($result) . $newline . str_repeat($tab, $tabcount) . $char;
                    break;
                case ',':
                    $result .= $char . $newline . str_repeat($tab, $tabcount);
                    break;
                case '"':
                    $inquote = !$inquote;
                    $result .= $char;
                    break;
                case '\\':
                    if ($inquote) $ignorenext = true;
                    $result .= $char;
                    break;
                default:
                    $result .= $char;
            }
        }
    }
    return $result;
}

function guardarConjunto($pedido_id, $conjunto, $tipo = null){
    $tabla = 'jugadores';
    if($conjunto->arquero){
        $tabla = 'arqueros';
    }

    if(empty($conjunto->id)){
        $query = "INSERT INTO ".$tabla." (nombre, nro, talle, talle_short, estado, pedido, tipo) values (?,?,?,?,?,?,?)";

        $valores = array($conjunto->nombre, $conjunto->numero, !empty($conjunto->talle_camiseta) ? $conjunto->talle_camiseta : null, !empty($conjunto->talle_short) ? $conjunto->talle_short : null, 0, $pedido_id, $tipo);

        $result = insert($query, 'sissiis', $valores, $tabla);
    }else{
        $query = "UPDATE ".$tabla." set nombre = ?, nro = ?, talle = ?, talle_short = ?, pedido = ? where id = ?";

        $valores = array($conjunto->nombre, $conjunto->numero, !empty($conjunto->talle_camiseta) ? $conjunto->talle_camiseta : null, !empty($conjunto->talle_short) ? $conjunto->talle_short : null, $pedido_id, $conjunto->id);

        $result = update($query, 'sissii', $valores, $tabla, $conjunto->id);
    }
    return $result;
}

function runBaseQuery($query) {
    global $con;
    $result = mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($result)) {
        $resultset[] = $row;
    }		
    if(!empty($resultset))
        return $resultset;
}

function runQuery($query, $param_type, $param_value_array) {
    global $con;
    $sql = $con->prepare($query);
    bindQueryParams($sql, $param_type, $param_value_array);
    $sql->execute();
    $result = $sql->get_result();
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $resultset[] = $row;
        }
    }
    
    if(!empty($resultset)) {
        return $resultset;
    }
}

function bindQueryParams($sql, $param_type, $param_value_array) {
    $param_value_reference[] = & $param_type;
    for($i=0; $i<count($param_value_array); $i++) {
        $param_value_reference[] = & $param_value_array[$i];
    }
    call_user_func_array(array(
        $sql,
        'bind_param'
    ), $param_value_reference);
}

function insert($query, $param_type, $param_value_array, $table = null) {
    global $con;
    $sql = $con->prepare($query);
    bindQueryParams($sql, $param_type, $param_value_array);
    if($sql->execute()){
        if(!empty($table)){
            $objeto = runBaseQuery('select * from '.$table.' where id = '.mysqli_insert_id($con));
            if(!empty($objeto)){
                return $objeto[0];
            }
        }
        return true;
    }
    return $sql->error;
}

function update($query, $param_type, $param_value_array, $table = null, $id = null) {
    global $con;
    $sql = $con->prepare($query);
    bindQueryParams($sql, $param_type, $param_value_array);
    if($sql->execute()){
        if(!empty($table)){
            $objeto = runBaseQuery('select * from '.$table.' where id = '.$id);
            if(!empty($objeto)){
                return $objeto[0];
            }
        }
        return true;
    }
    return $sql->error;
}

function delete($query, $param_type, $param_value_array) {
    global $con;
    $sql = $con->prepare($query);
    bindQueryParams($sql, $param_type, $param_value_array);
    return $sql->execute();
}

?>