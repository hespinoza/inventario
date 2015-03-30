<h1>Inventario Comparaonline</h1>

<h2>Productos Brasil</h2>

<table>
    <thead>
        <tr>
                             
            <th><center>Codigo</center></th>
            <th><center>Nombre</center></th>
            <th><center>Modelo</center></th>
            <th><center>Tipo</center></th>
            <th><center>Estado</center></th>
            <th><center>Usuario</center></th>
            <th><center>Departamento</center></th>
            <th><center>Pais</center></th>
                             
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $p):?>
 
            <tr>

                <td><?=$p->codigo?></td>
                <td><?=$p->nombre?></td>
                <td><?=$p->producto?></td>
                <td><?=$p->tipo?></td>
                <td><?=$p->estado?></td>
                <td><?=$p->usuario?></td>
                <td><?=$p->departamento?></td>
                <td><?=$p->pais?></td>
            </tr>
 
        <?php endforeach;?>
    </tbody>
</table>