<tbody>
    <?php
    $no = 1;
    foreach ($dataGallery->result() as $recgallery) {
        if ($no % 2 != 0) {
            echo '<tr class="odd">';
        } else {
            echo '<tr class="even">';
        }
        ?>


        <td><?php echo $no; ?></td>
        <td><img src="<?php echo BASE_DIR; ?>assets/img/galeri/<?php echo $recgallery->image_gallery; ?>" width="160" /></td>
        <td><?php echo $recgallery->title; ?></td>
        <td class="center">
            <a href="<?php echo site_url(); ?>/Admin/Gallery/hapusgallery/<?php echo $recgallery->id; ?>" class="btn btn-danger btn-xs">Delete</a>
            <a href="<?php echo site_url(); ?>/Admin/Gallery/ubahgallery/<?php echo $recgallery->id; ?>" class="btn btn-warning btn-xs">Update</a>
        </td>
        </tr>
        <?php
        $no++;
    }
    ?>
</tbody>