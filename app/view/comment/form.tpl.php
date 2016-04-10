<div class='comment-form'>
    <form method=post>
        <input type=hidden name="redirect" value="<?=$this->url->create($redirect)?>">
        <input type=hidden name="pageid" value="<?=$pageid?>">
        <fieldset>
        <legend>Leave a comment</legend>
        <p><label id="name">Name:<br/><input type='text' name='name' value='<?=$name?>'/></label></p>
        <p><label id="email">Email:<br/><input type='text' name='mail' value='<?=$mail?>'/></label></p>
        <p><label id="homepage">Homepage:<br/><input type='text' name='web' value='<?=$web?>'/></label></p>
        <p><label>Comment:<br/><textarea name='content'><?=$content?></textarea></label></p>
        <p class=buttons>
            <input type='submit' name='doCreate' value='Comment' onClick="this.form.action = '<?=$this->url->create('comment/add')?>'"/>
            <input type='reset' value='Reset'/>
            <input type='submit' name='doRemoveAll' value='Remove all' onClick="this.form.action = '<?=$this->url->create('comment/remove-all/' . $pageid)?>'"/>
        </p>
        <output><?=$output?></output>
        </fieldset>
    </form>
</div> 
