<hr>
<h3>Comments</h3>
<?php if (is_array($comments)) : ?>
<div class='comments'>
  <?php foreach ($comments as $id => $comment) : ?>

    <?php
    // Create avatar link
    $email = $comment["mail"];
    $userIcon = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=mm&s=" . 96; //Change number for image size
    $userIcon = "<img src=$userIcon class='userIcon'>";
    ?>

    <?php if(!empty($comment['name']) || !empty($comment['content'])) : ?>

      <div class="comment-avatar">
        <?=$userIcon ?>
      </div>

      <div class="comment">
        <p><a class="comment-name" href='http://www.<?=$comment['web'] ?>'><?=$comment['name']?></a><br>
          <p class="comment-content"><?=$comment['content'] ?><br></p>
      </div>

           <div class='comment-form'>
              <form method=post>
                  <input type=hidden name="id" value="<?=$id?>">
                  <input type=hidden name="redirect" value="<?=$this->url->create($pageid)?>">
                  <button class="button-remove" type='submit' name='doRemoveOne' title='Remove' value='Remove Comment' onClick="this.form.action = '<?=$this->url->create('comment/remove-one/' . $id . "/" . $pageid)?>'">
                    <img src="https://cdn1.iconfinder.com/data/icons/30_Free_Black_ToolBar_Icons/20/Black_Remove.png" alt="Remove"/>
                  </button>
                  <button class="button-edit" type='submit' name='doEditView' title='Edit' value='Edit' onClick="this.form.action = '<?=$this->url->create('comment/edit-view/' . $id . "/" . $pageid)?>'">
                    <img src="https://d2b4ufapzmnxpw.cloudfront.net/build/13484/static/kronos/images/icon-editPage-20.png" alt="Edit" />
                  </button>
              </form>
           </div>

    <?php endif; ?>
  <?php endforeach; ?>
</div>
<?php endif; ?>
