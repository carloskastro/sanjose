<div class="card" style="width:400px">
    <div class="text-center">
        <i class="bi bi-person-bounding-box" style="font-size:75px;"></i>
    </div>
    <div class="card-body">
        <h4 class="card-title"><?php echo $row['fname'] . " " . $row['lname']; ?></h4>
        <p class="card-text"><?php echo $row['email']; ?></p>
        <a href="#" class="btn btn-primary">Editar</a>
    </div>
</div>