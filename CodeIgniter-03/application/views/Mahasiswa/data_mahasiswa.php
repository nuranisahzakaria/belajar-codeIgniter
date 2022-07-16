<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">NIM</th>
            <th scope="col">JUDUL TA</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $mhs): ?>
            <th scope="row"><?php echo $i++;?></th>
            <td><?php echo $mhs['nama'] ?> </td>
            <td><?php echo $mhs['nim'] ?></td>
            <td><?php echo $mhs['judul'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
