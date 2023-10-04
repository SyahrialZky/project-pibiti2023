<?php 
// \Global::instance()->functioName();
// var_dump($menu);die;
?>

<html>

<ul>
    @foreach($menu as $value)
        <li>
            <a href= <?= $value['url'] ?>> <?= $value['title'] ?></a>
        </li>
    @endforeach
</ul>

<table>
    <thead>
        <th>No</th>
        <th>Nama Peserta</th>
        <th>Email</th>
        <th>No. Telp</th>
        <th>Absen 1</th>
        <th>Absen 2</th>
        <th>Absen 3</th>
        <th>Absen 4</th>
    </thead>
    <tbody>
        <?php $no = 0; ?>
        @foreach ($data as $key => $value)
            <?php $no++; ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['nomor_telepon'] ?></td>
                <td><?= isset($value['absens'][1][0]) ? 'sudah absen' : 'belum absen' ?></td>
                <td><?= isset($value['absens'][2][0]) ? 'sudah absen' : 'belum absen' ?></td>
                <td><?= isset($value['absens'][3][0]) ? 'sudah absen' : 'belum absen' ?></td>
                <td><?= isset($value['absens'][4][0]) ? 'sudah absen' : 'belum absen' ?></td>
            </tr>
        @endforeach
    </tbody>
</table>


<table>
    
</table>

</html>