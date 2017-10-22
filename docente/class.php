<?php

class Proceso_docente {

    var $id;
    var $nombre;
    var $apellido;
    var $direccion;
    var $telefono;
    var $genero;
    var $fecha;
    var $correo;
    var $nip;
    var $nit;
    var $dui;
    var $especialidad;

    function __construct($id, $nombre, $apellido, $direccion, $telefono, $genero, $fecha, $correo, $nip, $nit, $dui, $especialidad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->genero = $genero;
        $this->fecha = $fecha;
        $this->correo = $correo;
        $this->nip = $nip;
        $this->nit = $nit;
        $this->dui = $dui;
        $this->especialidad = $especialidad;
    }
    function crear(){
        $id=$this->id;
        $nombre=$this->nombre;
        $apellido=$this->apellido;
        $direccion=$this->direccion;
        $telefono=$this->telefono;
        $genero=$this->genero;
        $fecha=$this->fecha;
        $correo=$this->correo;
        $nip=$this->nip;
        $nit=$this->nit;
        $dui=$this->dui;
        $especialidad=$this->especialidad;
          mysql_query("INSERT INTO docente(nom_doc,ape_doc,dir_doc,tel_doc,gen_doc,f_nac_doc,cor_doc,nip_doc,nit,dui_doc,esp_doc)
                    VALUES ('$nombre','$apellido','$direccion','$telefono','$genero','$fecha','$correo','$nip','$nit','$dui','$especialidad')");
   
    }
    function actualizar(){
        $id=$this->id;
        $nombre=$this->nombre;
        $apellido=$this->apellido;
        $direccion=$this->direccion;
        $telefono=$this->telefono;
        $correo=$this->correo;
        $nip=$this->nip;
        $nit=$this->nit;
        $dui=$this->dui;
        $especialidad=$this->especialidad;
          mysql_query("UPDATE docente SET nom_doc='$nombre',ape_doc='$apellido',dir_doc='$direccion',tel_doc'=$telefono',cor_doc='$correo',nip_doc='$nip',nit='$nit',dui_doc='$dui',esp_doc='$especialidad' WHERE id_doc='$id'");
   
    }

}

?>
