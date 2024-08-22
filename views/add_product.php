<section id='addProducts'>
<form id="add_products" method="POST" action="/" enctype="multipart/form-data">
    <input type="text" name='title' placeholder='title'>
    <input type="text" name='description' placeholder='description'>
    <label>
        Choose images
        <input type="file" name="images[]" accept=".jpg,.png,.jpeg,.webp" multiple>
    </label>
    <input type="text" name='price' placeholder='price'>
    <input type="text" name='category' placeholder='category'>
    <input type="hidden" name='class' value="Product">
    <input type="hidden" name='method' value="create">
    <input type="submit">
</form>
</section>
<script>
    // $('#add_products').submit(function(ev){
    //     ev.preventDefault();
    //     $.post('/',$('#add_products').serialize(),function (ev) {
    //         console.log(ev)
    //       })
    // })
</script>

