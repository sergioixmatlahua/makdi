<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Makidi\Model;

use RuntimeException;
use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * Description of MakidiTable
 *
 * @author Sergio
 */
class MakidiTable {

    //put your code here
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway) {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll() {
        return $this->tableGateway->select();
    }

    public function getUsuarios($idUsuario) {
        $id = (int) $idUsuario;
        $rowset = $this->tableGateway->select(['idUsuario' => $id]);
        $row = $rowset->current();
        if (!$row) {
            throw new RuntimeException(sprintf(
                    'Could not find row with identifier %d', $id
            ));
        }

        return $row;
    }

    public function saveUsuarios(Makidi $usuarios) {


        $data = [
            'nombre' => $usuarios->nombre,
            'appaterno' => $usuarios->appaterno,
            'apmaterno' => $usuarios->apmaterno,
            'edad' => $usuarios->telefono,
            'telefono' => $usuarios->correo,
            'correo' => $usuarios->direccion,
            'direccion' => $usuarios->foto,
            'contrasenia' => $usuarios->contrasenia,
        ];

        $id = (int) $usuarios->idusuario;

        if ($id === 0) {
            $this->tableGateway->insert($data);
            return;
        }

        try {
            $this->getUsuarios($id);
        } catch (RuntimeException $e) {
            throw new RuntimeException(sprintf(
                    'Cannot update usuario with identifier %d; does not exist', $id
            ));
        }

        $this->tableGateway->update($data, ['idUsuario' => $id]);
    }

    public function deleteUsuarios($idUsuario) {
        $this->tableGateway->delete(['idUsuario' => (int) $idUsuario]);
    }

}
