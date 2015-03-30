<h1>Inventario Comparaonline</h1>

<h2>Mobiliario Chile</h2>

<table>
    <thead>
        <tr>
            <th><center>Codigo</center></th>
            <th><center>Articulo</center></th>
            <th><center>Marca</center></th>
            <th><center>Descripcion</center></th>
            <th><center>Cantidad</center></th>
            <th><center>Pais</center></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($muebles as $m):?>
        <tr>
            <td><?=$m->codigo?></td>
            <td><?=$m->articulo?></td>
            <td><?=$m->marca?></td>
            <td><?=$m->descripcion?></td>
            <td><?=$m->cantidad?></td>
            <td><?=$m->pais?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>