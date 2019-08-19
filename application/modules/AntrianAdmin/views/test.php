<tbody>
    <?php echo $this->session->flashdata('error'); ?>
    <?php
    $no = 1;
    foreach ($dataOrder->result() as $recOrder) {
        if ($no % 2 != 0) {
            echo '<tr class="odd">';
        } else {
            echo '<tr class="even">';
        }
        ?>

        <td><?php echo $no; ?></td>
        <td class="center"><?php echo $recOrder->idorder; ?></td>

        <td><?php echo date('D j, F Y ', strtotime($recOrder->tglorder)); ?></td>

        <td class="center"><?php echo $recOrder->nama; ?></td>
        <td class="center"><?php echo number_format($recOrder->total); ?></td>
        <td class="center"><?php echo $recOrder->status; ?></td>
        <td class="center">
            <a href="<?php echo site_url(); ?>/admin/Cadmorder/ubahorder/<?php echo $recOrder->idorder; ?>" class="btn btn-info btn-xs">Update</a>
            <a href="<?php echo site_url(); ?>/admin/Cadmorder/hapusorder/<?php echo $recOrder->idorder; ?>" class="btn btn-danger btn-xs">Delete</a>
            <?php
            //memanggil function detailOrderByid yang ada didalam model detail order sekaligus mengirimkan id order sebagai kriteria pencarian data
            $dataDetail = $this->Mdlorder->detailOrderByid($recOrder->idorder);

            ?>
            <a href="#detail<?php echo $recOrder->idorder; ?>" data-toggle="modal" data-target="#myModal<?php echo $recOrder->idorder; ?>" class="btn btn-primary btn xs">Detail Order</a>

            <div id="myModal<?php echo $recOrder->idorder; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width:80%">
                    <!-- konten modal-->
                    <div class="modal-content">
                        <!-- heading modal -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title text-center">Detail Order</h3>
                        </div>
                        <!-- body modal -->
                        <div class="modal-body">
                            <div class="row">


                                <div class="col-sm-12">
                                    </br>
                                    <table class="table table-striped table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Qty</th>
                                                <th>Harga</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $num = 1;
                                        foreach ($dataDetail->result() as $itemDetail) { ?>

                                            <tr>
                                                <td><?php echo $num; ?></td>
                                                <td><?php echo $itemDetail->namaproduk; ?></td>
                                                <td><?php echo $itemDetail->subqty; ?></td>
                                                <td><?php echo $itemDetail->price; ?></td>
                                                <td><?php echo $itemDetail->subtotal; ?></td>
                                            </tr>
                                            <?php
                                            $num++;
                                        }
                                        ?>

                                    </table>
                                </div>



                            </div>
                            <!--penutup row atas page -->

                            <form>
                                <a href="<?php echo base_url(); ?>index.php/admin/Cadmorder/invoiceprint/<?php echo $recOrder->idorder ?>" class="btn btn-default">Print</a>
                            </form>

                        </div> <!-- penutup modal body-->


                        </tr>
                        <?php
                        $no++;
                    }
                    ?>

</tbody>
</table>