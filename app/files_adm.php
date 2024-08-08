<?php
require_once 'core/links.html';

$stmt = $loginadm->runQuery("SELECT * FROM adm");
$stmt->execute();

/* Delete */
$deladm = new adm();
if (isset($_POST['btn-delete'])) {
    $delidadm= trim($_POST['idadm']);
    if ($deladm->delete_adm($delidadm)) {
        $msg = array("Datos Eliminados", "success");
    } else {
        $msg = array("Los datos no han sido eliminados", "danger");
    }
}
/* Delete */

?>

<!--Section Alerts-->
<?php if (isset($msg)) { ?>

<div class="alert alert-<?php echo $msg[1]; ?> alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong><i class="bi bi-exclamation-triangle-fill" style="font-size:20px;"></i></strong>
    <?php echo $msg[0]; ?>
</div>

<?php } ?>
<!--Section Alerts-->

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover text-center" id="tablefiles" style="width:100%;">
        <thead>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Operaciones</th>
        </thead>
        <tbody>
            <?php
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <div class="btn-group">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#update<?php echo $row['id']; ?>"
                                class="btn btn-outline-info"><i class="bi bi-pencil-fill"></i></button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#delete<?php echo $row['id']; ?>"
                                class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- The Modal  delete data-->
                <div class="modal fade" id="delete<?php echo $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Eliminar</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                Realmente desea Eliminar?
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <form action="" method="post">
                                    <input type="hidden" name="idadm" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-success" name="btn-delete">Aceptar</button>
                                </form>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- The Modal delete data-->

            <?php } ?>
        </tbody>
    </table>
</div>
<?php require_once 'core/scripts.html'; ?>