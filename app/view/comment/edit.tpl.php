<div class='comment-form'>
    <form method=post>
        <input type=hidden name="redirect" value="<?=$this->url->create($pageid)?>">
        <input type=hidden name="pageid" value="<?=$pageid?>">
        <fieldset>
        <legend>Leave a comment</legend>
        <p><label>Name:<br/><input type='text' name='name' value='<?=$comment['name']?>'/></label></p>
        <p><label>Email:<br/><input type='text' name='mail' value='<?=$comment['mail']?>'/></label></p>
        <p><label>Homepage:<br/><input type='text' name='web' value='<?=$comment['web']?>'/></label></p>
        <p><label>Comment:<br/><textarea name='content'><?=$comment['content']?></textarea></label></p>
        <p class=buttons>
            <input type='submit' name='doEdit' value='Update' onClick="this.form.action = '<?=$this->url->create('comment/edit/' . $id . "/" . $pageid)?>'"/>
            <input type='reset' value='Reset'/>
        </p>
        </fieldset>
    </form>
</div>
