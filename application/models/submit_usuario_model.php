<?php 
class Submit_usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //creamos la funcion nuevo comentario que será la que haga la inserción a la base
    //de datos pasándole los datos a introducir en forma de array, siempre al estilo ci
    function nuevo_comentario($codigo,$nombre,$marca,$producto,$tipo,$estado,$usuario,$departamento,$pais,$so,$version,$procesador,$ram,$disco,$licencia)
    {
        $data = array(
                'codigo' => $codigo,
                'nombre' => $nombre,
                'marca' => $marca,
                'producto' => $producto,
                'tipo' => $tipo,
                'estado' => $estado,
                'usuario' => $usuario,
                'departamento' => $departamento,
                'pais' => $pais,
                'so' => $so,
                'version' => $version,
                'procesador' => $procesador,
                'ram' => $ram,
                'disco' => $disco,
                'licencia' => $licencia,
                );
        //aqui se realiza la inserción, si queremos devolver algo deberíamos usar delantre return
        //y en el controlador despues de $nueva_insercion poner lo que queremos hacer, redirigir,
        //envíar un email, en fin, lo que deseemos hacer
        return $this->db->insert('productos',$data);
    }

    function editar_comentario($hidden,$codigo,$nombre,$marca,$producto,$tipo,$estado,$usuario,$departamento,$pais,$so,$version,$procesador,$ram,$disco,$licencia)
    {
        $data = array(
                'codigo' => $codigo,
                'nombre' => $nombre,
                'marca' => $marca,
                'producto' => $producto,
                'tipo' => $tipo,
                'estado' => $estado,
                'usuario' => $usuario,
                'departamento' => $departamento,
                'pais' => $pais,
                'so' => $so,
                'version' => $version,
                'procesador' => $procesador,
                'ram' => $ram,
                'disco' => $disco,
                'licencia' => $licencia,
                );
        $this->db->where('id', $hidden);
        return $this->db->update('productos',$data);
    }

    function editar_mobiliario($hidden,$codigo,$articulo,$marca,$descripcion,$cantidad,$pais)
    {
        $data = array(
                'codigo' => $codigo,
                'articulo' => $articulo,
                'marca' => $marca,
                'descripcion' => $descripcion,
                'cantidad' => $cantidad,
                'pais' => $pais,
                );
        $this->db->where('id', $hidden);
        return $this->db->update('muebles',$data);
    }

    function nuevo_mobiliario($codigo,$articulo,$marca,$descripcion,$cantidad,$pais)
    {
        $data = array(
                'codigo' => $codigo,
                'articulo' => $articulo,
                'marca' => $marca,
                'descripcion' => $descripcion,
                'cantidad' => $cantidad,
                'pais' => $pais,
                );
        //aqui se realiza la inserción, si queremos devolver algo deberíamos usar delantre return
        //y en el controlador despues de $nueva_insercion poner lo que queremos hacer, redirigir,
        //envíar un email, en fin, lo que deseemos hacer
        return $this->db->insert('muebles',$data);
    }
}
 
/*fin del archivo comentarios model*/