<?php $this->mindLoad('app/views/layout/header'); ?>

<form action="edit" method="post">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="<?=$record['name'];?>">
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" name="phone" class="form-control" id="phone" value="<?=$record['phone'];?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="<?=$record['email'];?>">
    </div>

    <input type="hidden" name="id" value="<?=$record['id'];?>">

    <button type="submit" class="btn btn-default btn-xs btn-success">
        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Update
    </button>

    <a href="remove/<?=$this->post['id'];?>" class="btn btn-default btn-xs btn-danger">
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Remove
    </a>

    <a href="<?=$this->base_url;?>" class="btn btn-default btn-xs btn-warning">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Cancel
    </a>

</form>

<?php $this->mindLoad('app/views/layout/footer'); ?>