<?php
require ('index.php');
?>
    <form action="update.php" method="post">
        <div class="djur-group">
            <input type="hidden" name="id" class="djur-control" id="id" value="<?php echo $album->getId(); ?>"
                   readonly>
        </div>
        <div class="djur-group">
            <label for="title">Title: </label>
            <input type="text" name="title" class="djur-control" id="title"
                   value="<?php echo $album->getName(); ?>" required>
        </div>
        <div class="djur-group">
            <label for="altTitle">Alternative title: </label>
            <input type="text" name="altTitle" class="djur-control" id="altTitle"
                   value="<?php echo $album->getYear(); ?>">
        </div>
        <div class="djur-group">
            <label for="year">Year: </label>
            <input type="text" name="year" class="djur-control" id="year" value="<?php echo $album->getLegs(); ?>"
                   required>
        </div>

        <div class="djur-group">
            <label for="year">Year: </label>
            <input type="text" name="year" class="djur-control" id="year" value="<?php echo $album->getType(); ?>"
                   required>
        </div>
        <button type="submit" class="btn btn-default" name="btn-update">Update</button>
    </form>
    
  